@php
    $products = [
        [
            'id' => 1,
            'name' => 'Nomad Leather Backpack',
            'slug' => 'nomad-leather-backpack',
            'description' => 'Handcrafted full-grain leather backpack designed for daily transit and weekend escapes.',
            'price' => 189.0,
            'category' => 'Travel',
            'image_url' => '/images/products/backpack-charcoal.jpg',
            'is_new' => true,
            'on_sale' => false,
            'stock_status' => 'in_stock',
            'rating' => 4.8,
            'colors' => ['Charcoal', 'Cognac', 'Midnight'],
        ],
        [
            'id' => 2,
            'name' => 'Aeon Wireless Headphones',
            'slug' => 'aeon-wireless-headphones',
            'description' => 'Active noise cancelling with 40-hour battery life and spatial audio support.',
            'price' => 299.99,
            'category' => 'Electronics',
            'image_url' => '/images/products/aeon-headphones.jpg',
            'is_new' => false,
            'on_sale' => true,
            'sale_price' => 249.0,
            'stock_status' => 'low_stock',
            'rating' => 4.9,
            'colors' => ['Silver', 'Space Grey'],
        ],
        [
            'id' => 3,
            'name' => 'Minimalist Desk Lamp',
            'slug' => 'minimalist-desk-lamp',
            'description' => 'Adjustable LED lamp with touch-sensitive dimming and a solid oak base.',
            'price' => 85.0,
            'category' => 'Lifestyle',
            'image_url' => '/images/products/desk-lamp.jpg',
            'is_new' => false,
            'on_sale' => false,
            'stock_status' => 'in_stock',
            'rating' => 4.5,
            'colors' => ['Matte Black', 'White'],
        ],
        [
            'id' => 4,
            'name' => 'Terra Cotton Overshirt',
            'slug' => 'terra-cotton-overshirt',
            'description' => 'Heavyweight organic cotton overshirt, perfect for layering during transitional seasons.',
            'price' => 110.0,
            'category' => 'Apparel',
            'image_url' => '/images/products/cotton-overshirt.jpg',
            'is_new' => true,
            'on_sale' => false,
            'stock_status' => 'in_stock',
            'rating' => 4.7,
            'colors' => ['Olive', 'Sand', 'Navy'],
        ],
        [
            'id' => 5,
            'name' => 'Ceramic Pour-Over Set',
            'slug' => 'ceramic-pour-over-set',
            'description' => 'A complete slow-brew coffee kit including dripper, server, and bamboo stand.',
            'price' => 65.0,
            'category' => 'Lifestyle',
            'image_url' => '/images/products/coffee-set.jpg',
            'is_new' => false,
            'on_sale' => true,
            'sale_price' => 45.0,
            'stock_status' => 'out_of_stock',
            'rating' => 4.6,
            'colors' => ['Stone', 'Obsidian'],
        ],
        [
            'id' => 6,
            'name' => 'Carbon Fiber Wallet',
            'slug' => 'carbon-fiber-wallet',
            'description' => 'RFID blocking minimalist wallet with a lifetime warranty and slim profile.',
            'price' => 55.0,
            'category' => 'Accessories',
            'image_url' => '/images/products/carbon-wallet.jpg',
            'is_new' => true,
            'on_sale' => false,
            'stock_status' => 'in_stock',
            'rating' => 4.4,
            'colors' => ['Forged Carbon', 'Matte'],
        ],
    ];
@endphp

<div class="flex flex-col lg:flex-row gap-12">
    <!-- Sidebar Filters (Hidden on Mobile) -->
    <aside class="hidden lg:block w-64 flex-shrink-0">
        <div class="space-y-8 sticky top-28">
            <div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900 mb-4">Categories</h3>
                <ul class="space-y-2 text-gray-600">
                    <li><label class="flex items-center gap-3 cursor-pointer hover:text-indigo-600"><input type="checkbox"
                                class="rounded text-indigo-600 focus:ring-indigo-500"> Tech Gear</label></li>
                    <li><label class="flex items-center gap-3 cursor-pointer hover:text-indigo-600"><input type="checkbox"
                                class="rounded text-indigo-600 focus:ring-indigo-500"> Lifestyle</label></li>
                    <li><label class="flex items-center gap-3 cursor-pointer hover:text-indigo-600"><input
                                type="checkbox" class="rounded text-indigo-600 focus:ring-indigo-500"> Travel</label>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="text-sm font-bold uppercase tracking-wider text-slate-900 mb-4">Price Range</h3>
                <input type="range" class="w-full accent-indigo-600" min="0" max="1000">
                <div class="flex justify-between text-xs text-gray-500 mt-2">
                    <span>$0</span>
                    <span>$1000+</span>
                </div>
            </div>
        </div>
    </aside>

    <!-- Product Grid -->
    <div class="flex-1">
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-x-8 gap-y-12">

            <!-- Start Product Loop -->
            @foreach ($products as $product)
                <div class="group relative">
                    <!-- Image Wrapper -->
                    <div class="relative aspect-[4/5] w-full overflow-hidden rounded-3xl bg-gray-100 mb-4">
                        <img src="{{ $product['image_url'] }}" alt=""
                            class="h-full w-full object-cover object-center group-hover:scale-105 transition-transform duration-700 ease-in-out">

                        <!-- Floating Badge -->
                        @if ($product['is_new'])
                            <span
                                class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold tracking-widest uppercase shadow-sm">New</span>
                        @endif

                        <!-- Heart Icon -->
                        <button
                            class="absolute top-4 right-4 p-2 rounded-full bg-white/80 backdrop-blur text-gray-900 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-indigo-600 hover:text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </button>

                        <!-- Add to Cart Overlay -->
                        <div
                            class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                            <button
                                class="w-full bg-slate-900 text-white py-3 rounded-2xl font-semibold shadow-xl flex items-center justify-center gap-2 hover:bg-indigo-600">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                Add to Cart
                            </button>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="flex justify-between items-start px-1">
                        <div>
                            <h3 class="text-lg font-bold text-slate-900 tracking-tight leading-tight">
                                <a href="/product/{{ $product['id'] }}">
                                    <span class="absolute inset-0"></span> <!-- Makes the whole card clickable -->
                                    {{ $product['name'] }}
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500 mt-1">{{ $product['category'] }}</p>
                        </div>
                        <p class="text-lg font-black text-indigo-600">${{ number_format($product['price'], 2) }}</p>
                    </div>
                </div>
            @endforeach
            <!-- End Product Loop -->

        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center border-t border-gray-100 pt-10">
            <nav class="flex gap-2">
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-xl bg-indigo-600 text-white font-bold">1</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-xl hover:bg-gray-100 text-gray-600 font-bold">2</button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-xl hover:bg-gray-100 text-gray-600 font-bold">3</button>
            </nav>
        </div>
    </div>
</div>
