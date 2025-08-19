<section id="case-highlight" data-reveal-delay="120" class="relative  bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
        Signature Case Study
      </h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400">
        Problem → Solution → Impact. A deep dive into craft and results.
      </p>
    </div>

    @php
      // Demo case — পরে DB/config থেকে bind করবেন
      $case = [
        'title'   => 'Fintech Onboarding Revamp',
        'client'  => 'NovaPay',
        'period'  => '8 weeks',
        'slug'    => 'fintech-onboarding',
        'hero'    => '/images/projects/fintech-cover.jpg',
        'shots'   => [
          '/images/projects/fintech-step1.jpg',
          '/images/projects/fintech-step2.jpg',
          '/images/projects/fintech-mobile.jpg',
        ],
        'challenge' => 'Signup flow ছিল লম্বা, mobile friction ও drop-off rate বেশি, LCP ধীর।',
        'solution'  => 'Guided onboarding, progressive disclosure, server-driven UI, Laravel queue + image strategy, Tailwind design system, analytics A/B test.',
        'impact'    => [
          ['k'=>'Signup Uplift', 'v'=>'+32%'],
          ['k'=>'LCP', 'v'=>'1.8s'],
          ['k'=>'Error Rate', 'v'=>'−41%'],
          ['k'=>'Time to First Action', 'v'=>'−27%'],
        ],
        'stack'     => ['Laravel','Tailwind','MySQL','Redis','Alpine','SEO','GA4/A/B'],
      ];
    @endphp

    <div class="mt-12 grid gap-10 lg:grid-cols-2 lg:items-start">
      <!-- Left: narrative -->
      <article class="space-y-6">
        <header class="space-y-1">
          <h3 class="text-2xl md:text-3xl font-extrabold text-gray-900 dark:text-white">
            {{ $case['title'] }}
          </h3>
          <p class="text-sm text-gray-500 dark:text-gray-400">
            Client: <span class="font-medium text-gray-700 dark:text-gray-300">{{ $case['client'] }}</span> • Duration: {{ $case['period'] }}
          </p>
        </header>

        <section class="rounded-2xl border border-gray-200/70 bg-white/80 p-5 dark:border-white/10 dark:bg-white/[0.04]">
          <h4 class="text-sm font-semibold uppercase tracking-wide text-gray-700 dark:text-gray-300">The Challenge</h4>
          <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $case['challenge'] }}</p>
        </section>

        <section class="rounded-2xl border border-gray-200/70 bg-white/80 p-5 dark:border-white/10 dark:bg-white/[0.04]">
          <h4 class="text-sm font-semibold uppercase tracking-wide text-gray-700 dark:text-gray-300">What I Built</h4>
          <p class="mt-2 text-gray-700 dark:text-gray-300">{{ $case['solution'] }}</p>
          <ul class="mt-3 grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm">
            <li class="flex items-center gap-2 text-gray-600 dark:text-gray-400">• Guided multi-step with inline validation</li>
            <li class="flex items-center gap-2 text-gray-600 dark:text-gray-400">• Reusable Tailwind components</li>
            <li class="flex items-center gap-2 text-gray-600 dark:text-gray-400">• Optimized images (AVIF/WebP + sizes)</li>
            <li class="flex items-center gap-2 text-gray-600 dark:text-gray-400">• Queue + cache + DB indexing</li>
          </ul>
        </section>

        <!-- Impact chips -->
        <section>
          <h4 class="text-sm font-semibold uppercase tracking-wide text-gray-700 dark:text-gray-300">Impact</h4>
          <div class="mt-3 grid grid-cols-2 sm:grid-cols-4 gap-3">
            @foreach($case['impact'] as $m)
              <div class="rounded-xl border border-gray-200 bg-white/70 p-3 text-center shadow-sm
                          dark:border-white/10 dark:bg-white/[0.04]">
                <div class="text-lg font-bold text-gray-900 dark:text-white">{{ $m['v'] }}</div>
                <div class="text-xs text-gray-500 dark:text-gray-400">{{ $m['k'] }}</div>
              </div>
            @endforeach
          </div>
        </section>

        <!-- Stack -->
        <section>
          <h4 class="text-sm font-semibold uppercase tracking-wide text-gray-700 dark:text-gray-300">Tech Stack</h4>
          <div class="mt-3 flex flex-wrap gap-2">
            @foreach($case['stack'] as $t)
              <span class="rounded-full border border-gray-200 px-2.5 py-1 text-xs text-gray-700
                           dark:border-white/10 dark:text-gray-300">{{ $t }}</span>
            @endforeach
          </div>
        </section>

        <!-- CTA -->
        <div class="flex flex-wrap gap-3 pt-2">
          <a href="{{ route('project.show', $case['slug']) }}"
             class="inline-flex items-center gap-2 rounded-2xl bg-gray-900 px-5 py-3 text-sm font-semibold text-white shadow
                    transition hover:-translate-y-0.5 hover:shadow-lg dark:bg-white dark:text-gray-900">
            See full case study
            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M12.293 3.293a1 1 0 011.414 0l4.999 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 11H6a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z"/>
            </svg>
          </a>
          <a href="{{ route('contact') }}"
             class="inline-flex items-center gap-2 rounded-2xl border border-gray-200 bg-white/70 px-5 py-3 text-sm font-semibold text-gray-900
                    hover:bg-white transition dark:border-white/10 dark:bg-white/5 dark:text-white dark:hover:bg-white/10">
            Start a similar project
          </a>
        </div>
      </article>

      <!-- Right: screenshots (sticky) -->
      <aside class="lg:sticky lg:top-24 space-y-4">
        <div class="overflow-hidden rounded-3xl border border-gray-200 bg-white/80 shadow-lg
                    dark:border-white/10 dark:bg-white/[0.04]">
          <img src="{{ $case['hero'] }}" alt="{{ $case['title'] }} cover"
               width="1600" height="1200" loading="lazy" decoding="async"
               class="h-[260px] w-full object-cover object-center sm:h-[320px]"/>
        </div>
        <div class="grid grid-cols-2 gap-4">
          @foreach($case['shots'] as $shot)
            <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white/70 shadow-sm
                        dark:border-white/10 dark:bg-white/[0.04]">
              <img src="{{ $shot }}" alt="Screenshot"
                   width="1200" height="900" loading="lazy" decoding="async"
                   class="h-40 w-full object-cover object-center sm:h-48"/>
            </div>
          @endforeach
        </div>
      </aside>
    </div>
  </div>
</section>
