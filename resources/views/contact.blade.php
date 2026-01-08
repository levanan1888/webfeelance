@extends('layouts.app')

@section('title', 'Liên hệ - Van An Team')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-20">
        <!-- Page Heading -->
        <div class="mb-16 text-center max-w-3xl mx-auto">
            <h1 class="text-4xl lg:text-5xl font-black tracking-tight text-text-main dark:text-white mb-4">
                Liên hệ với Van An Team
            </h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                Chúng tôi luôn sẵn sàng lắng nghe ý tưởng của bạn. Hãy gửi tin nhắn cho chúng tôi để bắt đầu dự án tiếp
                theo.
            </p>
        </div>
        <div class="flex flex-col lg:flex-row gap-12 lg:gap-20">
            <!-- Left Column: Contact Info -->
            <div class="flex-1 lg:max-w-[400px] flex flex-col gap-8">
                <div class="space-y-2">
                    <h2 class="text-2xl font-bold text-text-main dark:text-white">Thông tin liên lạc</h2>
                    <p class="text-gray-500 dark:text-gray-400">Kết nối trực tiếp qua email hoặc mạng xã hội.</p>
                </div>
                <div class="flex flex-col gap-4">
                    <!-- Email Card -->
                    <div
                        class="group flex gap-4 p-5 rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900/50 hover:border-primary/50 dark:hover:border-primary/50 transition-colors">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <h3 class="font-bold text-text-main dark:text-white text-base">Email</h3>
                            <a class="text-gray-500 dark:text-gray-400 text-sm hover:text-primary transition-colors"
                                href="mailto:contact@vananteam.com">contact@vananteam.com</a>
                        </div>
                    </div>
                    <!-- Location Card -->
                    <div
                        class="group flex gap-4 p-5 rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900/50 hover:border-primary/50 dark:hover:border-primary/50 transition-colors">
                        <div
                            class="flex h-12 w-12 items-center justify-center rounded-lg bg-primary/10 text-primary group-hover:bg-primary group-hover:text-black transition-colors">
                            <span class="material-symbols-outlined">location_on</span>
                        </div>
                        <div class="flex flex-col justify-center">
                            <h3 class="font-bold text-text-main dark:text-white text-base">Địa điểm</h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Hà Nội, Việt Nam</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right Column: Contact Form -->
            <div
                class="flex-1 bg-white dark:bg-gray-900/30 p-6 md:p-8 rounded-2xl border border-gray-200 dark:border-gray-800 shadow-sm">
                <form class="flex flex-col gap-6">
                    <!-- Name & Email Row -->
                    <div class="flex flex-col md:flex-row gap-6">
                        <label class="flex flex-col flex-1 gap-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Họ và tên</span>
                            <input
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-background-light dark:bg-gray-950 px-4 py-3 text-text-main dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                placeholder="Nhập tên của bạn" type="text" />
                        </label>
                        <label class="flex flex-col flex-1 gap-2">
                            <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Email</span>
                            <input
                                class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-background-light dark:bg-gray-950 px-4 py-3 text-text-main dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                                placeholder="Nhập địa chỉ email" type="email" />
                        </label>
                    </div>
                    <!-- Subject -->
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Tiêu đề</span>
                        <input
                            class="w-full rounded-lg border border-gray-300 dark:border-gray-700 bg-background-light dark:bg-gray-950 px-4 py-3 text-text-main dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                            placeholder="Nhập tiêu đề tin nhắn" type="text" />
                    </label>
                    <!-- Message -->
                    <label class="flex flex-col gap-2">
                        <span class="text-sm font-semibold text-gray-700 dark:text-gray-300">Nội dung yêu cầu</span>
                        <textarea
                            class="w-full resize-y rounded-lg border border-gray-300 dark:border-gray-700 bg-background-light dark:bg-gray-950 px-4 py-3 text-text-main dark:text-white placeholder-gray-400 focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-all"
                            placeholder="Mô tả dự án hoặc câu hỏi của bạn..." rows="6"></textarea>
                    </label>
                    <!-- Submit Button -->
                    <div class="pt-2">
                        <button
                            class="flex items-center justify-center gap-2 rounded-lg bg-primary px-8 py-4 text-sm font-bold text-black shadow-sm transition-all hover:bg-opacity-90 hover:shadow-md active:scale-[0.98] w-full md:w-auto">
                            <span>Gửi tin nhắn</span>
                            <span class="material-symbols-outlined text-[20px]">send</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection