<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-r from-blue-500 to-purple-600 p-3 rounded-xl shadow-lg">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        Welcome to Khunmee Test
                    </h2>
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        @auth
                            Hello, <span class="font-bold text-blue-600 dark:text-blue-400">{{ Auth::user()->name }}</span>!
                            •
                            <span class="font-mono text-xs">{{ now()->format('d/m/Y H:i') }}</span>
                        @else
                            Hello, Guest User! •
                            <span class="font-mono text-xs">{{ now()->format('d/m/Y H:i') }}</span>
                        @endauth
                    </p>
                </div>
            </div>
            <div class="hidden sm:block">
                <div
                    class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 px-3 py-1 rounded-full text-xs font-medium">
                    🟢 Online
                </div>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- Welcome Hero Section -->
            <div
                class="bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 border border-gray-100 dark:border-gray-700 mt-3 p-2 sm:rounded-lg">
                <div class="px-8 py-12">
                    <div class="max-w-4xl mx-auto">

                        <!-- README Section -->
                        <div class="text-center mb-12">
                            <h1 class="text-3xl font-bold text-gray-800 dark:text-white mb-6">
                                <span
                                    class="text-xl text-gray-800 dark:text-gray-200 bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">📋
                                    README</span>
                            </h1>

                            <div
                                class="bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900/20 dark:to-purple-900/20 rounded-lg p-6 text-left">
                                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                                    <span
                                        class="font-bold text-blue-600 dark:text-blue-400">ระบบเก็บข้อมูลการแก้ไขชื่อสินค้า</span>
                                    โดยที่ในระบบจะมีสินค้า <span
                                        class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded font-semibold">5
                                        ตัว</span><br>
                                    สินค้ามีแค่ <span
                                        class="font-semibold text-green-600 dark:text-green-400">ชื่อที่ต้องใช้ในการแก้ไข</span>
                                    และมีพนักงาน <span
                                        class="bg-yellow-100 dark:bg-yellow-900 text-yellow-800 dark:text-yellow-200 px-2 py-1 rounded font-semibold">3
                                        คน</span> ในระบบ<br>
                                    <span
                                        class="text-sm text-gray-500 dark:text-gray-400 italic">(ไม่ต้องทำหน้าเพิ่มพนักงานให้ใส่ในฐานข้อมูลโดยตรง)</span>
                                </p>

                                <div class="mt-6 p-4 bg-amber-50 dark:bg-amber-900/20 ">
                                    <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                                        <span class="font-bold text-gray-800 dark:text-gray-200">📊
                                            ข้อมูลที่ระบบเก็บ:</span><br>
                                        • <span class="font-bold">ใครเป็นคนแก้ไข</span><br>
                                        • <span class="font-bold">ชื่อสินค้าเดิมชื่อว่าอะไร</span><br>
                                        • <span class="font-bold">แก้ไขตอนไหน</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Features Section -->
                        <div class="mb-12">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">
                                <span
                                    class="text-gray-800 dark:text-gray-200 bg-clip-text bg-gradient-to-r from-green-600 to-teal-600">📱
                                    หน้าจอระบบ</span>
                            </h2>

                            <div class="grid gap-4">
                                <div
                                    class="bg-gradient-to-r from-green-50 to-emerald-50 dark:from-green-900/20 dark:to-emerald-900/20 p-4 ">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        <span class="font-bold text-green-600 dark:text-green-400">🛍️
                                            หน้ารายการสินค้า</span><br>
                                        <span class="text-sm">แสดงแค่ชื่อกับรหัสและปุ่มแก้ไข</span>
                                    </p>
                                </div>

                                <div
                                    class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 p-4 ">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        <span class="font-bold text-blue-600 dark:text-blue-400">✏️
                                            หน้าแก้ไขชื่อสินค้า</span><br>
                                        <span class="text-sm">ฟอร์มสำหรับเปลี่ยนชื่อสินค้า</span>
                                    </p>
                                </div>

                                <div
                                    class="bg-gradient-to-r from-purple-50 to-pink-50 dark:from-purple-900/20 dark:to-pink-900/20 p-4 ">
                                    <p class="text-gray-700 dark:text-gray-300">
                                        <span class="font-bold text-purple-600 dark:text-purple-400">🔐
                                            หน้าเข้าสู่ระบบ</span><br>
                                        <span class="text-sm">ใช้ระบบล็อกอินของ Laravel</span>
                                    </p>
                                </div>
                            </div>

                            <div class="mt-6 mb-6 p-4 bg-red-50 dark:bg-red-900/20 ">
                                <p class="text-gray-700 dark:text-gray-300 font-medium">
                                    <span class="font-bold">⚠️ หมายเหตุ:</span>
                                    การตรวจข้อมูลการแก้ไขจะเช็คในฐานข้อมูลที่ส่งมา</br>
                                </p>
                            </div>
                        </div>

                        <!-- System Design Section -->
                        <div class="bg-gradient-to-r from-gray-50 to-slate-50 dark:from-gray-700 dark:to-slate-700 ">
                            <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6 text-center">
                                <span
                                    class="text-gray-800 dark:text-gray-200 bg-clip-text bg-gradient-to-r from-indigo-600 to-purple-600">🏗️
                                    ออกแบบระบบ</span>
                            </h2>

                            <div class="space-y-6">
                                <!-- Products Data -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm">
                                    <h3
                                        class="text-lg font-bold text-green-600 dark:text-green-400 mb-4 flex items-center">
                                        <span class="mr-2">📦</span> ข้อมูลสินค้า
                                    </h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 1,
                                                Name: Product A</span>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 2,
                                                Name: Product B</span>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 3,
                                                Name: Product C</span>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 4,
                                                Name: Product D</span>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg md:col-span-2">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 5,
                                                Name: Product E</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Users Data -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm">
                                    <h3
                                        class="text-lg font-bold text-green-600 dark:text-green-400 mb-4 flex items-center">
                                        <span class="mr-2">👥</span> ข้อมูลผู้ใช้ระบบ
                                    </h3>
                                    <div class="space-y-3">
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 1,
                                                Name: test1, Email: test1@email.com</span>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 2,
                                                Name: test2, Email: test2@email.com</span>
                                        </div>
                                        <div class="bg-blue-50 dark:bg-blue-900/20 p-3 rounded-lg">
                                            <span class="font-mono text-sm text-gray-700 dark:text-gray-300">ID: 3,
                                                Name: test3, Email: test3@email.com</span>
                                        </div>
                                    </div>
                                    <div class="mt-4 p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg">
                                        <p class="text-sm text-gray-700 dark:text-gray-300">
                                            <span class="font-bold">🔑 Password:</span> 123456 (สำหรับทุกผู้ใช้)
                                        </p>
                                    </div>
                                </div>

                                <!-- System Workflow -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm">
                                    <h3
                                        class="text-lg font-bold text-gray-800 dark:text-gray-200 mb-4 flex items-center">
                                        <span class="mr-2">⚙️</span> การทำงานของระบบ
                                    </h3>
                                    <div class="space-y-4">
                                        <div class="flex items-start space-x-3">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700 dark:text-gray-300">
                                                <span class="font-semibold">หน้ารายการสินค้า:</span>
                                                แสดงรายการสินค้าทั้งหมดที่มีในระบบ พร้อมปุ่มสำหรับแก้ไขชื่อสินค้า
                                            </p>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700 dark:text-gray-300">
                                                <span class="font-semibold">หน้าแก้ไขชื่อสินค้า:</span>
                                                แสดงข้อมูลสินค้าที่เลือกแก้ไข พร้อมฟอร์มสำหรับเปลี่ยนชื่อสินค้า
                                            </p>
                                        </div>
                                        <div class="flex items-start space-x-3">
                                            <div class="w-2 h-2 bg-purple-500 rounded-full mt-2 flex-shrink-0"></div>
                                            <p class="text-gray-700 dark:text-gray-300">
                                                <span class="font-semibold">ระบบล็อกอิน:</span> ใช้ระบบล็อกอินของ
                                                Laravel เพื่อให้ผู้ใช้สามารถเข้าสู่ระบบได้
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Database Schema -->
                                <div class="bg-white dark:bg-gray-800 rounded-lg p-6 shadow-sm">
                                    <h3
                                        class="text-lg font-bold text-indigo-600 dark:text-indigo-400 mb-4 flex items-center">
                                        <span class="mr-2">🗄️</span> โครงสร้างฐานข้อมูล
                                    </h3>
                                    <div
                                        class="bg-indigo-50 dark:bg-gray-800 p-4 rounded-lg border border-indigo-200 dark:border-indigo-700">
                                        <p class="text-gray-700 dark:text-gray-200 mb-4">ฐานข้อมูลใช้ mysql
                                            ชื่อฐานข้อมูล <span
                                                class="font-mono bg-indigo-100 dark:bg-indigo-800 dark:text-indigo-200 px-2 py-1 rounded text-sm font-semibold border border-indigo-200 dark:border-indigo-600">khunmee_test</span>
                                        </p>

                                        <p class="text-gray-700 dark:text-gray-200 mb-4">
                                            ชื่อสินค้าที่ได้มีการแก้จะถูกบันทึกไว้ในตาราง
                                            <span
                                                class="font-mono bg-indigo-100 dark:bg-indigo-800 dark:text-indigo-200 px-2 py-1 rounded text-sm font-semibold border border-indigo-200 dark:border-indigo-600">product_edit_logs</span>
                                        </p>
                                        <div class="space-y-3 text-sm">
                                            <div
                                                class="flex items-center space-x-3 p-2 bg-white/50 dark:bg-gray-800/50 rounded">
                                                <span
                                                    class="w-2 h-2 bg-indigo-500 dark:bg-indigo-400 rounded-full flex-shrink-0"></span>
                                                <span
                                                    class="font-mono font-semibold text-indigo-700 dark:text-indigo-300">product_id</span>
                                                <span class="text-gray-600 dark:text-gray-300">→ เชื่อมโยงกับ products
                                                    table</span>
                                            </div>
                                            <div
                                                class="flex items-center space-x-3 p-2 bg-white/50 dark:bg-gray-800/50 rounded">
                                                <span
                                                    class="w-2 h-2 bg-indigo-500 dark:bg-indigo-400 rounded-full flex-shrink-0"></span>
                                                <span
                                                    class="font-mono font-semibold text-indigo-700 dark:text-indigo-300">user_id</span>
                                                <span class="text-gray-600 dark:text-gray-300">→ เชื่อมโยงกับ users
                                                    table</span>
                                            </div>
                                            <div
                                                class="flex items-center space-x-3 p-2 bg-white/50 dark:bg-gray-800/50 rounded">
                                                <span
                                                    class="w-2 h-2 bg-indigo-500 dark:bg-indigo-400 rounded-full flex-shrink-0"></span>
                                                <span
                                                    class="font-mono font-semibold text-indigo-700 dark:text-indigo-300">old_name,
                                                    new_name, edited_at</span>
                                                <span class="text-gray-600 dark:text-gray-300">→ ข้อมูลการแก้ไข</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
