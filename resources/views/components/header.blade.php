<!-- resources/views/components/header.blade.php -->
@php
  $homeUrl = route('home');
  $links = [
    'hero'     => ['label' => 'Home',     'href' => request()->routeIs('home') ? '#hero'     : "{$homeUrl}#hero"],
    'services' => ['label' => 'Services', 'href' => request()->routeIs('home') ? '#services' : "{$homeUrl}#services"],
    'projects' => ['label' => 'Portfolio','href' => request()->routeIs('home') ? '#projects' : "{$homeUrl}#projects"],
    'about'    => ['label' => 'About',    'href' => request()->routeIs('home') ? '#about'    : "{$homeUrl}#about"],
    'contact'  => ['label' => 'Contact',  'href' => request()->routeIs('home') ? '#contact'  : "{$homeUrl}#contact"],
  ];
@endphp

<header class="fixed top-0 left-0 right-0 z-50 h-16 border-b border-gray-200/60 bg-white/80 backdrop-blur-md dark:border-white/10 dark:bg-gray-900">
  <div class="mx-auto flex h-full max-w-7xl items-center justify-between px-4 sm:px-6 lg:px-8">

<!-- Brand -->
<a href="{{ $homeUrl }}#hero" class="flex items-center gap-2">
  {{-- Light mode logo --}}
  <img 
    src="{{ asset('images/logo.png') }}" 
    alt="Logo Light"
    class="h-12 w-auto block dark:hidden"
  />

  {{-- Dark mode logo --}}
  <img 
    src="{{ asset('images/dark-logo.png') }}" 
    alt="Logo Dark"
    class="h-26 w-auto hidden dark:block"
  />
</a>

    <!-- Desktop Nav -->
    <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
      @foreach ($links as $id => $item)
        <a href="{{ $item['href'] }}"
           data-nav-link="{{ $id }}"
           class="transition text-gray-700 hover:text-indigo-600 dark:text-gray-300 dark:hover:text-indigo-400">
          {{ $item['label'] }}
        </a>
      @endforeach

      <!-- Hire Me -->
      <a href="{{ route('contact') }}"
         class="inline-flex items-center rounded-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-md transition hover:-translate-y-0.5 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400">
        Hire Me
      </a>
    </nav>

    <!-- Mobile actions -->
    <div class="flex items-center gap-3 md:hidden">
      <a href="{{ route('contact') }}"
         class="hidden xs:inline-flex items-center rounded-full bg-indigo-600 px-3 py-1.5 text-xs font-semibold text-white shadow-md transition dark:bg-indigo-500 dark:hover:bg-indigo-400">
        Hire Me
      </a>

      <!-- Mobile toggle -->
      <button id="menuToggle"
              class="inline-flex items-center justify-center rounded-md p-2 text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-600"
              aria-label="Toggle menu" aria-expanded="false" aria-controls="mobileMenu">
        <svg id="menuOpenIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
        <svg id="menuCloseIcon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
      </button>
    </div>
  </div>

  <!-- Mobile menu -->
  <div id="mobileMenu" class="hidden md:hidden border-t border-gray-200 bg-white px-4 py-4 dark:border-white/10 dark:bg-gray-900">
    <nav class="flex flex-col gap-4 text-sm font-medium text-gray-700 dark:text-gray-300">
      @foreach ($links as $id => $item)
        <a href="{{ $item['href'] }}"
           data-nav-link="{{ $id }}"
           class="hover:text-indigo-600 dark:hover:text-indigo-400">
          {{ $item['label'] }}
        </a>
      @endforeach

      <a href="{{ route('contact') }}"
         class="inline-flex items-center justify-center rounded-full bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-md transition dark:bg-indigo-500 dark:hover:bg-indigo-400">
        Hire Me
      </a>
    </nav>
  </div>
</header>


<script>
  (function(){
    const header     = document.querySelector('header');
    const mobileMenu = document.getElementById('mobileMenu');
    const toggle     = document.getElementById('menuToggle');
    const openIcon   = document.getElementById('menuOpenIcon');
    const closeIcon  = document.getElementById('menuCloseIcon');

    const headerH = () => (header ? header.getBoundingClientRect().height : 0) + 8;

    // Mobile toggle
    if (toggle) {
      toggle.addEventListener('click', () => {
        const isHidden = mobileMenu.classList.toggle('hidden');
        openIcon?.classList.toggle('hidden');
        closeIcon?.classList.toggle('hidden');
        toggle.setAttribute('aria-expanded', String(!isHidden));
      });
    }

    // Smooth scroll with header offset for same-page # links
    function scrollToId(id) {
      const el = document.getElementById(id);
      if (!el) return;
      const top = el.getBoundingClientRect().top + window.scrollY - headerH();
      window.scrollTo({ top, behavior: 'smooth' });
    }

    function onAnchorClick(e) {
      const a = e.target.closest('a[href^="#"]');
      if (!a) return;
      const id = a.getAttribute('href').slice(1);
      if (document.getElementById(id)) {
        e.preventDefault();
        scrollToId(id);
        history.replaceState(null, '', `#${id}`);
        // close mobile menu after click
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
          openIcon?.classList.remove('hidden');
          closeIcon?.classList.add('hidden');
          toggle?.setAttribute('aria-expanded', 'false');
        }
      }
    }
    document.addEventListener('click', onAnchorClick);

    // Adjust initial hash on load
    window.addEventListener('load', () => {
      if (location.hash && document.getElementById(location.hash.slice(1))) {
        setTimeout(() => scrollToId(location.hash.slice(1)), 0);
      }
    });

    // Scroll Spy (active link)
    const sections = ['hero','services','projects','about','contact']
      .map(id => document.getElementById(id))
      .filter(Boolean);

    const navLinks = {};
    document.querySelectorAll('[data-nav-link]').forEach(a => {
      navLinks[a.getAttribute('data-nav-link')] = a;
    });

    const activeClasses = ['text-indigo-600','dark:text-indigo-400'];
    function setActive(id) {
      Object.values(navLinks).forEach(a => a.classList.remove(...activeClasses));
      if (navLinks[id]) navLinks[id].classList.add(...activeClasses);
    }

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) setActive(entry.target.id);
      });
    }, {
      rootMargin: `-${headerH()}px 0px -70% 0px`,
      threshold: 0.1
    });

    sections.forEach(sec => observer.observe(sec));
  })();
</script>
