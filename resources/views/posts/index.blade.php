@extends('layouts.app')

@section('title', 'Blog - Chia sẻ kiến thức & Góc nhìn')
@section('description', 'Nơi chia sẻ những kiến thức chuyên sâu về lập trình, thiết kế và kinh nghiệm làm việc freelance.')

@section('content')
    <!-- Blog Header -->
    <section class="py-20 bg-background-light dark:bg-background-dark border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <span
                class="inline-block py-1 px-3 border border-primary text-primary text-xs font-bold tracking-widest uppercase mb-4"
                data-aos="fade-down">
                News & Articles
            </span>
            <h1 class="text-5xl md:text-7xl font-black text-text-main dark:text-white mb-6 uppercase tracking-tight"
                data-aos="zoom-in">
                Góc nhìn <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-green-600">Dev</span>
            </h1>
            <p class="text-xl text-gray-500 dark:text-gray-400 max-w-2xl mx-auto font-mono" data-aos="fade-up"
                data-aos-delay="100">
                Tổng hợp các bài viết về kỹ thuật, tư duy sản phẩm và đời sống công nghệ.
            </p>
        </div>
    </section>

    <!-- Blog List -->
    <section class="py-20 bg-white dark:bg-[#050505]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-12">

                @forelse($posts as $post)
                    <!-- Post Card -->
                    <article class="group cursor-pointer flex flex-col h-full"
                        onclick="window.location='{{ route('posts.show', ['slug' => $post->slug]) }}'" data-aos="fade-up">
                        <div
                            class="relative h-64 overflow-hidden border border-gray-200 dark:border-gray-800 border-b-0 sharp-card">
                            <img src="{{ $post->banner_url ?? 'https://images.unsplash.com/photo-1555066931-4365d14bab8c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute top-4 left-4">
                                <span
                                    class="bg-black text-white dark:bg-white dark:text-black text-xs font-bold px-2 py-1 uppercase tracking-wider">
                                    {{ $post->category->name ?? 'Article' }}
                                </span>
                            </div>
                        </div>
                        <div
                            class="flex-1 p-6 border border-gray-200 dark:border-gray-800 bg-background-light dark:bg-[#111] sharp-card transition-colors group-hover:border-primary">
                            <h3
                                class="text-xl font-bold text-text-main dark:text-white mb-3 group-hover:text-primary transition-colors line-clamp-2">
                                {{ $post->title }}
                            </h3>
                            <p class="text-gray-500 dark:text-gray-400 text-sm mb-4 line-clamp-3">
                                {{ $post->excerpt }}
                            </p>
                            <div
                                class="mt-auto pt-4 border-t border-gray-200 dark:border-gray-800 flex justify-between items-center bg-transparent">
                                <span class="text-xs font-mono text-gray-400">
                                    {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}
                                </span>
                                <span
                                    class="material-symbols-outlined text-primary opacity-0 group-hover:opacity-100 transition-opacity transform -translate-x-2 group-hover:translate-x-0">arrow_forward</span>
                            </div>
                        </div>
                    </article>
                @empty
                    <div class="col-span-3 text-center py-20">
                        <p class="text-gray-500">Chưa có bài viết nào.</p>
                    </div>
                @endforelse

            </div>

            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                {{ $posts->links() }}
            </div>
        </div>
    </section>
@endsection