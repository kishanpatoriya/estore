<?php
// Reusable header include for all pages.
// Expects $pageTitle to be defined by the including page.
if (!isset($pageTitle)) {
    $pageTitle = 'ReSell Store';
}
if (!isset($navLinks)) {
    include __DIR__ . '/navigation.php';
}
if (!isset($bodyClass)) {
    $bodyClass = 'text-on-surface';
}
?>
<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed-variant": "#005323",
                        "tertiary-container": "#4f5b54",
                        "surface-container-high": "#e2e8f8",
                        "on-secondary": "#ffffff",
                        "surface-container-low": "#f0f3ff",
                        "tertiary": "#38443d",
                        "surface-variant": "#dce2f3",
                        "secondary-container": "#92f5a4",
                        "on-secondary-fixed": "#00210a",
                        "on-primary-container": "#93e0a2",
                        "on-background": "#151c27",
                        "primary-container": "#166534",
                        "on-primary-fixed-variant": "#005226",
                        "on-surface-variant": "#404940",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#bdcac1",
                        "surface-container-highest": "#dce2f3",
                        "on-primary-fixed": "#00210b",
                        "on-error": "#ffffff",
                        "on-surface": "#151c27",
                        "on-tertiary-fixed-variant": "#3e4943",
                        "on-tertiary-fixed": "#131e19",
                        "secondary-fixed": "#95f8a7",
                        "primary": "#004c22",
                        "outline": "#707a6f",
                        "surface-tint": "#1f6c3a",
                        "on-tertiary": "#ffffff",
                        "secondary": "#006d30",
                        "inverse-surface": "#2a313d",
                        "on-secondary-container": "#007233",
                        "inverse-on-surface": "#ebf1ff",
                        "secondary-fixed-dim": "#79db8d",
                        "error-container": "#ffdad6",
                        "on-tertiary-container": "#c5d2ca",
                        "primary-fixed": "#a6f4b5",
                        "outline-variant": "#bfc9bd",
                        "surface-bright": "#f9f9ff",
                        "on-primary": "#ffffff",
                        "background": "#f9f9ff",
                        "surface": "#f9f9ff",
                        "tertiary-fixed": "#d9e6dd",
                        "surface-dim": "#d3daea",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#8bd79b",
                        "primary-fixed-dim": "#8bd79b",
                        "surface-container": "#e7eefe",
                        "surface-container-lowest": "#ffffff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "xs": "4px",
                        "margin-desktop": "40px",
                        "3xl": "64px",
                        "2xl": "48px",
                        "xl": "32px",
                        "md": "16px",
                        "base": "8px",
                        "sm": "8px",
                        "lg": "24px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "headline-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-xl": ["Inter"],
                        "headline-lg": ["Inter"]
                    },
                    "fontSize": {
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                        "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                        "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "16px", "fontWeight": "600"}],
                        "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ffffff;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .hero-float {
            animation: floating 6s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(2deg); }
            100% { transform: translateY(0px) rotate(0deg); }
        }
        .glass-panel {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
    <?php if (!empty($headExtra)) {
        echo $headExtra;
    } ?>
</head>
<body class="<?php echo htmlspecialchars($bodyClass, ENT_QUOTES, 'UTF-8'); ?>">
<!-- TopNavBar -->
<nav class="sticky top-0 w-full z-50 bg-surface/80 backdrop-blur-md border-b border-outline-variant shadow-sm">
    <div class="flex items-center justify-between px-margin-desktop py-4 max-w-7xl mx-auto">
        <a href="index.php" class="text-headline-sm font-headline-sm font-bold text-primary hover:opacity-80 transition-opacity">Smart Resale Store</a>
        <div class="hidden md:flex items-center gap-xl">
            <a class="<?php echo getActiveClass('index.php'); ?> hover:text-primary transition-colors font-body-md text-body-md" href="index.php">Home</a>
            <a class="<?php echo getActiveGroupClass(['category.php', 'furniture.php', 'furniture-category.php', 'fashion.php', 'books.php', 'sports.php', 'vehicles.php']); ?> hover:text-primary transition-colors font-body-md text-body-md" href="category.php">Browse</a>
            <a class="<?php echo getActiveClass('sell.php'); ?> hover:text-primary transition-colors font-body-md text-body-md" href="sell.php">Sell an Item</a>
            <a class="<?php echo getActiveClass('cart.php'); ?> hover:text-primary transition-colors font-body-md text-body-md" href="cart.php">Cart</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">How it Works</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors font-body-md text-body-md" href="#">Help</a>
        </div>
        <div class="flex items-center gap-md">
            <button class="p-2 hover:bg-surface-container-low transition-all rounded-full" title="Location"><span class="material-symbols-outlined">location_on</span></button>
            <a href="checkout.php" class="p-2 hover:bg-surface-container-low transition-all rounded-full block" title="Favorites"><span class="material-symbols-outlined">favorite</span></a>
            <a href="cart.php" class="p-2 hover:bg-surface-container-low transition-all rounded-full block relative" title="Shopping Cart">
                <span class="material-symbols-outlined">shopping_cart</span>
                <span class="absolute top-1 right-1 w-2 h-2 bg-primary rounded-full"></span>
            </a>
            <a href="login.php" class="p-2 hover:bg-surface-container-low transition-all rounded-full block" title="Account"><span class="material-symbols-outlined">person</span></a>
        </div>
    </div>
</nav>
