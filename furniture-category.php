<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReSell Store - Furniture & Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }
        :root {
            --brand: #0f5132;
        }
        .text-brand { color: var(--brand); }
        .bg-brand { background-color: var(--brand); }
        .border-brand { border-color: var(--brand); }
        .hover\:text-brand:hover { color: var(--brand); }
        .hover\:bg-green-800:hover { background-color: #065f46; }
        input[type="checkbox"], input[type="radio"] { accent-color: var(--brand); }
        .icon-svg { width: 24px; height: 24px; stroke: currentColor; fill: none; stroke-width: 2; }
    </style>
</head>
<body class="bg-gray-50">

<!-- HEADER / NAVBAR -->
<header class="bg-white border-b border-gray-200 sticky top-0 z-50 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="index.php" class="text-2xl font-bold text-brand">ReSell Store</a>
            </div>

            <!-- Search Bar (hidden on mobile) -->
            <div class="flex-1 max-w-2xl px-8 hidden md:block">
                <div class="relative">
                    <input type="text" 
                        placeholder="Search for items, brands, categories..." 
                        class="w-full px-4 py-2 pl-10 border border-gray-200 rounded-full bg-gray-50 text-sm focus:outline-none focus:bg-white focus:border-brand focus:ring-1 focus:ring-brand">
                    <svg class="icon-svg absolute left-3 top-2.5 text-gray-400" viewBox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>

            <!-- Navigation & Icons -->
            <div class="flex items-center space-x-6">
                <nav class="hidden lg:flex space-x-6 text-sm font-medium text-gray-600">
                    <a href="sell.php" class="hover:text-brand">Sell an Item</a>
                    <a href="#" class="hover:text-brand">How it Works</a>
                    <a href="#" class="hover:text-brand">Deals</a>
                    <a href="#" class="hover:text-brand">Blog</a>
                    <a href="#" class="hover:text-brand">Help</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-500 hover:text-gray-700" title="Favorites">
                        <svg class="icon-svg" viewBox="0 0 24 24">
                            <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                    <a href="cart.php" class="text-gray-500 hover:text-gray-700" title="Shopping Cart">
                        <svg class="icon-svg" viewBox="0 0 24 24">
                            <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </a>
                    <a href="login.php" class="text-gray-500 hover:text-gray-700" title="Account">
                        <img src="https://ui-avatars.com/api/?name=User&background=f3f4f6&color=6b7280" alt="User" class="w-8 h-8 rounded-full border border-gray-200">
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- MAIN CONTENT -->
<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Breadcrumb -->
    <nav class="flex text-sm text-gray-500 mb-6">
        <a href="index.php" class="hover:text-gray-900">Home</a>
        <span class="mx-2">&gt;</span>
        <span class="font-semibold text-brand">Furniture & Home</span>
    </nav>

    <div class="flex flex-col lg:flex-row gap-8">
        <!-- SIDEBAR FILTERS -->
        <aside class="w-full lg:w-64 flex-shrink-0">
            <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg font-bold text-gray-900">Filters</h2>
                    <button class="text-sm text-brand font-medium hover:underline">Clear All</button>
                </div>

                <!-- Price Range -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4 uppercase">Price Range</h3>
                    <div class="flex items-center gap-2">
                        <input type="text" value="$0" class="w-1/2 px-2 py-1 border border-gray-300 rounded text-sm">
                        <span class="text-gray-400">-</span>
                        <input type="text" value="$5000+" class="w-1/2 px-2 py-1 border border-gray-300 rounded text-sm">
                    </div>
                </div>

                <!-- Category -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3 uppercase">Category</h3>
                    <div class="space-y-2">
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Seating (145)</span></label>
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Tables (87)</span></label>
                        <label class="flex items-center"><input type="checkbox" checked> <span class="ml-3 text-sm text-gray-600">Decor (234)</span></label>
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Lighting (156)</span></label>
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Storage (178)</span></label>
                    </div>
                </div>

                <!-- Material -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3 uppercase">Material</h3>
                    <div class="space-y-2">
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Wood (89)</span></label>
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Metal (124)</span></label>
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Fabric (156)</span></label>
                        <label class="flex items-center"><input type="checkbox"> <span class="ml-3 text-sm text-gray-600">Glass (78)</span></label>
                    </div>
                </div>

                <!-- Condition -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3 uppercase">Condition</h3>
                    <div class="space-y-2">
                        <label class="flex items-center"><input type="radio" name="condition"> <span class="ml-3 text-sm text-gray-600">Like New (245)</span></label>
                        <label class="flex items-center"><input type="radio" name="condition"> <span class="ml-3 text-sm text-gray-600">Gently Used (312)</span></label>
                    </div>
                </div>

                <!-- Location -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3 uppercase">Location</h3>
                    <input type="text" placeholder="Enter location" class="w-full px-3 py-2 border border-gray-300 rounded text-sm">
                </div>

                <button class="w-full bg-brand text-white text-sm font-semibold py-3 rounded-lg hover:bg-green-800 transition-colors">Apply Filters</button>
            </div>
        </aside>

        <!-- PRODUCT LISTING -->
        <div class="flex-1">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Furniture & Home</h1>
                <p class="text-sm text-blue-600">Curated premium second-hand pieces for a conscious and comfortable living space.<br>Quality checked and verified.</p>
                <button class="mt-4 text-sm text-brand font-medium hover:underline">✓ Most Recent</button>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                <!-- Product 1 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative h-56 bg-gray-100 overflow-hidden group">
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <img src="https://images.unsplash.com/photo-1567538096051-b6643b1c9b6c?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 shadow-md">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900">Nordic Ergonomic Chair</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded bg-green-100 text-green-700">Like New</span>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 flex items-center">
                            <svg class="icon-svg w-3 h-3 mr-1" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            2.4 miles away
                        </div>
                        <div class="h-px bg-gray-100 mb-4"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$240</span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative h-56 bg-gray-100 overflow-hidden group">
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <img src="https://images.unsplash.com/photo-1578749556568-bc2c40e68b61?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 shadow-md">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900">Artisan Ceramic Vase</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded bg-green-100 text-green-700">Like New</span>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 flex items-center">
                            <svg class="icon-svg w-3 h-3 mr-1" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            3.1 miles away
                        </div>
                        <div class="h-px bg-gray-100 mb-4"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$85</span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative h-56 bg-gray-100 overflow-hidden group">
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 shadow-md">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900">Dining Table Set</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-600">Good</span>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 flex items-center">
                            <svg class="icon-svg w-3 h-3 mr-1" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            5.3 miles away
                        </div>
                        <div class="h-px bg-gray-100 mb-4"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$1,200</span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative h-56 bg-gray-100 overflow-hidden group">
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <img src="https://images.unsplash.com/photo-1590080875515-816c5dc80dca?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 shadow-md">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900">Wooden Bookshelf</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded bg-green-100 text-green-700">Like New</span>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 flex items-center">
                            <svg class="icon-svg w-3 h-3 mr-1" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            1.2 miles away
                        </div>
                        <div class="h-px bg-gray-100 mb-4"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$310</span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative h-56 bg-gray-100 overflow-hidden group">
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 shadow-md">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900">3 Seater Sofa</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded bg-gray-100 text-gray-600">Good</span>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 flex items-center">
                            <svg class="icon-svg w-3 h-3 mr-1" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            2.7 miles away
                        </div>
                        <div class="h-px bg-gray-100 mb-4"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$850</span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800">View Details</button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="relative h-56 bg-gray-100 overflow-hidden group">
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <img src="https://images.unsplash.com/photo-1565636192335-14f8ee1ae3e9?auto=format&fit=crop&w=400&q=80" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 shadow-md">
                            <svg class="icon-svg" viewBox="0 0 24 24"><path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                        </button>
                    </div>
                    <div class="p-4">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="font-bold text-gray-900">Minimalist Bedroom Lamps</h3>
                            <span class="px-2 py-1 text-xs font-semibold rounded bg-green-100 text-green-700">Like New</span>
                        </div>
                        <div class="text-xs text-gray-500 mb-4 flex items-center">
                            <svg class="icon-svg w-3 h-3 mr-1" viewBox="0 0 24 24"><path d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/></svg>
                            3.9 miles away
                        </div>
                        <div class="h-px bg-gray-100 mb-4"></div>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$120</span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800">View Details</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center gap-2">
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-500 hover:bg-gray-50">&lt;</button>
                <button class="w-10 h-10 flex items-center justify-center rounded bg-brand text-white font-medium">1</button>
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-700 hover:bg-gray-50">2</button>
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-700 hover:bg-gray-50">3</button>
                <span class="px-2 text-gray-400">...</span>
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-500 hover:bg-gray-50">&gt;</button>
            </div>
        </div>
    </div>
</main>

<!-- FOOTER -->
<footer class="bg-white border-t border-gray-200 mt-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-xl font-bold text-brand mb-4">ReSell Store</h3>
                <p class="text-sm text-gray-600 mb-4">© 2024 ReSell Store. Conscious consumerism for a better planet.</p>
                <div class="flex gap-4">
                    <a href="#" class="text-gray-500 hover:text-brand">Facebook</a>
                    <a href="#" class="text-gray-500 hover:text-brand">Twitter</a>
                    <a href="#" class="text-gray-500 hover:text-brand">Instagram</a>
                </div>
            </div>
            <div>
                <h4 class="font-semibold text-gray-900 mb-4">Company</h4>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-brand">About Us</a></li>
                    <li><a href="#" class="hover:text-brand">Sustainability</a></li>
                    <li><a href="#" class="hover:text-brand">Careers</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-900 mb-4">Support</h4>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-brand">Help Center</a></li>
                    <li><a href="#" class="hover:text-brand">Contact Us</a></li>
                    <li><a href="#" class="hover:text-brand">FAQs</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-semibold text-gray-900 mb-4">Legal</h4>
                <ul class="space-y-2 text-sm text-gray-600">
                    <li><a href="#" class="hover:text-brand">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-brand">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-brand">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
