@extends('layouts.app')

@section('title', 'Về chúng tôi - Van An Team')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
        <div class="mb-16 text-center max-w-3xl mx-auto">
            <h1 class="text-4xl lg:text-5xl font-black tracking-tight text-text-main dark:text-white mb-4">
                Về Van An Team
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                Chúng tôi là những lập trình viên đam mê công nghệ, cam kết mang lại giá trị thực cho khách hàng.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="text-3xl font-bold mb-4 text-text-main dark:text-white">Sứ mệnh của chúng tôi</h2>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed mb-6">
                    Giúp các doanh nghiệp vừa và nhỏ chuyển đổi số thành công bằng những sản phẩm web chất lượng cao, dễ sử
                    dụng và tối ưu chi phí. Chúng tôi không chỉ viết code, chúng tôi xây dựng giải pháp.
                </p>
                <ul class="space-y-3">
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span class="text-text-main dark:text-white">Chất lượng code chuẩn mực</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span class="text-text-main dark:text-white">Tối ưu hóa SEO & Hiệu năng</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">check_circle</span>
                        <span class="text-text-main dark:text-white">Hỗ trợ tận tâm 24/7</span>
                    </li>
                </ul>
            </div>
            <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-square md:aspect-auto h-full min-h-[400px]">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                    alt="Team working together" class="absolute inset-0 w-full h-full object-cover">
            </div>
        </div>
    </div>
@endsection