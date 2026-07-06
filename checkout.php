<?php
$deliveryAddresses = [
    [
        'name' => 'Aman Verma',
        'address' => "123, Green Park, South Delhi\nNew Delhi - 110016\nIndia",
        'phone' => '+91 98765 43210',
        'label' => 'Home Address',
        'selected' => true,
    ],
    [
        'name' => 'Office',
        'address' => "B-45, Sector 62, Noida\nUttar Pradesh - 201301",
        'phone' => '+91 98765 43210',
        'label' => 'Office Address',
        'selected' => false,
    ],
];

$paymentMethods = [
    [
        'title' => 'UPI (Google Pay, PhonePe, Paytm)',
        'subtitle' => 'Pay directly from your bank account',
        'type' => 'upi',
        'selected' => true,
    ],
    [
        'title' => 'Credit / Debit Card',
        'subtitle' => 'Visa, Mastercard, Rupay',
        'type' => 'card',
        'selected' => false,
    ],
    [
        'title' => 'Net Banking',
        'subtitle' => 'Pay from your bank account',
        'type' => 'netbanking',
        'selected' => false,
    ],
    [
        'title' => 'Cash on Delivery',
        'subtitle' => 'Pay when your item is delivered',
        'type' => 'cod',
        'selected' => false,
    ],
];

$reviewItems = [
    [
        'title' => 'iPhone 12',
        'subtitle' => '128GB • Blue • Like New',
        'price' => '₹22,999',
        'image' => 'https://images.unsplash.com/photo-1605236453806-6ff36851218e?auto=format&fit=crop&w=500&q=80',
    ],
    [
        'title' => 'Dell Inspiron 15',
        'subtitle' => '8GB RAM • 256GB SSD • Good Condition',
        'price' => '₹18,500',
        'image' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=500&q=80',
    ],
];

