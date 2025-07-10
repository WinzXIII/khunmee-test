<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center space-x-3">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Edit Product
                </h2>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Modify product information • ID: {{ $product->id }}
                </p>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Back Button -->
            <div class="mb-4 mt-3">
                <a href="{{ route('products.index') }}" 
                   class="inline-flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-gray-800 dark:hover:text-white transition duration-200">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                    <span class="font-medium">Back to Products</span>
                </a>
            </div>

            <!-- Main Edit Form -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-xl border border-gray-200 dark:border-gray-700">
                
                <!-- Card Header -->
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-gray-700 dark:to-gray-600 px-6 py-4 border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200">Product Information</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Update the product details below</p>
                        </div>
                        <div class="text-xs text-gray-500 dark:text-gray-400">
                            <div class="font-mono">{{ $product->updated_at->format('d/m/Y H:i') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-6">
                    <form method="POST" action="{{ route('products.update', $product->id) }}" class="space-y-6">
                        @csrf

                        <!-- Current Product Name (Read-only) -->
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 border-l-4 border-gray-400">
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                📋 Current Product Name
                            </label>
                            <div class="bg-white dark:bg-gray-700 dark:bg-gray-600 rounded-md px-4 py-3 border border-gray-300 dark:border-gray-500">
                                <span class="text-gray-800 dark:text-gray-200 font-medium">{{ $product->name }}</span>
                                <span class="text-xs text-gray-500 dark:text-gray-400 ml-2">(Read-only)</span>
                            </div>
                        </div>

                        <!-- New Product Name (Editable) -->
                        <div class="rounded-lg p-4 border-l-4 border-blue-500">
                            <label for="product_name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                ✏️ New Product Name <span class="text-red-500">*</span>
                            </label>
                            <input type="text" 
                                   id="product_name"
                                   name="name" 
                                   value="{{ old('name', $product->name) }}"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 text-gray-800 dark:text-gray-200 transition duration-200"
                                   placeholder="Enter new product name...">
                            
                            @error('name')
                                <p class="mt-2 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
                            @enderror
                            
                        </div>

                        <!-- Product Metadata -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4 mb-2">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">📅 Created</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400 font-mono">{{ $product->created_at->format('d/m/Y H:i') }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">{{ $product->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
                                <h4 class="text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">🔄 Last Modified</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400 font-mono">{{ $product->updated_at->format('d/m/Y H:i') }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">{{ $product->updated_at->diffForHumans() }}</p>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center space-y-3 sm:space-y-0 pt-6 border-t border-gray-200 dark:border-gray-600">
                            <div class="flex space-x-3">
                                <button type="submit" 
                                        class="btn-update inline-flex items-center space-x-2 px-6 py-3 rounded-lg font-medium transition-all duration-200 transform hover:scale-105">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    <span>Update Product</span>
                                </button>
                            </div>
                            
                            <div class="text-xs text-gray-500 dark:text-gray-400 mt-2">
                                <span>🕒 Current time: </span>
                                <span class="font-mono">10/07/2025 15:12</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Update Button */
        .btn-update {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.4);
        }

        .btn-update:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.6);
            transform: translateY(-2px) scale(1.02);
        }

        .btn-update:active {
            transform: translateY(0) scale(0.98);
        }

        /* Cancel Button */
        .btn-cancel {
            background: white;
            color: #6b7280;
            border: 2px solid #e5e7eb;
        }

        .btn-cancel:hover {
            background: #f9fafb;
            border-color: #d1d5db;
            color: #374151;
            transform: translateY(-1px);
        }

        /* Dark mode for buttons */
        .dark .btn-cancel {
            background: #374151;
            color: #d1d5db;
            border-color: #4b5563;
        }

        .dark .btn-cancel:hover {
            background: #4b5563;
            border-color: #6b7280;
            color: #f3f4f6;
        }

        /* Form focus effects */
        input:focus {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.15);
        }

        /* Animation for form elements */
        .bg-blue-50, .bg-gray-50 {
            transition: all 0.3s ease;
        }

        .bg-blue-50:hover {
            background-color: rgb(219, 234, 254);
        }

        .dark .bg-blue-50:hover {
            background-color: rgba(59, 130, 246, 0.1);
        }
    </style>
</x-app-layout>