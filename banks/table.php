<?php
session_start();
require_once __DIR__ . "/../database/connection.php";
header('Content-Type: application/json');

function refValues(array &$arr): array {
    $refs = [];
    foreach ($arr as $key => &$value) {
        $refs[$key] = &$value;
    }
    return $refs;
}

// 1. AUTH CHECK
if (!isset($_SESSION['username'])) {
    http_response_code(401);
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

// 2. DATATABLES CORE PARAMS
$draw   = (int)($_GET['draw'] ?? 0);
$start  = (int)($_GET['start'] ?? 0);
$length = (int)($_GET['length'] ?? 10);

// 3. CUSTOM FILTERS
$bankTypeRaw = trim($_GET['bankType'] ?? '');
$country     = trim($_GET['country']  ?? '');
$ssl         = trim($_GET['ssl']      ?? '');
$ltd         = trim($_GET['ltd']      ?? '');
$server      = trim($_GET['server']   ?? '');
$seller      = trim($_GET['seller']   ?? '');
$pa          = trim($_GET['pa']       ?? '');
$da          = trim($_GET['da']       ?? '');
$cms         = trim($_GET['cms']      ?? '');
$hosting     = trim($_GET['hosting']  ?? '');
$priceRange  = trim($_GET['price']    ?? '');
$searchValue = trim($_GET['search']['value'] ?? '');

// 4. BUILD WHERE CLAUSES
$where  = [];
$types  = '';
$params = [];

if ($bankTypeRaw !== '') {
    $where[]   = "bankname COLLATE utf8mb4_general_ci = ?";
    $types   .= 's';
    $params[] = $bankTypeRaw;
}
if ($country !== '') {
    $where[]   = "country = ?";
    $types   .= 's';
    $params[] = $country;
}
foreach ([
    ['ssl','ssl'],
    ['ltd','ltd'],
    ['server','server'],
    ['seller','resseller_id'],
    ['pa','pa'],
    ['da','da'],
    ['cms','cms'],
    ['hosting','hosting'],
] as [$var, $col]) {
    if (!empty($$var)) {
        $where[]   = "$col = ?";
        $types   .= 's';
        $params[] = $$var;
    }
}

// Price-range
if ($priceRange !== '') {
    if (strpos($priceRange, ';') !== false) {
        [$minRaw, $maxRaw] = explode(';', $priceRange, 2);
    } else {
        [$minRaw, $maxRaw] = explode('-', $priceRange, 2);
    }
    $min = floatval($minRaw);
    $max = floatval($maxRaw);
    if ($min > $max) {
        [$min, $max] = [$max, $min];
    }
    $where[]   = "price BETWEEN ? AND ?";
    $types   .= 'dd';
    $params[] = $min;
    $params[] = $max;
}

// Global search
if ($searchValue !== '') {
    $sv = "%$searchValue%";
    $where[] = "(
        id        LIKE ? OR
        country   LIKE ? OR
        bankname  LIKE ? OR
        acctype   LIKE ? OR
        infos     LIKE ? OR
        sitename  LIKE ?
    )";
    $types   .= str_repeat('s', 6);
    $params  = array_merge($params, array_fill(0, 6, $sv));
}

$whereSql = count($where) ? 'WHERE ' . implode(' AND ', $where) : '';

// 5. ORDER BY (randomize rows)
$orderBy = 'RAND()';

// 6. TOTAL COUNT
$sqlTot = "SELECT COUNT(*) AS cnt FROM accounts";
$stmt = $db->prepare($sqlTot);
$stmt->execute();
$total = $stmt->get_result()->fetch_assoc()['cnt'];
$stmt->close();

// 7. FILTERED COUNT
$sqlF = "SELECT COUNT(*) AS cnt FROM accounts $whereSql";
$stmt = $db->prepare($sqlF);
if ($types) {
    $bindParams = array_merge([$types], $params);
    call_user_func_array([$stmt, 'bind_param'], refValues($bindParams));
}
$stmt->execute();
$filtered = $stmt->get_result()->fetch_assoc()['cnt'];
$stmt->close();

// 8. FETCH DATA
$limitSQL = $length > 0 ? "LIMIT ?,?" : '';
$select = "
  SELECT
    id, country, bankname, balance, acctype, infos,
    `date`, resseller, sitename, price, sold,
    `check`, phishing, seo_info, technologie,
    checksend, checkunzip, advanced_seo, sendinstruction,
    resseller_id, `date` AS created_at
  FROM accounts
  $whereSql
  ORDER BY $orderBy
  $limitSQL
