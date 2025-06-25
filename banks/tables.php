<?php
ob_start();
session_start();
date_default_timezone_set('UTC');
include "../includes/config.php";

if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: ../");
    exit();
}

$columns = [
    0 => 'country',
    1 => 'sitename',
    2 => 'infos',
    3 => 'resseller',
    4 => 'price',
    5 => 'date'
];

$searchValue = $_POST['search']['value'] ?? '';
$start = $_POST['start'] ?? 0;
$length = $_POST['length'] ?? 10;
$orderColumnIndex = $_POST['order'][0]['column'] ?? 0;
$orderDirection = $_POST['order'][0]['dir'] ?? 'asc';

$orderColumn = $columns[$orderColumnIndex];

$queryTotal = "SELECT COUNT(*) as total FROM accounts WHERE sold='0'";
$resultTotal = mysqli_query($dbcon, $queryTotal);
$totalData = $resultTotal ? mysqli_fetch_assoc($resultTotal)['total'] : 0;

$queryFiltered = "SELECT * FROM accounts WHERE sold='0' ";
if (!empty($searchValue)) {
    $queryFiltered .= "AND (country LIKE '%$searchValue%' OR sitename LIKE '%$searchValue%' OR infos LIKE '%$searchValue%')";
}

$queryFiltered .= "ORDER BY $orderColumn $orderDirection LIMIT $start, $length";
$resultFiltered = mysqli_query($dbcon, $queryFiltered);

$data = [];
while ($row = mysqli_fetch_assoc($resultFiltered)) {
    $countryCode = strtolower(array_search($row['country'], $countrycodes));
    $SellerNick = ''; // Fetch seller nickname logic here
    $data[] = [
        htmlspecialchars($row['country']),
        htmlspecialchars($row['sitename']),
        htmlspecialchars($row['infos']),
        htmlspecialchars($SellerNick),
        htmlspecialchars($row['price']),
        htmlspecialchars($row['date']),
        '<a class="btn btn-primary btn-xs" onclick="buythistool(' . $row['id'] . ')">Buy</a>',
    ];
}

$response = [
    "draw" => intval($_POST['draw'] ?? 1),
    "recordsTotal" => intval($totalData),
    "recordsFiltered" => intval(mysqli_num_rows($resultFiltered)),
    "data" => $data
];

header('Content-Type: application/json');
echo json_encode($response);
?>