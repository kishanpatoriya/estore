<?php
// Login page sample for ReSell Store
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReSell Store - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
    </style>
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">
    <header class="bg-white border-b border-slate-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <a href="#" class="text-2xl font-bold text-emerald-700">ReSell Store</a>
                <nav class="hidden md:flex items-center gap-6 text-sm text-slate-600">
                    <a href="#" class="hover:text-emerald-700">Sell an Item</a>
                    <a href="#" class="hover:text-emerald-700">How it Works</a>
                    <a href="#" class="hover:text-emerald-700">Deals</a>
                    <a href="#" class="hover:text-emerald-700">Blog</a>
                    <a href="#" class="hover:text-emerald-700">Help</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex min-h-[calc(100vh-4rem)] items-center justify-center px-4 py-10">
        <div class="w-full max-w-md rounded-3xl border border-slate-200 bg-white p-8 shadow-xl">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-slate-900">Welcome Back!</h1>
                <p class="mt-3 text-sm text-slate-500">Log in to your account to continue.</p>
            </div>

            <form action="#" method="post" class="mt-8 space-y-5">
                <div>
                    <label class="block text-sm font-medium text-slate-700">Email or Phone</label>
                    <input type="text" name="email" placeholder="Enter your email or phone" class="mt-2 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                </div>
                <div>
                    <div class="flex items-center justify-between text-sm font-medium text-slate-700">
                        <label for="password">Password</label>
                        <a href="#" class="text-emerald-700 hover:text-emerald-800">Forgot Password?</a>
                    </div>
                    <input id="password" type="password" name="password" placeholder="Enter your password" class="mt-2 w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none transition focus:border-emerald-500 focus:ring-2 focus:ring-emerald-100">
                </div>
                <button type="submit" class="w-full rounded-3xl bg-emerald-700 px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-emerald-800 transition-colors">Login</button>
            </form>

            <div class="relative my-8">
                <div class="absolute inset-x-0 top-1/2 border-t border-slate-200"></div>
                <div class="relative mx-auto inline-flex bg-white px-3 text-sm text-slate-500">or continue with</div>
            </div>

            <div class="grid gap-3">
                <button class="flex items-center justify-center gap-3 rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                    <img src="https://www.svgrepo.com/show/355037/google.svg" alt="Google" class="h-5 w-5">
                    Google
                </button>
                <button class="flex items-center justify-center gap-3 rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-slate-50">
                    <img src="https://www.svgrepo.com/show/448234/facebook-1.svg" alt="Facebook" class="h-5 w-5">
                    Facebook
                </button>
            </div>

            <p class="mt-8 text-center text-sm text-slate-500">Don’t have an account? <a href="#" class="font-semibold text-emerald-700 hover:text-emerald-800">Sign Up</a></p>
        </div>
    </main>

    <footer class="border-t border-slate-200 bg-slate-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-sm text-slate-500">
            © <?php echo date('Y'); ?> ReSell Store. Conscious consumption for a better earth.
        </div>
    </footer>
</body>
</html>
