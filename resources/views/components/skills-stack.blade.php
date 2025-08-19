<section id="skills-radial"
    class="relative bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900 py-16 md:py-20">
    {{-- ===== Styles ===== --}}
    <style>
        #skills-radial {
            --brand-from: #6D28D9;
            --brand-to: #A855F7;
            --track: rgba(0, 0, 0, .06);
            --scale: 1;
            /* JS sets */
            --inv-scale: 1;
            /* JS sets (1/scale) */
        }

        @media (prefers-color-scheme:dark) {
            #skills-radial {
                --track: rgba(255, 255, 255, .10);
            }
        }

        @keyframes dashIn {
            from {
                stroke-dashoffset: var(--circ)
            }

            to {
                stroke-dashoffset: var(--off)
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(8px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }

        /* rotation pivot = center */
        #skills-radial [data-wheel] {
            transform: rotate(var(--a));
            transform-origin: 50% 50%;
        }

        #skills-radial .keep-upright {
            transform: rotate(calc(-1 * var(--a)));
            transform-origin: 50% 50%;
        }

        /* viewport: স্ক্রিনের বাইরে কিছু দেখাবে না */
        #skills-radial .wheel-viewport {
            position: relative;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* stage height = scaled wheel size */
        #skills-radial .wheel-stage {
            position: relative;
            width: 100%;
            min-height: calc(560px * var(--scale));
        }


        /* base wheel (560x560), center-scaled — FIXED */
        #skills-radial .wheel-outer {
            width: 560px;
            height: 560px;

            /* আগের position:relative/center বদলে একদম parent center এ নিন */
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(var(--scale));
            transform-origin: 50% 50%;

            touch-action: pan-y;
            overflow: visible;

            /* আর লাগবে না */
            /* margin-inline:auto; */
        }


        /* Core badge: exact center; size fixes via inverse-scale */
        #skills-radial .core-badge {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%) scale(var(--inv-scale));
            z-index: 10;
            pointer-events: none;
        }

        #skills-radial .core-badge>.chip {
            border: 1px solid rgba(148, 163, 184, .3);
            background: rgba(255, 255, 255, .9);
            padding: .75rem 1.25rem;
            border-radius: 1rem;
            box-shadow: 0 12px 30px rgba(2, 10, 28, .12);
            backdrop-filter: blur(6px);
        }

        .dark #skills-radial .core-badge>.chip {
            background: rgba(255, 255, 255, .06);
            border-color: rgba(255, 255, 255, .12);
            color: #cbd5e1;
        }

        /* === Mobile-only (<= 767px) === */
        @media (max-width: 767px) {

            /* পাশে একটু ইনসেট, যাতে কাটে না */
            #skills-radial .wheel-viewport {
                padding-inline: 16px;
            }

            /* নিরাপদ হাইট; ছোট স্ক্রিনে কাটা এড়ায় */
            #skills-radial .wheel-stage {
                min-height: calc(600px * var(--scale));
            }

            /* কার্ড সোজা + SVG সামান্য ছোট */
            #skills-radial .upright-panel {
                transform: rotate(calc(-1 * var(--a))) translateZ(0);
                transform-origin: 50% 50%;
            }

            #skills-radial .upright-panel svg {
                width: 88px;
                height: 88px;
            }
        }
    </style>

    {{-- ===== Heading ===== --}}
    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">My Skills & Tech
                Stack</h2>
            <p class="mt-3 text-gray-600 dark:text-gray-400">Classic • Elegant • Lightning-fast.</p>
        </div>

        {{-- ===== Data / Geometry ===== --}}
        @php
            $skills = [
                ['label' => 'Backend', 'level' => 95, 'hint' => 'Laravel, PHP 8.x, MySQL, Redis, REST'],
                ['label' => 'Frontend', 'level' => 92, 'hint' => 'Tailwind, Blade, Alpine, a11y, SEO'],
                ['label' => 'Cloud/Hosting', 'level' => 82, 'hint' => 'Linux/Nginx, Docker (basic), CDN, Queue'],
                ['label' => 'Graphics', 'level' => 84, 'hint' => 'Ps, Ai, Figma — Brand/UI assets'],
                ['label' => 'WordPress', 'level' => 91, 'hint' => 'Security, Theme/Plugin, Speed'],
            ];
            $r = 42;
            $circ = 2 * M_PI * $r;
            $size = 560;
            $cx = $cy = $size / 2;
            $radius = 200;
        @endphp

        {{-- ===== Wheel (mobile + desktop) ===== --}}
        <div class="relative mt-8 md:mt-12">
            <div class="wheel-viewport">
                <div class="wheel-stage">
                    <div class="wheel-outer flex items-center justify-center">
                        {{-- Center badge inside same transform context (stays perfectly centered) --}}
                        <div class="core-badge">
                            <div class="chip text-xs font-semibold tracking-wide text-slate-600">Core Skill</div>
                        </div>

                        <div data-wheel class="will-change-transform"
                            style="width:100%;height:100%;--a:0deg; position:relative;">
                            <div aria-hidden="true"
                                class="pointer-events-none absolute inset-0 -z-10 opacity-[0.07] dark:opacity-[0.12]
                   [background:radial-gradient(320px_200px_at_50%_30%,var(--brand-to),transparent_60%)]">
                            </div>

                            @foreach ($skills as $i => $s)
                                @php
                                    $val = max(0, min(100, $s['level']));
                                    $off = (1 - $val / 100) * $circ;
                                    $deg = -90 + $i * (360 / count($skills));
                                    $rad = deg2rad($deg);
                                    $x = $cx + $radius * cos($rad);
                                    $y = $cy + $radius * sin($rad);
                                @endphp
                                <div class="absolute"
                                    style="left:{{ $x }}px; top:{{ $y }}px; transform:translate(-50%,-50%);">
                                    <div class="upright-panel">
                                        <div class="group rounded-2xl border border-gray-200 bg-white/80 p-3 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg
                                dark:border-white/10 dark:bg-white/[0.05]"
                                            style="animation:fadeUp .6s ease both {{ $i * 0.06 }}s">
                                            <svg width="100" height="100" viewBox="0 0 100 100" class="block">
                                                <defs>
                                                    <linearGradient id="grad-{{ $i }}" x1="0"
                                                        y1="0" x2="1" y2="1">
                                                        <stop offset="0%" stop-color="var(--brand-from)" />
                                                        <stop offset="100%" stop-color="var(--brand-to)" />
                                                    </linearGradient>
                                                </defs>
                                                <circle cx="50" cy="50" r="{{ $r }}"
                                                    fill="none" stroke="var(--track)" stroke-width="10" />
                                                <circle cx="50" cy="50" r="{{ $r }}"
                                                    fill="none" stroke="url(#grad-{{ $i }})"
                                                    stroke-width="10" stroke-linecap="round"
                                                    stroke-dasharray="{{ $circ }}"
                                                    stroke-dashoffset="{{ $off }}"
                                                    style="--circ:{{ $circ }};--off:{{ $off }};animation:dashIn .9s {{ $i * 0.08 }}s both ease-out" />
                                                <text x="50" y="54" text-anchor="middle"
                                                    class="fill-gray-900 dark:fill-white"
                                                    style="font:600 14px ui-sans-serif">{{ $val }}%</text>
                                            </svg>
                                            <div class="mt-2 text-center keep-upright">
                                                <div class="text-sm font-semibold text-gray-900 dark:text-white">
                                                    {{ $s['label'] }}</div>
                                                <div
                                                    class="pointer-events-none absolute left-1/2 top-full z-20 mt-2 hidden w-44 -translate-x-1/2 rounded-xl border
                                    border-gray-200 bg-white px-3 py-2 text-[12px] text-gray-700 shadow-lg
                                    dark:border-white/10 dark:bg-white/[0.06] dark:text-gray-300 group-hover:block keep-upright">
                                                    {{ $s['hint'] }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- labels --}}
            <div class="mt-10 flex flex-wrap items-center justify-center gap-2">
                @foreach ($skills as $s)
                    <span
                        class="rounded-full border border-gray-200 bg-white px-3 py-1 text-xs text-gray-700 shadow-sm
                       dark:border-white/10 dark:bg-white/[0.06] dark:text-gray-300">{{ $s['label'] }}</span>
                @endforeach
            </div>
        </div>
    </div>

    {{-- ===== Scripts ===== --}}
    <script>
        (function() {
            const section = document.getElementById('skills-radial');
            const wheel = section?.querySelector('[data-wheel]');
            const outer = section?.querySelector('.wheel-outer');
            const viewport = section?.querySelector('.wheel-viewport');
            if (!wheel || !outer || !viewport) return;

            /* ==== Responsive scale (mobile only tweaks; desktop untouched) ==== */
            const BASE = 560,
                MIN = 0.34,
                MAX = 0.92;

            function setScale() {
                const vpRect = viewport.getBoundingClientRect();
                const isMobile = window.innerWidth <= 767;

                const PAD = isMobile ? 32 : 0; // mobile inset 16px*2
                const availW = Math.max(0, Math.min(window.innerWidth, vpRect.width) - PAD);

                let targetSize;
                if (isMobile) {
                    // মোবাইলে স্কয়ার উচ্চতা রাখি যাতে exact center বজায় থাকে
                    const availH = Math.max(0, window.innerHeight - 140); // header/spacing safety
                    targetSize = Math.max(280, Math.min(availW, availH));
                    viewport.style.height = `${Math.round(targetSize)}px`; // square viewport
                } else {
                    targetSize = Math.max(300, Math.min(BASE, availW));
                    viewport.style.height = ''; // desktop: CSS controls height
                }

                const scale = Math.min(MAX, Math.max(MIN, targetSize / BASE));
                section.style.setProperty('--scale', scale.toFixed(4));
                section.style.setProperty('--inv-scale', (1 / scale).toFixed(4)); // badge size stable
            }
            setScale();
            window.addEventListener('resize', setScale);

            /* ==== Rotation physics (scroll + drag) ==== */
            let angle = 0,
                velocity = 0,
                raf = null,
                ticking = false;
            const sensitivity = 0.18,
                damping = 0.92;

            function render() {
                raf = null;
                wheel.style.setProperty('--a', angle + 'deg');
            }

            function tick() {
                if (Math.abs(velocity) < 0.01) {
                    ticking = false;
                    return;
                }
                angle += velocity;
                velocity *= damping;
                if (!raf) raf = requestAnimationFrame(render);
                requestAnimationFrame(tick);
            }

            // Desktop scroll (mobile-এও কাজ করবে, কিন্তু প্রধান ইন্টারঅ্যাকশন drag)
            function onWheel(e) {
                const delta = e.deltaY || e.detail || 0;
                velocity += delta * sensitivity / 10;
                angle += delta * sensitivity;
                if (!raf) raf = requestAnimationFrame(render);
                if (!ticking) {
                    ticking = true;
                    requestAnimationFrame(tick);
                }
            }
            section.addEventListener('wheel', onWheel, {
                passive: true
            });
            outer.addEventListener('wheel', onWheel, {
                passive: true
            });

            // Drag (mobile + desktop pointer)
            let dragging = false,
                lastX = 0,
                lastTime = 0;
            const down = x => {
                dragging = true;
                lastX = x;
                lastTime = performance.now();
                velocity = 0;
            };
            const move = x => {
                if (!dragging) return;
                const dx = x - lastX;
                const now = performance.now();
                const dt = Math.max(1, now - lastTime);
                angle += dx * 0.8;
                velocity = (dx / dt) * 16;
                lastX = x;
                lastTime = now;
                if (!raf) raf = requestAnimationFrame(render);
            };
            const up = () => {
                dragging = false;
                if (!ticking) {
                    ticking = true;
                    requestAnimationFrame(tick);
                }
            };

            outer.addEventListener('pointerdown', e => down(e.clientX));
            window.addEventListener('pointermove', e => move(e.clientX));
            window.addEventListener('pointerup', up);

            // Touch fallback (iOS/Android)
            outer.addEventListener('touchstart', e => down(e.touches[0].clientX), {
                passive: true
            });
            window.addEventListener('touchmove', e => move(e.touches[0]?.clientX || 0), {
                passive: true
            });
            window.addEventListener('touchend', up);
        })();
    </script>
</section>
