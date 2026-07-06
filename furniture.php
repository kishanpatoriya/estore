<?php
// Furniture & Home Category Page

$pageTitle = 'ReSell Store - Furniture & Home';

// Mock data for furniture products
$furniture_products = [
    [
        'title' => 'Nordic Ergonomic Chair',
        'image' => 'https://images.unsplash.com/photo-1567538096051-b6643b1c9b6c?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Like New',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '2.4 miles away',
        'price' => '$240',
        'verified' => true
    ],
    [
        'title' => 'Artisan Ceramic Vase',
        'image' => 'https://images.unsplash.com/photo-1578749556568-bc2c40e68b61?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Like New',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '3.1 miles away',
        'price' => '$85',
        'verified' => true
    ],
    [
        'title' => 'Dining Table Set',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '5.3 miles away',
        'price' => '$1,200',
        'verified' => true
    ],
    [
        'title' => 'Wooden Bookshelf',
        'image' => 'https://images.unsplash.com/photo-1590080875515-816c5dc80dca?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Like New',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '1.2 miles away',
        'price' => '$310',
        'verified' => true
    ],
    [
        'title' => '3 Seater Sofa',
        'image' => 'https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Good',
        'condition_style' => 'bg-gray-100 text-gray-600',
        'distance' => '2.7 miles away',
        'price' => '$850',
        'verified' => true
    ],
    [
        'title' => 'Minimalist Bedroom Lamps',
        'image' => 'https://images.unsplash.com/photo-1565636192335-14f8ee1ae3e9?auto=format&fit=crop&w=400&q=80',
        'condition' => 'Like New',
        'condition_style' => 'bg-green-100 text-green-700',
        'distance' => '3.9 miles away',
        'price' => '$120',
        'verified' => true
    ],
];

// Filter data
$categories = [
    ['name' => 'Seating', 'count' => 145],
    ['name' => 'Tables', 'count' => 87],
    ['name' => 'Decor', 'count' => 234, 'checked' => true],
    ['name' => 'Lighting', 'count' => 156],
    ['name' => 'Storage', 'count' => 178],
];

$materials = [
    ['name' => 'Wood', 'count' => 89],
    ['name' => 'Metal', 'count' => 124],
    ['name' => 'Fabric', 'count' => 156],
    ['name' => 'Glass', 'count' => 78],
];

$conditions = [
    ['name' => 'Like New', 'count' => 245],
    ['name' => 'Gently Used', 'count' => 312],
];

include 'includes/header.php';
?>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <!-- Breadcrumb Navigation -->
    <nav class="flex text-sm text-gray-500 mb-6">
        <ol class="flex items-center space-x-2">
            <li><a href="#" class="hover:text-gray-900">Home</a></li>
            <li><span class="mx-1">&gt;</span></li>
            <li class="font-semibold text-brand">Furniture & Home</li>
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

                <!-- Price Range Filter -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-4">PRICE RANGE</h3>
                    <div class="flex items-center gap-2">
                        <input type="text" placeholder="$0" class="w-1/2 px-2 py-1 border border-gray-300 rounded text-sm" value="$0">
                        <span>-</span>
                        <input type="text" placeholder="$5000+" class="w-1/2 px-2 py-1 border border-gray-300 rounded text-sm" value="$5000+">
                    </div>
                </div>

                <!-- Category Filter -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">CATEGORY</h3>
                    <div class="space-y-2">
                        <?php foreach ($categories as $cat): ?>
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand border-gray-300" <?php echo isset($cat['checked']) ? 'checked' : ''; ?>>
                            <span class="ml-3 text-sm text-gray-600"><?php echo $cat['name']; ?> (<?php echo $cat['count']; ?>)</span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Material Filter -->
                <div class="mb-6 border-b border-gray-100 pb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">MATERIAL</h3>
                    <div class="space-y-2">
                        <?php foreach ($materials as $mat): ?>
                        <label class="flex items-center">
                            <input type="checkbox" class="w-4 h-4 rounded text-brand border-gray-300">
                            <span class="ml-3 text-sm text-gray-600"><?php echo $mat['name']; ?> (<?php echo $mat['count']; ?>)</span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Condition Filter -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">CONDITION</h3>
                    <div class="space-y-2">
                        <?php foreach ($conditions as $cond): ?>
                        <label class="flex items-center">
                            <input type="radio" name="condition" class="w-4 h-4 text-brand border-gray-300">
                            <span class="ml-3 text-sm text-gray-600"><?php echo $cond['name']; ?> (<?php echo $cond['count']; ?>)</span>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Location Filter -->
                <div class="mb-6">
                    <h3 class="text-sm font-semibold text-gray-900 mb-3">LOCATION</h3>
                    <div class="relative">
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm" placeholder="Enter location">
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
                    <h1 class="text-3xl font-bold text-gray-900">Furniture & Home</h1>
                    <p class="text-sm text-blue-600 mt-1">Curated premium second-hand pieces for a conscious and comfortable living space.<br>Quality checked and verified.</p>
                </div>
                
                <button class="text-sm text-brand font-medium hover:underline">Most Recent</button>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach ($furniture_products as $product): ?>
                <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col group relative">
                    <!-- Image Container -->
                    <div class="relative h-56 bg-gray-100 overflow-hidden">
                        <?php if ($product['verified']): ?>
                        <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                        <?php endif; ?>
                        
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        
                        <!-- Favorite Button -->
                        <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 hover:bg-white transition-colors shadow-md">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                    </div>

                    <!-- Card Content -->
                    <div class="p-4 flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-base font-bold text-gray-900 flex-grow"><?php echo $product['title']; ?></h3>
                            <span class="px-2.5 py-1 text-xs font-semibold rounded flex-shrink-0 ml-2 <?php echo $product['condition_style']; ?>">
                                <?php echo $product['condition']; ?>
                            </span>
                        </div>

                        <!-- Location -->
                        <div class="text-xs text-gray-500 mb-4">
                            <svg class="h-3 w-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            <?php echo $product['distance']; ?>
                        </div>

                        <!-- Divider -->
                        <div class="h-px bg-gray-100 w-full mb-4"></div>

                        <!-- Price and Button -->
                        <div class="flex items-center justify-between mt-auto">
                            <span class="text-lg font-bold text-gray-900"><?php echo $product['price']; ?></span>
                            <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800 transition-colors">
                                View Details
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="mt-10 flex justify-center gap-2">
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-500 hover:bg-gray-50">
                    &lt;
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded bg-brand text-white font-medium">
                    1
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-700 hover:bg-gray-50">
                    2
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-700 hover:bg-gray-50">
                    3
                </button>
                <span class="px-2 text-gray-400">...</span>
                <button class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-gray-500 hover:bg-gray-50">
                    &gt;
                </button>
            </div>
        </div>
    </div>
</main>

<style>
    :root {
        --brand-color: #0f5132;
    }

    .text-brand {
        color: var(--brand-color);
    }

    .bg-brand {
        background-color: var(--brand-color);
    }

    .border-brand {
        border-color: var(--brand-color);
    }

    input[type="checkbox"],
    input[type="radio"] {
        accent-color: var(--brand-color);
    }

    .hover\:text-brand:hover {
        color: var(--brand-color);
    }

    .hover\:bg-green-800:hover {
        background-color: #065f46;
    }
</style>

<?php include 'includes/footer.php'; ?>
