<section id="projects" x-data="projectGallery()" x-init="init()" data-reveal-delay="120"
    class="relative  bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20" x-cloak>
        <!-- Heading -->
        <div class="mx-auto max-w-3xl text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
                Featured Projects
            </h2>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                A few handpicked works—clean code, elegant UI, measurable impact.
            </p>
        </div>

        <!-- Category Pills -->
        <div class="mt-8 flex flex-wrap justify-center gap-2">
            <template x-for="(cat, i) in categories" :key="cat">
                <button @click="switchCategory(cat)" x-bind:aria-pressed="activeCategory === cat"
                    class="rounded-full px-4 py-1.5 text-sm font-semibold transition
               focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
               dark:focus:ring-offset-gray-950"
                    :class="activeCategory === cat ? activeBtn : inactiveBtn" x-text="cat">
                </button>
            </template>
        </div>

        <!-- Projects Grid -->
        <div class="relative mt-10 min-h-[22rem]">
            <!-- outgoing (fade/scale out) -->
            <div x-show="isAnimatingOut" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                class="absolute inset-0"></div>

            <!-- incoming (fade/slide in) -->
            <div x-ref="grid" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-3" x-transition:enter-end="opacity-100 translate-y-0"
                class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <template x-for="p in filteredProjects" :key="p.slug">
                    <!-- Card -->
                    <div
                        class="group relative rounded-3xl border border-gray-200 bg-white/80 p-2 shadow-sm transition
             hover:-translate-y-1 hover:shadow-xl dark:border-white/10 dark:bg-white/[0.04]">

                        <div class="relative overflow-hidden rounded-2xl [perspective:1000px]">
                            <div
                                class="relative h-56 w-full overflow-hidden rounded-2xl
                    transition-transform duration-300 ease-out will-change-transform
                    group-hover:[transform:rotateX(6deg)_rotateY(-4deg)_scale(1.02)]">
                                <img :src="p.thumb" :alt="p.title + ' cover'" width="1200" height="900"
                                    loading="lazy" decoding="async"
                                    class="h-full w-full object-cover object-center select-none" />
                                <div
                                    class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/35 via-black/0 to-transparent">
                                </div>

                                <!-- Tags -->
                                <div class="pointer-events-none absolute left-3 top-3 flex gap-2">
                                    <template x-for="t in p.tags" :key="t">
                                        <span
                                            class="rounded-full bg-white/90 px-2 py-0.5 text-xs font-medium text-gray-900 shadow ring-1 ring-black/5
                       dark:bg-white/10 dark:text-white dark:ring-white/10"
                                            x-text="t"></span>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <div class="p-4">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white" x-text="p.title"></h3>
                            <template x-if="p.metrics && p.metrics.length">
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400" x-text="p.metrics.join(' • ')">
                                </p>
                            </template>

                            <!-- CTA row: See Demo (all devices) + optional Case Study link on desktop -->
                            <div class="mt-4 flex items-center justify-between gap-3">


                                <!-- চাইলে ডেস্কটপে কেস স্টাডি হিন্ট রাখুন; না লাগলে এই <a> মুছে দিন -->
                                <a :href="'#' + p.slug"
                                    class="hidden md:inline-flex items-center gap-2 rounded-full border border-gray-300 px-3 py-1.5
                    text-sm font-medium text-gray-700 hover:bg-gray-50 dark:border-white/10 dark:text-gray-200 dark:hover:bg-white/10">
                                    View case study
                                    <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M12.293 3.293a1 1 0 011.414 0l4.999 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 11H6a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z" />
                                    </svg>
                                </a>


                                <a :href="p.live_url" target="_blank" rel="noopener"
                                    class="inline-flex items-center gap-2 rounded-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white
                    hover:translate-y-[-1px] hover:shadow transition dark:bg-indigo-500">
                                    See Demo
                                    <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M12.293 3.293a1 1 0 011.414 0l4.999 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 11H6a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z" />
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- 🔥 Popup/overlay সম্পূর্ণ রিমুভ করা হয়েছে -->
                    </div>
                </template>
            </div>

        </div>
    </div>


    <!-- Alpine Component Script -->
    <script>
        function projectGallery() {
            return {
                // 1) Categories
                categories: [
                    'Laravel Web App',
                    'WordPress Website',
                    'E-commerce',
                    'Performance & Audit',
                    'UI/UX & Landing',
                    'Creative Graphics Design',
                    'Hosting/DevOps',
                ],
                activeCategory: 'Laravel Web App',

                activeBtn: 'bg-indigo-600 text-white border border-indigo-600 ' +
                    'hover:bg-indigo-600 hover:text-white ' +
                    'dark:bg-indigo-500 dark:border-indigo-500 dark:hover:bg-indigo-500 ' +
                    'shadow-sm',

                inactiveBtn: 'border border-gray-200 text-gray-800 hover:bg-gray-50 ' +
                    'dark:border-white/10 dark:text-gray-100 dark:hover:bg-white/10',

                // 2) Source Data (You can bind from DB later)
                allProjects: [
                    // Laravel
                    {
                        title: 'Fintech Onboarding Revamp',
                        slug: 'fintech-onboarding',
                        thumb: '/images/projects/fintech-cover.jpg',
                        preview: '/images/projects/fintech-preview.jpg',
                        tags: ['Laravel', 'Tailwind', 'A/B Test'],
                        metrics: ['Signup +32%', 'LCP 1.8s'],
                        category: 'Laravel Web App',
                        live_url: 'https://example.com/fintech'
                    },
                    {
                        title: 'Custom CRM Portal',
                        slug: 'crm-portal',
                        thumb: '/images/projects/crm-cover.jpg',
                        preview: '/images/projects/crm-preview.jpg',
                        tags: ['Laravel', 'MySQL', 'Queue'],
                        metrics: ['+99.9% Uptime', 'TTFB 110ms'],
                        category: 'Laravel Web App',
                        live_url: 'https://example.com/crm'
                    },

                    // WordPress
                    {
                        title: 'Corporate WP Site (Divi)',
                        slug: 'wp-corporate',
                        thumb: '/images/projects/wp-corp.jpg',
                        preview: '/images/projects/wp-corp-preview.jpg',
                        tags: ['WordPress', 'Divi', 'SEO'],
                        metrics: ['CLS 0.02', 'LCP 2.1s'],
                        category: 'WordPress Website',
                        live_url: 'https://example.com/wp-corp'
                    },

                    // E-commerce
                    {
                        title: 'E-commerce Speed Upgrade',
                        slug: 'ecommerce-speed',
                        thumb: '/images/projects/ecom-speed.jpg',
                        preview: '/images/projects/ecom-preview.jpg',
                        tags: ['Caching', 'Image CDN', 'SEO'],
                        metrics: ['+21% CR', 'CLS ~0.02'],
                        category: 'E-commerce',
                        live_url: 'https://example.com/shop'
                    },

                    // Performance & Audit
                    {
                        title: 'CWV Performance Sprint',
                        slug: 'cwv-sprint',
                        thumb: '/images/projects/perf-cwv.jpg',
                        preview: '/images/projects/perf-cwv-preview.jpg',
                        tags: ['LCP', 'CLS', 'CI/CD'],
                        metrics: ['LCP 1.6s', 'FID < 20ms'],
                        category: 'Performance & Audit',
                        live_url: 'https://example.com/cwv'
                    },

                    // UI/UX & Landing
                    {
                        title: 'High-Converting Landing',
                        slug: 'hc-landing',
                        thumb: '/images/projects/landing.jpg',
                        preview: '/images/projects/landing-preview.jpg',
                        tags: ['UI/UX', 'A/B', 'Heatmap'],
                        metrics: ['+27% CVR', 'Bounce −18%'],
                        category: 'UI/UX & Landing',
                        live_url: 'https://example.com/landing'
                    },
                    // Creative Graphics Design
                    {
                        title: 'Brand Identity & Graphics',
                        slug: 'brand-identity',
                        thumb: '/images/projects/graphics.jpg',
                        preview: '/images/projects/graphics-preview.jpg',
                        tags: ['Logo', 'Branding', 'Social', 'Banner'],
                        metrics: ['+50% Engagement', 'Brand Recall +40%'],
                        category: 'Creative Graphics Design',
                        live_url: 'https://example.com/graphics'
                    },

                    // Hosting/DevOps
                    {
                        title: 'Managed Hosting Stack',
                        slug: 'managed-hosting',
                        thumb: '/images/projects/hosting.jpg',
                        preview: '/images/projects/hosting-preview.jpg',
                        tags: ['LiteSpeed', 'Backups', 'Monitor'],
                        metrics: ['99.99% Uptime', 'RPO < 24h'],
                        category: 'Hosting/DevOps',
                        live_url: 'https://example.com/hosting'
                    },
                ],

                // 3) State
                filteredProjects: [],
                isAnimatingOut: false,

                // 4) Methods
                init() {
                    this.applyFilter();
                },
                switchCategory(cat) {
                    if (this.activeCategory === cat) return;
                    this.activeCategory = cat;
                    // out → in animation
                    this.isAnimatingOut = true;
                    // wait a tick so leave transition can play, then swap data
                    setTimeout(() => {
                        this.applyFilter();
                        this.isAnimatingOut = false;
                    }, 180); // keep close to leave duration (200ms)
                },
                applyFilter() {
                    this.filteredProjects = this.allProjects.filter(p => p.category === this.activeCategory);
                },
            }
        }
    </script>
</section>
