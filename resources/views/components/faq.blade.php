<section id="faq" data-reveal-delay="120" class="relative  bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
        Frequently Asked Questions
      </h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400">
        Scope, timelines, revisions, handover, and support—everything at a glance.
      </p>
    </div>

    @php
      $faqs = [
        ['q'=>'How long does it take?','a'=>'Typically 2–4 weeks; the exact timeline depends on scope and complexity.'],
        ['q'=>'How are revisions handled?','a'=>'Each milestone includes a fixed review window—clear feedback leads to iterations.'],
        ['q'=>'What about handover?','a'=>'Complete code repository, design tokens, deployment checklist, documentation, and a training session.'],
        ['q'=>'Performance targets?','a'=>'LCP under 2.5s, CLS near 0; achieved through optimized images, caching, and proper metrics setup.'],
        ['q'=>'Post-launch support?','a'=>'Usually 30 days of basic support are included; extended support can be arranged via custom SLA.'],
        ['q'=>'Payment terms?','a'=>'Payments are divided into three stages: 40% advance at kickoff, 30% at the mid-point milestone, and the remaining 30% upon final delivery, with proper invoicing and contract.'],
      ];
    @endphp

    <div class="mx-auto mt-10 max-w-3xl divide-y divide-gray-200 dark:divide-white/10">
      @foreach($faqs as $i => $f)
        <details class="group py-4">
          <summary class="flex cursor-pointer items-center justify-between gap-4 text-left">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">{{ $f[0] ?? $f['q'] }}</h3>
            <span class="shrink-0 rounded-md border border-gray-200 p-1 text-gray-500 transition
                         group-open:rotate-45 dark:border-white/10 dark:text-gray-300">
              <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                <path d="M10 4a1 1 0 011 1v4h4a1 1 0 110 2h-4v4a1 1 0 11-2 0v-4H5a1 1 0 110-2h4V5a1 1 0 011-1z"/>
              </svg>
            </span>
          </summary>
          <div class="mt-3 text-gray-700 dark:text-gray-300">
            {{ $f[1] ?? $f['a'] }}
          </div>
        </details>
      @endforeach
    </div>
  </div>
</section>
