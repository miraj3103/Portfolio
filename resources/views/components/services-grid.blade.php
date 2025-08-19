<section id="services" data-reveal-delay="120" class="relative  bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
        Services at a Glance
      </h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400">
        Web experiences that are classic, elegant, and super-fast—built with Laravel & Tailwind.
      </p>
    </div>

    @php
  $services = [
    [
      'title'=>'Web App (Laravel)',
      'desc'=>'Production-ready, secure & scalable apps with clean architecture.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M4 6a2 2 0 012-2h7a1 1 0 010 2H6v12h12v-7a1 1 0 112 0v7a2 2 0 01-2 2H6a2 2 0 01-2-2V6z"/><path d="M14 4a1 1 0 000 2h2.586l-8.293 8.293a1 1 0 101.414 1.414L18 7.414V10a1 1 0 102 0V5a1 1 0 00-1-1h-5z"/></svg>',
      'pill'=>['Laravel','MySQL','REST'],
    ],
    [
      'title'=>'Landing Page (Conversion)',
      'desc'=>'Pixel-perfect UI, fast LCP, analytics & A/B tests for higher conversions.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M4 5a2 2 0 012-2h12a2 2 0 012 2v2H4V5z"/><path d="M4 9h16v10a2 2 0 01-2 2H6a2 2 0 01-2-2V9z"/></svg>',
      'pill'=>['Tailwind','SEO','A/B'],
    ],
    [
      'title'=>'E-commerce',
      'desc'=>'Seamless catalog, checkout, payment & order flow with secure integrations.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M3 4a1 1 0 000 2h1l1.6 8.03A3 3 0 008.56 17H17a3 3 0 002.92-2.34l1.03-4.11A1 1 0 0019.98 9H7.21l-.3-1.5A2 2 0 004.98 6H3z"/><path d="M7 20a2 2 0 114 0 2 2 0 01-4 0zm8 0a2 2 0 114 0 2 2 0 01-4 0z"/></svg>',
      'pill'=>['Stripe','SSLCommerz','Cart'],
    ],
    [
      'title'=>'Performance & Audit',
      'desc'=>'Core Web Vitals, image strategy, caching & CI/CD for reliable delivery.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M11 2a1 1 0 011 1v7h7a1 1 0 110 2h-7v7a1 1 0 11-2 0v-7H3a1 1 0 110-2h7V3a1 1 0 011-1z"/></svg>',
      'pill'=>['LCP','CLS','CI/CD'],
    ],

    // NEW: WordPress Full Website
    [
      'title'=>'WordPress Full Website',
      'desc'=>'Custom theme, clean UX, SEO-optimized pages and easy admin.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M4 4h16a2 2 0 012 2v3H2V6a2 2 0 012-2z"/><path d="M2 10h20v8a2 2 0 01-2 2H4a2 2 0 01-2-2v-8z"/></svg>',
      'pill'=>['WordPress','Divi/Elementor','SEO'],
    ],

    // NEW: WordPress Speed Optimization
    [
      'title'=>'WordPress Speed Optimization',
      'desc'=>'CWV-focused tuning: cache, image/CDN, DB cleanup, lazyload & minify.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M12 4a8 8 0 00-8 8h2a6 6 0 1112 0h2a8 8 0 00-8-8z"/><path d="M12 12l4-4a1 1 0 10-1.414-1.414L12 9.172V12z"/></svg>',
      'pill'=>['CWV','Caching','CDN'],
    ],

    // NEW: WordPress Cyber Security
    [
      'title'=>'WordPress Cyber Security',
      'desc'=>'Hardening, WAF, malware scan & removal, backups and monitoring.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M12 2l7 4v5c0 5-3.5 9-7 11-3.5-2-7-6-7-11V6l7-4z"/><path d="M9 12l2 2 4-4"/></svg>',
      'pill'=>['WAF','Malware','Backups'],
    ],

    // NEW: Managed Web Hosting
    [
      'title'=>'Managed Web Hosting',
      'desc'=>'LiteSpeed stack, daily backups, free SSL and 24/7 monitoring.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M4 6h16v4H4z"/><path d="M4 14h16v4H4z"/><circle cx="7" cy="8" r="1"/><circle cx="7" cy="16" r="1"/></svg>',
      'pill'=>['LiteSpeed','SSL','Backups'],
    ],

    // NEW: PHP Laravel E-commerce Website
    [
      'title'=>'Laravel E-commerce Website',
      'desc'=>'Custom cart, inventory, coupons, payments & admin built on Laravel.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M3 4a1 1 0 000 2h1l1.6 8.03A3 3 0 008.56 17H17a3 3 0 002.92-2.34l1.03-4.11A1 1 0 0019.98 9H7.21l-.3-1.5A2 2 0 004.98 6H3z"/><path d="M7 20a2 2 0 114 0 2 2 0 01-4 0zm8 0a2 2 0 114 0 2 2 0 01-4 0z"/></svg>',
      'pill'=>['Laravel','Payments','Admin'],
    ],

    //NEW: create graphics Designer
    [
      'title'=>'Graphics Design',
      'desc'=>'Custom graphics, branding, and visual content creation.',
      'icon'=> '<svg viewBox="0 0 24 24" class="h-6 w-6" fill="currentColor"><path d="M12 2l2 4h4l-3 3 1 5-4-2-4 2 1-5-3-3h4z"/></svg>',
      'pill'=>['Logo','Banner','Branding','Flyer'],
    ]
  ];
@endphp


   <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4 services-grid">
      @foreach($services as $s)
      <div class="srv-card group rounded-2xl border border-gray-200 bg-white/80 p-5 shadow-sm transition hover:-translate-y-1 hover:shadow-lg dark:border-white/10 dark:bg-white/[0.04]">
          <div class="flex items-center justify-between">
            <div class="rounded-xl bg-gray-100 p-2 text-gray-700 dark:bg-white/10 dark:text-gray-200">
              {!! $s['icon'] !!}
            </div>
            <div class="text-xs text-gray-500 dark:text-gray-400">~2–4 weeks</div>
          </div>
          <h3 class="mt-4 text-lg font-semibold text-gray-900 dark:text-white">{{ $s['title'] }}</h3>
          <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $s['desc'] }}</p>
          <div class="mt-3 flex flex-wrap gap-2">
            @foreach($s['pill'] as $p)
              <span class="rounded-full border border-gray-200 px-2.5 py-1 text-xs text-gray-700 dark:border-white/10 dark:text-gray-300">{{ $p }}</span>
            @endforeach
          </div>
          <a href="{{ route('contact') }}"
             class="mt-4 inline-flex items-center gap-2 text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">
            Get a Quote
            <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor"><path d="M12.293 3.293a1 1 0 011.414 0l4.999 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 11H6a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z"/></svg>
          </a>
        </div>
      @endforeach
    </div>

    <div class="mt-10 flex justify-center gap-3">
      <a href="#process" class="rounded-full border border-gray-200 px-4 py-2 text-sm font-semibold text-gray-900 hover:bg-gray-50 dark:border-white/10 dark:text-white dark:hover:bg-white/10">
        View Process
      </a>
      <a href="{{ route('contact') }}" class="rounded-full bg-gray-900 px-4 py-2 text-sm font-semibold text-white hover:-translate-y-0.5 hover:shadow-lg transition dark:bg-white dark:text-gray-900">
        Get a Proposal
      </a>
    </div>
  </div>
</section>
