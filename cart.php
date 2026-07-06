<?php
$cartItems = [
    [
        'title' => 'iPhone 12',
        'subtitle' => '128GB • Blue • Like New',
        'price' => '₹22,999',
        'image' => 'https://images.unsplash.com/photo-1605236453806-6ff36851218e?auto=format&fit=crop&w=500&q=80',
        'quantity' => 1,
    ],
    [
        'title' => 'Dell Inspiron 15',
        'subtitle' => '8GB RAM • 256GB SSD • Good Condition',
        'price' => '₹18,500',
        'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=500&q=80',
        'quantity' => 1,
    ],
    [
        'title' => 'Boat Rockerz 550',
        'subtitle' => 'Wireless Headphones • Like New',
        'price' => '₹1,499',
        'image' => 'https://images.unsplash.com/photo-1518440541829-5b587c6d6d8b?auto=format&fit=crop&w=500&q=80',
        'quantity' => 1,
    ],
];

$recommendations = [
    [
        'title' => 'HP Laptop',
        'price' => '₹26,999',
        'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=500&q=80',
    ],
    [
        'title' => 'Backpack',
        'price' => '₹799',
        'image' => 'https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?auto=format&fit=crop&w=500&q=80',
    ],
    [
        'title' => 'Wireless Mouse',
        'price' => '₹299',
        'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=500&q=80',
    ],
    [
        'title' => 'Smartwatch',
        'price' => '₹1,299',
        'image' => 'https://images.unsplash.com/photo-1518546305924-54bc82bc86d9?auto=format&fit=crop&w=500&q=80',
    ],
];

$subtotal = 42998;
$deliveryFee = 99;
$platformFee = 149;
$total = $subtotal + $deliveryFee + $platformFee;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReSell Store - My Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .quantity-btn { width: 36px; height: 36px; }
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

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 xl:grid-cols-[1.5fr_0.9fr] gap-8">
            <section class="space-y-6">
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 mb-6">
                        <div>
                            <h1 class="text-2xl font-semibold text-slate-900">My Cart</h1>
                            <p class="text-sm text-slate-500 mt-1"><?php echo count($cartItems); ?> items</p>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-slate-500">
                            <span class="inline-flex items-center gap-2 px-3 py-2 rounded-full bg-slate-100 text-slate-700">
                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 15c2.546 0 4.92.73 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                Saved for later
                            </span>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <?php foreach ($cartItems as $item): ?>
                        <article class="rounded-3xl border border-slate-200 bg-slate-50 p-5 grid grid-cols-[100px_1fr] gap-4 items-center">
                            <img class="h-24 w-24 rounded-3xl object-cover" src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                            <div class="flex flex-col gap-4">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-3">
                                    <div>
                                        <h2 class="text-lg font-semibold text-slate-900"><?php echo $item['title']; ?></h2>
                                        <p class="text-sm text-slate-500 mt-1"><?php echo $item['subtitle']; ?></p>
                                    </div>
                                    <p class="text-lg font-semibold text-slate-900"><?php echo $item['price']; ?></p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                                    <div class="inline-flex items-center rounded-2xl bg-white border border-slate-200 shadow-sm overflow-hidden">
                                        <button class="quantity-btn bg-slate-100 text-slate-600 hover:bg-slate-200">-</button>
                                        <span class="px-4 text-sm font-medium text-slate-900"><?php echo $item['quantity']; ?></span>
                                        <button class="quantity-btn bg-slate-100 text-slate-600 hover:bg-slate-200">+</button>
                                    </div>
                                    <button class="text-sm font-semibold text-rose-600 hover:text-rose-700">Remove</button>
                                </div>
                            </div>
                        </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-5">
                        <h2 class="text-xl font-semibold text-slate-900">You may also like</h2>
                        <a href="#" class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">View All</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                        <?php foreach ($recommendations as $recommendation): ?>
                        <div class="rounded-3xl overflow-hidden border border-slate-200 bg-slate-50 shadow-sm hover:shadow-md transition-shadow duration-200">
                            <img class="h-40 w-full object-cover" src="<?php echo $recommendation['image']; ?>" alt="<?php echo $recommendation['title']; ?>">
                            <div class="p-4">
                                <h3 class="text-sm font-semibold text-slate-900"><?php echo $recommendation['title']; ?></h3>
                                <p class="mt-2 text-sm font-semibold text-slate-900"><?php echo $recommendation['price']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <aside class="space-y-6">
                <div class="bg-white border border-slate-200 rounded-3xl p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-5">
                        <div>
                            <h2 class="text-xl font-semibold text-slate-900">Order Summary</h2>
                            <p class="text-sm text-slate-500 mt-1">Review and proceed to checkout.</p>
                        </div>
                        <span class="inline-flex items-center rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">3 items</span>
                    </div>
                    <div class="space-y-4 text-sm text-slate-600">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span>₹<?php echo number_format($subtotal); ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span>Delivery Fee</span>
                            <span>₹<?php echo number_format($deliveryFee); ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span>Platform Fee</span>
                            <span>₹<?php echo number_format($platformFee); ?></span>
                        </div>
                    </div>
                    <div class="mt-4 border-t border-slate-200 pt-4 text-lg font-semibold text-slate-900 flex items-center justify-between">
                        <span>Total</span>
                        <span>₹<?php echo number_format($total); ?></span>
                    </div>
                    <button class="mt-6 w-full rounded-3xl bg-emerald-700 px-5 py-4 text-sm font-semibold text-white shadow-sm hover:bg-emerald-800 transition-colors">Proceed to Checkout</button>
                    <p class="mt-4 text-center text-xs text-slate-500">Safe & secure payments</p>
                </div>
            </aside>
        </div>
    </main>
</body>
</html>
