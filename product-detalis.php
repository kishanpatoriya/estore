<?php
$product = [
    'title' => 'iPhone 12',
    'subtitle' => '128GB • Blue • Original Box Included',
    'condition' => 'Like New',
    'condition_style' => 'bg-secondary-container text-on-secondary-container',
    'main_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuABwXMPPRX-vp9gQSExiKRzhTm6Bt4YZ-Zr1CY-XTnHA2HoBiTAx4ZWbXs9jrbodzWiXaV7M-kEhAs-tAvq0O9EW1WUfHdGyQ7dJ1wLu2XahOAE7BQxJWF3SG59I80MFqr1-swa0jSFX1yo3fUQfy5wYBXUw-UH7ARTtukCg-ReSTVjHjdV4ECuMlv6TphK15aAXB7ZBLGTJHIeFHm7phj2E_733pYFGtBOaDVSvUj6FBL12fxYrGtb',
    'thumbnails' => [
        'https://lh3.googleusercontent.com/aida-public/AB6AXuD4cgbx73gcLpySoQVF2O0ByzooDwJ5QL1ri7IiPQKTnNPZXmI91oGYBYQsCGvdRVZ4vca_t2U5aDXORdwNnh6H31JIUgkzhM3Sdcp6yJf-HBDQKpaajyrSLKH6Tn7g76V7Y2zXcsY8x4QVqAqp--iLvXJlfi-dmVl2FBBlEbm8-q1LXzGAJggsUsSt3NidsHUIFmkvafWZtMUhDhW_to-XJxCraDWCjFlNE4u2BbnlKNnQi8JiJABS',
        'https://lh3.googleusercontent.com/aida-public/AB6AXuCeb8bv6OrpRcx1XgQwUiIETjGPhBsNxzMnSiMsA06oDXJGc1g4vHVKsTi8EqpaO8g4t7Ndc6z_U19F6dHRgGr9-fXpRQ3drk4u-L_9WfqPa-K7Vy774AKN1dGYLVhTrd98-SxhFftf70OIqHfzKh8xZORabPolQS-9ZciV4pElI6FIrsxt88zkLFx6Se1SFFfDqk-rakc5e-0Kkqvt4nycSpj3RYSaih-R2K3HFCgYGUF9qysAjmNa',
        'https://lh3.googleusercontent.com/aida-public/AB6AXuAfi_QpMFWGA9VoLFzcwA6yG29N-A42dHhxZaiiGI4e2NONePJEddAEYP3YhnlLpfVL0qwElD9wZ2ID8z32_sr7Hc6XyPDxowxQvdQ2sjNpF-3gIMBUK3yHMUDpSTGLBvf7yeTyzbBH59L88PZL66pvmmewMMj0D_cRmwIqQR67zFESdF0TD2HxxuB8Aiu1HpqjwkuFDvwGdhAp3UTChqVnzni0qtS8aWp5sTVXXiAqQRydy348b_pV',
        'https://lh3.googleusercontent.com/aida-public/AB6AXuBIC8jE_TLucPwrTubqzwQe1tn7xOIagmvBSvEvXB-c9OpCz5319h5qw8jFIm0iqTDVe0BlyDeP9uPLC9ox1hj9uxm4AXp3rsBGM5rY37FfaRVaIo_uMJWx_wUDIZn8WRguRVOvOZTYQFaZGztnMXDD6vJVkhBLgUxvGEl9Ibo-3Ai5vIYhZyaF3_fSyTtsGqup-4meC2Y1QrEhbLTqyjgkMMa1Nv3IW6Of6ETlpBKfs-OSHOQIHgSU'
    ],
    'rating' => 4.5,
];
?>
<!DOCTYPE html><html class="light" lang="en"><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title><?php echo $product['title']; ?> Details | ReSell Store</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<style>
    .material-symbols-outlined {
      font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      display: inline-block;
      line-height: 1;
      text-transform: none;
      letter-spacing: normal;
      word-wrap: normal;
      white-space: nowrap;
      direction: ltr;
    }
    .custom-scrollbar::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
      background: transparent;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
      background: #e5e7eb;
      border-radius: 10px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
      background: #d1d5db;
    }
  </style>
