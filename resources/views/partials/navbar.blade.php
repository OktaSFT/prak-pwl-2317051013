<header class="bg-gradient-to-r from-pink-200 via-white to-blue-200 border-b border-pink-200/40 shadow-sm">
    <div class="max-w-6xl mx-auto px-6 py-3 flex items-center justify-between">
        <div class="text-lg font-bold text-pink-600">
            OktCore
        </div>

        <!-- Navigation -->
        <nav class="flex space-x-6 text-gray-700 font-medium">
            <a href="{{ route('user.index') }}" 
               class="hover:text-pink-600 transition">User Directory</a>
            <a href="{{ route('user.create') }}" 
               class="hover:text-blue-600 transition">User Enrollment</a>
        </nav>
    </div>
</header>