";
$stmt = $db->prepare($select);
if ($types) {
    $tAll = $types . ($length > 0 ? 'ii' : '');
    $pAll = $params;
    if ($length > 0) {
        $pAll[] = $start;
        $pAll[] = $length;
    }
    $bindAll = array_merge([$tAll], $pAll);
    call_user_func_array([$stmt, 'bind_param'], refValues($bindAll));
}
$stmt->execute();
$res = $stmt->get_result();

// 9. BUILD ROWS
$data = [];
while ($r = $res->fetch_assoc()) {
    $id = (int)$r['id'];

    if ((int)$r['sold'] === 1) {
        $actionBtn = '<button class="btn btn-sm btn-alt-primary btn-rounded" disabled><i class="fa fa-ban"></i>&nbsp;Sold</button>';
    } else {
        $actionBtn = '<button class="btn btn-sm btn-primary buy-btn" data-status="0" data-id="'.$id.'" onclick="buyItem(event,this)"><i class="fa fa-shopping-cart"></i>&nbsp;Buy</button>';
    }

    $checkBtn     = '<button class="btn btn-sm btn-alt-primary btn-rounded" data-id="'.$id.'" data-url="https://elitetools.life/banks/check.php"><i class="fa fa-sync-alt"></i>&nbsp;Check </button>';
    $phishingBtn  = '<button class="btn btn-sm btn-danger" onclick="checkUrl(this)"><i class="fa fa-exclamation-triangle"></i>&nbsp;Reported</button>';
    $seoBtn       = '<button onclick="showSeoInformations(this)" class="btn btn-sm btn-info" data-seo="'.htmlspecialchars($r['seo_info'] ?? '', ENT_QUOTES).'"><i class="fa fa-search"></i></button>';
    $techBtn      = '<button onclick="showTechInformations(this)" class="btn btn-sm btn-warning" data-tech="'.htmlspecialchars($r['technologie'] ?? '', ENT_QUOTES).'"><i class="fa fa-cogs"></i></button>';
    $checkSendBtn = '<button class="btn btn-sm btn-primary" onclick="checkcPanelMail('.$id.', this)" id="check-cpanel-mail-'.$id.'"><i class="fa fa-paper-plane"></i></button>';
    $checkUnzipBtn= '<button class="btn btn-sm btn-secondary" onclick="checkcPanelZIP('.$id.', this)"><i class="fa fa-file-archive"></i></button>';
    $advSeoBtn    = '<button onclick="showAdvancedSeoInformations(this)" class="btn btn-sm btn-dark" data-info="'.htmlspecialchars($r['advanced_seo'] ?? '', ENT_QUOTES).'"><i class="fa fa-chart-bar"></i></button>';
    $smtpBtn      = '<button class="btn btn-sm btn-success" onclick="sendCpanelInstructions('.$id.', this)" id="send-instructions-'.$id.'"><i class="fa fa-envelope-open-text"></i></button>';
    $sellerBtn    = '<a href="/seller/'.$r['resseller_id'].'/profile" class="btn btn-sm btn-alt-warning btn-rounded" data-bs-toggle="tooltip" title="Open Seller Profile">Seller '.$r['resseller_id'].'</a>';

    $data[] = [
        'responsive'     => '',
        'id'             => $r['id'],
        'country'        => $r['country'],
        'bankname'       => $r['bankname'],
        'balance'        => $r['balance'],
        'acctype'        => $r['acctype'],
        'infos'          => $r['infos'],
        'date'           => $r['date'],
        'resseller'      => $r['resseller'],
        'sitename'       => $r['sitename'],
        'price'          => $r['price'],
        'action'         => $actionBtn,
        'check'          => $checkBtn,
        'phishing'       => $phishingBtn,
        'seo_info'       => $seoBtn,
        'technologie'    => $techBtn,
        'checksend'      => $checkSendBtn,
        'checkunzip'     => $checkUnzipBtn,
        'advanced_seo'   => $advSeoBtn,
        'sendinstruction'=> $smtpBtn,
        'seller_id'      => $sellerBtn,
        'created_at'     => $r['created_at'],
    ];
}
$stmt->close();

// 11. RETURN JSON
echo json_encode([
    'draw'            => $draw,
    'recordsTotal'    => $total,
    'recordsFiltered' => $filtered,
    'data'            => $data
], JSON_UNESCAPED_UNICODE);
exit;
?>
