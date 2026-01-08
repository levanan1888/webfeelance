@extends('layouts.app')

@section('title', 'Dự án & Tin tức - Van An Team')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 w-full">
        <!-- Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="flex mb-8 text-sm font-medium text-gray-500 dark:text-gray-400">
            <ol class="flex items-center space-x-2">
                <li><a class="hover:text-primary transition-colors" href="{{ route('home') }}">Trang chủ</a></li>
                <li><span class="material-symbols-outlined text-[16px] align-middle">chevron_right</span></li>
                <li aria-current="page" class="text-text-main dark:text-white">Dự án & Tin tức</li>
            </ol>
        </nav>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            <!-- Left Column: Article Feed (Main Content) -->
            <div class="lg:col-span-8 space-y-12">
                <!-- Page Heading -->
                <div class="border-b border-gray-200 dark:border-gray-800 pb-6">
                    <h2 class="text-3xl md:text-4xl font-bold text-text-main dark:text-white mb-3">Dự án mới nhất</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-300">Khám phá các sản phẩm và giải pháp công nghệ chúng
                        tôi đã thực hiện.</p>
                </div>
                <!-- Articles List -->
                <div class="flex flex-col gap-10">
                    <!-- Article Card 1 -->
                    <article class="flex flex-col md:flex-row gap-6 items-start group">
                        <div class="w-full md:w-1/3 aspect-video rounded-lg overflow-hidden bg-gray-200 dark:bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transform group-hover:scale-105 transition-transform duration-500"
                                style='background-image: url("https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80");'>
                            </div>
                        </div>
                        <div class="flex-1 flex flex-col h-full justify-between">
                            <div>
                                <div
                                    class="flex items-center gap-2 mb-2 text-xs font-semibold uppercase tracking-wider text-primary">
                                    <span>Website</span>
                                    <span class="w-1 h-1 rounded-full bg-gray-300 dark:bg-gray-600"></span>
                                    <span class="text-gray-500 dark:text-gray-400">Oct 2023</span>
                                </div>
                                <h3
                                    class="text-2xl font-bold text-text-main dark:text-white mb-3 group-hover:text-primary transition-colors">
                                    <a href="{{ route('blog.show', ['id' => 1]) }}">Thiết kế Website Doanh Nghiệp ABC</a>
                                </h3>
                                <p
                                    class="text-gray-600 dark:text-gray-300 mb-4 line-clamp-2 md:line-clamp-3 leading-relaxed">
                                    Dự án thiết kế website doanh nghiệp với giao diện hiện đại, chuẩn SEO và tích hợp hệ
                                    thống CRM quản lý khách hàng.
                                </p>
                            </div>
                            <a class="inline-flex items-center text-sm font-semibold text-text-main dark:text-white hover:text-primary transition-colors group/link"
                                href="{{ route('blog.show', ['id' => 1]) }}">
                                Xem chi tiết
                                <span
                                    class="material-symbols-outlined text-[18px] ml-1 transition-transform group-hover/link:translate-x-1">arrow_forward</span>
                            </a>
                        </div>
                    </article>
                    <div class="h-px bg-gray-200 dark:bg-gray-800 w-full"></div>
                    <!-- Add more articles mostly identical structure as needed -->
                </div>
                <!-- Pagination -->
                <div class="pt-8 border-t border-gray-200 dark:border-gray-800 flex justify-center items-center gap-2">
                    <button
                        class="flex items-center justify-center w-10 h-10 rounded-lg bg-primary text-black font-semibold shadow-sm shadow-primary/30">1</button>
                    <button
                        class="flex items-center justify-center w-10 h-10 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">2</button>
                </div>
            </div>
            <!-- Right Column: Sidebar -->
            <aside class="lg:col-span-4 space-y-8">
                <!-- About Widget -->
                <div
                    class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-sm border border-gray-100 dark:border-gray-800/50">
                    <div class="flex items-center gap-4 mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-text-main dark:text-white">Van An Team</h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">Web Developer & Designer</p>
                        </div>
                    </div>
                    <p class="text-gray-600 dark:text-gray-300 text-sm mb-4 leading-relaxed">
                        Chúng tôi chuyên cung cấp các giải pháp công nghệ toàn diện cho doanh nghiệp vừa và nhỏ.
                    </p>
                </div>
            </aside>
        </div>
    </div>
@endsection