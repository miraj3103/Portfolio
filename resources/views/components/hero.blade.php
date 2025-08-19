<!-- resources/views/components/hero.blade.php -->
<section id="hero"
    class="relative overflow-hidden bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-950
         w-screen left-1/2 right-1/2 -ml-[50vw] -mr-[50vw] scroll-mt-24">

    <!-- subtle blobs -->
    <div aria-hidden="true" class="pointer-events-none absolute inset-0">
        <div
            class="absolute -top-24 -right-16 h-64 w-64 rounded-full bg-gradient-to-tr from-indigo-400/15 to-fuchsia-400/15 blur-3xl dark:from-indigo-500/10 dark:to-fuchsia-500/10 animate-[float_18s_ease-in-out_infinite]">
        </div>
        <div
            class="absolute -bottom-24 -left-16 h-72 w-72 rounded-full bg-gradient-to-tr from-emerald-400/15 to-cyan-400/15 blur-3xl dark:from-emerald-500/10 dark:to-cyan-500/10 animate-[float_22s_ease-in-out_infinite]">
        </div>
    </div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-20 md:py-28">
        <div class="grid items-center gap-12 md:grid-cols-2">

            <!-- copy block -->
            <div>
                <p class="tracking-[0.16em] text-[11px] uppercase text-gray-500 dark:text-gray-400">
                    Design • Build • Ship
                </p>

                <h1
                    class="mt-3 text-gray-900 dark:text-white font-bold tracking-tight
                   text-[38px] sm:text-[44px] lg:text-[52px] leading-[1.1] [text-wrap:balance] max-w-[22ch]">
                    <span class="block">
                        We Are
                        <span
                            class="font-extrabold bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-fuchsia-600">
                            Japan Bangladesh IT
                        </span>
                    </span>
                    <span class="mt-3 block font-semibold text-gray-700 dark:text-gray-300 tracking-[-0.005em]">
                        Classic <span class="mx-1 text-gray-400">•</span>
                        Elegant <span class="mx-1 text-gray-400">•</span>
                        Lightning-Fast Solutions
                    </span>
                </h1>

                <p
                    class="mt-5 max-w-[52ch] text-[15.5px] sm:text-[16px] leading-[1.75] text-gray-600 dark:text-gray-400">
                    We build modern, scalable web & mobile products with refined UI and clean code for a truly smooth
                    experience.
                </p>

                <!-- CTAs -->
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}"
                        class="inline-flex items-center gap-2 rounded-2xl border border-transparent bg-gray-900 px-5 py-3
                    text-white shadow-lg shadow-gray-900/10 transition hover:-translate-y-0.5 hover:shadow-gray-900/20
                    focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-gray-900
                    dark:bg-white dark:text-gray-900 dark:hover:shadow-white/10 dark:focus-visible:ring-white">
                        <span>Explore Services</span>
                        <svg class="h-4 w-4 transition group-hover:translate-x-0.5" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4.999 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 11H2a1 1 0 110-2h13.586l-3.293-3.293a1 1 0 010-1.414z" />
                        </svg>
                    </a>
                    <a href="{{ route('portfolio') }}"
                        class="inline-flex items-center gap-2 rounded-2xl border border-gray-200 bg-white/70 px-5 py-3 text-gray-900 backdrop-blur-sm transition
                    hover:-translate-y-0.5 hover:bg-white focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-gray-900
                    dark:border-white/10 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:focus-visible:ring-white">
                        <span>See Our Work</span>
                    </a>
                </div>

                <!-- stats -->
                <div class="mt-7 flex flex-wrap items-center gap-6 text-sm text-gray-600 dark:text-gray-400">
                    <span><span class="font-semibold text-gray-900 dark:text-white">50+</span> Projects</span>
                    <span><span class="font-semibold text-gray-900 dark:text-white">8yr</span> Experience</span>
                    <span><span class="font-semibold text-gray-900 dark:text-white">4.9★</span> Client Rating</span>
                </div>
            </div>

            <img src="{{ asset('images/hero.png') }}" alt="Showcase" width="900" height="1100" loading="eager"
                decoding="async" fetchpriority="high"
                class="h-[420px] w-full object-cover object-center md:h-[520px] select-none pointer-events-none will-change-transform" />
            <!-- card -->
            {{-- <div class="relative mx-auto max-w-md md:max-w-none">
                <div id="heroCard"
                    class="group relative mx-auto w-full max-w-md rounded-3xl border border-gray-200 bg-white/80 p-4 shadow-2xl backdrop-blur-md transition
                    hover:shadow-3xl dark:border-white/10 dark:bg-white/5">
                    <div class="relative overflow-hidden rounded-2xl">
                        
                        <div aria-hidden="true"
                            class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/30 via-black/0 to-black/0">
                        </div>
                    </div>

                    <!-- footer: only badge -->
                    <div class="mt-4 flex justify-end">
                        <div
                            class="rounded-xl bg-gray-900 px-3 py-2 text-xs text-white dark:bg-white dark:text-gray-900">
                            🚀 Super-fast</div>
                    </div>
                </div>
            </div> --}}
        </div>

        <!-- scroll cue -->
        <div class="mt-16 flex justify-center">
            <div class="flex flex-col items-center text-gray-500 dark:text-gray-400">
                <div class="h-6 w-4 rounded-full border border-current/40 p-0.5">
                    <div class="h-1.5 w-1.5 animate-[scrollDot_2s_ease-in-out_infinite] rounded-full bg-current/60">
                    </div>
                </div>
                <span class="mt-2 text-xs">Scroll</span>
            </div>
        </div>
    </div>
</section>

<style>
    @keyframes float {

        0%,
        100% {
            transform: translateY(0)
        }

        50% {
            transform: translateY(-6px)
        }
    }

    @keyframes scrollDot {
        0% {
            transform: translateY(0);
            opacity: .9
        }

        70% {
            transform: translateY(12px);
            opacity: .25
        }

        100% {
            transform: translateY(0);
            opacity: .9
        }
    }
</style>

<script>
    /* Smooth tilt effect with damping */
    (function() {
        const card = document.getElementById('heroCard');
        const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (card && !reduce && window.matchMedia('(pointer:fine)').matches) {
            const maxTilt = 6;
            let targetX = 0,
                targetY = 0,
                rotX = 0,
                rotY = 0,
                raf = null;
            const damp = .08;
            const loop = () => {
                rotX += (targetX - rotX) * damp;
                rotY += (targetY - rotY) * damp;
                card.style.transform =
                    `translateZ(0) rotateX(${rotX.toFixed(2)}deg) rotateY(${rotY.toFixed(2)}deg)`;
                raf = requestAnimationFrame(loop);
            };
            const aim = (x, y) => {
                const r = card.getBoundingClientRect(),
                    cx = r.left + r.width / 2,
                    cy = r.top + r.height / 2;
                const dx = (x - cx) / r.width,
                    dy = (y - cy) / r.height;
                targetX = (dy * -maxTilt);
                targetY = (dx * maxTilt);
            };
            card.addEventListener('mousemove', e => aim(e.clientX, e.clientY));
            card.addEventListener('mouseleave', () => {
                targetX = 0;
                targetY = 0;
            });
            if (!raf) raf = requestAnimationFrame(loop);
        }
    })();
</script>