$subtotal = 42998;
$deliveryFee = 0;
$platformFee = 149;
$total = $subtotal + $deliveryFee + $platformFee;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReSell Store - Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .radio-card input:checked + label { border-color: #059669; background-color: rgba(16, 185, 129, 0.08); }
        .radio-card label { cursor: pointer; }
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

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 xl:grid-cols-[1.5fr_0.9fr] gap-8">
            <section class="space-y-6">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4">
                        <div>
                            <h1 class="text-2xl font-semibold text-slate-900">Checkout</h1>
                            <p class="text-sm text-slate-500 mt-1">Review your delivery information, payment method, and items before placing your order.</p>
                        </div>
                        <div class="inline-flex items-center rounded-full bg-emerald-50 px-4 py-2 text-sm font-semibold text-emerald-700">100% Secure Payment</div>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm space-y-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-lg font-semibold text-slate-900">Delivery Address</h2>
                            <p class="text-sm text-slate-500">Choose an address or add a new one.</p>
                        </div>
                        <button class="text-sm font-semibold text-emerald-700 hover:text-emerald-800">+ Add New</button>
                    </div>

                    <div class="grid gap-4 md:grid-cols-2">
                        <?php foreach ($deliveryAddresses as $address): ?>
                        <label class="cursor-pointer rounded-3xl border p-5 transition focus-within:ring-2 focus-within:ring-emerald-300 <?php echo $address['selected'] ? 'border-emerald-500 bg-emerald-50' : 'border-slate-200 bg-slate-50'; ?>">
                            <input type="radio" name="delivery_address" class="sr-only" <?php echo $address['selected'] ? 'checked' : ''; ?>>
                            <div class="flex items-start justify-between gap-4">
                                <div>
                                    <p class="text-sm font-semibold text-slate-900"><?php echo $address['name']; ?></p>
                                    <p class="mt-2 whitespace-pre-line text-sm text-slate-600"><?php echo $address['address']; ?></p>
                                    <p class="mt-2 text-sm text-slate-600"><?php echo $address['phone']; ?></p>
                                </div>
                                <span class="inline-flex h-7 w-7 items-center justify-center rounded-full border <?php echo $address['selected'] ? 'border-emerald-700 bg-emerald-700 text-white' : 'border-slate-300 bg-white text-slate-400'; ?>">
                                    ✓
                                </span>
                            </div>
                            <div class="mt-4 text-xs font-semibold text-slate-500"><?php echo $address['label']; ?></div>
                        </label>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm space-y-6">
                    <div>
                        <h2 class="text-lg font-semibold text-slate-900">Payment Method</h2>
                        <p class="text-sm text-slate-500 mt-1">Choose how you want to pay for this order.</p>
                    </div>

                    <div class="space-y-4">
                        <?php foreach ($paymentMethods as $method): ?>
                        <div class="radio-card rounded-3xl border p-5 transition <?php echo $method['selected'] ? 'border-emerald-500 bg-emerald-50' : 'border-slate-200 bg-slate-50'; ?>">
                            <label class="flex items-center gap-4">
                                <input type="radio" name="payment_method" class="sr-only" <?php echo $method['selected'] ? 'checked' : ''; ?>>
                                <div class="flex-1">
                                    <p class="text-sm font-semibold text-slate-900"><?php echo $method['title']; ?></p>
                                    <p class="mt-1 text-sm text-slate-600"><?php echo $method['subtitle']; ?></p>
                                </div>
                                <div class="h-5 w-5 rounded-full border <?php echo $method['selected'] ? 'border-emerald-700 bg-emerald-700' : 'border-slate-300'; ?>"></div>
                            </label>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5">
                        <p class="text-sm font-semibold text-slate-900">Card Details</p>
                        <div class="mt-4 grid gap-4">
                            <input type="text" placeholder="Card Number" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" placeholder="MM/YY" class="rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                                <input type="text" placeholder="CVV" class="rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                            </div>
                            <label class="inline-flex items-center gap-2 text-sm text-slate-600">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                                Save this card for faster future payments
                            </label>
                        </div>
                    </div>
                </div>
            </section>

            <aside class="space-y-6">
                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm space-y-5">
                    <div class="flex items-start justify-between gap-4">
                        <div>
                            <h2 class="text-lg font-semibold text-slate-900">Order Summary</h2>
                            <p class="text-sm text-slate-500 mt-1">Review charges before placing your order.</p>
                        </div>
                        <span class="inline-flex rounded-full bg-emerald-50 px-3 py-1 text-sm font-semibold text-emerald-700">3 items</span>
                    </div>

                    <div class="space-y-3 text-sm text-slate-600">
                        <div class="flex justify-between">
                            <span>Subtotal</span>
                            <span>₹<?php echo number_format($subtotal); ?></span>
                        </div>
                        <div class="flex justify-between">
                            <span>Delivery Fee</span>
                            <span class="font-semibold text-emerald-700">FREE</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Platform Fee</span>
                            <span>₹<?php echo number_format($platformFee); ?></span>
                        </div>
                    </div>

                    <div class="border-t border-slate-200 pt-4 text-lg font-semibold text-slate-900 flex items-center justify-between">
                        <span>Total</span>
                        <span>₹<?php echo number_format($total); ?></span>
                    </div>

                    <button class="w-full rounded-3xl bg-emerald-700 px-5 py-4 text-sm font-semibold text-white shadow-sm hover:bg-emerald-800 transition-colors">Place Order</button>

                    <div class="rounded-3xl border border-slate-200 bg-slate-50 p-4 text-sm text-slate-600 space-y-3">
                        <div class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-7 w-7 items-center justify-center rounded-full bg-emerald-100 text-emerald-700">✓</span>
                            <div>
                                <p class="font-semibold text-slate-900">Buyer Protection</p>
                                <p class="text-sm">Money back guarantee if item is not as described.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="mt-1 inline-flex h-7 w-7 items-center justify-center rounded-full bg-slate-100 text-slate-500">🔒</span>
                            <div>
                                <p class="font-semibold text-slate-900">Secure Checkout</p>
                                <p class="text-sm">Your payment details are encrypted and safe.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm space-y-4">
                    <h2 class="text-lg font-semibold text-slate-900">Review Items (<?php echo count($reviewItems); ?>)</h2>
                    <div class="space-y-4">
                        <?php foreach ($reviewItems as $item): ?>
                        <div class="flex items-center gap-4 rounded-3xl border border-slate-200 bg-slate-50 p-4">
                            <img class="h-16 w-16 rounded-3xl object-cover" src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
                            <div class="flex-1">
                                <p class="text-sm font-semibold text-slate-900"><?php echo $item['title']; ?></p>
                                <p class="mt-1 text-sm text-slate-600"><?php echo $item['subtitle']; ?></p>
                            </div>
                            <p class="text-sm font-semibold text-slate-900"><?php echo $item['price']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>
        </div>
    </main>
</body>
</html>
