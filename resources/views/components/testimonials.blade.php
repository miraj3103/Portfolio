<section id="testimonials" data-reveal-delay="120" class="relative  bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
                Clients say nice things
            </h2>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                Real words from real projects—quality, communication, and measurable impact.
            </p>
        </div>

        @php
            $testimonials = [
                [
                    'name' => 'Sarah Chen',
                    'role' => 'CMO, NovaCare',
                    'avatar' => '/images/testimonials/woman.png',
                    'quote' => 'On time, pixel-perfect, and measurable impact. Our trial signups jumped significantly.',
                    'project' => 'Fintech Onboarding Revamp',
                    'rating' => 5,
                ],
                [
                    'name' => 'Jamal Rahman',
                    'role' => 'Founder, ShopLite',
                    'avatar' => '/images/testimonials/man.png',
                    'quote' => 'Speed upgrade was phenomenal. LCP dropped under 2s and conversions went up.',
                    'project' => 'E-commerce Speed Upgrade',
                    'rating' => 5,
                ],
                [
                    'name' => 'Elena Marin',
                    'role' => 'Head of Growth, SkyBean',
                    'avatar' => '/images/testimonials/woman.png',
                    'quote' => 'Clean build, great comms, and thoughtful UX decisions. Highly recommended.',
                    'project' => 'SaaS Marketing Site',
                    'rating' => 5,
                ],
                [
                    'name' => 'Raj Patel',
                    'role' => 'CTO, HealthSync',
                    'avatar' => '/images/testimonials/man.png',
                    'quote' => 'Delivered on time with excellent quality. Our app performance improved significantly.',
                    'project' => 'Healthcare App Redesign',
                    'rating' => 4.8,
                ],
                [
                    'name' => 'Maya Lopez',
                    'role' => 'Product Manager, EduTech',
                    'avatar' => '/images/testimonials/woman.png',
                    'quote' => 'Fantastic attention to detail and user experience. Our users love the new design.',
                    'project' => 'Learning Platform UI Refresh',
                    'rating' => 5,
                ],
                [
                    'name' => 'Liam Johnson',
                    'role' => 'CEO, TechNova',
                    'avatar' => '/images/testimonials/man.png',
                    'quote' => 'Exceptional service and support throughout the project. Highly recommend!',
                    'project' => 'TechNova Website Redesign',
                    'rating' => 5,
                ],
            ];
        @endphp

        <!-- Controls -->
        <div class="mt-8 flex items-center justify-end gap-2">
            <button id="t-prev"
                class="inline-flex items-center justify-center rounded-full border border-gray-200 bg-white p-2 text-gray-700
                     hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600
                     dark:border-white/10 dark:bg-white/5 dark:text-gray-200 dark:hover:bg-white/10"
                aria-label="Previous testimonials">
                <svg viewBox="0 0 20 20" class="h-5 w-5" fill="currentColor">
                    <path
                        d="M12.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5A1 1 0 0113 5.586L9.414 9.172 13 12.757a1 1 0 01-.293 2.95z" />
                </svg>
            </button>
            <button id="t-next"
                class="inline-flex items-center justify-center rounded-full border border-gray-200 bg-white p-2 text-gray-700
                     hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-600
                     dark:border-white/10 dark:bg-white/5 dark:text-gray-200 dark:hover:bg-white/10"
                aria-label="Next testimonials">
                <svg viewBox="0 0 20 20" class="h-5 w-5" fill="currentColor">
                    <path
                        d="M7.293 4.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5A1 1 0 017.293 14.293L10.879 10.707 7.293 7.121a1 1 0 010-1.414z" />
                </svg>
            </button>
        </div>

        <!-- Slider (CSS scroll snap, mobile swipe) -->
        <div id="t-track"
            class="mt-4 flex snap-x snap-mandatory overflow-x-auto scroll-smooth gap-6 pb-2
                [-ms-overflow-style:'none'] [scrollbar-width:'none']"
            style="-webkit-overflow-scrolling: touch;">
            <style>
                /* hide scrollbar */
                #t-track::-webkit-scrollbar {
                    display: none
                }
            </style>

            @foreach ($testimonials as $i => $t)
                <figure
                    class="snap-center shrink-0 w-[90%] sm:w-[75%] lg:w-[32%]
                       rounded-3xl border border-gray-200 bg-white/80 p-6 shadow-sm
                       dark:border-white/10 dark:bg-white/[0.04]">
                    <figcaption class="flex items-center gap-3">
                        <img src="{{ $t['avatar'] }}" alt="{{ $t['name'] }} avatar" width="64" height="64"
                            loading="lazy" decoding="async" class="h-12 w-12 rounded-full object-cover" />
                        <div>
                            <div class="font-semibold text-gray-900 dark:text-white">{{ $t['name'] }}</div>
                            <div class="text-xs text-gray-500 dark:text-gray-400">{{ $t['role'] }}</div>
                        </div>
                        <div class="ml-auto text-sm" aria-label="Rating {{ $t['rating'] }} out of 5">★
                            {{ number_format($t['rating'], 1) }}</div>
                    </figcaption>
                    <blockquote class="mt-4 text-gray-700 dark:text-gray-300">
                        “{{ $t['quote'] }}”
                    </blockquote>
                    <p class="mt-3 text-xs text-gray-500 dark:text-gray-400">Project: {{ $t['project'] }}</p>
                </figure>
            @endforeach
        </div>

        <!-- Indicators -->
        <div id="t-dots" class="mt-2 flex justify-center gap-2"></div>
    </div>

    {{-- Review schema (SEO) --}}
    @php
        $reviewSchema = array_map(function ($t) {
            return [
                '@type' => 'Review',
                'reviewRating' => ['@type' => 'Rating', 'ratingValue' => $t['rating'], 'bestRating' => 5],
                'author' => ['@type' => 'Person', 'name' => $t['name']],
                'itemReviewed' => ['@type' => 'CreativeWork', 'name' => $t['project']],
                'reviewBody' => $t['quote'],
            ];
        }, $testimonials);
    @endphp
    <script type="application/ld+json">
  {!! json_encode($reviewSchema, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
  </script>
</section>

<!-- Tiny JS: arrows + AUTO infinite slider (fixed) -->
<!-- Tiny JS: arrows + AUTO infinite slider + indicators -->
<script>
    (function() {
        const track = document.getElementById('t-track');
        const prevBtn = document.getElementById('t-prev');
        const nextBtn = document.getElementById('t-next');
        const dotsEl = document.getElementById('t-dots');
        if (!track) return;

        // === CONFIG ===
        const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        const AUTO_MS = 3200; // autoplay interval (ms)
        const SNAP_DELAY = 500; // wrap check after smooth scroll (ms)
        const AUTODIR = 'forward'; // 'forward' => LTR (content left দিকে যায়), 'backward' => RTL

        // Step size from first two cards (gap-aware)
        function cardStepPx() {
            const cards = track.querySelectorAll('figure');
            if (cards.length < 2) return Math.min(track.clientWidth * 0.85, 640);
            const a = cards[0].getBoundingClientRect();
            const b = cards[1].getBoundingClientRect();
            const delta = Math.abs(b.left - a.left);
            return delta > 0 ? delta : Math.min(track.clientWidth * 0.85, 640);
        }

        // State
        let STEP = cardStepPx();
        let hover = false;
        let autoTimer = null;
        let wrapTimer = null;
        let scrollSyncTimer = null;

        // Cards & indices
        const cards = Array.from(track.querySelectorAll('figure'));
        let index = 0;

        // ===== Indicators =====
        function buildDots() {
            if (!dotsEl) return;
            dotsEl.innerHTML = '';
            cards.forEach((_, i) => {
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'h-2.5 w-2.5 rounded-full bg-gray-300 dark:bg-white/20 transition-all';
                btn.setAttribute('aria-label', 'Go to testimonial ' + (i + 1));
                btn.addEventListener('click', () => goTo(i));
                dotsEl.appendChild(btn);
            });
            setActiveDot(0);
        }

        function setActiveDot(i) {
            if (!dotsEl) return;
            const dots = dotsEl.querySelectorAll('button');
            dots.forEach((d, idx) => {
                if (idx === i) {
                    d.classList.add('scale-125');
                    d.classList.remove('bg-gray-300', 'dark:bg-white/20');
                    d.classList.add('bg-gray-700', 'dark:bg-white/60');
                } else {
                    d.classList.remove('scale-125');
                    d.classList.remove('bg-gray-700', 'dark:bg-white/60');
                    d.classList.add('bg-gray-300', 'dark:bg-white/20');
                }
            });
        }

        // ===== Sliding helpers =====
        function checkWrap() {
            const nearEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - (STEP * 0.6);
            const nearStart = track.scrollLeft <= STEP * 0.4;
            if (nearEnd) {
                // jump to start (infinite feel)
                track.scrollTo({
                    left: 0,
                    behavior: 'auto'
                });
                index = 0;
                setActiveDot(index);
            } else if (nearStart && track.scrollLeft === 0 && AUTODIR === 'backward') {
                // if going backward at start, jump to end
                const endLeft = track.scrollWidth - track.clientWidth;
                track.scrollTo({
                    left: endLeft,
                    behavior: 'auto'
                });
                index = Math.max(0, Math.round(endLeft / STEP));
                setActiveDot(index % cards.length);
            }
        }

        function slideBy(dx, smooth = true) {
            // smoother feel: a tiny pre-ease with requestAnimationFrame, then smooth scroll
            if (!reduceMotion && smooth) {
                // pre-step nudge (very small) to avoid abrupt start on some browsers
                const nudge = dx * 0.02;
                track.scrollBy({
                    left: nudge,
                    behavior: 'auto'
                });
            }
            track.scrollBy({
                left: dx,
                behavior: smooth && !reduceMotion ? 'smooth' : 'auto'
            });
            clearTimeout(wrapTimer);
            wrapTimer = setTimeout(checkWrap, SNAP_DELAY);
        }

        function slideNext() {
            slideBy(STEP, true);
        }

        function slidePrev() {
            slideBy(-STEP, true);
        }

        function goTo(i, smooth = !reduceMotion) {
            index = (i + cards.length) % cards.length;
            const left = index * STEP;
            track.scrollTo({
                left,
                behavior: smooth ? 'smooth' : 'auto'
            });
            clearTimeout(wrapTimer);
            wrapTimer = setTimeout(checkWrap, SNAP_DELAY);
            setActiveDot(index);
        }

        // Sync active dot on manual scroll/swipe
        track.addEventListener('scroll', () => {
            clearTimeout(scrollSyncTimer);
            scrollSyncTimer = setTimeout(() => {
                const i = Math.round(track.scrollLeft / STEP);
                index = ((i % cards.length) + cards.length) % cards.length;
                setActiveDot(index);
            }, 120);
        });

        // Arrows
        if (nextBtn) nextBtn.addEventListener('click', () => {
            AUTODIR === 'forward' ? slideNext() : slidePrev();
        });
        if (prevBtn) prevBtn.addEventListener('click', () => {
            AUTODIR === 'forward' ? slidePrev() : slideNext();
        });

        // Hover pause
        track.addEventListener('mouseenter', () => {
            hover = true;
        });
        track.addEventListener('mouseleave', () => {
            hover = false;
        });

        // Visibility pause
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) stopAuto();
            else startAuto();
        });

        // Responsive
        window.addEventListener('resize', () => {
            STEP = cardStepPx();
            // re-align to current index to avoid half slides after resize
            goTo(index, false);
        });

        // Autoplay
        function tick() {
            if (hover || document.hidden) return;
            if (AUTODIR === 'forward') {
                slideNext();
            } else {
                slidePrev();
            }
        }

        function startAuto() {
            if (autoTimer) return;
            autoTimer = setInterval(tick, AUTO_MS);
        }

        function stopAuto() {
            if (!autoTimer) return;
            clearInterval(autoTimer);
            autoTimer = null;
        }

        // Init
        STEP = cardStepPx();
        buildDots();
        goTo(0, false); // align and set dot
        startAuto();
    })();
</script>
