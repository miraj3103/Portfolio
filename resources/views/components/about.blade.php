<section id="about" class="relative overflow-hidden bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
    <!-- soft accents (unchanged) -->
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div
            class="absolute -top-32 -left-28 h-[28rem] w-[28rem] rounded-full bg-gradient-to-br from-indigo-500/10 to-fuchsia-500/10 blur-3xl dark:from-indigo-400/10 dark:to-fuchsia-400/10">
        </div>
        <div
            class="absolute -bottom-40 -right-32 h-[30rem] w-[30rem] rounded-full bg-gradient-to-tr from-sky-500/10 to-purple-500/10 blur-3xl dark:from-sky-400/10 dark:to-purple-400/10">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16 md:py-24">
        <!-- HERO -->
        <div class="grid grid-cols-1 lg:grid-cols-12 items-start gap-6 md:gap-8 xl:gap-12">
            <header class="col-span-12 lg:col-span-8 text-center lg:text-left">
                <h2 class="font-extrabold text-4xl md:text-5xl tracking-tight text-gray-900 dark:text-white">
                    About Japan Bangladesh IT
                </h2>
                <p class="mt-4 text-base md:text-lg leading-relaxed text-gray-600 dark:text-gray-300">
                    We craft classic, elegant, and <span class="font-semibold">super-fast</span> web experiences
                    with Laravel & Tailwind. Our focus: clean architecture, measurable outcomes, and subtle
                    interactions that feel alive—without sacrificing speed.
                </p>
                <div
                    class="mx-auto lg:mx-0 mt-6 h-px w-40 bg-gradient-to-r from-transparent via-gray-300 to-transparent dark:via-white/20">
                </div>
            </header>
        </div>

        <!-- divider (unchanged) -->
        <div class="mt-8 h-px w-full bg-gradient-to-r from-transparent via-gray-300 to-transparent dark:via-white/20">
        </div>

        <!-- CAPABILITIES + VALUES -->
        <div class="mt-10 grid grid-cols-1 lg:grid-cols-12 gap-6 md:gap-8 xl:gap-12">
            <!-- Capabilities -->
            <section class="col-span-12 lg:col-span-7">
                <h3
                    class="text-[11px] font-semibold uppercase tracking-[0.14em] text-gray-700 dark:text-gray-300 text-center lg:text-left">
                    Capabilities
                </h3>

                <ul class="mt-4 grid gap-3 sm:grid-cols-2">
                    @foreach (['Laravel + Livewire/Alpine & Tailwind (production-grade)', 'WordPress custom theme/plugin (enterprise patterns)', 'SEO foundations + GA4/Tag Manager pipelines', 'Core Web Vitals tuning (LCP/INP/CLS) by default', 'Accessibility-first (semantic, keyboard, ARIA)', 'Nginx/Linux/CyberPanel stack, CI/CD ready'] as $cap)
                        <li data-reveal
                            class="group relative flex items-start gap-3 rounded-2xl border border-gray-200 bg-white/80 px-4 py-3 text-sm text-gray-800 shadow-sm
                       opacity-0 translate-y-2
                       transition-all duration-700 ease-[cubic-bezier(0.4,0,0.2,1)]
                       hover:translate-y-2 hover:scale-[1.015] hover:shadow-xl hover:border-indigo-300/60
                       dark:border-white/10 dark:bg-white/[0.06] dark:text-gray-200 dark:hover:border-indigo-400/40">
                            <div
                                class="absolute inset-0 rounded-2xl opacity-0 transition-opacity duration-700 ease-in-out group-hover:opacity-100 group-hover:shadow-[0_4px_25px_rgba(99,102,241,0.15)]">
                            </div>
                            <span
                                class="relative mt-1 h-2 w-2 shrink-0 rounded-full bg-indigo-500/80 transition-transform duration-700 ease-[cubic-bezier(0.4,0,0.2,1)] group-hover:scale-125"></span>
                            <span class="relative z-10">{{ $cap }}</span>
                        </li>
                    @endforeach
                </ul>

                <!-- marquee (unchanged visually; responsive-safe) -->
                <div
                    class="mt-6 overflow-hidden rounded-2xl border border-gray-200 bg-white/70 dark:border-white/10 dark:bg-white/[0.06]">
                    <div
                        class="animate-[scrollx_20s_linear_infinite] whitespace-nowrap py-3 text-sm text-gray-700 dark:text-gray-300">
                        <span class="mx-5">Clean Architecture</span>
                        <span class="mx-5">Reusable UI Systems</span>
                        <span class="mx-5">Zero-layout shift</span>
                        <span class="mx-5">Edge-ready builds</span>
                        <span class="mx-5">Analytics you can act on</span>
                        <span class="mx-5">Secure by default</span>
                    </div>
                </div>
            </section>

            <!-- Values -->
            <section class="col-span-12 lg:col-span-5">
                <h3
                    class="text-[11px] font-semibold uppercase tracking-[0.14em] text-gray-700 dark:text-gray-300 text-center lg:text-left">
                    Core Values
                </h3>

                <ol class="mt-4 relative">
                    <span aria-hidden="true"
                        class="absolute left-1.5 sm:left-3 top-0 bottom-0 w-px bg-gradient-to-b from-gray-300 to-transparent dark:from-white/20"></span>

                    @foreach ([['Craft over shortcuts', 'No pixel or query left behind.'], ['Performance first', 'Speed, stability, scalability—measured & budgeted.'], ['Clarity & honesty', 'Transparent scope, pricing & timelines.'], ['Inclusive by default', 'Human-friendly for all users & devices.']] as $i => $v)
                        <li data-reveal
                            class="relative pl-8 sm:pl-10 opacity-0 translate-y-2 my-2 transition duration-500">
                            <span
                                class="absolute left-0 top-2 grid h-6 w-6 place-items-center rounded-full border border-gray-300 bg-white text-[11px] font-semibold text-gray-700 shadow-sm dark:border-white/20 dark:bg-white/10 dark:text-white">
                                {{ $i + 1 }}
                            </span>
                            <div
                                class="rounded-2xl border border-gray-200 bg-white/90 p-4 shadow-sm transition hover:-translate-y-0.5 hover:shadow-md dark:border-white/10 dark:bg-white/[0.07]">
                                <div class="font-semibold text-gray-900 dark:text-white">{{ $v[0] }}</div>
                                <div class="text-gray-600 dark:text-gray-400">{{ $v[1] }}</div>
                            </div>
                        </li>
                    @endforeach
                </ol>
            </section>
        </div>

        <!-- CTA -->
        <div class="mt-12 flex flex-wrap gap-3 justify-center lg:justify-start">
            <a href="/docs/jbit-company-profile.pdf" download
                class="group inline-flex items-center gap-2 rounded-2xl bg-gray-900 px-6 py-3 text-sm font-semibold text-white shadow transition will-change-transform hover:-translate-y-0.5 hover:shadow-lg dark:bg-white dark:text-gray-900">
                <span>Download Company Profile</span>
                <svg class="h-4 w-4 transition group-hover:translate-y-0.5" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path
                        d="M3 14a1 1 0 100 2h14a1 1 0 100-2H3zm7-12a1 1 0 00-1 1v7.586L7.707 9.293a1 1 0 10-1.414 1.414l4 4a1 1 0 001.414 0l4-4a1 1 0 10-1.414-1.414L11 11.586V3a1 1 0 00-1-1z" />
                </svg>
            </a>
            <a href="{{ route('contact') }}"
                class="inline-flex items-center gap-2 rounded-2xl border border-gray-200 bg-white/80 px-6 py-3 text-sm font-semibold text-gray-900 transition hover:bg-white dark:border-white/10 dark:bg-white/10 dark:text-white dark:hover:bg-white/20">
                Request a proposal
            </a>
        </div>
    </div>
</section>

<style>
    @keyframes scrollx {
        from {
            transform: translateX(0)
        }

        to {
            transform: translateX(-50%)
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .animate-\[scrollx_20s_linear_infinite] {
            animation: none !important;
        }
    }
</style>

<script>
    // reveal on scroll
    (function() {
        const items = document.querySelectorAll('#about [data-reveal]');
        if (!items.length) return;
        const io = new IntersectionObserver((entries) => {
            entries.forEach((entry, i) => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    el.style.opacity = 1;
                    el.style.transform = 'translateY(0)';
                    el.style.transition = 'transform .5s ease, opacity .5s ease';
                    el.style.transitionDelay = `${(i%4)*60}ms`;
                    io.unobserve(el);
                }
            });
        }, {
            threshold: 0.12
        });
        items.forEach(el => io.observe(el));
    })();
</script>
