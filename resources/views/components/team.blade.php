<!-- Team Section -->
<section id="team" data-reveal-delay="120" class="relative bg-[#FBFCFD] dark:bg-gray-950">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
        <!-- Section Header -->
        <div class="mx-auto max-w-3xl text-center mb-12">
            <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
                Meet Our Team
            </h2>
            <p class="mt-3 text-gray-600 dark:text-gray-400">
                Passionate professionals dedicated to delivering world-class solutions.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @php
                $team = [
                    [
                        'name' => 'Mohibbur Rahman',
                        'role' => 'Software Engineer',
                        'avatar' => '/images/mohibbur.png',
                        'socials' => [
                            ['icon' => 'lucide-facebook', 'url' => 'https://www.facebook.com/mohibburrahmanmilon'],
                            ['icon' => 'lucide-linkedin', 'url' => 'https://www.linkedin.com/in/mohibbur-rahman-milon/'],
                            ['icon' => 'lucide-github', 'url' => 'https://github.com/CoderMohibbur'],
                        ],
                    ],
                    [
                        'name' => 'Tufsirul Miraj',
                        'role' => 'Web Developer',
                        'avatar' => '/images/miraj.png',
                        'socials' => [
                            ['icon' => 'lucide-facebook', 'url' => 'https://www.facebook.com/mdtufsirulmiraj'],
                            [
                                'icon' => 'lucide-linkedin',
                                'url' => 'https://www.linkedin.com/in/md-tufsirul-miraj-1155b620b/',
                            ],
                            ['icon' => 'lucide-github', 'url' => 'https://github.com/miraj3103'],
                        ],
                    ],
                    [
                        'name' => 'Imran Hossain',
                        'role' => 'Creative Graphics Designer',
                        'avatar' => '/images/imran.png',
                        'socials' => [
                            ['icon' => 'lucide-facebook', 'url' => 'https://www.facebook.com/imran.hossain.official'],
                            [
                                'icon' => 'lucide-linkedin',
                                'url' => 'https://www.linkedin.com/in/imran-hossain-83b045344/',
                            ],

                            // ['icon' => 'lucide-behance', 'url' => 'https://dribbble.com'],
                        ],
                    ],
                ];
            @endphp

            @foreach ($team as $member)
                <article
                    class="group relative rounded-3xl border border-gray-200 bg-white/80 p-6 text-center shadow-sm transition
                 hover:-translate-y-1 hover:shadow-xl dark:border-white/10 dark:bg-white/[0.04]">

                    <!-- Avatar -->
                    <div
                        class="relative mx-auto h-32 w-32 overflow-hidden rounded-full shadow-lg ring-4 ring-white dark:ring-gray-800">
                        <img src="{{ $member['avatar'] }}" alt="{{ $member['name'] }} portrait" loading="lazy"
                            class="h-full w-full object-cover select-none"
                            onerror="this.style.display='none'; this.closest('.relative').insertAdjacentHTML('beforeend', `<div class='flex h-32 w-32 items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 text-sm text-gray-500'>{{ Str::of($member['name'])->explode(' ')->map(fn($p) => Str::substr($p, 0, 1))->join('') }}</div>`)">
                    </div>

                    <!-- Name & Role -->
                    <h3 class="mt-6 text-lg font-semibold text-gray-900 dark:text-white">{{ $member['name'] }}</h3>
                    <p class="text-sm text-gray-600 dark:text-gray-400">{{ $member['role'] }}</p>

                    <!-- Social Links -->
                    <div class="mt-4 flex justify-center gap-4">
                        @foreach ($member['socials'] as $social)
                            @php
                                // lucide needs names without the "lucide-" prefix
                                $iconName = str_replace('lucide-', '', $social['icon']);
                            @endphp
                            <a href="{{ $social['url'] }}" target="_blank" rel="noopener"
                                aria-label="{{ $iconName }} profile of {{ $member['name'] }}"
                                class="inline-flex rounded-full p-2 text-gray-500 ring-indigo-300 transition
                       hover:text-indigo-600 focus:outline-none focus:ring-2 dark:hover:text-indigo-400">
                                <i data-lucide="{{ $iconName }}" class="h-5 w-5"></i>
                            </a>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- Lucide: load once globally (layout preferable). Safe-guarded init below --}}
<script>
    // If lucide script not already loaded in your layout, you can uncomment the next line:
    // (function(){var s=document.createElement('script');s.src='https://unpkg.com/lucide@latest';s.defer=true;document.head.appendChild(s);})();

    (function initLucide() {
        if (window.lucide && typeof lucide.createIcons === 'function') {
            lucide.createIcons();
        } else {
            document.addEventListener('DOMContentLoaded', () => {
                if (window.lucide) lucide.createIcons();
            });
        }
    })();
</script>
