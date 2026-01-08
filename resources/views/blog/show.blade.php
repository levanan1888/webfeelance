@extends('layouts.app')

@section('title', 'Chi tiết dự án - Van An Team')

@section('content')
    <div class="flex flex-col items-center pb-20">
        <!-- Article Header Section -->
        <article class="w-full max-w-[800px] px-4 pt-10 sm:px-6 lg:px-8">
            <!-- Breadcrumbs -->
            <div class="mb-6 flex items-center gap-2 text-sm">
                <a class="flex items-center gap-1 font-medium text-gray-500 hover:text-primary transition-colors"
                    href="{{ route('projects') }}">
                    <span class="material-symbols-outlined text-[16px]">arrow_back</span>
                    Quay lại danh sách
                </a>
                <span class="text-gray-500/40">/</span>
                <span class="font-medium text-text-main">Website</span>
            </div>
            <!-- Title -->
            <h1
                class="mb-6 text-4xl font-black leading-tight tracking-tight text-text-main dark:text-white md:text-5xl lg:leading-[1.1]">
                Thiết kế Website Doanh Nghiệp ABC
            </h1>
            <!-- Metadata -->
            <div
                class="mb-8 flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between border-b border-gray-200 dark:border-gray-800 pb-8">
                <div class="flex items-center gap-4">
                    <div>
                        <p class="font-bold text-text-main dark:text-white">Van An Team</p>
                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <span>Oct 24, 2023</span>
                            <span class="h-1 w-1 rounded-full bg-gray-400"></span>
                            <span>Hoàn thành</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Image -->
            <figure class="mb-12 overflow-hidden rounded-xl shadow-sm">
                <div class="aspect-[16/9] w-full bg-gray-100 bg-cover bg-center"
                    style="background-image: url('https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80');">
                </div>
            </figure>
            <!-- Content Body -->
            <div class="prose prose-lg prose-green max-w-none text-text-main dark:text-gray-300">
                <p class="mb-8 text-xl leading-relaxed text-text-main/80 dark:text-gray-200 font-medium">
                    Dự án này tập trung vào việc xây dựng nhận diện thương hiệu số cho Công ty ABC, với mục tiêu tăng trải
                    nghiệm người dùng và tỷ lệ chuyển đổi.
                </p>
                <h2 class="text-2xl font-bold mt-8 mb-4">Yêu cầu dự án</h2>
                <p class="mb-4">
                    Khách hàng cần một website hiện đại, tốc độ tải trang nhanh và tương thích hoàn hảo trên mọi thiết bị di
                    động. Ngoài ra, hệ thống quản trị cần đơn giản, dễ sử dụng.
                </p>
                <h2 class="text-2xl font-bold mt-8 mb-4">Giải pháp của chúng tôi</h2>
                <ul class="list-disc pl-5 mb-6 space-y-2">
                    <li>Sử dụng Laravel Framework để đảm bảo hiệu năng và bảo mật.</li>
                    <li>Thiết kế UI/UX theo phong cách Minimalism.</li>
                    <li>Tối ưu hóa SEO On-page ngay từ cấu trúc code.</li>
                </ul>
                <div class="my-10 border-l-4 border-primary bg-primary/5 p-6 rounded-r-lg">
                    <p class="text-xl font-medium italic leading-relaxed text-text-main dark:text-white">
                        "Website mới đã giúp chúng tôi tăng 200% lượng khách hàng liên hệ qua form trực tuyến." - CEO Công
                        ty ABC
                    </p>
                </div>
            </div>
        </article>
    </div>
@endsection