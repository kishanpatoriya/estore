<?php
/**
 * Sidebar Filter Component
 * Renders a reusable sidebar with filters
 * 
 * @param array $filters - Array containing all filter options
 */

function render_sidebar($filters = array()) {
    $categories = isset($filters['categories']) ? $filters['categories'] : array();
    $materials = isset($filters['materials']) ? $filters['materials'] : array();
    $conditions = isset($filters['conditions']) ? $filters['conditions'] : array();
    ?>
    
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
            <?php if (!empty($categories)): ?>
            <div class="mb-6 border-b border-gray-100 pb-6">
                <h3 class="text-sm font-semibold text-gray-900 mb-3">CATEGORY</h3>
                <div class="space-y-2">
                    <?php foreach ($categories as $cat): ?>
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 rounded text-brand border-gray-300" <?php echo isset($cat['checked']) ? 'checked' : ''; ?>>
                        <span class="ml-3 text-sm text-gray-600"><?php echo htmlspecialchars($cat['name']); ?> (<?php echo $cat['count']; ?>)</span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Material Filter -->
            <?php if (!empty($materials)): ?>
            <div class="mb-6 border-b border-gray-100 pb-6">
                <h3 class="text-sm font-semibold text-gray-900 mb-3">MATERIAL</h3>
                <div class="space-y-2">
                    <?php foreach ($materials as $mat): ?>
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 rounded text-brand border-gray-300">
                        <span class="ml-3 text-sm text-gray-600"><?php echo htmlspecialchars($mat['name']); ?> (<?php echo $mat['count']; ?>)</span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

            <!-- Condition Filter -->
            <?php if (!empty($conditions)): ?>
            <div class="mb-6 border-b border-gray-100 pb-6">
                <h3 class="text-sm font-semibold text-gray-900 mb-3">CONDITION</h3>
                <div class="space-y-2">
                    <?php foreach ($conditions as $cond): ?>
                    <label class="flex items-center">
                        <input type="radio" name="condition" class="w-4 h-4 text-brand border-gray-300">
                        <span class="ml-3 text-sm text-gray-600"><?php echo htmlspecialchars($cond['name']); ?> (<?php echo $cond['count']; ?>)</span>
                    </label>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif; ?>

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
    <?php
}
?>
