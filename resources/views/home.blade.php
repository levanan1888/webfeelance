@extends('layouts.app')

@section('title', 'Van An Team - Creative & Dev')
@section('description', 'Đội ngũ thiết kế và phát triển website chuyên nghiệp.')

@section('content')
    <!-- Vanilla Tilt JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.2/vanilla-tilt.min.js"></script>

    <!-- Custom Styles for this page -->
    <style>
        .glitch-text {
            position: relative;
        }

        .glitch-text::before,
        .glitch-text::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f8fcfa;
            /* matches background */
        }

        .glitch-text::before {
            left: 2px;
            text-shadow: -1px 0 #ff00c1;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }

        .glitch-text::after {
            left: -2px;
            text-shadow: -1px 0 #00fff9;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 3s infinite linear alternate-reverse;
        }

        @keyframes glitch-anim {
            0% {
                clip: rect(31px, 9999px, 94px, 0);
            }

            4.166666667% {
                clip: rect(91px, 9999px, 43px, 0);
            }

            /* truncated for brevity, standard glitch effect steps */
            100% {
                clip: rect(67px, 9999px, 62px, 0);
            }
        }

        .hover-reveal-text {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            transition: clip-path 0.5s ease;
        }

        /* Neo-Brutalism / Sharp Edges Styles */
        .sharp-card {
            border: 1px solid #e5e7eb;
            transition: all 0.1s;
            /* Faster transition for tilt */
            transform-style: preserve-3d;
            transform: perspective(1000px);
        }

        .dark .sharp-card {
            border-color: #333;
        }

        /* 3D Parallax Internal Elements */
        .parallax-img {
            transform: translateZ(20px);
            transition: transform 0.3s ease-out;
        }

        .parallax-content {
            transform: translateZ(40px);
        }

        .parallax-meta {
            transform: translateZ(60px);
        }

        /* Enhanced Hover State */
        .sharp-card:hover {
            /* transform handled by vanilla-tilt */
            box-shadow: 12px 12px 0px 0px #13ec6d, 0 20px 50px rgba(19, 236, 109, 0.2);
            /* Primary color shadow */
            border-color: #13ec6d;
            z-index: 10;
        }

        .group:hover .parallax-img {
            transform: translateZ(30px) scale(1.1);
        }

        .btn-sharp {
            transition: all 0.2s;
        }

        .btn-sharp:hover {
            transform: translate(-2px, -2px);
            box-shadow: 4px 4px 0px 0px currentColor;
        }

        .btn-sharp:active {
            transform: translate(0px, 0px);
            box-shadow: 0px 0px 0px 0px currentColor;
        }

        /* Magnetic Button Effect */
        .magnetic-btn {
            display: inline-block;
            transition: transform 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        /* Modal Animation */
        #project-modal {
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        #project-modal.open {
            opacity: 1;
            visibility: visible;
        }

        #project-modal .modal-content {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: scale(0.9) translateY(20px);
        }

        #project-modal.open .modal-content {
            transform: scale(1) translateY(0);
        }
    </style>

    <!-- Hero Section: Sharp & Edgy -->
    <section
        class="relative min-h-screen flex items-center justify-center overflow-hidden bg-background-light dark:bg-background-dark">
        <!-- Grid Background -->
        <div
            class="absolute inset-0 z-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]">
        </div>

        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary/20 blur-[120px] rounded-full animate-pulse z-0">
        </div>

        <div class="relative z-10 text-center px-4 w-full max-w-7xl mx-auto">
            <div class="mb-8 overflow-hidden">
                <div class="inline-block px-4 py-2 border border-black dark:border-white text-sm font-bold tracking-[0.2em] uppercase bg-white dark:bg-black"
                    data-aos="fade-down">
                    Van An Team
                </div>
            </div>

            <h1 class="text-7xl md:text-9xl font-black text-text-main dark:text-white mb-8 tracking-tighter leading-[0.85]"
                data-aos="zoom-in" data-aos-duration="1000">
                DIGITAL<br>
                <span class="text-primary italic pr-4">SOLUTIONS</span>
            </h1>

            <p class="text-xl md:text-2xl font-mono text-gray-600 dark:text-gray-400 max-w-3xl mx-auto mb-12 border-l-4 border-primary pl-6 text-left"
                data-aos="fade-up" data-aos-delay="200">
                Chúng tôi tạo ra các sản phẩm số sắc nét, hiệu năng cao và giải quyết triệt để vấn đề của doanh nghiệp.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center" data-aos="fade-up" data-aos-delay="400">
                <a href="#projects"
                    class="magnetic-btn btn-sharp px-10 py-4 bg-primary text-black font-black text-lg uppercase border border-black hover:bg-white hover:text-black">
                    Xem Dự Án
                </a>
                <a href="{{ route('contact') }}"
                    class="magnetic-btn btn-sharp px-10 py-4 bg-transparent text-text-main dark:text-white font-bold text-lg uppercase border border-black dark:border-white hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black">
                    Liên Hệ Ngay
                </a>
            </div>
        </div>

        <!-- Scroll Text -->
        <div class="absolute bottom-10 right-10 hidden md:block" data-aos="fade-left">
            <div
                class="rotate-90 origin-right text-xs font-mono tracking-widest text-gray-400 uppercase flex items-center gap-4">
                Scroll Down <span class="w-12 h-[1px] bg-gray-400"></span>
            </div>
        </div>
    </section>

    <!-- Detailed Projects Section -->
    <section id="projects" class="py-32 bg-white dark:bg-black relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between mb-20">
                <h2 class="text-6xl font-black text-text-main dark:text-white uppercase tracking-tighter relative z-10">
                    Case <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-green-400">Studies</span>
                    <span class="absolute -bottom-4 left-0 w-1/3 h-6 bg-primary/20 -z-10 skew-x-12"></span>
                </h2>
                <div class="hidden md:block w-1/3 h-[1px] bg-gray-200 dark:bg-gray-800"></div>
            </div>

            <div class="grid grid-cols-1 gap-16">
                <!-- Project 1 -->
                <div class="group sharp-card bg-background-light dark:bg-gray-900 overflow-hidden relative cursor-pointer"
                    data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-perspective="1000" data-tilt-glare
                    data-tilt-max-glare="0.2" data-aos="fade-up" onclick="openModal(this)" data-title="E-Commerce Ecosystem"
                    data-image="https://images.unsplash.com/photo-1481487484168-9b930d5b7d93?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                    data-problem="Khách hàng gặp khó khăn trong việc quản lý tồn kho đa kênh và tốc độ tải trang chậm khiến tỷ lệ bỏ giỏ hàng cao (lên tới 70%). Hệ thống cũ không chịu tải được trong các đợt Flash Sale."
                    data-solution="Xây dựng lại kiến trúc hệ thống sử dụng Microservices. Tích hợp Redis Caching để tăng tốc độ truy xuất dữ liệu. Đồng bộ hóa tồn kho realtime giữa Website, Shopee và Lazada."
                    data-approach="Chúng tôi sử dụng Laravel cho Backend API, Next.js cho Frontend để tối ưu SEO và UX. Hệ thống Queue Worker xử lý đơn hàng bất đồng bộ để đảm bảo server không bị quá tải. Kiến trúc Database được Sharding để xử lý hàng triệu record.">

                    <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                        <div
                            class="relative overflow-hidden h-[400px] lg:h-auto border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-800">
                            <img src="https://images.unsplash.com/photo-1481487484168-9b930d5b7d93?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                                class="parallax-img w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-100">
                            <div
                                class="absolute inset-0 bg-primary/20 mix-blend-multiply opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div
                                class="parallax-meta absolute top-4 left-4 bg-black text-white text-xs font-bold px-3 py-1 uppercase tracking-wider shadow-lg">
                                E-Commerce</div>
                        </div>
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <h3
                                class="parallax-content text-4xl font-bold mb-6 text-text-main dark:text-white group-hover:text-primary transition-colors">
                                E-Commerce Ecosystem</h3>
                            <p
                                class="parallax-content text-gray-500 dark:text-gray-400 mb-8 font-mono text-sm leading-relaxed">
                                Xử lý bài toán chịu tải cao và đồng bộ đa kênh cho chuỗi bán lẻ thời trang.
                            </p>
                            <div class="parallax-content space-y-4 mb-8">
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-1">error</span>
                                    <div>
                                        <span class="block text-xs font-bold uppercase text-gray-400">Vấn đề</span>
                                        <p class="text-sm font-medium line-clamp-2">Tốc độ chậm, lệch tồn kho.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                                    <div>
                                        <span class="block text-xs font-bold uppercase text-gray-400">Giải pháp</span>
                                        <p class="text-sm font-medium line-clamp-2">Microservices, Realtime Sync.</p>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="parallax-content inline-flex items-center gap-2 text-sm font-black uppercase tracking-widest border-b-2 border-black dark:border-white pb-1 w-max group-hover:border-primary group-hover:text-primary transition-all">
                                Xem chi tiết <span class="material-symbols-outlined text-lg">arrow_outward</span>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group sharp-card bg-background-light dark:bg-gray-900 overflow-hidden relative cursor-pointer"
                    data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-perspective="1000" data-tilt-glare
                    data-tilt-max-glare="0.2" data-aos="fade-up" onclick="openModal(this)" data-title="Fintech Mobile App"
                    data-image="https://images.unsplash.com/photo-1555421689-491a97ff2040?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                    data-problem="Người dùng gen Z cảm thấy ứng dụng ngân hàng truyền thống quá phức tạp, giao diện nhàm chán và nhiều thao tác thừa. Tỷ lệ giữ chân người dùng thấp sau 1 tháng."
                    data-solution="Tái thiết kế UI/UX theo phong cách Neobrutalism trẻ trung. Tối giản hóa quy trình chuyển tiền chỉ còn 2 chạm. Tích hợp Gamification vào việc tiết kiệm tiền."
                    data-approach="Flutter được sử dụng để phát triển đa nền tảng (iOS/Android) với hiệu năng native. Tích hợp AI để phân tích thói quen chi tiêu và gợi ý gói tiết kiệm cá nhân hóa. Thiết kế hệ thống Design System riêng biệt để đảm bảo tính nhất quán.">

                    <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                        <div
                            class="order-2 lg:order-1 p-8 lg:p-12 flex flex-col justify-center border-t lg:border-t-0 lg:border-r border-gray-200 dark:border-gray-800">
                            <h3
                                class="parallax-content text-4xl font-bold mb-6 text-text-main dark:text-white group-hover:text-primary transition-colors">
                                Fintech Mobile App</h3>
                            <p
                                class="parallax-content text-gray-500 dark:text-gray-400 mb-8 font-mono text-sm leading-relaxed">
                                Ứng dụng quản lý tài chính cá nhân dành cho Gen Z với hơn 500k lượt tải.
                            </p>
                            <div class="parallax-content space-y-4 mb-8">
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-1">error</span>
                                    <div>
                                        <span class="block text-xs font-bold uppercase text-gray-400">Vấn đề</span>
                                        <p class="text-sm font-medium line-clamp-2">UX phức tạp, Retention thấp.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                                    <div>
                                        <span class="block text-xs font-bold uppercase text-gray-400">Giải pháp</span>
                                        <p class="text-sm font-medium line-clamp-2">Gamification, Simplification.</p>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="parallax-content inline-flex items-center gap-2 text-sm font-black uppercase tracking-widest border-b-2 border-black dark:border-white pb-1 w-max group-hover:border-primary group-hover:text-primary transition-all">
                                Xem chi tiết <span class="material-symbols-outlined text-lg">arrow_outward</span>
                            </span>
                        </div>
                        <div class="order-1 lg:order-2 relative overflow-hidden h-[400px] lg:h-auto">
                            <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                                class="parallax-img w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-100">
                            <div
                                class="absolute inset-0 bg-primary/20 mix-blend-multiply opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div
                                class="parallax-meta absolute top-4 right-4 bg-black text-white text-xs font-bold px-3 py-1 uppercase tracking-wider shadow-lg">
                                Mobile App</div>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group sharp-card bg-background-light dark:bg-gray-900 overflow-hidden relative cursor-pointer"
                    data-tilt data-tilt-max="5" data-tilt-speed="400" data-tilt-perspective="1000" data-tilt-glare
                    data-tilt-max-glare="0.2" data-aos="fade-up" onclick="openModal(this)"
                    data-title="Corporate CRM Platform"
                    data-image="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                    data-problem="Dữ liệu khách hàng rời rạc, nằm rải rác ở nhiều file Excel. Nhân viên sale mất 40% thời gian để tổng hợp báo cáo thủ công. Không có quy trình chăm sóc khách hàng tự động."
                    data-solution="Xây dựng hệ thống CRM tập trung. Tự động hóa quy trình Sales Pipeline. Tích hợp Tổng đài VoIP và Email Marketing ngay trên nền tảng quản trị."
                    data-approach="Vue.js + Laravel. Xây dựng module Dynamic Reports cho phép người dùng tự custom báo cáo kéo thả. Sử dụng WebSockets để thông báo realtime cho Sale khi có lead mới. Bảo mật dữ liệu 2 lớp.">
                    <div class="grid grid-cols-1 lg:grid-cols-2 h-full">
                        <div
                            class="relative overflow-hidden h-[400px] lg:h-auto border-b lg:border-b-0 lg:border-r border-gray-200 dark:border-gray-800">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                                class="parallax-img w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500 scale-100">
                            <div
                                class="absolute inset-0 bg-primary/20 mix-blend-multiply opacity-0 group-hover:opacity-100 transition-opacity">
                            </div>
                            <div
                                class="parallax-meta absolute top-4 left-4 bg-black text-white text-xs font-bold px-3 py-1 uppercase tracking-wider shadow-lg">
                                SaaS Product</div>
                        </div>
                        <div class="p-8 lg:p-12 flex flex-col justify-center">
                            <h3
                                class="parallax-content text-4xl font-bold mb-6 text-text-main dark:text-white group-hover:text-primary transition-colors">
                                Corporate CRM</h3>
                            <p
                                class="parallax-content text-gray-500 dark:text-gray-400 mb-8 font-mono text-sm leading-relaxed">
                                Nền tảng quản trị quan hệ khách hàng tối ưu hóa quy trình Sales B2B.
                            </p>
                            <div class="parallax-content space-y-4 mb-8">
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-1">error</span>
                                    <div>
                                        <span class="block text-xs font-bold uppercase text-gray-400">Vấn đề</span>
                                        <p class="text-sm font-medium line-clamp-2">Dữ liệu phân mảnh, tốn thời gian.</p>
                                    </div>
                                </div>
                                <div class="flex items-start gap-3">
                                    <span class="material-symbols-outlined text-primary mt-1">check_circle</span>
                                    <div>
                                        <span class="block text-xs font-bold uppercase text-gray-400">Giải pháp</span>
                                        <p class="text-sm font-medium line-clamp-2">Centralized CRM, Automation.</p>
                                    </div>
                                </div>
                            </div>
                            <span
                                class="parallax-content inline-flex items-center gap-2 text-sm font-black uppercase tracking-widest border-b-2 border-black dark:border-white pb-1 w-max group-hover:border-primary group-hover:text-primary transition-all">
                                Xem chi tiết <span class="material-symbols-outlined text-lg">arrow_outward</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-32 bg-primary text-black relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-20"></div>
        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tighter" data-aos="zoom-in">ĐỪNG CHỈ NGHĨ.<br>HÃY LÀM.
            </h2>
            <p class="text-xl md:text-2xl font-bold mb-10 opacity-80">Chúng tôi đã sẵn sàng biến ý tưởng của bạn thành hiện
                thực.</p>
            <a href="{{ route('contact') }}"
                class="magnetic-btn btn-sharp inline-block px-12 py-5 bg-black text-white text-xl font-bold uppercase tracking-widest hover:bg-white hover:text-black hover:shadow-[8px_8px_0_0_#000]">
                Bắt đầu dự án
            </a>
        </div>
    </section>

    <!-- Animated Modal -->
    <div id="project-modal"
        class="fixed inset-0 z-[100] flex items-center justify-center bg-black/80 backdrop-blur-sm opacity-0 invisible"
        onclick="closeModal(event)">
        <div class="modal-content w-full max-w-5xl max-h-[90vh] bg-white dark:bg-[#111] overflow-y-auto relative mx-4 border border-gray-700 shadow-2xl"
            onclick="event.stopPropagation()">
            <!-- Close Button -->
            <button onclick="closeModal(event)"
                class="absolute top-0 right-0 z-10 bg-black text-white p-4 hover:bg-primary hover:text-black transition-colors">
                <span class="material-symbols-outlined text-2xl">close</span>
            </button>

            <div class="grid grid-cols-1 lg:grid-cols-5 min-h-[600px]">
                <!-- Image Side -->
                <div class="lg:col-span-2 h-64 lg:h-auto relative">
                    <img id="modal-image" src="" class="absolute inset-0 w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-60 lg:hidden">
                    </div>
                    <h2 id="modal-title-overlay" class="absolute bottom-4 left-4 text-2xl font-black text-white lg:hidden">
                        Title</h2>
                </div>

                <!-- Content Side -->
                <div class="lg:col-span-3 p-8 md:p-12 lg:p-16 flex flex-col">
                    <h2 id="modal-title"
                        class="hidden lg:block text-4xl md:text-5xl font-black mb-8 text-text-main dark:text-white leading-tight">
                        Project Title</h2>

                    <div class="flex-grow space-y-10">
                        <div class="animate-section" style="animation-delay: 0.1s">
                            <div class="flex items-center gap-3 mb-3 text-red-500">
                                <span class="material-symbols-outlined">warning</span>
                                <h4 class="text-xs font-black uppercase tracking-widest">Vấn đề gặp phải</h4>
                            </div>
                            <p id="modal-problem"
                                class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed font-medium">Description of
                                problem...</p>
                        </div>

                        <div class="animate-section" style="animation-delay: 0.2s">
                            <div class="flex items-center gap-3 mb-3 text-green-500">
                                <span class="material-symbols-outlined">psychology</span>
                                <h4 class="text-xs font-black uppercase tracking-widest">Giải pháp & Cách làm</h4>
                            </div>
                            <p id="modal-solution"
                                class="text-gray-600 dark:text-gray-300 text-lg leading-relaxed font-medium">Solution
                                description...</p>
                        </div>

                        <div class="bg-gray-50 dark:bg-gray-800 p-6 border-l-4 border-primary animate-section"
                            style="animation-delay: 0.3s">
                            <h4 class="text-xs font-black uppercase tracking-widest text-gray-500 dark:text-gray-400 mb-2">
                                Chi tiết kỹ thuật</h4>
                            <p id="modal-approach"
                                class="text-sm font-mono text-gray-700 dark:text-gray-300 leading-relaxed">Technical
                                approach...</p>
                        </div>
                    </div>

                    <div class="mt-12 pt-8 border-t border-gray-100 dark:border-gray-800 flex justify-between items-center">
                        <span class="text-xs font-bold text-gray-400 uppercase">Van An Team Production</span>
                        <a href="{{ route('contact') }}"
                            class="text-primary font-bold uppercase tracking-wider text-sm hover:underline">Liên hệ tư vấn
                            dự án này</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Magnetic Button Effect
        const magneticBtns = document.querySelectorAll('.magnetic-btn');

        magneticBtns.forEach(btn => {
            btn.addEventListener('mousemove', function (e) {
                const position = btn.getBoundingClientRect();
                const x = e.pageX - position.left - position.width / 2;
                const y = e.pageY - position.top - position.height / 2;

                btn.style.transform = 'translate(' + x * 0.3 + 'px, ' + y * 0.3 + 'px)';
            });

            btn.addEventListener('mouseout', function () {
                btn.style.transform = 'translate(0px, 0px)';
            });
        });

        function openModal(element) {
            const modal = document.getElementById('project-modal');
            const title = element.getAttribute('data-title');
            const image = element.getAttribute('data-image');
            const problem = element.getAttribute('data-problem');
            const solution = element.getAttribute('data-solution');
            const approach = element.getAttribute('data-approach');

            document.getElementById('modal-title').innerText = title;
            document.getElementById('modal-title-overlay').innerText = title;
            document.getElementById('modal-image').src = image;
            document.getElementById('modal-problem').innerText = problem;
            document.getElementById('modal-solution').innerText = solution;
            document.getElementById('modal-approach').innerText = approach;

            modal.classList.add('open');
            document.body.style.overflow = 'hidden';
        }

        function closeModal(event) {
            // Only close if header close button or background clicked (not content)
            // Handled by onclick on container
            const modal = document.getElementById('project-modal');
            modal.classList.remove('open');
            document.body.style.overflow = '';
        }
    </script>

    <style>
        /* Staggered animation for modal content */
        #project-modal.open .animate-section {
            animation: slideUpFade 0.5s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        @keyframes slideUpFade {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

@endsection