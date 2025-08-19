<footer
    class="relative border-t border-gray-200/60 bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
        <div class="flex flex-col gap-6 md:flex-row md:items-center md:justify-between">

            <!-- Brand logo -->
            <a href="{{ route('home') }}#hero"
                class="flex items-center gap-2 text-lg font-bold text-gray-900 dark:text-white">
                {{-- Light mode logo --}}
                <img src="{{ asset('images/logo.png') }}" alt="Logo Light" class="h-20 block dark:hidden">
                {{-- Dark mode logo --}}
                <img src="{{ asset('images/dark-logo.png') }}" alt="Logo Dark" class="h-20 hidden dark:block">
            </a>

            <!-- Footer Nav -->
            <nav class="flex flex-wrap items-center gap-4 text-sm text-gray-700 dark:text-gray-300">
                <a href="{{ route('home') }}#hero" class="hover:text-indigo-600 dark:hover:text-indigo-400">Home</a>
                <a href="{{ route('home') }}#services"
                    class="hover:text-indigo-600 dark:hover:text-indigo-400">Services</a>
                <a href="{{ route('home') }}#projects"
                    class="hover:text-indigo-600 dark:hover:text-indigo-400">Portfolio</a>
                <a href="{{ route('home') }}#about" class="hover:text-indigo-600 dark:hover:text-indigo-400">About</a>
                <a href="{{ route('home') }}#contact"
                    class="hover:text-indigo-600 dark:hover:text-indigo-400">Contact</a>
                <a href="#faq" class="hover:text-indigo-600 dark:hover:text-indigo-400">FAQ</a>
            </nav>

            <!-- Social icons (STATIC) -->
            <div class="flex items-center gap-3">
                <!-- Facebook -->
                <a href="https://www.facebook.com/japanbangladeshit" target="_blank" rel="noopener"
                    class="inline-flex items-center justify-center rounded-full border border-gray-200 p-2 text-gray-700
            hover:bg-gray-50 dark:border-white/10 dark:text-gray-300 dark:hover:bg-white/10"
                    aria-label="Facebook">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                        <path
                            d="M22.675 0h-21.35C.597 0 0 .597 0 1.333v21.333C0 23.403.597 24 1.325 24h11.495v-9.294H9.691v-3.622h3.129V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.464.099 2.797.143v3.24h-1.919c-1.504 0-1.797.715-1.797 1.765v2.316h3.59l-.467 3.622h-3.123V24h6.127C23.403 24 24 23.403 24 22.667V1.333C24 .597 23.403 0 22.675 0z" />
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/japan-bangladesh-it/" target="_blank" rel="noopener"
                    class="inline-flex items-center justify-center rounded-full border border-gray-200 p-2 text-gray-700
            hover:bg-gray-50 dark:border-white/10 dark:text-gray-300 dark:hover:bg-white/10"
                    aria-label="LinkedIn">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                        <path
                            d="M19 0h-14C2.24 0 0 2.24 0 5v14c0 2.76 2.24 5 5 5h14c2.76 0 5-2.24 5-5V5c0-2.76-2.24-5-5-5zM7 19H4V9h3v10zM5.5 7.73c-.966 0-1.75-.79-1.75-1.764S4.534 4.2 5.5 4.2c.966 0 1.75.79 1.75 1.765s-.784 1.765-1.75 1.765zM20 19h-3v-5.604c0-1.337-.027-3.058-1.865-3.058-1.867 0-2.154 1.459-2.154 2.966V19h-3V9h2.881v1.367h.041c.401-.761 1.379-1.562 2.841-1.562 3.038 0 3.6 2 3.6 4.592V19z" />
                    </svg>
                </a>

                <!-- Email -->
                <a href="mailto:hello@japanbangladeshit.com"
                    class="inline-flex items-center justify-center rounded-full border border-gray-200 p-2 text-gray-700
            hover:bg-gray-50 dark:border-white/10 dark:text-gray-300 dark:hover:bg-white/10"
                    aria-label="Email">
                    <svg viewBox="0 0 24 24" class="h-5 w-5" fill="currentColor" aria-hidden="true">
                        <path
                            d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
                    </svg>
                </a>
            </div>




        </div>
    </div>

    <!-- Bottom -->
    <div
        class="mt-6 flex flex-col items-center justify-between gap-2 border-t border-gray-200 pt-4 text-xs text-gray-500
                dark:border-white/10 dark:text-gray-400 md:flex-row">
        <p>© {{ now()->year }} Japan Bangladesh IT. All rights reserved.</p>
        <p>Made with Laravel & Tailwind.</p>
    </div>
    </div>
</footer>
