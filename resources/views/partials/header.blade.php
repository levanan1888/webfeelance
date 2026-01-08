<header
    class="fixed top-0 left-0 right-0 z-50 bg-white/90 dark:bg-background-dark/90 backdrop-blur-sm border-b border-gray-100 dark:border-gray-800 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center gap-2 text-text-main dark:text-white">
                <span class="material-symbols-outlined text-primary text-3xl">code_blocks</span>
                <h1 class="text-xl font-bold tracking-tight uppercase">Van An Team</h1>
            </div>

            <!-- Desktop Nav -->
            <nav class="hidden md:flex flex-1 justify-center">
                <ul class="flex gap-8">
                    <li><a class="text-sm font-bold uppercase tracking-wider hover:text-primary transition-colors dark:text-white"
                            href="{{ route('home') }}">Trang chủ</a></li>
                    <li><a class="text-sm font-bold uppercase tracking-wider text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                            href="{{ route('projects') }}">Dự án</a></li>
                    <li><a class="text-sm font-bold uppercase tracking-wider text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                            href="{{ route('posts.index') }}">Blog</a></li>
                    <li><a class="text-sm font-bold uppercase tracking-wider text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                            href="{{ route('about') }}">Về chúng tôi</a></li>
                    <li><a class="text-sm font-bold uppercase tracking-wider text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                            href="{{ route('contact') }}">Liên hệ</a></li>
                </ul>
            </nav>

            <!-- Search & Menu Btn -->
            <div class="flex items-center gap-4">
                <button class="p-2 text-gray-500 hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">search</span>
                </button>
                <div class="hidden md:block w-px h-6 bg-gray-200 dark:bg-gray-700"></div>
                <a href="{{ route('contact') }}"
                    class="hidden md:inline-flex items-center justify-center px-5 py-2 text-sm font-bold text-white transition-all duration-200 bg-black border border-transparent hover:bg-primary hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900 sharp-card">
                    LIÊN HỆ
                </a>

                <!-- Mobile menu button -->
                <button id="menu-toggle" class="md:hidden p-2 text-text-main dark:text-white z-50 relative">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>
    </div>
</header>