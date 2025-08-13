This my full code fix accordingly without modifying my dark mode element adjust and make it works make the text font of all pages smooth and beautiful in eye looking and organized <!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="">
    <title>Elite Crypto Vault | Instant Funding</title>

```
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- Icons -->
    <link rel="shortcut icon" href="https://waxa.pw/assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://waxa.pw/assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://waxa.pw/assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
		<!-- Stylesheets -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/dropzone/min/dropzone.min.css">
    <link rel="stylesheet" href="https://waxa.pw/assets/js/plugins/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" id="css-main" href="https://waxa.pw/assets/css/oneui.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.1/css/ion.rangeSlider.min.css"/>
 

<style>
/* Base Variables - Light Mode Default */
:root {
    --primary: #6366f1;
    --primary-dark: #4f46e5;
    --secondary: #06b6d4;
    --accent: #8b5cf6;
    --success: #10b981;
    --warning: #f59e0b;
    --danger: #ef4444;

    /* Light Mode Variables */
    --light-bg-primary: #ffffff;
    --light-bg-secondary: #f3f4f6;
    --light-bg-tertiary: #e5e7eb;
    --light-bg-card: rgba(255, 255, 255, 0.8);
    --light-bg-glass: rgba(255, 255, 255, 0.1);

    --light-text-primary: #1f2937;
    --light-text-secondary: #4b5563;
    --light-text-muted: #6b7280;

    --light-border: rgba(0, 0, 0, 0.1);
    --light-border-hover: rgba(0, 0, 0, 0.2);

    /* Dark Mode Variables (formerly --waxa-*) */
    --dark-bg-primary: #1a1a2e;
    --dark-bg-secondary: #16213e;
    --dark-bg-tertiary: #0f0f0f;
    --dark-bg-card: rgba(22, 33, 62, 0.8);
    --dark-bg-glass: rgba(255, 255, 255, 0.05);

    --dark-text-primary: #ffffff;
    --dark-text-secondary: #a1a1aa;
    --dark-text-muted: #71717a;

    --dark-border: rgba(255, 255, 255, 0.1);
    --dark-border-hover: rgba(255, 255, 255, 0.2);

    --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -2px rgba(0, 0, 0, 0.1);
    --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -4px rgba(0, 0, 0, 0.1);
    --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1);

    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 16px;
    --radius-xl: 24px;
}

/* Dark Mode Overrides */
[data-theme="dark"] {
    --bg-primary: var(--dark-bg-primary);
    --bg-secondary: var(--dark-bg-secondary);
    --bg-tertiary: var(--dark-bg-tertiary);
    --bg-card: var(--dark-bg-card);
    --bg-glass: var(--dark-bg-glass);
    --text-primary: var(--dark-text-primary);
    --text-secondary: var(--dark-text-secondary);
    --text-muted: var(--dark-text-muted);
    --border: var(--dark-border);
    --border-hover: var(--dark-border-hover);
}

/* Default to Light Mode */
:root {
    --bg-primary: var(--light-bg-primary);
    --bg-secondary: var(--light-bg-secondary);
    --bg-tertiary: var(--light-bg-tertiary);
    --bg-card: var(--light-bg-card);
    --bg-glass: var(--light-bg-glass);
    --text-primary: var(--light-text-primary);
    --text-secondary: var(--light-text-secondary);
    --text-muted: var(--light-text-muted);
    --border: var(--light-border);
    --border-hover: var(--light-border-hover);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background: linear-gradient(135deg, var(--bg-tertiary) 0%, var(--bg-primary) 50%, var(--bg-secondary) 100%);
    color: var(--text-primary);
    min-height: 100vh;
    overflow-x: hidden;
}

/* Background Effects */
body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: 
        radial-gradient(circle at 20% 80%, rgba(120, 119, 198, 0.2), transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(255, 119, 198, 0.1), transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(120, 219, 255, 0.1), transparent 50%);
    pointer-events: none;
    z-index: -1;
}

/* Custom Scrollbar */
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    background: var(--bg-tertiary);
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, var(--primary), var(--secondary));
    border-radius: 3px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, var(--primary-dark), var(--accent));
}

/* Pause animations during scrolling */
.paused-animations * {
    animation-play-state: paused !important;
    transition: none !important;
}

/* Header Styles */
#page-header {
    background: linear-gradient(135deg, var(--bg-secondary), var(--bg-primary));
    border-bottom: 2px solid var(--border);
    backdrop-filter: blur(20px);
    position: sticky;
    top: 0;
    z-index: 1000;
}

/* Glass Cards */
.glass-card {
    background: var(--bg-card);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    box-shadow: var(--shadow-xl);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    margin-bottom: 1.5rem;
}

.glass-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
    z-index: 1;
}

.glass-card:hover {
    transform: translateY(-2px);
    box-shadow: 
        0 25px 50px -12px rgba(99, 102, 241, 0.25),
        var(--shadow-xl);
    border-color: var(--border-hover);
}

/* Hero Section */
.hero-section {
    padding: 2rem 0;
    text-align: center;
}

.hero-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 900;
    background: linear-gradient(135deg, var(--primary), var(--secondary), var(--accent));
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-size: 200% 200%;
    animation: gradientShift 4s ease-in-out infinite;
    margin-bottom: 0.75rem;
}

.hero-subtitle {
    font-size: clamp(1rem, 2.5vw, 1.25rem);
    color: var(--text-secondary);
    font-weight: 400;
    margin-bottom: 0;
}

@keyframes gradientShift {
    0%, 100% { background-position: 0% 50%; }
    50% { background-position: 100% 50%; }
}

/* Currency Grid */
.currency-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(110px, 1fr));
    gap: 0.75rem;
    margin-bottom: 2rem;
}

.currency-card {
    background: var(--bg-glass);
    border: 2px solid var(--border);
    border-radius: var(--radius-md);
    padding: 1rem 0.75rem;
    cursor: pointer;
    transition: transform 0.2s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.2s ease;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    text-align: center;
}

.currency-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
    transition: left 0.5s;
}

.currency-card:hover::before {
    left: 100%;
}

.currency-card:hover {
    transform: translateY(-4px) scale(1.02);
    border-color: var(--primary);
    box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.1);
}

.currency-card.selected {
    background: linear-gradient(135deg, 
        rgba(99, 102, 241, 0.2), 
        rgba(139, 92, 246, 0.1));
    border-color: var(--primary);
    box-shadow: 
        0 0 0 1px var(--primary),
        0 20px 25px -5px rgba(99, 102, 241, 0.3);
    transform: translateY(-4px);
}

.currency-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.75rem;
    position: relative;
    overflow: hidden;
}

.currency-icon::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: conic-gradient(transparent, rgba(255, 255, 255, 0.3), transparent);
    animation: none;
}

.currency-card:hover .currency-icon::before {
    animation: spin 2s linear infinite;
}

.currency-icon img,
.currency-icon i {
    position: relative;
    z-index: 1;
    font-size: 1.25rem;
}

@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* Amount Input */
.amount-container {
    position: relative;
    margin-bottom: 1rem;
}

.amount-input {
    background: var(--bg-glass);
    border: 2px solid var(--border);
    border-radius: var(--radius-lg);
    padding: clamp(1rem, 3vw, 2rem) 1rem;
    font-size: clamp(1.5rem, 4vw, 2.5rem);
    font-weight: 800;
    color: var(--text-primary);
    text-align: center;
    backdrop-filter: blur(10px);
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    width: 100%;
}

.amount-input:focus {
    outline: none;
    border-color: var(--primary);
    box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.1);
    background: rgba(99, 102, 241, 0.05);
}

.amount-input::placeholder {
    color: var(--text-muted);
}

/* Info Display */
.info-display {
    border-radius: var(--radius-md);
    padding: 1.5rem;
    margin-bottom: 2rem;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
}

.bonus-display {
    background: linear-gradient(135deg, 
        rgba(16, 185, 129, 0.1), 
        rgba(6, 182, 212, 0.1));
    border: 1px solid rgba(16, 185, 129, 0.3);
    animation: pulse 2s ease-in-out infinite;
}

.error-display {
    background: linear-gradient(135deg, 
        rgba(239, 68, 68, 0.1), 
        rgba(245, 158, 11, 0.1));
    border: 1px solid rgba(239, 68, 68, 0.3);
}

.warning-display {
    background: linear-gradient(135deg, 
        rgba(245, 158, 11, 0.1), 
        rgba(249, 115, 22, 0.1));
    border: 1px solid rgba(245, 158, 11, 0.3);
}

@keyframes pulse {
    0%, 100% { 
        box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); 
        transform: scale(1);
    }
    50% { 
        box-shadow: 0 0 0 20px rgba(16, 185, 129, 0); 
        transform: scale(1.02);
    }
}

/* Buttons */
.btn-primary-modern {
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    border: none;
    border-radius: var(--radius-md);
    padding: 1rem 2rem;
    font-size: clamp(1rem, 2.5vw, 1.1rem);
    font-weight: 700;
    letter-spacing: 0.025em;
    text-transform: uppercase;
    position: relative;
    overflow: hidden;
    transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    color: white;
}

.btn-primary-modern::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-primary-modern:hover::before {
    left: 100%;
}

.btn-primary-modern:hover:not(:disabled) {
    transform: translateY(-2px);
    box-shadow: 0 20px 25px -5px rgba(99, 102, 241, 0.4);
    color: white;
}

.btn-primary-modern:disabled {
    background: var(--bg-secondary);
    color: var(--text-muted);
    cursor: not-allowed;
}

/* Rules Section */
.rules-container {
    background: var(--bg-glass);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    padding: 1.5rem;
    backdrop-filter: blur(20px);
    height: 100%;
}

.rule-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    border-radius: var(--radius-sm);
    transition: all 0.3s ease;
    margin-bottom: 0.5rem;
}

.rule-item:hover {
    background: var(--bg-glass);
    transform: translateX(4px);
}

.rule-icon {
    width: 36px;
    height: 36px;
    border-radius: var(--radius-sm);
    background: linear-gradient(135deg, var(--primary), var(--secondary));
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    position: relative;
    overflow: hidden;
}

.rule-icon::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: conic-gradient(transparent, rgba(255, 255, 255, 0.3), transparent);
    animation: none;
}

.rule-item:hover .rule-icon::before {
    animation: spin 3s linear infinite;
}

.rule-icon i {
    position: relative;
    z-index: 1;
    font-size: 0.9rem;
}

/* Transaction Table */
.transaction-table {
    background: var(--bg-glass);
    border: 1px solid var(--border);
    border-radius: var(--radius-lg);
    backdrop-filter: blur(20px);
    overflow: hidden;
}

.transaction-table table {
    margin: 0;
    width: 100%;
}

.transaction-table th {
    background: rgba(99, 102, 241, 0.1);
    border: none;
    color: var(--text-primary);
    font-weight: 600;
    padding: 0.75rem 0.5rem;
    font-size: 0.9rem;
    white-space: nowrap;
}

.transaction-table td {
    border: none;
    color: var(--text-secondary);
    padding: 0.75rem 0.5rem;
    border-bottom: 1px solid var(--border);
    font-size: 0.85rem;
}

.transaction-table tbody tr:hover {
    background: var(--bg-glass);
}

.transaction-table tbody tr:last-child td {
    border-bottom: none;
}

/* Responsive Table Wrapper */
.table-responsive {
    position: relative;
}

.table-responsive::after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 30px;
    background: linear-gradient(to left, var(--bg-card), transparent);
    pointer-events: none;
}

/* Mobile Transaction Cards */
.mobile-transaction-card {
    display: none;
    background: var(--bg-glass);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    padding: 1rem;
    margin-bottom: 0.75rem;
}

/* Status Badges */
.status-badge {
    padding: 0.25rem 0.5rem;
    border-radius: 50px;
    font-size: 0.7rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    display: inline-block;
}

.badge-completed {
    background: rgba(16, 185, 129, 0.1);
    color: var(--success);
    border: 1px solid rgba(16, 185, 129, 0.3);
}

.badge-pending {
    background: rgba(245, 158, 11, 0.1);
    color: var(--warning);
    border: 1px solid rgba(245, 158, 11, 0.3);
}

.badge-failed {
    background: rgba(239, 68, 68, 0.1);
    color: var(--danger);
    border: 1px solid rgba(239, 68, 68, 0.3);
}

/* Logo Styles */
.logo-container {
    display: inline-block;
    position: relative;
    padding: 6px;
}

.logo-image {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--primary);
    transition: all 0.3s ease;
}

.logo-image:hover {
    transform: scale(1.1);
    border-color: var(--secondary);
    box-shadow: 0 0 20px rgba(99, 102, 241, 0.3);
}

/* Navigation Styles */
.bg-primary-darker {
    background: linear-gradient(135deg, var(--bg-secondary), var(--bg-primary));
    border-bottom: 1px solid var(--border);
}

.bg-black-10 {
    background: rgba(0, 0, 0, 0.1);
}

.nav-main-dark .nav-main-link {
    color: var(--text-secondary);
    font-size: 0.95rem;
    padding: 0.5rem 0.75rem;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    will-change: transform, color;
}

.nav-main-dark .nav-main-link:hover {
    color: var(--primary);
    transform: translateX(5px);
}

.nav-main-link-badge {
    background: linear-gradient(45deg, var(--primary), var(--secondary)) !important;
    color: white !important;
    font-size: 0.7rem;
    padding: 0.25rem 0.5rem;
}

/* Submenu Styles */
.nav-main-submenu {
    background: var(--bg-card);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    backdrop-filter: blur(10px);
    padding: 0.5rem;
}

.nav-main-submenu .nav-main-link {
    color: var(--text-secondary);
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.nav-main-submenu .nav-main-link:hover {
    background: var(--bg-glass);
    color: var(--primary);
    transform: translateX(3px);
}

/* Mobile Navigation Toggle */
.mobile-nav-toggle {
    background: var(--bg-glass);
    border: 2px solid var(--border);
    border-radius: var(--radius-md);
    padding: 0.75rem 1rem;
    color: var(--text-primary);
    transition: all 0.3s ease;
}

.mobile-nav-toggle:hover {
    border-color: var(--primary);
    background: var(--bg-card);
    color: var(--primary);
}

/* Settings Button */
.btn-alt-secondary[data-action="settings"] {
    background: var(--bg-glass);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    padding: 0.5rem;
    font-size: 0.9rem;
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-alt-secondary[data-action="settings"] i.fa-cog {
    font-size: 1rem;
}

.btn-alt-secondary[data-action="settings"]:hover {
    background: var(--bg-card);
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-1px);
}

.btn-alt-secondary[data-action="settings"]::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-alt-secondary[data-action="settings"]:hover::before {
    left: 100%;
}

/* Dark Mode Toggle */
.btn-alt-secondary[data-action="dark_mode_toggle"] {
    background: var(--bg-glass);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    padding: 0.5rem;
    font-size: 0.9rem;
    border-radius: var(--radius-md);
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-alt-secondary[data-action="dark_mode_toggle"] i.fa-moon {
    font-size: 1rem;
}

.btn-alt-secondary[data-action="dark_mode_toggle"]:hover {
    background: var(--bg-card);
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-1px);
}

.btn-alt-secondary[data-action="dark_mode_toggle"]::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-alt-secondary[data-action="dark_mode_toggle"]:hover::before {
    left: 100%;
}

/* Notification Dropdown */
.notification-dropdown {
    max-height: 400px;
    overflow-y: auto;
    width: 320px;
    background: var(--bg-card);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    position: absolute;
    top: 100%;
    right: 0;
    z-index: 1000;
    display: none; /* Hidden by default, toggled via JS */
}

.notification-dropdown.show {
    display: block;
}

.notification-item {
    padding: 0.75rem;
    border-bottom: 1px solid var(--border);
    transition: background-color 0.2s;
    font-size: 0.85rem;
    cursor: pointer;
}

.notification-item.unread {
    background-color: rgba(99, 102, 241, 0.05);
}

.notification-item:hover {
    background-color: var(--bg-glass);
}

.notification-message {
    white-space: normal;
    word-wrap: break-word;
    margin-bottom: 0.25rem;
}

.notification-time {
    font-size: 0.75rem;
    color: var(--text-muted);
}

.notification-actions .btn-link {
    padding: 0;
    color: var(--success);
}

.notification-actions .btn-link:hover {
    color: var(--primary);
}

#notification-counter {
    font-size: 0.65rem;
    padding: 0.2rem 0.4rem;
    background: linear-gradient(45deg, var(--primary), var(--secondary));
    color: white;
    border-radius: 50%;
    position: absolute;
    top: -5px;
    right: -5px;
}

/* Header Buttons */
.btn-alt-secondary {
    background: var(--bg-glass);
    border: 1px solid var(--border);
    color: var(--text-secondary);
    transition: all 0.3s ease;
    padding: 0.5rem 0.75rem;
    font-size: 0.9rem;
    border-radius: var(--radius-md);
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.btn-alt-secondary:hover {
    background: var(--bg-card);
    border-color: var(--primary);
    color: var(--primary);
    transform: translateY(-1px);
}

.btn-alt-secondary::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-alt-secondary:hover::before {
    left: 100%;
}

/* Dropdown Menu */
.dropdown-menu {
    background: var(--bg-card);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
}

.dropdown-item {
    color: var(--text-secondary);
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
    transition: all 0.3s ease;
}

.dropdown-item:hover {
    background: var(--bg-glass);
    color: var(--primary);
}

.dropdown-divider {
    border-color: var(--border);
}

/* Header Search */
#page-header-search {
    background: var(--bg-glass);
    border-bottom: 1px solid var(--border);
}

#page-header-search .content-header {
    padding: 0.5rem 1rem;
}

#page-header-search .input-group {
    background: var(--bg-card);
    border-radius: var(--radius-md);
    overflow: hidden;
}

#page-header-search .btn-alt-danger {
    background: none;
    border: none;
    color: var(--danger);
    transition: color 0.3s ease;
}

#page-header-search .btn-alt-danger:hover {
    color: var(--primary);
}

#page-header-search-input {
    background: transparent;
    border: none;
    color: var(--text-primary);
    font-size: 0.9rem;
}

#page-header-search-input:focus {
    outline: none;
    box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2);
}

/* Header Loader */
#page-header-loader {
    background: var(--bg-primary);
}

#page-header-loader .fa-circle-notch {
    font-size: 1.5rem;
}

/* Notification Container (Toasts) */
.notifications.top-right {
    position: fixed;
    top: 70px;
    right: 20px;
    z-index: 9999;
    width: 350px;
}

/* Badges */
.badge {
    font-size: 0.7rem;
    font-weight: 600;
    padding: 0.25rem 0.5rem;
}

.badge.bg-success {
    background: rgba(16, 185, 129, 0.1) !important;
    color: var(--success);
    border: 1px solid rgba(16, 185, 129, 0.3);
}

.badge.bg-info {
    background: rgba(6, 182, 212, 0.1) !important;
    color: var(--secondary);
    border: 1px solid rgba(6, 182, 212, 0.3);
}

.badge.bg-primary {
    background: rgba(99, 102, 241, 0.1) !important;
    color: var(--primary);
    border: 1px solid rgba(99, 102, 241, 0.3);
}

.badge.bg-danger {
    background: rgba(239, 68, 68, 0.1) !important;
    color: var(--danger);
    border: 1px solid rgba(239, 68, 68, 0.3);
}

/* Statistics Cards */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
}

.stat-card {
    background: var(--bg-card);
    backdrop-filter: blur(20px);
    border: 1px solid var(--border);
    border-radius: var(--radius-md);
    padding: 1.5rem 1rem;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
}

.stat-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 25px -5px rgba(99, 102, 241, 0.15);
}

/* Loading Animation */
.loading {
    opacity: 0.6;
    pointer-events: none;
    position: relative;
}

.loading::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 20px;
    height: 20px;
    border: 2px solid transparent;
    border-top: 2px solid var(--primary);
    border-radius: 50%;
    animation: spin 1s linear infinite;
}

/* Section Dividers */
.section-divider {
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--border), transparent);
    margin: 3rem 0;
}

/* Responsive Design */
@media (max-width: 768px) {
    .content-header {
        padding: 0.5rem 0.75rem;
    }

    .logo-image {
        width: 32px;
        height: 32px;
    }

    .hero-section {
        padding: 1.5rem 0;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .amount-input {
        font-size: 2rem;
        padding: 1.5rem 1rem;
    }

    .currency-grid {
        grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
        gap: 0.5rem;
    }

    .currency-card {
        padding: 0.75rem 0.5rem;
    }

    .currency-icon {
        width: 32px;
        height: 32px;
        margin-bottom: 0.5rem;
    }

    .currency-icon i {
        font-size: 1rem;
    }

    .glass-card {
        margin-bottom: 1.5rem;
    }

    .rule-item {
        padding: 0.75rem 0.5rem;
        gap: 0.75rem;
    }

    .rule-icon {
        width: 32px;
        height: 32px;
    }

    .info-display {
        padding: 1rem;
    }

    .transaction-table table {
        display: none;
    }

    .mobile-transaction-card {
        display: block;
    }

    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 0.75rem;
    }

    .stat-card {
        padding: 1rem 0.75rem;
    }

    .btn-alt-secondary {
        padding: 0.4rem 0.6rem;
        font-size: 0.8rem;
    }

    .notification-dropdown {
        width: 280px;
        max-height: 300px;
    }

    .nav-main-horizontal .nav-main-item {
        margin-bottom: 0.25rem;
    }

    .nav-main-link {
        padding: 0.5rem !important;
        font-size: 0.9rem;
    }

    #main-navigation {
        background: var(--bg-card);
        border: 1px solid var(--border);
        border-radius: var(--radius-md);
        padding: 0.5rem;
    }
}

@media (max-width: 480px) {
    .currency-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .stats-grid {
        grid-template-columns: 1fr;
    }

    .hero-title {
        font-size: 2rem;
    }

    .hero-subtitle {
        font-size: 0.95rem;
    }

    .amount-input {
        padding: 1rem 0.75rem;
        font-size: 1.75rem;
    }

    .btn-primary-modern {
        padding: 0.875rem 1.5rem;
        font-size: 0.95rem;
    }

    .notification-dropdown {
        width: calc(100vw - 2rem);
        right: 1rem !important;
        left: 1rem !important;
    }

    .btn-alt-secondary {
        padding: 0.4rem 0.6rem;
        font-size: 0.75rem;
    }

    .nav-main-link {
        font-size: 0.85rem;
    }

    .dropdown-menu {
        width: calc(100vw - 2rem);
    }
}

/* Ultra-wide screens */
@media (min-width: 1400px) {
    .container-fluid {
        max-width: 1400px;
        margin: 0 auto;
    }
}

/* Print styles */
@media print {
    #page-header, .bg-primary-darker, .nav-main-dark, .notifications {
        display: none;
    }

    .glass-card {
        background: white !important;
        color: black !important;
        border: 1px solid #ddd !important;
    }

    .btn-primary-modern, .btn-alt-secondary {
        display: none;
    }
}

/* Disable hover effects on touch devices */
@media (hover: none) {
    .logo-image:hover,
    .nav-main-link:hover,
    .btn-alt-secondary:hover,
    .dropdown-item:hover,
    .notification-item:hover,
    .glass-card:hover,
    .currency-card:hover,
    .btn-primary-modern:hover,
    .rule-item:hover,
    .stat-card:hover {
        transform: none !important;
        box-shadow: none !important;
        border-color: inherit !important;
        background: none !important;
    }
    .btn-alt-secondary::before,
    .currency-card:hover::before,
    .btn-primary-modern:hover::before {
        display: none;
    }
}
</style>


</head>

<body>

    <div id="page-container" class="page-header-dark main-content-boxed remember-theme">
      <header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
        <!-- Simplified Logo -->
        <a class="logo-container" href="https://waxa.pw/main" title="WaXa Trusted Platform">
            <img src="https://png.pngtree.com/png-vector/20240612/ourmid/pngtree-monkey-smoke-sigarate-png-image_12720609.png" 
                alt="Premium Logo" 
                class="logo-image">
        </a>
        <style>
            .logo-container {
                display: inline-block;
                position: relative;
                padding: 6px;
            }
 
            .logo-image {
                width: 45px;
                height: 45px;
                border-radius: 50%;
                object-fit: cover;
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
 
            /* Mobile Optimization */
            @media (max-width: 768px) {
                .logo-image {
                    width: 40px;
                    height: 40px;
                }
            }
            </style>
        <!-- END Logo -->
 
            <!-- Tawk.to Script -->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/684b7b5085de5d190feb41d6/1itjdjcs6';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            </script>
 
            <!-- Dark Mode Toggle -->
            <button type="button" class="btn btn-sm btn-alt-secondary me-2" data-toggle="layout" data-action="dark_mode_toggle">
                <i class="far fa-moon text-warning"></i>
            </button>
            &nbsp;
 
            <!-- Real-Time Notification Bell -->
            <div class="dropdown d-inline-block me-2">
                <button type="button" class="btn btn-sm btn-alt-secondary position-relative" 
                        id="real-time-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell text-primary"></i>
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" 
                          id="notification-counter" style="font-size: 0.65em;">
                        0
                    </span>
                </button>
 
                <!-- Notification Dropdown -->
                <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm notification-dropdown"
                    aria-labelledby="real-time-notifications-dropdown"
                    style="min-width: 350px; max-height: 500px; overflow-y: auto;">
                    <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                        <h5 class="dropdown-header text-uppercase">Notifications</h5>
                        <div class="d-flex justify-content-between px-2">
                            <button class="btn btn-sm btn-alt-primary" id="mark-all-read">
                                <i class="fa fa-check-circle me-1"></i> Mark All Read
                            </button>
                            <button class="btn btn-sm btn-alt-secondary" id="refresh-notifications">
                                <i class="fa fa-sync-alt me-1"></i> Refresh
                            </button>
                        </div>
                    </div>
                    <ul class="nav-items mb-0" id="notification-list">
                        <li class="text-center py-4">
                            <div class="spinner-border text-primary" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                            <p class="text-muted mt-2">Loading notifications...</p>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Real-Time Notification Bell -->
 
            <!-- Existing Payment Notifications Dropdown -->
            <div class="dropdown d-inline-block me-2">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa fa-circle-dollar-to-slot text-info"></i>
                    <span class="text-primary">•</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                        <h5 class="dropdown-header text-uppercase">Payment History</h5>
                    </div>
                    <ul class="nav-items mb-0">
                                                                    </ul>
                </div>
            </div>
            <!-- END Payment Notifications Dropdown -->
        </div>
        <!-- END Left Section -->
 
        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
                <button type="button" class="btn btn-sm btn-alt-secondary d-flex align-items-center"
                    id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-cog rounded-circle text-light hover:text-gray-600 transition-colors" 
                    style="font-size: 21px; width: 21px; text-align: center; cursor: pointer" 
                    aria-label="Settings"
                    role="button"></i>
                    <span class="d-none d-sm-inline-block ms-2">Settings</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block opacity-50 ms-1"></i>
                </button>
 
 
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0"
                    aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                        <p class="mb-0 text-muted fs-sm fw-medium">Group : user</p>
                    </div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="https://waxa.pw/add-balance">
                        <span class="fs-sm fw-medium">Balance</span>
                        <span class="nav-main-link-badge badge rounded-pill bg-success">0 USD</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                        href="https://waxa.pw/become-premium">
                        <span class="fs-sm fw-medium">Premium</span>
                        <span class="badge rounded-pill bg-info ms-2">normal</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/orders">
                            <span class="fs-sm fw-medium">Orders</span>
                            <span class="badge rounded-pill bg-primary ms-2">0</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/tickets">
                            <span class="fs-sm fw-medium">Tickets</span>
                            <span class="badge rounded-pill bg-danger ms-2">0</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/reports">
                            <span class="fs-sm fw-medium">Reports</span>
                            <span class="badge rounded-pill bg-danger ms-2">0 </span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/profile">
                            <span class="fs-sm fw-medium">Settings</span>
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/referral-dashboard">
                            <span class="fs-sm fw-medium"> Referrals Program</span>
                        </a>	
                                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="https://waxa.pw/become-seller">
                            <span class="fs-sm fw-medium">Become Seller</span>
                        </a>
                                              </div>
                    <div role="separator" class="dropdown-divider m-0"></div>
                    <div class="p-2">
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/faq">
                            <span class="fs-sm fw-medium">FAQ</span>
                        </a>
 
                        <a class="dropdown-item d-flex align-items-center justify-content-between"
                            href="https://waxa.pw/logout" method="POST">
                            <input type="hidden" name="_token" value="9SSZFlwRlxAUGkOJuDjXzb9yMBceB1m86Q8M7O5m" autocomplete="off">                            <span class="fs-sm fw-medium">Log Out</span>
                        </a>
                    </div>
                </div>
                            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->
 
    <!-- Header Search -->
    <div id="page-header-search" class="overlay-header bg-body-extra-light">
        <div class="content-header">
            <form class="w-100" action="bd_search.html" method="POST">
                <div class="input-group">
                    <button type="button" class="btn btn-alt-danger" data-toggle="layout"
                        data-action="header_search_off">
                        <i class="fa fa-fw fa-times-circle"></i>
                    </button>
                    <input type="text" class="form-control" placeholder="Search or hit ESC.."
                        id="page-header-search-input" name="page-header-search-input" />
                </div>
            </form>
        </div>
    </div>
    <!-- END Header Search -->
 
    <!-- Header Loader -->
    <div id="page-header-loader" class="overlay-header bg-primary-lighter">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
 
<!-- Notification Container for Desktop Toasts -->
<div id="notification-container" class="notifications top-right"></div>
 
<!-- Notification Styles -->
<style>
    .notification-dropdown {
        max-height: 500px;
        overflow-y: auto;
        width: 350px;
    }
 
    .notification-item {
        padding: 10px 15px;
        border-bottom: 1px solid #eee;
        transition: background-color 0.2s;
    }
 
    .notification-item.unread {
        background-color: rgba(13, 110, 253, 0.05);
    }
 
    .notification-item:hover {
        background-color: #f8f9fa;
    }
 
    .notification-message {
        white-space: normal;
        word-wrap: break-word;
        margin-bottom: 5px;
    }
 
    .notification-time {
        font-size: 11px;
        color: #6c757d;
    }
 
    .notification-actions {
        margin-top: 5px;
        text-align: right;
    }
 
    .notifications.top-right {
        position: fixed;
        top: 70px;
        right: 20px;
        z-index: 9999;
        width: 350px;
    }
</style>
 
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize variables
    const notificationList = document.getElementById('notification-list');
    const notificationCounter = document.getElementById('notification-counter');
    const displayedNotificationIds = new Set(); // Track displayed notifications
 
    // Function to format time
    function formatTime(dateString) {
        const date = new Date(dateString);
        return date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }) + 
               ' | ' + date.toLocaleDateString();
    }
 
    // Load notifications from server
    function loadNotifications() {
        // Show loading spinner
        notificationList.innerHTML = `
            <li class="text-center py-2">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </li>`;
 
        $.ajax({
            url: '/notifications/get',
            method: 'GET',
            success: function(response) {
                if (response.notifications && response.notifications.length > 0) {
                    // Reset tracking
                    displayedNotificationIds.clear();
 
                    // Process notifications
                    updateNotifications(response.notifications);
                    notificationCounter.textContent = response.notifications.length;
                    notificationCounter.classList.remove('d-none');
                } else {
                    notificationList.innerHTML = `
                        <li class="text-center py-4">
                            <i class="far fa-bell-slash fa-2x text-muted mb-2"></i>
                            <p>No new notifications</p>
                        </li>`;
                    notificationCounter.classList.add('d-none');
                }
            },
            error: function() {
                notificationList.innerHTML = `
                    <li class="text-center py-4">
                        <i class="fa fa-exclamation-triangle text-danger me-2"></i>
                        Failed to load notifications
                    </li>`;
            }
        });
    }
 
    // Update UI with notifications
    function updateNotifications(notifications) {
        // Clear existing notifications
        notificationList.innerHTML = '';
 
        // Update counter
        notificationCounter.textContent = notifications.length;
 
        if (notifications.length === 0) {
            notificationList.innerHTML = `
                <li class="text-center py-4">
                    <i class="far fa-bell-slash fa-2x text-muted mb-2"></i>
                    <p>No new notifications</p>
                </li>`;
            notificationCounter.classList.add('d-none');
            return;
        }
 
        notificationCounter.classList.remove('d-none');
 
        // Add notifications to UI
        notifications.forEach(notif => {
            // Skip if already displayed
            if (displayedNotificationIds.has(notif.id)) return;
 
            // Add to displayed set
            displayedNotificationIds.add(notif.id);
 
            const listItem = document.createElement('li');
            listItem.className = 'notification-item unread';
            listItem.innerHTML = `
                <div class="d-flex justify-content-between">
                    <div class="flex-grow-1">
                        <div class="notification-message">
                            ${notif.message}
                        </div>
                        <div class="notification-time">
                            <i class="far fa-clock me-1"></i>${formatTime(notif.created_at)}
                        </div>
                    </div>
                    <div class="notification-actions">
                        <button class="btn btn-sm btn-link mark-read" data-id="${notif.id}">
                            <i class="fa fa-check text-success"></i>
                        </button>
                    </div>
                </div>`;
            notificationList.appendChild(listItem);
        });
    }
 
    // Mark as read handler
    document.addEventListener('click', function(e) {
        if (e.target.closest('.mark-read')) {
            const button = e.target.closest('.mark-read');
            const notifId = button.dataset.id;
            const notificationItem = button.closest('.notification-item');
 
            $.ajax({
                url: `/notifications/${notifId}/mark-read`,
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function() {
                    notificationItem.classList.remove('unread');
 
                    // Update counter
                    const currentCount = parseInt(notificationCounter.textContent) - 1;
                    notificationCounter.textContent = currentCount;
 
                    if (currentCount === 0) {
                        notificationCounter.classList.add('d-none');
                    }
                },
                error: function() {
                    console.error('Failed to mark notification as read');
                }
            });
        }
    });
 
    // Mark all as read
    document.getElementById('mark-all-read').addEventListener('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: '/notifications/mark-all-read',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function() {
                // Reload notifications after marking all as read
                loadNotifications();
            },
            error: function() {
                console.error('Failed to mark all notifications as read');
            }
        });
    });
 
    // Refresh notifications
    document.getElementById('refresh-notifications').addEventListener('click', function() {
        loadNotifications();
    });
 
    // Initialize
    loadNotifications();
});
</script>    
<script>
// Dark Mode Toggle
const darkModeToggle = document.querySelector('[data-action="dark_mode_toggle"]');
darkModeToggle.addEventListener('click', () => {
    document.documentElement.dataset.theme = document.documentElement.dataset.theme === 'dark' ? '' : 'dark';
});

// Notification Dropdown Toggle
const notificationButton = document.querySelector('[data-action="notifications"]');
const notificationDropdown = document.querySelector('#notification-dropdown');
notificationButton.addEventListener('click', () => {
    notificationDropdown.classList.toggle('show');
});

// Settings Button (Placeholder for settings panel toggle)
const settingsButton = document.querySelector('[data-action="settings"]');
settingsButton.addEventListener('click', () => {
    // Add logic to show settings panel, e.g., toggle a modal or navigate to settings page
    console.log('Settings button clicked');
});

// Close dropdown when clicking outside
document.addEventListener('click', (e) => {
    if (!notificationButton.contains(e.target) && !notificationDropdown.contains(e.target)) {
        notificationDropdown.classList.remove('show');
    }
});
</script>  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
<div class='notifications top-right'></div>
<script>
</script>      <main id="main-container">
        <div class="bg-primary-darker">
    <div class="bg-black-10">
      <div class="content py-3">
        <!-- Toggle Main Navigation -->
        <div class="d-lg-none">
          <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
            Menu
            <i class="fa fa-bars"></i>
          </button>
        </div>
        <!-- END Toggle Main Navigation -->
 
        <!-- Main Navigation -->
        <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
          <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
            <ul class="nav-main nav-main-horizontal nav-main-hover nav-main-dark">
              <li class="nav-main-heading">Hosts</li>
              <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon fa fa-server text-primary"></i>
                      <span class="nav-main-link-name text-white">Hosts</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/rdp">
                          <i class="nav-main-link-icon fa fa-desktop"></i>
                          <span class="nav-main-link-name">RDPs</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">14</span>
 
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/shells">
                          <i class="nav-main-link-icon fab fa-php"></i>
                          <span class="nav-main-link-name">Shells</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">267</span>
 
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/cpanels">
                          <i class="nav-main-link-icon fab fa-cpanel"></i>
                          <span class="nav-main-link-name">cPanels</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">2367</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/ssh">
                          <i class="nav-main-link-icon fab fa-linux"></i>
                          <span class="nav-main-link-name">SSHs</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">295</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webpanels/wordpress">
                          <i class="nav-main-link-icon fab fa-wordpress"></i>
                          <span class="nav-main-link-name">Wordpress</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">
                19</span>
                        </a>
                      </li>                
                    </ul>
              </li>
              <li class="nav-main-heading">Senders</li>
              <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon fa fa-paper-plane text-primary"></i>
                      <span class="nav-main-link-name text-white">Senders</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/mailer">
                          <i class="nav-main-link-icon fa fa-leaf"></i>
                          <span class="nav-main-link-name">Mailers</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">0</span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/smtp">
                          <i class="nav-main-link-icon fa-solid fa-envelope"></i>
                          <span class="nav-main-link-name">SMTPs</span>
                          <span class="nav-main-link-badge badge rounded-pill bg-primary">502</span>
                        </a>
                      </li>               
                    </ul>
              </li>
              <li class="nav-main-heading">WebMails</li>
              <li class="nav-main-item">
                    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                      <i class="nav-main-link-icon si si-envelope-letter text-primary"></i>
                      <span class="nav-main-link-name text-white">WebMails</span>
                    </a>
                    <ul class="nav-main-submenu">
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webmail/cpanel">
                          <i class="nav-main-link-icon fab fa-cpanel fa-2x"></i>
                          <span class="nav-main-link-name">cPanel</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">
                0
                </span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webmail/office365">
                          <i class="nav-main-link-icon fab fa-microsoft"></i>
                          <span class="nav-main-link-name">Office365</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">
                4
                </span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webmail/godaddy">
                          <i class="nav-main-link-icon fab fa-golang"></i>
                          <span class="nav-main-link-name">GoDaddy</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">
                0
                </span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webmail/sfr">
                          <i class="nav-main-link-icon fab fa-1x fa-s"></i>
                          <span class="nav-main-link-name">SFR</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">
                0
                </span>
                        </a>
                      </li>
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webmail/hostinger">
                          <i class="nav-main-link-icon fab fa-1x fa-hire-a-helper"></i>
                          <span class="nav-main-link-name">Hostinger</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">
                0
                </span>
                        </a>
                      </li>                 
                      <li class="nav-main-item">
                        <a class="nav-main-link" href="https://waxa.pw/webmail/aruba">
                          <i class="nav-main-link-icon fa fa-1x fa-a"></i>
                          <span class="nav-main-link-name">Aruba</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-primary">
                0
                </span>
                        </a>
                      </li>
                    </ul>
              </li>
			 <li class="nav-main-heading">Accounts</li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="https://waxa.pw/account">
                <i class="nav-main-link-icon fa fa-universal-access text-primary"></i>
                <span class="nav-main-link-name text-white">Accounts</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account">
                    <i class="nav-main-link-icon fa fa-people-group"></i>
                    <span class="nav-main-link-name">Main Sections</span>
                <span class="nav-main-link-badge badge rounded-pill bg-primary">
                    250
                </span>
 
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=3">
                    <i class="nav-main-link-icon fab fa-facebook"></i>
                    <span class="nav-main-link-name">Social Media</span>
                <span class="nav-main-link-badge badge rounded-pill bg-primary">
                    3
                </span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=9">
                    <i class="nav-main-link-icon fab fa-magento"></i>
                    <span class="nav-main-link-name">Marketing</span>
                <span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=1">
                    <i class="nav-main-link-icon fa fa-gamepad"></i>
                    <span class="nav-main-link-name">Games</span>
                <span class="nav-main-link-badge badge rounded-pill bg-primary">
                    1
                </span>
                  </a>
                </li>
				<li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=15">
                    <i class="nav-main-link-icon fa fa-mobile-button"></i>
                    <span class="nav-main-link-name">Mobile Games</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=11">
                    <i class="nav-main-link-icon fab fa-twitch"></i>
                    <span class="nav-main-link-name">Streaming</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=12">
                    <i class="nav-main-link-icon fa fa-restroom"></i>
                    <span class="nav-main-link-name">Dating</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    1
                </span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=10">
                    <i class="nav-main-link-icon fab fa-btc"></i>
                    <span class="nav-main-link-name">Cryptocurrency</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=13">
                    <i class="nav-main-link-icon fab fa-youtube"></i>
                    <span class="nav-main-link-name">Entertainment</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                  </a>
                  <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=14">
                      <i class="nav-main-link-icon fa fa-robot"></i>
                      <span class="nav-main-link-name">Artificial intelligence</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                    </a>
                  </li>
				  <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=36">
                      <i class="nav-main-link-icon si si-envelope-letter"></i>
                      <span class="nav-main-link-name">Emails</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    0
                </span>
                    </a>
                  </li>
				  <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=37">
                      <i class="nav-main-link-icon fab fa-medapps"></i>
                      <span class="nav-main-link-name">VPN</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    240
                </span>
                    </a>
                  </li>
				  <li class="nav-main-item">
                  <a class="nav-main-link" href="https://waxa.pw/account?parent_id=38">
                      <i class="nav-main-link-icon fab fa-app-store"></i>
                      <span class="nav-main-link-name">Applications</span>
					<span class="nav-main-link-badge badge rounded-pill bg-primary">
                    5
                </span>
                    </a>
                  </li>
                </li>
              </ul>
            </li>
			            <li class="nav-main-heading">Databases</li>
            <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-database text-primary"></i>
                    <span class="nav-main-link-name text-white">Databases</span>
                  </a>
                  <ul class="nav-main-submenu">
					<li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/database/database">
                        <i class="nav-main-link-icon far fa-envelope"></i>
                        <span class="nav-main-link-name">Databases</span>
						  <span class="nav-main-link-badge badge rounded-pill bg-primary">
						  2
						  </span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/database/email-pass">
                        <i class="nav-main-link-icon far fa-envelope"></i>
                        <span class="nav-main-link-name">Email:Pass</span>
						  <span class="nav-main-link-badge badge rounded-pill bg-primary">
						  27
						  </span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/database/emails">
                        <i class="nav-main-link-icon far fa-envelope-open"></i>
                        <span class="nav-main-link-name">Emails</span>
						  <span class="nav-main-link-badge badge rounded-pill bg-primary">
						  15
						  </span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/database/phone-pass">
                        <i class="nav-main-link-icon fa fa-blender-phone"></i>
                        <span class="nav-main-link-name">Phone:Pass</span>
						<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  0
						  </span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/database/phones">
                        <i class="nav-main-link-icon fa fa-phone"></i>
                        <span class="nav-main-link-name">Phones</span>
					    <span class="nav-main-link-badge badge rounded-pill bg-primary">
						  3
						  </span>
                      </a>
                    </li>                   
                    <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/database/validated-leads">
                        <i class="nav-main-link-icon far fa-file-lines"></i>
                        <span class="nav-main-link-name">Validated Leads </span>
						  <span class="nav-main-link-badge badge rounded-pill bg-primary">
						  0
						  </span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading">Scripts</li>
                <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <i class="nav-main-link-icon fa fa-prescription text-primary"></i>
                        <span class="nav-main-link-name text-white">Scripts</span>
                      </a>
                      <ul class="nav-main-submenu">
						 <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/other/scripts">
                            <i class="nav-main-link-icon fa fa-prescription"></i>
                            <span class="nav-main-link-name">Scripts</span>
							<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  51
						  </span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/other/tutorials">
                            <i class="nav-main-link-icon fab fa-studiovinari"></i>
                            <span class="nav-main-link-name">Tutorials</span>
							<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  11
						  </span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/other/pages">
                            <i class="nav-main-link-icon fab fa-page4"></i>
                            <span class="nav-main-link-name">ScamPages</span>
							<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  34
						  </span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/other/letters">
                            <i class="nav-main-link-icon si si-envelope-letter"></i>
                            <span class="nav-main-link-name">Letters</span>
							<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  10
						  </span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/other/applications">
                            <i class="nav-main-link-icon fab fa-medapps"></i>
                            <span class="nav-main-link-name">Applications</span>
							<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  8
						  </span>
                          </a>
                        </li>
						<li class="nav-main-item">
                          <a class="nav-main-link" href="https://waxa.pw/other/other">
                            <i class="nav-main-link-icon fa fa-boxes-stacked"></i>
                            <span class="nav-main-link-name">Other</span>
							<span class="nav-main-link-badge badge rounded-pill bg-primary">
						  1
						  </span>
                          </a>
                        </li>
                      </ul>
                    </li>
			            <li class="nav-main-heading">Services</li>
            <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-tower-broadcast text-primary"></i>
                    <span class="nav-main-link-name text-white">Services</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="https://waxa.pw/requests">
                        <i class="nav-main-link-icon fa fa-laptop-code"></i>
                        <span class="nav-main-link-name">Special Requests</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="javascript:void(0)">
                        <i class="nav-main-link-icon si si-social-twitter"></i>
                        <span class="nav-main-link-name">Social Media Services</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="https://waxa.pw/seo-services">
                        <i class="nav-main-link-icon fa fa-earth-europe"></i>
                        <span class="nav-main-link-name">SEO & Traffic & Backlinks</span>
                      </a>
                    </li>
                  </ul>
                </li>
								<li class="nav-main-heading">
					<i class="fa fa-basket-shopping text-danger me-2"></i> Marketplace
				</li>
 
				<li class="nav-main-item">
											<!--  Menu for qualified users -->
						<a class="nav-main-link nav-main-link-submenu" 
						   data-toggle="submenu" 
						   aria-haspopup="true" 
						   aria-expanded="false" 
						   href="#">
							<i class="nav-main-link-icon fa fa-basket-shopping text-danger"></i>
							<span class="nav-main-link-name text-white">MarketPlace</span>
						</a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="https://waxa.pw/marketplace">
                                    <i class="nav-main-link-icon fa fa-shop"></i>
                                    <span class="nav-main-link-name">MarketPlace</span>
									<span class="nav-main-link-badge badge rounded-pill bg-primary">17</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="https://waxa.pw/marketplace/orders">
                                    <i class="nav-main-link-icon fa fa-cart-shopping"></i>
                                    <span class="nav-main-link-name">My Orders</span>
                                </a>
                            </li>
                        </ul>
									</li>
							</ul>
            </li>
            <li class="nav-main-heading">Themes</li>
            <li class="nav-main-item ms-lg-auto">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-brush"></i>
                <span class="nav-main-link-name d-lg-none">Themes</span>
              </a>
              <ul class="nav-main-submenu nav-main-submenu-right">
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="default" href="#">
                    <i class="nav-main-link-icon fa fa-square text-default"></i>
                    <span class="nav-main-link-name">Default</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="https://waxa.pw/assets/css/themes/amethyst.min.css" href="#">
                    <i class="nav-main-link-icon fa fa-square text-amethyst"></i>
                    <span class="nav-main-link-name">Amethyst</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="https://waxa.pw/assets/css/themes/city.min.css" href="#">
                    <i class="nav-main-link-icon fa fa-square text-city"></i>
                    <span class="nav-main-link-name">City</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="https://waxa.pw/assets/css/themes/flat.min.css" href="#">
                    <i class="nav-main-link-icon fa fa-square text-flat"></i>
                    <span class="nav-main-link-name">Flat</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="https://waxa.pw/assets/css/themes/modern.min.css" href="#">
                    <i class="nav-main-link-icon fa fa-square text-modern"></i>
                    <span class="nav-main-link-name">Modern</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" data-toggle="theme" data-theme="https://waxa.pw/assets/css/themes/smooth.min.css" href="#">
                    <i class="nav-main-link-icon fa fa-square text-smooth"></i>
                    <span class="nav-main-link-name">Smooth</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- END Main Navigation -->
      </div>
    </div>
  </div>

    <!-- Main Container with Crypto Deposit Interface -->
    <main id="main-container">
        <div class="container-fluid px-2 px-lg-4">
            <!-- Hero Section -->
            <div class="hero-section text-center">
                <h1 class="hero-title">Elite Crypto Vault</h1>
                <p class="hero-subtitle">Instant deposits with military-grade security and 25% bonus rewards</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <!-- Main Deposit Interface -->
                    <div class="glass-card">
                        <div class="p-3 p-lg-5">
                            <div class="row">
                                <!-- Deposit Form -->
                                <div class="col-lg-8">
                                    <div class="mb-4">
                                        <h3 class="mb-2" style="color: var(--waxa-text-primary); font-weight: 700;">
                                            <i class="fas fa-bolt me-2" style="color: var(--primary);"></i>
                                            Instant Funding
                                        </h3>
                                        <p style="color: var(--waxa-text-secondary);">
                                            Choose your cryptocurrency and deposit amount to get started
                                        </p>
                                    </div>

                                    <form method="post" action="#" id="depositForm">
                                        <input type="hidden" name="currency" id="selectedCurrency" value="BTC">
                                        
                                        <!-- Currency Selection -->
                                        <div class="mb-4">
                                            <h5 class="mb-3" style="color: var(--waxa-text-primary); font-weight: 600;">
                                                Select Cryptocurrency
                                            </h5>
                                            <div class="currency-grid">
                                                <div class="currency-card selected" data-currency="BTC">
                                                    <div class="currency-icon">
                                                        <i class="fab fa-bitcoin" style="color: #f7931a;"></i>
                                                    </div>
                                                    <div>
                                                        <div style="font-weight: 600; margin-bottom: 0.25rem; font-size: 0.9rem;">Bitcoin</div>
                                                        <div style="font-size: 0.75rem; color: var(--waxa-text-muted);">BTC</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="currency-card" data-currency="ETH">
                                                    <div class="currency-icon">
                                                        <i class="fab fa-ethereum" style="color: #627eea;"></i>
                                                    </div>
                                                    <div>
                                                        <div style="font-weight: 600; margin-bottom: 0.25rem; font-size: 0.9rem;">Ethereum</div>
                                                        <div style="font-size: 0.75rem; color: var(--waxa-text-muted);">ETH</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="currency-card" data-currency="USDT">
                                                    <div class="currency-icon">
                                                        <i class="fas fa-dollar-sign" style="color: #26a17b;"></i>
                                                    </div>
                                                    <div>
                                                        <div style="font-weight: 600; margin-bottom: 0.25rem; font-size: 0.9rem;">Tether</div>
                                                        <div style="font-size: 0.75rem; color: var(--waxa-text-muted);">USDT</div>
                                                    </div>
                                                </div>
                                                
                                                <div class="currency-card" data-currency="LTC">
                                                    <div class="currency-icon">
                                                        <i class="fab fa-litecoin" style="color: #bfbbbb;"></i>
                                                    </div>
                                                    <div>
                                                        <div style="font-weight: 600; margin-bottom: 0.25rem; font-size: 0.9rem;">Litecoin</div>
                                                        <div style="font-size: 0.75rem; color: var(--waxa-text-muted);">LTC</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Amount Input -->
                                        <div class="mb-4">
                                            <h5 class="mb-3" style="color: var(--waxa-text-primary); font-weight: 600;">
                                                Deposit Amount (USD)
                                            </h5>
                                            <div class="amount-container">
                                                <input type="number" class="amount-input" id="amount" name="amount" 
                                                       min="10" max="5000" step="1" placeholder="0.00" autocomplete="off">
                                            </div>
                                            <div class="text-center" style="color: var(--waxa-text-muted); font-size: 0.85rem;">
                                                <i class="fas fa-info-circle me-1"></i>
                                                Minimum: $10 • Maximum: $5,000
                                            </div>
                                        </div>

                                        <!-- Info Display -->
                                        <div id="infoDisplay" class="info-display bonus-display">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <div class="me-3">
                                                    <i class="fas fa-gift fa-2x fa-lg" style="color: var(--success);"></i>
                                                </div>
                                                <div>
                                                    <h4 style="margin: 0; font-weight: 800; color: var(--success); font-size: 1.5rem;">
                                                        +25% Bonus
                                                    </h4>
                                                    <p style="margin: 0; color: var(--waxa-text-secondary); font-size: 0.9rem;">
                                                        Enter amount to calculate your bonus
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Deposit Button -->
                                        <button type="submit" class="btn btn-primary-modern w-100" id="depositBtn" disabled>
                                            <i class="fas fa-rocket me-2"></i>
                                            Process Instant Deposit
                                        </button>
                                    </form>
                                </div>

                                <!-- Security & Features -->
                                <div class="col-lg-4 mt-4 mt-lg-0">
                                    <div class="rules-container h-100">
                                        <h5 class="mb-4" style="color: var(--waxa-text-primary); font-weight: 700;">
                                            <i class="fas fa-shield-alt me-2" style="color: var(--success);"></i>
                                            Security Features
                                        </h5>

                                        <div class="rule-item">
                                            <div class="rule-icon">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                            <div>
                                                <div style="font-weight: 600; margin-bottom: 0.25rem; color: var(--waxa-text-primary); font-size: 0.95rem;">
                                                    End-to-End Encryption
                                                </div>
                                                <div style="font-size: 0.8rem; color: var(--waxa-text-secondary);">
                                                    Military-grade AES-256 encryption protects all transactions
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rule-item">
                                            <div class="rule-icon">
                                                <i class="fas fa-bolt"></i>
                                            </div>
                                            <div>
                                                <div style="font-weight: 600; margin-bottom: 0.25rem; color: var(--waxa-text-primary); font-size: 0.95rem;">
                                                    Lightning Fast
                                                </div>
                                                <div style="font-size: 0.8rem; color: var(--waxa-text-secondary);">
                                                    Instant processing with confirmations in 5-15 minutes
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rule-item">
                                            <div class="rule-icon">
                                                <i class="fas fa-gift"></i>
                                            </div>
                                            <div>
                                                <div style="font-weight: 600; margin-bottom: 0.25rem; color: var(--waxa-text-primary); font-size: 0.95rem;">
                                                    Bonus Rewards
                                                </div>
                                                <div style="font-size: 0.8rem; color: var(--waxa-text-secondary);">
                                                    Earn 25% bonus on all qualifying deposits over $10
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rule-item">
                                            <div class="rule-icon">
                                                <i class="fas fa-chart-line"></i>
                                            </div>
                                            <div>
                                                <div style="font-weight: 600; margin-bottom: 0.25rem; color: var(--waxa-text-primary); font-size: 0.95rem;">
                                                    Real-Time Rates
                                                </div>
                                                <div style="font-size: 0.8rem; color: var(--waxa-text-secondary);">
                                                    Live cryptocurrency rates updated every second
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rule-item">
                                            <div class="rule-icon">
                                                <i class="fas fa-headset"></i>
                                            </div>
                                            <div>
                                                <div style="font-weight: 600; margin-bottom: 0.25rem; color: var(--waxa-text-primary); font-size: 0.95rem;">
                                                    24/7 Support
                                                </div>
                                                <div style="font-size: 0.8rem; color: var(--waxa-text-secondary);">
                                                    Round-the-clock assistance via Telegram and Discord
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Transaction History -->
                    <div class="glass-card">
                        <div class="p-3 p-lg-4">
                            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                                <h5 style="color: var(--waxa-text-primary); font-weight: 700; margin: 0;">
                                    <i class="fas fa-history me-2" style="color: var(--primary);"></i>
                                    Transaction History
                                </h5>
                                <div class="d-flex gap-2 w-100 w-md-auto">
                                    <select class="form-select form-select-sm flex-grow-1" style="background: var(--waxa-bg-glass); border-color: var(--waxa-border); color: var(--waxa-text-primary);">
                                        <option>All Currencies</option>
                                        <option>BTC</option>
                                        <option>ETH</option>
                                        <option>USDT</option>
                                        <option>LTC</option>
                                    </select>
                                    <button class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-sync-alt"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Desktop Table -->
                            <div class="transaction-table">
                                <div class="table-responsive">
                                    <table class="table table-dark table-hover mb-0">
                                        <thead>
                                            <tr>
                                                <th>TX ID</th>
                                                <th>Amount</th>
                                                <th>Crypto</th>
                                                <th>Status</th>
                                                <th>Currency</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code>#TX-7832</code></td>
                                                <td>$500.00</td>
                                                <td>0.012 BTC</td>
                                                <td><span class="status-badge badge-completed">Completed</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fab fa-bitcoin me-2" style="color: #f7931a; font-size: 0.9rem;"></i>
                                                        <span>BTC</span>
                                                    </div>
                                                </td>
                                                <td>Nov 15, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-info">
                                                        <i class="fas fa-receipt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>#TX-7831</code></td>
                                                <td>$250.00</td>
                                                <td>0.15 ETH</td>
                                                <td><span class="status-badge badge-pending">Processing</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fab fa-ethereum me-2" style="color: #627eea; font-size: 0.9rem;"></i>
                                                        <span>ETH</span>
                                                    </div>
                                                </td>
                                                <td>Nov 15, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-warning">
                                                        <i class="fas fa-clock"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>#TX-7830</code></td>
                                                <td>$100.00</td>
                                                <td>100 USDT</td>
                                                <td><span class="status-badge badge-completed">Completed</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fas fa-dollar-sign me-2" style="color: #26a17b; font-size: 0.9rem;"></i>
                                                        <span>USDT</span>
                                                    </div>
                                                </td>
                                                <td>Nov 14, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-info">
                                                        <i class="fas fa-receipt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code>#TX-7829</code></td>
                                                <td>$75.00</td>
                                                <td>1.2 LTC</td>
                                                <td><span class="status-badge badge-failed">Failed</span></td>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <i class="fab fa-litecoin me-2" style="color: #bfbbbb; font-size: 0.9rem;"></i>
                                                        <span>LTC</span>
                                                    </div>
                                                </td>
                                                <td>Nov 13, 2023</td>
                                                <td>
                                                    <button class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- Mobile Transaction Cards -->
                            <div class="mobile-transactions">
                                <div class="mobile-transaction-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">#TX-7832</div>
                                            <div class="d-flex align-items-center gap-2 mt-1">
                                                <i class="fab fa-bitcoin" style="color: #f7931a;"></i>
                                                <span style="color: var(--waxa-text-secondary); font-size: 0.9rem;">BTC</span>
                                            </div>
                                        </div>
                                        <span class="status-badge badge-completed">Completed</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Amount USD</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">$500.00</div>
                                        </div>
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Crypto Amount</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">0.012 BTC</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <small style="color: var(--waxa-text-muted);">Nov 15, 2023</small>
                                        <button class="btn btn-sm btn-outline-info">
                                            <i class="fas fa-receipt me-1"></i>Receipt
                                        </button>
                                    </div>
                                </div>

                                <div class="mobile-transaction-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">#TX-7831</div>
                                            <div class="d-flex align-items-center gap-2 mt-1">
                                                <i class="fab fa-ethereum" style="color: #627eea;"></i>
                                                <span style="color: var(--waxa-text-secondary); font-size: 0.9rem;">ETH</span>
                                            </div>
                                        </div>
                                        <span class="status-badge badge-pending">Processing</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Amount USD</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">$250.00</div>
                                        </div>
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Crypto Amount</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">0.15 ETH</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <small style="color: var(--waxa-text-muted);">Nov 15, 2023</small>
                                        <button class="btn btn-sm btn-outline-warning">
                                            <i class="fas fa-clock me-1"></i>Details
                                        </button>
                                    </div>
                                </div>

                                <div class="mobile-transaction-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">#TX-7830</div>
                                            <div class="d-flex align-items-center gap-2 mt-1">
                                                <i class="fas fa-dollar-sign" style="color: #26a17b;"></i>
                                                <span style="color: var(--waxa-text-secondary); font-size: 0.9rem;">USDT</span>
                                            </div>
                                        </div>
                                        <span class="status-badge badge-completed">Completed</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Amount USD</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">$100.00</div>
                                        </div>
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Crypto Amount</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">100 USDT</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <small style="color: var(--waxa-text-muted);">Nov 14, 2023</small>
                                        <button class="btn btn-sm btn-outline-info">
                                            <i class="fas fa-receipt me-1"></i>Receipt
                                        </button>
                                    </div>
                                </div>

                                <div class="mobile-transaction-card">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">#TX-7829</div>
                                            <div class="d-flex align-items-center gap-2 mt-1">
                                                <i class="fab fa-litecoin" style="color: #bfbbbb;"></i>
                                                <span style="color: var(--waxa-text-secondary); font-size: 0.9rem;">LTC</span>
                                            </div>
                                        </div>
                                        <span class="status-badge badge-failed">Failed</span>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Amount USD</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">$75.00</div>
                                        </div>
                                        <div class="col-6">
                                            <div style="font-size: 0.8rem; color: var(--waxa-text-muted);">Crypto Amount</div>
                                            <div style="font-weight: 600; color: var(--waxa-text-primary);">1.2 LTC</div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-2">
                                        <small style="color: var(--waxa-text-muted);">Nov 13, 2023</small>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-exclamation-triangle me-1"></i>Details
                                        </button>
                                    </div>
                                </div>
                            </div>
    <!-- Statistics Cards (Additional Feature) -->
    <div class="row justify-content-center mt-4">
        <div class="col-12 col-xl-10">
            <div class="row">
                <div class="col-md-3 col-6 mb-3">
                    <div class="glass-card">
                        <div class="p-3 text-center">
                            <div style="font-size: 2rem; color: var(--success); margin-bottom: 0.5rem;">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--text-primary);">$2,450</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">Total Deposited</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="glass-card">
                        <div class="p-3 text-center">
                            <div style="font-size: 2rem; color: var(--primary); margin-bottom: 0.5rem;">
                                <i class="fas fa-gift"></i>
                            </div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--text-primary);">$612.50</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">Bonus Earned</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="glass-card">
                        <div class="p-3 text-center">
                            <div style="font-size: 2rem; color: var(--warning); margin-bottom: 0.5rem;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--text-primary);">12</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">Transactions</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="glass-card">
                        <div class="p-3 text-center">
                            <div style="font-size: 2rem; color: var(--secondary); margin-bottom: 0.5rem;">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div style="font-size: 1.5rem; font-weight: 700; color: var(--text-primary);">VIP</div>
                            <div style="font-size: 0.8rem; color: var(--text-secondary);">Account Status</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-5" style="color: var(--text-muted);">
        <div class="section-divider mb-4"></div>
        <p>&copy; 2023 Elite Tools. All rights reserved. | Secure • Fast • Reliable</p>
        <div class="d-flex justify-content-center gap-4 mt-3">
            <a href="#" style="color: var(--text-muted); text-decoration: none;">
                <i class="fab fa-telegram-plane"></i> Telegram
            </a>
            <a href="#" style="color: var(--text-muted); text-decoration: none;">
                <i class="fab fa-discord"></i> Discord
            </a>
            <a href="#" style="color: var(--text-muted); text-decoration: none;">
                <i class="fas fa-envelope"></i> Support
            </a>
        </div>
    </footer>
</div>



                        
       

    </main>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Then include Bootstrap Notify -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
 
    <!-- OneUI JS -->
    <script src="https://waxa.pw/assets/js/oneui.app.min.js"></script>
    <!-- Page JS Plugins -->
    <script src="https://waxa.pw/assets/js/plugins/chart.js/chart.umd.js"></script>
    <script src="https://waxa.pw/assets/js/lib/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons-jszip/jszip.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons/buttons.print.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/datatables-buttons/buttons.html5.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/flatpickr/flatpickr.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/select2/js/select2.full.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="https://waxa.pw/assets/js/plugins/dropzone/min/dropzone.min.js"></script>
    <script src="https://waxa.pw/assets/js/pages/be_pages_dashboard_v1.min.js"></script>
	<script src="https://waxa.pw/assets/js/plugins/slick-carousel/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider','jq-slick']);</script>
 

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    class EliteCryptoVault {
        constructor() {
            this.settings = {
                minDeposit: 10,
                maxDeposit: 5000,
                bonusPercentage: 25,
                minBonusAmount: 10
            };
            
            this.selectedCurrency = 'BTC';
            this.currentAmount = 0;
            
            this.init();
        }

        init() {
            this.bindEvents();
            this.updateInfoDisplay();
        }

        bindEvents() {
            // Currency selection
            document.querySelectorAll('.currency-card').forEach(card => {
                card.addEventListener('click', (e) => this.selectCurrency(e));
            });

            // Amount input
            const amountInput = document.getElementById('amount');
            amountInput.addEventListener('input', (e) => this.updateAmount(e));
            amountInput.addEventListener('focus', (e) => this.animateInput(e, true));
            amountInput.addEventListener('blur', (e) => this.animateInput(e, false));

            // Form submission
            document.getElementById('depositForm').addEventListener('submit', (e) => this.handleSubmit(e));

            // Add some interactive effects
            this.addHoverEffects();
        }

        selectCurrency(event) {
            // Remove active state from all cards
            document.querySelectorAll('.currency-card').forEach(card => {
                card.classList.remove('selected');
            });

            // Add active state to clicked card
            event.currentTarget.classList.add('selected');
            
            // Update selected currency
            this.selectedCurrency = event.currentTarget.dataset.currency;
            document.getElementById('selectedCurrency').value = this.selectedCurrency;

            // Add selection animation
            event.currentTarget.style.transform = 'scale(0.95)';
            setTimeout(() => {
                event.currentTarget.style.transform = '';
            }, 150);

            console.log(`Selected currency: ${this.selectedCurrency}`);
        }

        updateAmount(event) {
            this.currentAmount = parseFloat(event.target.value) || 0;
            this.updateInfoDisplay();
            this.updateDepositButton();
        }

        updateInfoDisplay() {
            const infoDisplay = document.getElementById('infoDisplay');
            const amount = this.currentAmount;

            if (amount === 0) {
                infoDisplay.className = 'info-display bonus-display';
                infoDisplay.innerHTML = `
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="me-3">
                            <i class="fas fa-gift fa-3x" style="color: var(--success);"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0; font-weight: 800; color: var(--success);">
                                +25% Bonus
                            </h4>
                            <p style="margin: 0; color: var(--text-secondary);">
                                Enter amount to calculate your bonus
                            </p>
                        </div>
                    </div>
                `;
            } else if (amount < this.settings.minDeposit) {
                infoDisplay.className = 'info-display error-display';
                infoDisplay.innerHTML = `
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="me-3">
                            <i class="fas fa-exclamation-triangle fa-3x" style="color: var(--danger);"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0; font-weight: 800; color: var(--danger);">
                                Minimum Required: $${this.settings.minDeposit}
                            </h4>
                            <p style="margin: 0; color: var(--text-secondary);">
                                Increase your deposit to continue
                            </p>
                        </div>
                    </div>
                `;
            } else if (amount > this.settings.maxDeposit) {
                infoDisplay.className = 'info-display error-display';
                infoDisplay.innerHTML = `
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="me-3">
                            <i class="fas fa-exclamation-triangle fa-3x" style="color: var(--danger);"></i>
                        </div>
                        <div>
                            <h4 style="margin: 0; font-weight: 800; color: var(--danger);">
                                Maximum Exceeded: $${this.settings.maxDeposit}
                            </h4>
                            <p style="margin: 0; color: var(--text-secondary);">
                                Reduce your deposit amount
                            </p>
                        </div>
                    </div>
                `;
            } else {
                // Valid amount - calculate bonus
                const bonus = (amount * this.settings.bonusPercentage) / 100;
                const total = amount + bonus;

                infoDisplay.className = 'info-display bonus-display';
                infoDisplay.innerHTML = `
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <div class="me-3">
                                <i class="fas fa-rocket fa-3x" style="color: var(--success);"></i>
                            </div>
                            <div>
                                <h4 style="margin: 0; font-weight: 800; color: var(--success);">
                                    +$${bonus.toFixed(2)} Bonus!
                                </h4>
                                <p style="margin: 0; color: var(--text-secondary);">
                                    You'll receive $${total.toFixed(2)} total
                                </p>
                            </div>
                        </div>
                        <div class="text-end">
                            <div style="font-size: 2rem; font-weight: 900; color: var(--success);">
                                $${total.toFixed(2)}
                            </div>
                            <div style="font-size: 0.8rem; color: var(--text-muted);">
                                Final Amount
                            </div>
                        </div>
                    </div>
                `;
            }
        }

        updateDepositButton() {
            const button = document.getElementById('depositBtn');
            const amount = this.currentAmount;
            
            if (amount >= this.settings.minDeposit && amount <= this.settings.maxDeposit) {
                button.disabled = false;
                button.innerHTML = `
                    <i class="fas fa-rocket me-2"></i>
                    Process $${amount.toFixed(2)} Deposit
                `;
            } else {
                button.disabled = true;
                button.innerHTML = `
                    <i class="fas fa-lock me-2"></i>
                    Enter Valid Amount
                `;
            }
        }

        animateInput(event, focused) {
            const input = event.target;
            if (focused) {
                input.style.transform = 'scale(1.02)';
            } else {
                input.style.transform = 'scale(1)';
            }
        }

        handleSubmit(event) {
            event.preventDefault();
            
            const button = document.getElementById('depositBtn');
            const originalContent = button.innerHTML;
            
            // Show loading state
            button.classList.add('loading');
            button.innerHTML = `
                <div class="spinner-border spinner-border-sm me-2" role="status"></div>
                Processing...
            `;
            button.disabled = true;

            // Simulate API call
            setTimeout(() => {
                button.classList.remove('loading');
                button.innerHTML = originalContent;
                button.disabled = false;
                
                // Show success message (in a real app, you'd redirect or show actual result)
                this.showSuccessMessage();
            }, 2000);
        }

        showSuccessMessage() {
            const bonus = (this.currentAmount * this.settings.bonusPercentage) / 100;
            const total = this.currentAmount + bonus;

            const successHtml = `
                <div class="info-display" style="background: linear-gradient(135deg, rgba(16, 185, 129, 0.2), rgba(6, 182, 212, 0.1)); border: 1px solid rgba(16, 185, 129, 0.5);">
                    <div class="text-center">
                        <div style="font-size: 4rem; color: var(--success); margin-bottom: 1rem;">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3 style="color: var(--success); font-weight: 800; margin-bottom: 0.5rem;">
                            Deposit Initiated!
                        </h3>
                        <p style="color: var(--text-secondary); margin-bottom: 1rem;">
                            Your ${this.selectedCurrency} deposit of $${this.currentAmount.toFixed(2)} is being processed.
                        </p>
                        <div style="padding: 1rem; background: var(--bg-glass); border-radius: var(--radius-md);">
                            <div>You'll receive: <strong style="color: var(--success);">$${total.toFixed(2)}</strong></div>
                            <div style="font-size: 0.9rem; color: var(--text-muted);">
                                Including $${bonus.toFixed(2)} bonus
                            </div>
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('infoDisplay').outerHTML = successHtml;
        }

        addHoverEffects() {
            // Add parallax effect to cards
            document.querySelectorAll('.glass-card').forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    
                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;
                    
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(10px)`;
                });

                card.addEventListener('mouseleave', () => {
                    card.style.transform = '';
                });
            });

            // Add ripple effect to buttons
            document.querySelectorAll('.btn').forEach(button => {
                button.addEventListener('click', (e) => {
                    const ripple = document.createElement('div');
                    const rect = button.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.cssText = `
                        position: absolute;
                        width: ${size}px;
                        height: ${size}px;
                        background: rgba(255, 255, 255, 0.3);
                        border-radius: 50%;
                        left: ${x}px;
                        top: ${y}px;
                        animation: ripple 0.6s linear;
                        pointer-events: none;
                    `;
                    
                    button.style.position = 'relative';
                    button.appendChild(ripple);
                    
                    setTimeout(() => ripple.remove(), 600);
                });
            });
        }
    }

    // Add ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(2);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);

    // Initialize the application
    document.addEventListener('DOMContentLoaded', () => {
        new EliteCryptoVault();
        
        // Add loading animation on page load
        document.querySelectorAll('.glass-card').forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            
            setTimeout(() => {
                card.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 200);
        });
    });
</script>
```

</body>
</html>
