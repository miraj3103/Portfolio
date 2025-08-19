{{-- যদি মোবাইলেও ডেস্কটপের মতো একই ফ্রেম শেপ রাখতে চাও,
    তাহলে নিচের <section> ট্যাগে data-mobile="exact" অ্যাট্রিবিউট যোগ করো --}}
<section id="mixed-grid" {{-- data-mobile="exact" --}} 
  class="py-12 bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">
  <style>
    /* ===== Design tokens ===== */
    #mixed-grid{
      --gap:.72rem;                 /* gutter */
      --ring:3px;                   /* white frame/border */
      --ring-light:#fff;
      --ring-dark:rgba(255,255,255,.16);
      --radius:.7rem;               /* corner radius */
      --shadow:0 10px 26px rgba(2,10,28,.12), 0 3px 8px rgba(2,10,28,.08);
      --shadow-hover:0 16px 36px rgba(2,10,28,.16), 0 6px 14px rgba(2,10,28,.10);
      --row:120px;                  /* base row height (desktop) */
    }
    @media (prefers-color-scheme:dark){
      #mixed-grid{ --ring-light:rgba(255,255,255,.16); }
    }

    /* ===== Grid wrapper ===== */
    .grid-wrap{
      display:grid;
      grid-template-columns: repeat(6, 1fr);
      grid-auto-rows: var(--row);
      gap: var(--gap);
      grid-auto-flow: dense;
      max-width: 1040px;
      margin-inline: auto;
      padding: var(--gap);
    }

    /* ===== Clean tiles ===== */
    .tile{
      position:relative; overflow:hidden; border-radius:var(--radius);
      background:#0b0b0b; box-shadow: var(--shadow);
      transform: translateZ(0);
      border: var(--ring) solid var(--ring-light);
    }
    .dark .tile{ border-color: var(--ring-dark); }

    .tile > img{
      width:100%; height:100%; object-fit:cover; display:block;
      transition: transform .45s cubic-bezier(.22,.65,.2,1), filter .45s ease;
    }
    .tile:hover{ box-shadow: var(--shadow-hover); }
    .tile:hover > img{ transform: scale(1.035); filter:saturate(1.06) contrast(1.02); }

    /* ===== Exact layout (reference) ===== */
    /* Top row: 3 horizontals */
    .t1{ grid-column:1 / span 2; grid-row:1 / span 1; }
    .t2{ grid-column:3 / span 2; grid-row:1 / span 1; }
    .t3{ grid-column:5 / span 2; grid-row:1 / span 1; }

    /* Middle: 1 wide + 2 verticals */
    .t4{ grid-column:1 / span 3; grid-row:2 / span 1; }  /* wide */
    .t5{ grid-column:4 / span 1; grid-row:2 / span 2; }  /* vertical */
    .t6{ grid-column:5 / span 2; grid-row:2 / span 2; }  /* vertical wide */

    /* Bottom-left group */
    .t7{ grid-column:1 / span 1; grid-row:3 / span 1; }  /* square-ish */
    .t8{ grid-column:2 / span 2; grid-row:3 / span 1; }  /* square-wide */
    .t10{grid-column:1 / span 3; grid-row:4 / span 1; }  /* fills left gap */

    /* Bottom-right horizontal */
    .t9{ grid-column:4 / span 3; grid-row:4 / span 1; }

    /* ===== Default Responsive: mobile-friendly stack ===== */
    @media (max-width: 900px){
      .grid-wrap{ grid-template-columns:repeat(4,1fr); grid-auto-rows:130px; }
      .t1{grid-column:1/span2} .t2{grid-column:3/span2}
      .t3{grid-column:1/span4}
      .t4{grid-column:1/span4}
      .t5{grid-column:1/span2; grid-row:auto/span2}
      .t6{grid-column:3/span2; grid-row:auto/span2}
      .t7{grid-column:1/span2}
      .t8{grid-column:3/span2}
      .t10{grid-column:1/span4}
      .t9{grid-column:1/span4}
    }
    @media (max-width: 640px){
      #mixed-grid{ --gap:.56rem; }
      .grid-wrap{ grid-template-columns:repeat(2,1fr); grid-auto-rows:150px; }
      .t1,.t2,.t3,.t4,.t5,.t6,.t7,.t8,.t9,.t10{ grid-column:1 / span 2; }
    }

    /* ===== OPTIONAL: মোবাইলেও exact frame রাখতে চাইলে =====
       শুধু <section id="mixed-grid"> এ data-mobile="exact" দিলে
       নিচের ব্লক @media রুলগুলো ওভাররাইড হবে */
    #mixed-grid[data-mobile="exact"] .grid-wrap{
      grid-template-columns: repeat(6,1fr);
      /* ভিউপোর্ট অনুপাতে রো-হাইট স্কেল হবে: */
      grid-auto-rows: clamp(58px, 16vw, var(--row));
    }
    #mixed-grid[data-mobile="exact"] .t1,
    #mixed-grid[data-mobile="exact"] .t2,
    #mixed-grid[data-mobile="exact"] .t3,
    #mixed-grid[data-mobile="exact"] .t4,
    #mixed-grid[data-mobile="exact"] .t5,
    #mixed-grid[data-mobile="exact"] .t6,
    #mixed-grid[data-mobile="exact"] .t7,
    #mixed-grid[data-mobile="exact"] .t8,
    #mixed-grid[data-mobile="exact"] .t9,
    #mixed-grid[data-mobile="exact"] .t10{
      grid-column: auto; grid-row:auto; /* স্প্যানগুলো আগের মতোই থাকবে */
    }
    /* exact মোডে নিচের responsive রুলগুলো নিষ্ক্রিয় করতে specificity বাড়ানো হলো */
    #mixed-grid[data-mobile="exact"] .grid-wrap{ /* no further overrides */ }
  </style>

  <div class="grid-wrap">
    <!-- আপনার ইমেজ পাথগুলো বসান (WebP হলে ভালো) -->
    <figure class="tile t1"><img loading="lazy" decoding="async" src="/images/carusol/1.png"  alt="Work 1"></figure>
    <figure class="tile t2"><img loading="lazy" decoding="async" src="/images/carusol/2.png"  alt="Work 2"></figure>
    <figure class="tile t3"><img loading="lazy" decoding="async" src="/images/carusol/3.png"  alt="Work 3"></figure>

    <figure class="tile t4"><img loading="lazy" decoding="async" src="/images/testimonials/4.jpg"  alt="Work 4"></figure>
    <figure class="tile t5"><img loading="lazy" decoding="async" src="/images/testimonials/5.jpg"  alt="Work 5"></figure>
    <figure class="tile t6"><img loading="lazy" decoding="async" src="/images/testimonials/6.jpg"  alt="Work 6"></figure>

    <figure class="tile t7"><img loading="lazy" decoding="async" src="/images/testimonials/7.jpg"  alt="Work 7"></figure>
    <figure class="tile t8"><img loading="lazy" decoding="async" src="/images/testimonials/8.jpg"  alt="Work 8"></figure>

    <!-- gap-fixer -->
    <figure class="tile t10"><img loading="lazy" decoding="async" src="/images/testimonials/5.jpg"  alt="Work 10"></figure>

    <figure class="tile t9"><img loading="lazy" decoding="async" src="/images/testimonials/10.jpg" alt="Work 9"></figure>
  </div>
</section>
