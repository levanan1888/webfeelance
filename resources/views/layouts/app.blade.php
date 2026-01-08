<!DOCTYPE html>
<html class="light" lang="vi">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>@yield('title', 'Van An Team - Freelance Web Developer')</title>
    <meta name="description"
        content="@yield('description', 'Đội ngũ freelance chuyên nghiệp chuyên thiết kế và phát triển website, ứng dụng web chuẩn SEO, hiệu năng cao.')">
    <meta name="keywords" content="@yield('keywords', 'Web Development, Freelance, Laravel, PHP, Design, UI/UX')">

    <!-- Open Graph / SEO -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', 'Van An Team')">
    <meta property="og:description"
        content="@yield('description', 'Đội ngũ freelance chuyên nghiệp chuyên thiết kế và phát triển website.')">
    <meta property="og:image"
        content="@yield('image', 'https://lh3.googleusercontent.com/aida-public/AB6AXuAcFt8yr7bvDkyBV8egy2cCeKBpEYhYuYLfHVodZyEd0DabVlbfeq5IpXNCwNB8IryNRcCG_vZWpYMzOIVTcuRqhI_m4yS00yDXSdrY_kgg5PD76H1KTk6B9t1nx8RXkQCj2CQY1l8YnTMUJXxibnAHx5nZESUcvSkh7kCf-MPxpVn5ZZnFrwAVAfvPiybT5ZNhbi0Q1Lt4E4IAhCbZKhSTwkZT38x5mnbHHEuwpfDqF4jgLFNBOAqBzgmWfpixyIdhEBgWNja58u4')">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />

    <!-- Material Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#13ec6d",
                        "background-light": "#f8fcfa",
                        "background-dark": "#102218",
                        "text-main": "#0d1b13",
                        "text-muted": "#4c9a6c",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0px",
                        "lg": "0px",
                        "xl": "0px",
                        "2xl": "0px",
                        "3xl": "0px",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Mobile Menu Transitions */
        #mobile-menu {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }

        #mobile-menu.hidden {
            display: none;
        }

        #mobile-menu.open {
            display: block;
            transform: translateY(0);
            opacity: 1;
        }

        /* Custom Scrollbar for Lenis */
        html.lenis {
            height: auto;
        }

        .lenis.lenis-smooth {
            scroll-behavior: auto;
        }

        .lenis.lenis-smooth [data-lenis-prevent] {
            overscroll-behavior: contain;
        }

        .lenis.lenis-stopped {
            overflow: hidden;
        }

        .lenis.lenis-scrolling iframe {
            pointer-events: none;
        }
    </style>
</head>

<body
    class="font-display bg-background-light dark:bg-background-dark text-text-main antialiased min-h-screen flex flex-col overflow-x-hidden">

    @include('partials.header')

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('partials.footer')

    <!-- Mobile Menu Overlay (Hidden by default) -->
    <div id="mobile-menu" class="hidden fixed inset-0 z-40 bg-white dark:bg-background-dark pt-20 px-4">
        <nav class="flex flex-col gap-4 text-center text-lg">
            <a class="font-medium hover:text-primary transition-colors dark:text-white" href="{{ route('home') }}">Trang
                chủ</a>
            <a class="font-medium text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                href="{{ route('projects') }}">Dự án</a>
            <a class="font-medium text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                href="{{ route('posts.index') }}">Blog</a>
            <a class="font-medium text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                href="{{ route('about') }}">Về chúng tôi</a>
            <a class="font-medium text-gray-500 hover:text-primary transition-colors dark:text-gray-400"
                href="{{ route('contact') }}">Liên hệ</a>
        </nav>
    </div>

    <!-- Lenis Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <script>
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            direction: 'vertical',
            gestureDirection: 'vertical',
            smooth: true,
            mouseMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
        })
        function raf(time) {
            lenis.raf(time)
            requestAnimationFrame(raf)
        }
        requestAnimationFrame(raf)
    </script>

    <!-- JS for Mobile Menu & AOS & Tilt -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>
    <script>
        // Initialize Animate On Scroll
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 50,
        });

        // Initialize Vanilla Tilt for 3D Cards
        // Wait for DOM to allow dynamic content (though init happens on load, this targets .sharp-card manually if added later)
        VanillaTilt.init(document.querySelectorAll(".sharp-card"), {
            max: 5,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });

        const menuBtn = document.getElementById('menu-toggle');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = menuBtn.querySelector('.material-symbols-outlined');

        menuBtn.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => { // Small delay to allow display:block to apply before opacity transition
                    mobileMenu.classList.add('open');
                }, 10);
                menuIcon.textContent = 'close';
                document.body.style.overflow = 'hidden';
                // Stop Lenis when menu is open
                lenis.stop();
            } else {
                mobileMenu.classList.remove('open');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 300); // Wait for transition to finish
                menuIcon.textContent = 'menu';
                document.body.style.overflow = '';
                // Resume Lenis
                lenis.start();
            }
        });
    </script>
</body>

</html>