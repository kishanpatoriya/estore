<?php
// --- Mock Data for Vehicles Category ---

$brands = [
    ['name' => 'Toyota', 'count' => 234, 'checked' => false],
    ['name' => 'Honda', 'count' => 198, 'checked' => false],
    ['name' => 'BMW', 'count' => 156, 'checked' => false],
    ['name' => 'Mercedes', 'count' => 143, 'checked' => false],
    ['name' => 'Audi', 'count' => 167, 'checked' => false],
    ['name' => 'Ford', 'count' => 189, 'checked' => false],
];

$conditions = [
    ['name' => 'Excellent', 'count' => 289, 'checked' => false],
    ['name' => 'Good', 'count' => 312, 'checked' => false],
    ['name' => 'Fair', 'count' => 145, 'checked' => false],
];

$products = [
    [
        'title' => 'Stealth E-Commute Scooter',
        'image' => 'https://images.unsplash.com/photo-1559405542-a6854e65e2d4?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '2.1 km away',
        'location' => 'San Francisco, CA',
        'price' => '$320',
        'old_price' => '$589',
        'discount' => '46% OFF'
    ],
    [
        'title' => 'Eco-Friendly Urban Scooter',
        'image' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Excellent',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '0.9 km away',
        'location' => 'New York, NY',
        'price' => '$425',
        'old_price' => '$899',
        'discount' => '53% OFF'
    ],
    [
        'title' => 'Luxury Sports Sedan 2021',
        'image' => 'https://images.unsplash.com/photo-1552820728-8ac41f1ce891?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Excellent',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '3.7 km away',
        'location' => 'Los Angeles, CA',
        'price' => '$28,500',
        'old_price' => '$45,000',
        'discount' => '37% OFF'
    ],
    [
        'title' => 'Compact City Car 2020',
        'image' => 'https://images.unsplash.com/photo-1494976866815-15786ecca07e?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '1.5 km away',
        'location' => 'Boston, MA',
        'price' => '$14,200',
        'old_price' => '$24,999',
        'discount' => '43% OFF'
    ],
    [
        'title' => 'SUV Family Vehicle 2022',
        'image' => 'https://images.unsplash.com/photo-1533473359331-35a2304b0db0?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Excellent',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '2.3 km away',
        'location' => 'Chicago, IL',
        'price' => '$32,700',
        'old_price' => '$52,000',
        'discount' => '37% OFF'
    ],
    [
        'title' => 'Electric Hybrid 2021',
        'image' => 'https://images.unsplash.com/photo-1559405542-a6854e65e2d4?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '4.2 km away',
        'location' => 'Seattle, WA',
        'price' => '$18,900',
        'old_price' => '$35,000',
        'discount' => '46% OFF'
    ],
    [
        'title' => 'Vintage Collector Car 2019',
        'image' => 'https://images.unsplash.com/photo-1494976866815-15786ecca07e?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Excellent',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '1.8 km away',
        'location' => 'Denver, CO',
        'price' => '$19,800',
        'old_price' => '$41,500',
        'discount' => '52% OFF'
    ],
    [
        'title' => 'Premium Sedan 2020',
        'image' => 'https://images.unsplash.com/photo-1552820728-8ac41f1ce891?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '2.9 km away',
        'location' => 'Miami, FL',
        'price' => '$21,300',
        'old_price' => '$38,999',
        'discount' => '45% OFF'
    ],
    [
        'title' => 'Pickup Truck 4WD 2021',
        'image' => 'https://images.unsplash.com/photo-1531072901527-3a5c1f5b1a96?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Excellent',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '3.4 km away',
        'location' => 'Austin, TX',
        'price' => '$24,500',
        'old_price' => '$42,000',
        'discount' => '42% OFF'
    ],
    [
        'title' => 'Convertible Roadster 2019',
        'image' => 'https://images.unsplash.com/photo-1494976866815-15786ecca07e?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '1.2 km away',
        'location' => 'Phoenix, AZ',
        'price' => '$16,800',
        'old_price' => '$32,000',
        'discount' => '48% OFF'
    ],
    [
        'title' => 'Minivan Family Vehicle 2020',
        'image' => 'https://images.unsplash.com/photo-1533473359331-35a2304b0db0?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Excellent',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '2.6 km away',
        'location' => 'Portland, OR',
        'price' => '$17,900',
        'old_price' => '$29,999',
        'discount' => '40% OFF'
    ],
    [
        'title' => 'Luxury Coupe 2021',
        'image' => 'https://images.unsplash.com/photo-1552820728-8ac41f1ce891?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '3.1 km away',
        'location' => 'Philadelphia, PA',
        'price' => '$26,500',
        'old_price' => '$48,500',
        'discount' => '45% OFF'
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReSell Store - Vehicles</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            DEFAULT: '#0f5132', // Dark green header/buttons
                            light: '#e8f5e9',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 16px;
            width: 16px;
            border-radius: 50%;
            background: #0f5132;
            cursor: pointer;
            margin-top: -6px;
        }
        input[type=range]::-webkit-slider-runnable-track {
            width: 100%;
            height: 4px;
            cursor: pointer;
            background: #e5e7eb;
            border-radius: 2px;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Header / Navbar -->
    <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="index.php" class="text-2xl font-bold text-brand">ReSell Store</a>
                </div>

                <!-- Search Bar -->
                <div class="flex-1 max-w-2xl px-8 hidden md:block">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>
                        <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-200 rounded-full bg-gray-50 text-sm placeholder-gray-500 focus:outline-none focus:bg-white focus:border-brand focus:ring-1 focus:ring-brand" placeholder="Search for items, brands, categories...">
                    </div>
                </div>

                <!-- Nav Links & Icons -->
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
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        </button>
                        <a href="cart.php" class="text-gray-500 hover:text-gray-700" title="Shopping Cart">
                            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </a>
                        <a href="login.php" class="text-gray-500 hover:text-gray-700" title="Account">
                            <img class="h-8 w-8 rounded-full border border-gray-200" src="https://ui-avatars.com/api/?name=User&background=f3f4f6&color=6b7280" alt="User avatar">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        
        <!-- Breadcrumbs -->
        <nav class="flex text-sm text-gray-500 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="index.php" class="hover:text-gray-900">Home</a></li>
                <li><span class="mx-1">&gt;</span></li>
                <li class="font-semibold text-brand">Vehicles</li>
            </ol>
        </nav>

        <div class="flex flex-col lg:flex-row gap-8">
            
            <!-- Sidebar: Filters -->
            <aside class="w-full lg:w-64 flex-shrink-0">
                <div class="bg-white border border-gray-200 rounded-xl p-5 shadow-sm">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-lg font-bold text-gray-900">Filters</h2>
                        <button class="text-sm text-brand font-medium hover:underline">Clear All</button>
                    </div>

                    <!-- Price Range -->
                    <div class="mb-6 border-b border-gray-100 pb-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-4">Price Range</h3>
                        <div class="relative w-full mb-2">
                            <div class="h-1 bg-gray-200 rounded-full w-full absolute top-1.5"></div>
                            <div class="h-1 bg-brand rounded-full w-1/2 absolute top-1.5 left-1/4"></div>
                            <input type="range" min="5000" max="100000" value="5000" class="w-full absolute top-0 opacity-0 cursor-pointer">
                            <input type="range" min="5000" max="100000" value="50000" class="w-full appearance-none bg-transparent relative z-10 pointer-events-none">
                        </div>
                        <div class="flex justify-between text-xs text-gray-600 mt-4">
                            <span>$5,000</span>
                            <span>$100,000</span>
                        </div>
                    </div>

                    <!-- Brand -->
                    <div class="mb-6 border-b border-gray-100 pb-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-3">Brand</h3>
                        <div class="space-y-2">
                            <?php foreach ($brands as $index => $brand): ?>
                            <label class="flex items-center">
                                <input type="checkbox" class="h-4 w-4 text-brand border-gray-300 rounded focus:ring-brand cursor-pointer" <?php echo $brand['checked'] ? 'checked' : ''; ?>>
                                <span class="ml-3 text-sm text-gray-600"><?php echo $brand['name']; ?> (<?php echo $brand['count']; ?>)</span>
                            </label>
                            <?php endforeach; ?>
                            <button class="text-sm text-brand font-medium mt-2">+ More</button>
                        </div>
                    </div>

                    <!-- Condition -->
                    <div class="mb-6 border-b border-gray-100 pb-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-3">Condition</h3>
                        <div class="space-y-2">
                            <?php foreach ($conditions as $index => $cond): ?>
                            <label class="flex items-center">
                                <input type="radio" name="condition" class="h-4 w-4 text-brand border-gray-300 focus:ring-brand cursor-pointer" <?php echo $cond['checked'] ? 'checked' : ''; ?>>
                                <span class="ml-3 text-sm text-gray-600"><?php echo $cond['name']; ?> (<?php echo $cond['count']; ?>)</span>
                            </label>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-900 mb-3">Location</h3>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <input type="text" class="block w-full pl-9 pr-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:border-brand focus:ring-1 focus:ring-brand" placeholder="Enter location">
                        </div>
                    </div>

                    <button class="w-full bg-brand text-white text-sm font-semibold py-3 rounded-lg hover:bg-green-800 transition-colors">
                        Apply Filters
                    </button>
                </div>
            </aside>

            <!-- Main Content: Product List -->
            <div class="flex-1">
                
                <!-- Toolbar -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">Vehicles</h1>
                        <p class="text-sm text-gray-500 mt-1">Discover high-quality, pre-owned vehicles for pre-owned commuters worldwide.</p>
                    </div>
                    
                    <div class="flex items-center space-x-4">
                        <!-- View Toggles -->
                        <div class="flex bg-white border border-gray-200 rounded-md p-1 shadow-sm">
                            <button class="p-1.5 bg-green-100 text-brand rounded shadow-sm">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            </button>
                            <button class="p-1.5 text-gray-400 hover:text-gray-600 rounded">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                            </button>
                        </div>
                        
                        <!-- Sort Dropdown -->
                        <div class="relative">
                            <select class="block w-full pl-3 pr-10 py-2 text-sm bg-white border border-gray-200 rounded-md shadow-sm focus:outline-none focus:ring-brand focus:border-brand appearance-none font-medium">
                                <option>Latest Arrivals</option>
                                <option>Price: Low to High</option>
                                <option>Price: High to Low</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-500">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    <?php foreach ($products as $product): ?>
                    <div class="bg-white border border-gray-200 rounded-xl overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-col group relative">
                        <!-- Image Container -->
                        <div class="relative h-48 bg-gray-100 overflow-hidden">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <!-- Favorite Button -->
                            <button class="absolute top-3 right-3 p-1.5 bg-white/80 backdrop-blur-sm rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                            </button>
                        </div>
                        
                        <!-- Card Details -->
                        <div class="p-5 flex flex-col flex-grow">
                            <div class="flex justify-between items-start mb-2">
                                <h3 class="text-base font-bold text-gray-900"><?php echo $product['title']; ?></h3>
                                <span class="px-2.5 py-1 text-xs font-semibold rounded <?php echo $product['condition_style']; ?>">
                                    <?php echo $product['condition']; ?>
                                </span>
                            </div>
                            
                            <!-- Location/Distance -->
                            <div class="flex items-center text-xs text-gray-500 mb-4">
                                <svg class="h-3.5 w-3.5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <span><?php echo $product['distance']; ?> &bull; <?php echo $product['location']; ?></span>
                            </div>
                            
                            <!-- Divider -->
                            <div class="h-px bg-gray-100 w-full mb-4"></div>
                            
                            <!-- Pricing -->
                            <div class="flex items-center space-x-2 mt-auto">
                                <span class="text-xl font-bold text-gray-900"><?php echo $product['price']; ?></span>
                                <span class="text-sm text-gray-400 line-through"><?php echo $product['old_price']; ?></span>
                                <span class="text-sm font-semibold text-brand"><?php echo $product['discount']; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Pagination -->
                <div class="mt-10 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md bg-brand text-white font-medium">
                            1
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium">
                            2
                        </a>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-gray-700 hover:bg-gray-50 font-medium">
                            3
                        </a>
                        <span class="px-2 text-gray-400">...</span>
                        <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md border border-gray-200 text-gray-500 hover:bg-gray-50">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </nav>
                </div>

            </div>
        </div>
    </main>

</body>
</html>
