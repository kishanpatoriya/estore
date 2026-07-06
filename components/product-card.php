<?php
/**
 * Product Card Component
 * Renders a single product card
 * 
 * @param array $product - Product data array with keys: title, image, condition, condition_style, distance, price, verified
 * @param string $view_mode - 'grid' or 'list' view mode
 */

function render_product_card($product, $view_mode = 'grid') {
    $verified = isset($product['verified']) ? $product['verified'] : false;
    $condition = isset($product['condition']) ? $product['condition'] : 'Good';
    $condition_style = isset($product['condition_style']) ? $product['condition_style'] : 'bg-gray-100 text-gray-600';
    
    if ($view_mode === 'list') {
        ?>
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow duration-300 flex flex-row group mb-4">
            <!-- Image Container -->
            <div class="relative w-32 h-32 bg-gray-100 overflow-hidden flex-shrink-0">
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                <?php if ($verified): ?>
                <div class="absolute top-2 left-2 bg-green-600 text-white px-1.5 py-0.5 rounded text-xs font-semibold">✓</div>
                <?php endif; ?>
            </div>

            <!-- Card Details -->
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-sm font-bold text-gray-900 flex-grow"><?php echo htmlspecialchars($product['title']); ?></h3>
                    <span class="px-2 py-1 text-xs font-semibold rounded flex-shrink-0 ml-2 <?php echo $condition_style; ?>">
                        <?php echo $condition; ?>
                    </span>
                </div>

                <div class="text-xs text-gray-500 mb-2">
                    <?php echo htmlspecialchars($product['distance']); ?>
                </div>

                <div class="flex items-center justify-between mt-auto">
                    <span class="font-bold text-gray-900"><?php echo htmlspecialchars($product['price']); ?></span>
                    <button class="bg-brand text-white px-3 py-1 rounded text-xs font-semibold hover:bg-green-800 transition-colors">
                        View Details
                    </button>
                </div>
            </div>
        </div>
        <?php
    } else {
        // Grid view (default)
        ?>
        <div class="bg-white border border-gray-200 rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col group relative">
            <!-- Image Container -->
            <div class="relative h-56 bg-gray-100 overflow-hidden">
                <?php if ($verified): ?>
                <div class="absolute top-3 left-3 bg-green-600 text-white px-2 py-1 rounded text-xs font-semibold">✓ Verified</div>
                <?php endif; ?>
                
                <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['title']); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                
                <!-- Favorite Button -->
                <button class="absolute top-3 right-3 p-2 bg-white rounded-full text-gray-400 hover:text-red-500 transition-colors shadow-md">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </button>
            </div>

            <!-- Card Content -->
            <div class="p-4 flex flex-col flex-grow">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-base font-bold text-gray-900 flex-grow"><?php echo htmlspecialchars($product['title']); ?></h3>
                    <span class="px-2.5 py-1 text-xs font-semibold rounded flex-shrink-0 ml-2 <?php echo $condition_style; ?>">
                        <?php echo $condition; ?>
                    </span>
                </div>

                <!-- Location -->
                <div class="text-xs text-gray-500 mb-4">
                    <svg class="h-3 w-3 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <?php echo htmlspecialchars($product['distance']); ?>
                </div>

                <!-- Divider -->
                <div class="h-px bg-gray-100 w-full mb-4"></div>

                <!-- Price and Button -->
                <div class="flex items-center justify-between mt-auto">
                    <span class="text-lg font-bold text-gray-900"><?php echo htmlspecialchars($product['price']); ?></span>
                    <button class="bg-brand text-white px-4 py-2 rounded text-sm font-semibold hover:bg-green-800 transition-colors">
                        View Details
                    </button>
                </div>
            </div>
        </div>
        <?php
    }
}
?>

<style>
    :root {
        --brand-color: #0f5132;
    }

    .bg-brand {
        background-color: var(--brand-color);
    }

    .hover\:bg-green-800:hover {
        background-color: #065f46;
    }
</style>
