<?php
// Shared navigation links and active page detection
// Get the current page filename
$currentPage = basename($_SERVER['PHP_SELF']);

// Navigation links with page matching
$navLinks = [
    ['label' => 'Home', 'href' => 'index.php', 'matches' => ['index.php']],
    ['label' => 'Browse', 'href' => 'category.php', 'matches' => ['category.php', 'furniture.php', 'furniture-category.php', 'fashion.php', 'books.php', 'sports.php', 'vehicles.php']],
    ['label' => 'Sell an Item', 'href' => 'sell.php', 'matches' => ['sell.php']],
    ['label' => 'Cart', 'href' => 'cart.php', 'matches' => ['cart.php']],
    ['label' => 'Checkout', 'href' => 'checkout.php', 'matches' => ['checkout.php']],
    ['label' => 'Account', 'href' => 'login.php', 'matches' => ['login.php']],
];

// Helper function to check if current page is active
function isActivePage($page) {
    global $currentPage;
    return $currentPage === $page;
}

// Helper function to check if page matches any in array
function isActivePageGroup($matches) {
    global $currentPage;
    return in_array($currentPage, $matches);
}

// Helper function to get active class
function getActiveClass($page) {
    return isActivePage($page) ? 'text-primary font-bold' : 'text-on-surface-variant';
}

// Helper function to get active class for groups
function getActiveGroupClass($matches) {
    return isActivePageGroup($matches) ? 'text-primary font-bold' : 'text-on-surface-variant';
}
?>