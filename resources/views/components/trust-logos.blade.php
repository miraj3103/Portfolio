{{-- TRUST LOGOS (full-bleed, no white borders, no side gaps) --}}
<section id="trust-logos"
    class="relative w-screen left-1/2 right-1/2 -ml-[50vw] -mr-[50vw]
          bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900 overflow-hidden select-none">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-6">
        <div class="flex items-center gap-6">
            <p class="hidden md:block text-sm text-gray-600 dark:text-gray-300 whitespace-nowrap">
                Trusted by teams at
            </p>

            <!-- viewport -->
            <div class="relative flex-1 overflow-hidden">
                <div class="marquee">
                    <ul class="marquee__group">
                        @php
                            $logos = [
                                ['src' => '/images/trust/primes.png', 'alt' => 'Primes'],
                                ['src' => '/images/trust/bk-fashion.png', 'alt' => 'BK Fashion'],
                                ['src' => '/images/trust/ladies-touch.png', 'alt' => 'Ladies Touch'],
                                ['src' => '/images/trust/jazzmon.png', 'alt' => 'Jazzmon'],

                            ];
                        @endphp
                        @foreach ($logos as $logo)
                            <li class="mx-10">
                                <img src="{{ $logo['src'] }}" alt="{{ $logo['alt'] }} logo" width="140"
                                    height="32" loading="lazy" decoding="async"
                                    class="trust-logo block h-7 w-auto transition" />
                            </li>
                        @endforeach
                    </ul>

                    <!-- duplicate for seamless loop -->
                    <ul class="marquee__group" aria-hidden="true">
                        @foreach ($logos as $logo)
                            <li class="mx-10">
                                <img src="{{ $logo['src'] }}" alt="" width="140" height="32"
                                    loading="lazy" decoding="async" class="trust-logo block h-7 w-auto transition" />
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* ==== Marquee (right -> left) ==== */
    .marquee {
        --speed: 28s;
        display: flex;
        width: max-content;
        animation: marq var(--speed) linear infinite;
        will-change: transform;
    }

    .marquee__group {
        display: flex;
        align-items: center;
    }

    @keyframes marq {
        0% {
            transform: translateX(0)
        }

        100% {
            transform: translateX(-50%)
        }
    }

    /* Logos */
    .trust-logo {
        opacity: .8;
        filter: grayscale(100%);
    }

    .trust-logo:hover {
        opacity: 1;
        filter: grayscale(0%);
    }

    /* Dark mode: clearer logos */
    .dark .trust-logo {
        opacity: .95;
        filter: none;
    }

    .dark .trust-logo:hover {
        filter: drop-shadow(0 0 6px rgba(255, 255, 255, .25));
    }
</style>
