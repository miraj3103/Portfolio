<section id="skills-radial" class="relative bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900 py-16 md:py-20">
  <!-- brand tokens -->
  <style>
    #skills-radial {
      --brand-from: #6D28D9;
      --brand-to: #A855F7;
      --track: rgba(0, 0, 0, .06);
    }
    @media (prefers-color-scheme:dark) {
      #skills-radial { --track: rgba(255, 255, 255, .10); }
    }
    @keyframes dashIn {
      from { stroke-dashoffset: var(--circ) }
      to { stroke-dashoffset: var(--off) }
    }
    @keyframes fadeUp {
      from { opacity: .0; transform: translateY(8px) }
      to { opacity: 1; transform: translateY(0) }
    }

    /* নতুন: রোটেশন হ্যান্ডেল */
    #skills-radial [data-wheel] {
      transform: rotate(var(--a));
      transform-origin: 50% 50%;
    }
    #skills-radial .keep-upright {
      transform: rotate(calc(-1 * var(--a)));
      transform-origin: 50% 50%;
    }
  </style>

  <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="text-3xl md:text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">My Skills & Tech Stack</h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400">Classic • Elegant • Lightning-fast.</p>
    </div>

    @php
      $skills = [
        ['label' => 'Backend', 'level' => 95, 'hint' => 'Laravel, PHP 8.x, MySQL, Redis, REST'],
        ['label' => 'Frontend', 'level' => 92, 'hint' => 'Tailwind, Blade, Alpine, a11y, SEO'],
        ['label' => 'Cloud/Hosting', 'level' => 82, 'hint' => 'Linux/Nginx, Docker (basic), CDN, Queue'],
        ['label' => 'Graphics', 'level' => 84, 'hint' => 'Ps, Ai, Figma — Brand/UI assets'],
        ['label' => 'WordPress', 'level' => 91, 'hint' => 'Security, Theme/Plugin, Speed'],
      ];

      $r = 42; $circ = 2 * M_PI * $r;
      $size = 560; $cx = $cy = $size / 2; $radius = 200;
    @endphp

    <!-- মোবাইল লিস্ট (আগের মতোই) -->
    <div class="mt-10 grid gap-4 md:hidden">
      @foreach ($skills as $i => $s)
        @php $val = max(0, min(100, $s['level'])); $off = (1 - $val / 100) * $circ; @endphp
        <div class="rounded-2xl border border-gray-200 bg-white/80 p-4 shadow-sm dark:border-white/10 dark:bg-white/[0.04]">
          <div class="flex items-center gap-4">
            <svg width="84" height="84" viewBox="0 0 100 100" class="shrink-0">
              <defs>
                <linearGradient id="grad-m-{{ $i }}" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="var(--brand-from)" />
                  <stop offset="100%" stop-color="var(--brand-to)" />
                </linearGradient>
              </defs>
              <circle cx="50" cy="50" r="{{ $r }}" fill="none" stroke="var(--track)" stroke-width="10" />
              <circle cx="50" cy="50" r="{{ $r }}" fill="none" stroke="url(#grad-m-{{ $i }})" stroke-width="10" stroke-linecap="round"
                      stroke-dasharray="{{ $circ }}" stroke-dashoffset="{{ $off }}"
                      style="--circ:{{ $circ }};--off:{{ $off }};animation:dashIn .9s {{ $i * 0.08 }}s both ease-out" />
              <text x="50" y="54" text-anchor="middle" class="fill-gray-900 dark:fill-white" style="font:600 14px ui-sans-serif">{{ $val }}%</text>
            </svg>
            <div>
              <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $s['label'] }}</div>
              <p class="text-xs text-gray-600 dark:text-gray-400">{{ $s['hint'] }}</p>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <!-- ডেস্কটপ ভার্সন -->
    <div class="relative mt-12 hidden md:block">
      <!-- সেন্টার ব্যাজ -->
      <div class="absolute left-1/2 top-5/12 z-10 -translate-x-1/2 -translate-y-1/2">
        <div class="rounded-3xl border border-gray-200/80 bg-white px-6 py-5 shadow-2xl backdrop-blur dark:border-white/10 dark:bg-white/[0.06]">
          <div class="text-xs font-semibold tracking-wide text-gray-500 dark:text-gray-400">Core Skill</div>
        </div>
      </div>

      <!-- হুইল কন্টেইনার -->
      <div class="relative mx-auto" style="width:{{ $size }}px;height:{{ $size }}px">
        <div data-wheel class="will-change-transform" style="width:100%;height:100%;--a:0deg;">
          <div aria-hidden="true" class="pointer-events-none absolute inset-0 -z-10 opacity-[0.07] dark:opacity-[0.12]
               [background:radial-gradient(320px_200px_at_50%_30%,var(--brand-to),transparent_60%)]"></div>

          @foreach ($skills as $i => $s)
            @php
              $val = max(0, min(100, $s['level']));
              $off = (1 - $val / 100) * $circ;
              $deg = -90 + $i * (360 / count($skills));
              $rad = deg2rad($deg);
              $x = $cx + $radius * cos($rad);
              $y = $cy + $radius * sin($rad);
            @endphp
            <div class="absolute" style="left:{{ $x }}px; top:{{ $y }}px; transform:translate(-50%,-50%);">
              <div class="group rounded-2xl border border-gray-200 bg-white/80 p-3 shadow-sm transition hover:-translate-y-0.5 hover:shadow-lg
                          dark:border-white/10 dark:bg-white/[0.05]" style="animation:fadeUp .6s ease both {{ $i * 0.06 }}s">
                <svg width="100" height="100" viewBox="0 0 100 100" class="block">
                  <defs>
                    <linearGradient id="grad-{{ $i }}" x1="0" y1="0" x2="1" y2="1">
                      <stop offset="0%" stop-color="var(--brand-from)" />
                      <stop offset="100%" stop-color="var(--brand-to)" />
                    </linearGradient>
                  </defs>
                  <circle cx="50" cy="50" r="{{ $r }}" fill="none" stroke="var(--track)" stroke-width="10" />
                  <circle cx="50" cy="50" r="{{ $r }}" fill="none"
                          stroke="url(#grad-{{ $i }})" stroke-width="10" stroke-linecap="round"
                          stroke-dasharray="{{ $circ }}" stroke-dashoffset="{{ $off }}"
                          style="--circ:{{ $circ }};--off:{{ $off }};animation:dashIn .9s {{ $i * 0.08 }}s both ease-out" />
                  <text x="50" y="54" text-anchor="middle" class="fill-gray-900 dark:fill-white"
                        style="font:600 14px ui-sans-serif">{{ $val }}%</text>
                </svg>
                <div class="mt-2 text-center keep-upright">
                  <div class="text-sm font-semibold text-gray-900 dark:text-white">{{ $s['label'] }}</div>
                  <div class="pointer-events-none absolute left-1/2 top-full z-20 mt-2 hidden w-44 -translate-x-1/2 rounded-xl border
                              border-gray-200 bg-white px-3 py-2 text-[12px] text-gray-700 shadow-lg
                              dark:border-white/10 dark:bg-white/[0.06] dark:text-gray-300 group-hover:block keep-upright">
                    {{ $s['hint'] }}
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <!-- নিচে ক্যাটাগরি ব্যাজ -->
      <div class="mt-10 flex flex-wrap items-center justify-center gap-2">
        @foreach ($skills as $s)
          <span class="rounded-full border border-gray-200 bg-white px-3 py-1 text-xs text-gray-700 shadow-sm
                       dark:border-white/10 dark:bg-white/[0.06] dark:text-gray-300">{{ $s['label'] }}</span>
        @endforeach
      </div>
    </div>
  </div>

  <!-- JS for rotation -->
  <script>
  (function () {
    const section = document.getElementById('skills-radial');
    if (!section) return;
    const wheel = section.querySelector('[data-wheel]');
    if (!wheel) return;

    const isDesktop = () => window.matchMedia('(min-width: 768px)').matches;
    let angle = 0, velocity = 0, raf = null, ticking = false;
    const sensitivity = 0.18, damping = 0.92;

    function render() {
      raf = null;
      wheel.style.setProperty('--a', angle + 'deg');
    }
    function tick() {
      if (!isDesktop()) return (ticking = false);
      if (Math.abs(velocity) < 0.01) { ticking = false; return; }
      angle += velocity;
      velocity *= damping;
      if (!raf) raf = requestAnimationFrame(render);
      requestAnimationFrame(tick);
    }
    function onWheel(e) {
      if (!isDesktop()) return;
      const delta = e.deltaY || e.detail || 0;
      velocity += delta * sensitivity / 10;
      angle += delta * sensitivity;
      if (!raf) raf = requestAnimationFrame(render);
      if (!ticking) { ticking = true; requestAnimationFrame(tick); }
    }
    section.addEventListener('wheel', onWheel, { passive: true });
    window.addEventListener('resize', () => {
      if (!isDesktop()) {
        angle = 0; velocity = 0;
        wheel.style.setProperty('--a', '0deg');
      }
    });
  })();
  </script>
</section>
