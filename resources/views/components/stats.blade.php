<section id="stats" data-reveal-delay="120" class="relative  bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
  <!-- soft accents -->
  <div aria-hidden="true" class="pointer-events-none absolute inset-0">
    <div class="absolute -top-24 -left-24 h-64 w-64 rounded-full bg-indigo-500/10 blur-3xl dark:bg-indigo-400/10"></div>
    <div class="absolute -bottom-28 -right-28 h-72 w-72 rounded-full bg-fuchsia-500/10 blur-3xl dark:bg-fuchsia-400/10"></div>
  </div>

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <!-- header -->
    <div class="mx-auto max-w-3xl text-center">
      <span class="inline-flex items-center gap-2 rounded-full border border-gray-200 bg-white/70 px-3 py-1 text-[11px] font-semibold tracking-wide text-gray-700 shadow-sm dark:border-white/10 dark:bg-white/10 dark:text-gray-200">
        RESULTS
        <span class="h-1 w-1 rounded-full bg-indigo-500/80"></span>
        AT A GLANCE
      </span>

      <h2 class="mt-4 font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
        Results in Numbers
      </h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400">
        A snapshot of outcomes across projects and engagements.
      </p>

      <!-- elegant divider -->
      <div class="mx-auto mt-6 h-px w-32 bg-gradient-to-r from-transparent via-gray-300 to-transparent dark:via-white/20"></div>
    </div>

    @php
      // label, value (final), suffix (optional), sub
      $stats = [
        ['label'=>'Projects',         'value'=>56,  'suffix'=>'+',  'sub'=>'Delivered end-to-end'],
        ['label'=>'Years',            'value'=>8,   'suffix'=>'yr', 'sub'=>'Hands-on experience'],
        ['label'=>'Client Rating',    'value'=>4.9, 'suffix'=>'★',  'sub'=>'Average across platforms'],
        ['label'=>'Avg. LCP',         'value'=>1.9, 'suffix'=>'s',  'sub'=>'Typical marketing page'],
        ['label'=>'Countries Served', 'value'=>12,  'suffix'=>'',   'sub'=>'Global delivery'],
        ['label'=>'Repeat Clients',   'value'=>68,  'suffix'=>'%',  'sub'=>'Return for new work'],
      ];
    @endphp

    <!-- cards -->
    <dl class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($stats as $s)
        <div
          class="group relative overflow-hidden rounded-2xl border border-gray-200 bg-white/80 p-6 text-center shadow-sm
                 transition-all duration-500 hover:-translate-y-0.5 hover:shadow-md dark:border-white/10 dark:bg-white/[0.05]">
          <!-- subtle corner accent -->
          <span aria-hidden="true"
                class="pointer-events-none absolute -right-8 -top-8 h-24 w-24 rounded-full bg-indigo-500/10 opacity-0 transition-opacity duration-500 group-hover:opacity-100 dark:bg-indigo-400/10"></span>

          <dt class="text-xs font-semibold tracking-wide text-gray-500 dark:text-gray-400 uppercase">
            {{ $s['label'] }}
          </dt>

          <dd class="mt-2 leading-none">
            <span
              class="js-countup font-extrabold tracking-tight text-gray-900 dark:text-white
                     text-3xl md:text-4xl"
              data-target="{{ $s['value'] }}"
              data-suffix="{{ $s['suffix'] }}"
              aria-label="{{ $s['value'] }}{{ $s['suffix'] }}">
              {{ $s['value'] }}{{ $s['suffix'] }}
            </span>
          </dd>

          @if(!empty($s['sub']))
            <p class="mt-2 text-xs text-gray-500 dark:text-gray-400">{{ $s['sub'] }}</p>
          @endif

          <!-- bottom hairline -->
          <div class="mt-4 h-px w-16 mx-auto bg-gradient-to-r from-transparent via-gray-300 to-transparent dark:via-white/20"></div>
        </div>
      @endforeach
    </dl>
  </div>
</section>

<!-- Count-up (unchanged, just smoothed) -->
<script>
(function(){
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (prefersReduced) return;

  const els = document.querySelectorAll('.js-countup');
  if (!els.length || !('IntersectionObserver' in window)) return;

  const fmt = (n, keepDecimal) => keepDecimal ? (Math.round(n*10)/10).toString() : Math.round(n).toString();

  const animate = (el) => {
    const target = parseFloat(el.dataset.target);
    const suffix = el.dataset.suffix || '';
    const keepDecimal = String(el.dataset.target).includes('.');
    const duration = 1100; // a bit longer for classic smoothness
    const start = performance.now();

    const tick = (now) => {
      const p = Math.min(1, (now - start) / duration);
      // easeOutCubic
      const eased = 1 - Math.pow(1 - p, 3);
      const val = target * eased;
      el.textContent = fmt(val, keepDecimal) + suffix;
      if (p < 1) requestAnimationFrame(tick);
      else el.textContent = fmt(target, keepDecimal) + suffix; // snap final
    };
    requestAnimationFrame(tick);
  };

  const io = new IntersectionObserver((entries, obs)=>{
    entries.forEach(e=>{
      if (e.isIntersecting) {
        animate(e.target);
        obs.unobserve(e.target);
      }
    });
  }, {threshold: 0.35});

  els.forEach(el => io.observe(el));
})();
</script>