<!-- Shared Components Logic script already included in prompt instructions via tailwind.config -->
<script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          "colors": {
                  "primary-fixed-dim": "#8bd79b",
                  "surface-container-low": "#f0f3ff",
                  "on-surface-variant": "#404940",
                  "on-primary-fixed-variant": "#005226",
                  "on-secondary": "#ffffff",
                  "error-container": "#ffdad6",
                  "inverse-primary": "#8bd79b",
                  "inverse-on-surface": "#ebf1ff",
                  "on-background": "#151c27",
                  "on-tertiary-fixed-variant": "#3e4943",
                  "outline": "#707a6f",
                  "on-tertiary-fixed": "#131e19",
                  "on-primary-container": "#93e0a2",
                  "secondary-fixed": "#95f8a7",
                  "on-secondary-container": "#007233",
                  "tertiary": "#38443d",
                  "on-primary-fixed": "#00210b",
                  "on-tertiary": "#ffffff",
                  "primary": "#004c22",
                  "on-secondary-fixed-variant": "#005323",
                  "surface-container-high": "#e2e8f8",
                  "tertiary-container": "#4f5b54",
                  "inverse-surface": "#2a313d",
                  "on-tertiary-container": "#c5d2ca",
                  "primary-fixed": "#a6f4b5",
                  "secondary": "#006d30",
                  "outline-variant": "#bfc9bd",
                  "surface-container-highest": "#dce2f3",
                  "error": "#ba1a1a",
                  "background": "#f9f9ff",
                  "surface-container-lowest": "#ffffff",
                  "surface-dim": "#d3daea",
                  "on-error": "#ffffff",
                  "on-secondary-fixed": "#00210a",
                  "on-primary": "#ffffff",
                  "on-surface": "#151c27",
                  "surface-bright": "#f9f9ff",
                  "primary-container": "#166534",
                  "tertiary-fixed": "#d9e6dd",
                  "secondary-container": "#92f5a4",
                  "surface-container": "#e7eefe",
                  "secondary-fixed-dim": "#79db8d",
                  "surface": "#f9f9ff",
                  "on-error-container": "#93000a",
                  "surface-variant": "#dce2f3",
                  "tertiary-fixed-dim": "#bdcac1",
                  "surface-tint": "#1f6c3a"
          },
          "borderRadius": {
                  "DEFAULT": "0.25rem",
                  "lg": "0.5rem",
                  "xl": "0.75rem",
                  "full": "9999px"
          },
          "spacing": {
                  "base": "8px",
                  "sm": "8px",
                  "2xl": "48px",
                  "xl": "32px",
                  "xs": "4px",
                  "md": "16px",
                  "margin-mobile": "16px",
                  "3xl": "64px",
                  "gutter": "24px",
                  "margin-desktop": "40px",
                  "lg": "24px"
          },
          "fontFamily": {
                  "body-md": ["Inter"],
                  "headline-lg-mobile": ["Inter"],
                  "body-lg": ["Inter"],
                  "body-sm": ["Inter"],
                  "label-sm": ["Inter"],
                  "headline-sm": ["Inter"],
                  "headline-lg": ["Inter"],
                  "headline-xl": ["Inter"],
                  "headline-md": ["Inter"],
                  "label-md": ["Inter"]
          },
          "fontSize": {
                  "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                  "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                  "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                  "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                  "label-sm": ["12px", {"lineHeight": "16px", "fontWeight": "500"}],
                  "headline-sm": ["20px", {"lineHeight": "28px", "fontWeight": "600"}],
                  "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "700"}],
                  "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                  "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                  "label-md": ["14px", {"lineHeight": "16px", "fontWeight": "600"}]
          }
        },
      },
    }
  </script>
