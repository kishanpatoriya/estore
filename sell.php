<?php
$categories = [
    'Mobiles & Tablets',
    'Electronics',
    'Fashion',
    'Home & Living',
    'Books',
    'Sports',
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReSell Store - List Your Item</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .step-circle { width: 2rem; height: 2rem; }
    </style>
</head>
<body class="min-h-screen text-slate-900">
    <header class="bg-white border-b border-slate-200 shadow-sm sticky top-0 z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <a href="#" class="text-2xl font-bold text-emerald-700">ReSell Store</a>
                <div class="hidden md:flex items-center gap-8 text-sm text-slate-600">
                    <a href="#" class="hover:text-emerald-700">Sell an Item</a>
                    <a href="#" class="hover:text-emerald-700">How it Works</a>
                    <a href="#" class="hover:text-emerald-700">Deals</a>
                    <a href="#" class="hover:text-emerald-700">Blog</a>
                    <a href="#" class="hover:text-emerald-700">Help</a>
                </div>
                <div class="flex items-center gap-4">
                    <button class="text-slate-500 hover:text-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </button>
                    <button class="text-slate-500 hover:text-slate-900">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </button>
                    <img class="h-10 w-10 rounded-full border border-slate-200" src="https://ui-avatars.com/api/?name=User&background=f3f4f6&color=6b7280" alt="User avatar">
                </div>
            </div>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="space-y-8">
            <div class="text-center">
                <p class="text-sm font-semibold uppercase tracking-[0.2em] text-emerald-700">List your item for sale</p>
                <h1 class="mt-3 text-3xl sm:text-4xl font-semibold text-slate-900">Fill in the details below to reach thousands of potential buyers</h1>
            </div>

            <div class="bg-white rounded-3xl border border-slate-200 p-6 shadow-sm">
                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-3">
                            <div class="step-circle flex items-center justify-center rounded-full bg-emerald-700 text-white font-semibold">1</div>
                            <span class="text-sm font-semibold text-slate-900">Details</span>
                        </div>
                        <div class="hidden sm:block h-px w-16 bg-slate-200"></div>
                        <div class="flex items-center gap-3 text-slate-400">
                            <div class="step-circle flex items-center justify-center rounded-full border border-slate-300">2</div>
                            <span class="text-sm">Images</span>
                        </div>
                        <div class="hidden sm:block h-px w-16 bg-slate-200"></div>
                        <div class="flex items-center gap-3 text-slate-400">
                            <div class="step-circle flex items-center justify-center rounded-full border border-slate-300">3</div>
                            <span class="text-sm">Pricing</span>
                        </div>
                        <div class="hidden sm:block h-px w-16 bg-slate-200"></div>
                        <div class="flex items-center gap-3 text-slate-400">
                            <div class="step-circle flex items-center justify-center rounded-full border border-slate-300">4</div>
                            <span class="text-sm">Review</span>
                        </div>
                    </div>
                </div>

                <form action="#" method="post" class="mt-8 grid gap-6 md:grid-cols-[1.3fr_0.7fr]">
                    <div class="space-y-6">
                        <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                            <h2 class="text-lg font-semibold text-slate-900 mb-4">Item Information</h2>

                            <div class="space-y-4">
                                <label class="block text-sm font-medium text-slate-700">Product Title</label>
                                <input type="text" name="product_title" placeholder="e.g. iPhone 13 Pro Max - 256GB - Sierra Blue" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                                
                                <label class="block text-sm font-medium text-slate-700">Category</label>
                                <select name="category" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                                    <option value="">Select a category</option>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?php echo strtolower(str_replace([' ', '&'], ['-', 'and'], $category)); ?>"><?php echo $category; ?></option>
                                    <?php endforeach; ?>
                                </select>

                                <div>
                                    <p class="text-sm font-medium text-slate-700 mb-3">Condition</p>
                                    <div class="flex flex-wrap gap-3">
                                        <button type="button" class="rounded-full border border-slate-200 bg-emerald-50 px-5 py-3 text-sm font-semibold text-emerald-700">New</button>
                                        <button type="button" class="rounded-full border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700">Like New</button>
                                        <button type="button" class="rounded-full border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700">Good</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rounded-3xl border border-slate-200 bg-slate-50 p-6 shadow-sm">
                            <h2 class="text-lg font-semibold text-slate-900 mb-4">Tell Buyers More</h2>
                            <label class="block text-sm font-medium text-slate-700 mb-3">Detailed Description</label>
                            <textarea name="description" rows="8" placeholder="Describe what makes your item great. Include details about usage, defects, or why you're selling it..." class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-4 text-sm text-slate-900 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100"></textarea>
                        </div>
                    </div>

                    <aside class="space-y-6">
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                            <h2 class="text-lg font-semibold text-slate-900 mb-4">Listing steps</h2>
                            <p class="text-sm text-slate-600">Complete details, images, pricing, and review before publishing your listing.</p>
                        </div>
                        <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm flex flex-col gap-4">
                            <button type="button" class="w-full rounded-3xl border border-slate-200 bg-white px-5 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">Save Draft</button>
                            <button type="submit" class="w-full rounded-3xl bg-emerald-700 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-emerald-800">Continue to Images</button>
                        </div>
                    </aside>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
