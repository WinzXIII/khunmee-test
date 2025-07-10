<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Products List
            </h2>
            <div class="text-sm text-gray-600 dark:text-gray-400">
                All {{ count($products) }} products
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-6" id="productsGrid">
                @foreach($products as $product)
                    <div class="product-card bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700 mt-6 p-4 sm:rounded-lg">
                        <!-- Product Details -->
                        <div class="p-5 ">
                            {{-- Product ID --}}
                            <h2 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-3">
                                ID : {{ $product->id }}
                            </h2>

                            <!-- Product Name -->
                            <h3 class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-3 product-name line-clamp-2 min-h-[3.5rem]">
                                {{ $product->name }}
                            </h3>

                            <!-- Product Info -->
                            <div class="space-y-2 mb-4 mt-2">
                                <div class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                                    <span class="mr-2 font-medium">📅 Created at :</span>
                                    <span class="font-mono">{{ $product->created_at->format('d/m/Y H:i') }}</span>
                                </div>
                                <div class="flex items-center text-sm text-gray-600 dark:text-gray-300">
                                    <span class="mr-2 font-medium">🔄 Last update :</span>
                                    <span class="font-mono">{{ $product->updated_at->format('d/m/Y H:i') }}</span>
                                </div>
                            </div>

                            <!-- Actions -->
                            <div class="flex space-x-2 mt-4 mb-1">
                                <a href="{{ route('products.edit', $product->id) }}" 
                                    class="btn-edit flex-1 text-center py-3 px-4 rounded-lg transition-all duration-200 flex items-center justify-center space-x-2 text-sm font-medium shadow-lg transform hover:scale-105">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                    <span>Edit Product</span>
                                </a>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-b-xl px-5 py-3 border-t border-gray-100 dark:border-gray-600 rounded-lg">
                            <div class="flex justify-between items-center text-xs">
                                <span class="text-gray-500 dark:text-gray-400 font-medium">
                                    ⏰ Updated {{ $product->updated_at->diffForHumans() }}
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State -->
            @if(count($products) == 0)
                <div class="text-center py-16">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-12 border border-gray-200 dark:border-gray-700">
                        <div class="text-6xl mb-4">📦</div>
                        <h3 class="text-xl font-semibold text-gray-700 dark:text-gray-200 mb-2">There are no products.</h3>
                        <p class="text-gray-500 dark:text-gray-400 mb-6">Start by adding your first product</p>
                        <button class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 text-white px-8 py-3 rounded-lg transition-all duration-200 shadow-lg transform hover:scale-105">
                            ➕ Add First Product
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <style>
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .product-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .product-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        /* เพิ่ม CSS สำหรับ dark mode contrast */
        .dark .product-card:hover {
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3), 0 10px 10px -5px rgba(0, 0, 0, 0.2);
        }

        /* Custom Edit Button Styles */
        .btn-edit {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .btn-edit:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            color: white;
            transform: translateY(-2px) scale(1.02);
        }

        .btn-edit:active {
            transform: translateY(0) scale(0.98);
        }

        /* Ripple Effect */
        .btn-edit::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transition: width 0.6s, height 0.6s, top 0.6s, left 0.6s;
            transform: translate(-50%, -50%);
        }

        .btn-edit:active::before {
            width: 300px;
            height: 300px;
        }
    </style>

</x-app-layout>