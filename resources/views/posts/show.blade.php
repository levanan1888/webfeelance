@extends('layouts.app')

@section('title', $post->title . ' - Blog')
@section('description', $post->excerpt)
@section('keywords', $post->tags->pluck('name')->implode(', '))

@section('content')
    <!-- Progress Bar -->
    <div class="fixed top-0 left-0 h-1 bg-primary z-[60] w-full origin-left transform scale-x-0 transition-transform duration-100"
        id="scroll-progress"></div>

    <article class="relative">
        <!-- Header Image -->
        <div class="relative h-[60vh] w-full overflow-hidden">
            <img src="{{ $post->banner_url ?? 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&auto=format&fit=crop&w=2072&q=80' }}"
                class="absolute inset-0 w-full h-full object-cover attachment-fixed" data-aos="zoom-out"
                data-aos-duration="1500">
            <div class="absolute inset-0 bg-black/60"></div>

            <div class="absolute inset-0 flex items-center justify-center px-4">
                <div class="max-w-4xl text-center" data-aos="fade-up">
                    <div class="flex items-center justify-center gap-4 mb-6">
                        <span class="bg-primary text-black px-3 py-1 text-xs font-bold uppercase tracking-widest">
                            {{ $post->category->name ?? 'Article' }}
                        </span>
                        <span
                            class="text-gray-300 text-sm font-mono">{{ $post->published_at ? $post->published_at->format('M d, Y') : 'Draft' }}</span>
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-white mb-8 leading-tight">
                        {{ $post->title }}
                    </h1>
                    <div class="flex items-center justify-center gap-4">
                        <img src="{{ $post->author->avatar_url ?? 'https://ui-avatars.com/api/?name=' . ($post->author->name ?? 'Admin') }}"
                            class="w-12 h-12 rounded-full border-2 border-primary">
                        <div class="text-left">
                            <p class="text-white font-bold text-sm">{{ $post->author->name ?? 'Van An Team' }}</p>
                            <p class="text-gray-400 text-xs text-mono">Written by Author</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div
            class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative bg-background-light dark:bg-background-dark -mt-20 z-10 sharp-card border-t border-primary">

            <div class="prose prose-lg prose-slate dark:prose-invert max-w-none">
                {!! $post->content !!}
            </div>

            <!-- Tags -->
            @if(method_exists($post, 'tags') && $post->tags->count() > 0)
                <div class="mt-16 pt-8 border-t border-gray-200 dark:border-gray-800 flex flex-wrap gap-2">
                    @foreach($post->tags as $tag)
                        <span
                            class="px-3 py-1 border border-gray-300 dark:border-gray-700 text-sm hover:border-primary hover:text-primary transition-colors cursor-pointer">#{{ $tag->name }}</span>
                    @endforeach
                </div>
            @endif

            <!-- Author Bio in Footer -->
            <div class="mt-16 bg-gray-50 dark:bg-[#111] p-8 sharp-card flex items-center gap-6">
                <img src="{{ $post->author->avatar_url ?? 'https://ui-avatars.com/api/?name=' . ($post->author->name ?? 'Admin') }}"
                    class="w-20 h-20 rounded-full border-2 border-primary">
                <div>
                    <h3 class="font-bold text-lg mb-1">{{ $post->author->name ?? 'Van An Team' }}</h3>
                    <p class="text-gray-500 text-sm mb-4">
                        {{ $post->author->bio ?? 'Chúng tôi viết về những gì chúng tôi làm. Thực chiến, ngắn gọn và hiệu quả.' }}
                    </p>
                    <button class="text-primary text-sm font-bold uppercase tracking-wider hover:underline">Follow
                        Author</button>
                </div>
            </div>
        </div>
    </article>

    <script>
        // Scroll Progress Bar Logic
        window.addEventListener('scroll', () => {
            const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
            const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = scrollTop / scrollHeight;
            document.getElementById('scroll-progress').style.transform = `scaleX(${scrolled})`;
        });
    </script>
@endsection