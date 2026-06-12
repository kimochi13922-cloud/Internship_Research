<?php

require_once 'functions/common.php';
require_once 'includes/header.php';
?>

<section class="bg-white p-6 rounded-xl shadow-md border border-gray-100 mb-8">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h2 class="text-2xl font-bold text-slate-800">ข้อมูลงานวิจัย</h2>
        
        <!-- Search Bar -->
        <form action="" method="GET" class="relative w-full sm:w-72">
            <input type="text" name="search" placeholder="ค้นหางานวิจัย, ชื่อผู้แต่ง..." class="w-full pl-10 pr-4 py-2 bg-slate-50 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:bg-white focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-all text-sm">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <button type="submit" class="absolute inset-y-0 right-0 px-3 text-sm font-semibold text-orange-600 hover:text-orange-800 focus:outline-none">
                ค้นหา
            </button>
        </form>
    </div>

    <div class="rounded-lg border border-gray-200 shadow-sm overflow-hidden">
        <table class="w-full divide-y divide-gray-200 text-xs">
            <thead class="bg-slate-50">
                <tr>
                    <th scope="col" class="px-4 py-3 text-left font-semibold text-slate-700 border-b border-gray-200 leading-tight w-32">ปีที่ตีพิมพ์</th>
                    <th scope="col" class="px-4 py-3 text-left font-semibold text-slate-700 border-b border-gray-200 leading-tight">ชื่อผลงานตีพิมพ์</th>
                    <th scope="col" class="px-4 py-3 text-left font-semibold text-slate-700 border-b border-gray-200 leading-tight w-1/4">รายชื่อผู้วิจัย</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                
            </tbody>
        </table>
    </div>
</section>
<?php
require_once 'includes/footer.php';
?>