</head>
<body class="bg-background text-on-surface font-body-md">
<!-- TOP NAV BAR -->
<nav class="sticky top-0 z-50 flex justify-between items-center w-full px-margin-desktop h-20 bg-surface-container-lowest dark:bg-surface-dim border-b border-outline-variant dark:border-outline shadow-sm dark:shadow-none">
<div class="flex items-center gap-xl">
<span class="text-headline-md font-headline-md font-bold text-primary dark:text-primary-fixed-dim">ReSell Store</span>
<div class="hidden md:flex gap-lg items-center">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors duration-200" href="#">Sell an Item</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors duration-200" href="#">How it Works</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors duration-200" href="#">Deals</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors duration-200" href="#">Blog</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary text-label-md font-label-md transition-colors duration-200" href="#">Help</a>
</div>
</div>
<div class="flex items-center gap-md">
<div class="relative hidden sm:block">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="pl-10 pr-4 py-2 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary/20 focus:border-primary w-64 text-body-sm" placeholder="Search for items..." type="text">
</div>
<button class="p-2 hover:bg-surface-container-high rounded-full transition-colors">
<span class="material-symbols-outlined text-primary" data-icon="favorite">favorite</span>
</button>
<button class="p-2 hover:bg-surface-container-high rounded-full transition-colors relative">
<span class="material-symbols-outlined text-primary" data-icon="shopping_cart">shopping_cart</span>
<span class="absolute top-1 right-1 bg-error text-white text-[10px] w-4 h-4 flex items-center justify-center rounded-full">3</span>
</button>
<div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="Close-up portrait of a friendly professional man in his 30s with a clean haircut and modern eyewear. The lighting is soft and natural, emphasizing a trustworthy and approachable persona. The background is a blurred high-end interior, matching a premium minimalist light-mode aesthetic with soft greens and neutrals." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_QeSwuPqTII0EMW21rXnEFTVX4CHWpKcjfDQ7hyJ0xfWYSLf3P211u4n9b7BobVvPxExeDhd_7LkpLJjm14OWVpZNQK9FRvdvtt9hJ46YjsP5yOSqLUbnqTzfRQbIXrgNetEacc9q6kz0Q-9bEWIQQGlQ092h7fiKM_7WhhSorNvdyF5n6kG1FUO81nmX_6W8SoKiVBE0MsUPgewUXdE6qf7UDJ0mpkOUXd1Rj9DMN_kxj430tMNI">
</div>
</div>
</nav>
<main class="max-w-7xl mx-auto px-margin-mobile md:px-margin-desktop py-xl">
<!-- Breadcrumbs -->
<nav class="flex items-center gap-2 text-label-sm text-on-surface-variant mb-lg">
<a class="hover:text-primary" href="#">Home</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<a class="hover:text-primary" href="#">Mobiles &amp; Tablets</a>
<span class="material-symbols-outlined text-[16px]">chevron_right</span>
<span class="text-on-surface font-semibold">iPhone 12</span>
</nav>
<!-- Product Grid -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-xl">
<!-- Left Column: Gallery (Bento Style) -->
<div class="lg:col-span-7 flex flex-col md:flex-row gap-md">
<!-- Thumbnails -->
<div class="flex md:flex-col gap-sm order-2 md:order-1 overflow-x-auto md:overflow-x-visible custom-scrollbar pb-2 md:pb-0">
<?php foreach ($product['thumbnails'] as $index => $thumb): ?>
<div class="flex-shrink-0 w-20 h-20 rounded-xl <?php echo $index === 0 ? 'border-2 border-primary shadow-sm' : 'border border-outline-variant hover:border-primary/50'; ?> overflow-hidden cursor-pointer transition-colors">
    <img class="w-full h-full object-cover" src="<?php echo $thumb; ?>" alt="Thumbnail <?php echo $index + 1; ?>">
</div>
<?php endforeach; ?>
</div>
<!-- Main Image -->
<div class="flex-1 order-1 md:order-2 bg-surface-container-low rounded-2xl overflow-hidden border border-outline-variant shadow-md aspect-square lg:aspect-auto">
<img class="w-full h-full object-contain p-12" src="<?php echo $product['main_image']; ?>" alt="<?php echo $product['title']; ?>">
</div>
</div>
<!-- Right Column: Info -->
<div class="lg:col-span-5 flex flex-col gap-lg">
<div class="flex flex-col gap-xs">
<div class="flex justify-between items-start">
<span class="inline-flex items-center px-3 py-1 <?php echo $product['condition_style']; ?> rounded-full text-label-sm font-semibold"><?php echo $product['condition']; ?></span>
<button class="p-2 hover:bg-surface-container-high rounded-full text-on-surface-variant transition-colors">
<span class="material-symbols-outlined" data-icon="share">share</span>
</button>
</div>
<h1 class="text-headline-lg font-headline-lg text-on-surface mt-2"><?php echo $product['title']; ?></h1>
<p class="text-body-md text-on-surface-variant"><?php echo $product['subtitle']; ?></p>
<div class="flex items-center gap-2 mt-1">
<div class="flex text-primary">
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
<span class="material-symbols-outlined text-[18px]" style="font-variation-settings: 'FILL' 1;">star</span>
              &lt;</div></div></div></div></div></main></body></html>