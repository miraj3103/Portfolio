<section id="mixed-grid" class="py-12 bg-gradient-to-b from-white to-gray-50 dark:from-gray-950 dark:to-gray-900">

    <style>
        #mixed-grid {
            --gap: .72rem;
            --ring: 3px;
            --ring-light: #fff;
            --ring-dark: rgba(255, 255, 255, .16);
            --radius: .7rem;
            --shadow: 0 10px 26px rgba(2, 10, 28, .12), 0 3px 8px rgba(2, 10, 28, .08);
            --shadow-hover: 0 16px 36px rgba(2, 10, 28, .16), 0 6px 14px rgba(2, 10, 28, .10);
        }

        @media (prefers-color-scheme:dark) {
            #mixed-grid {
                --ring-light: rgba(255, 255, 255, .16);
            }
        }

        /* ===== Grid wrapper ===== */
        .grid-wrap {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: var(--gap);
            max-width: 1040px;
            margin-inline: auto;
            padding: var(--gap);
        }

        /* === Tiles (আগেরটাই থাকবে) === */
        .tile {
            position: relative;
            overflow: hidden;
            border-radius: var(--radius);
            background: #0b0b0b;
            /* frame-এর ব্যাক */
            box-shadow: var(--shadow);
            /* নরম outer shadow */
        }

       /* === Tiles === */
.tile{
  position:relative;
  overflow:hidden;
  border-radius:var(--radius);
  background:#0b0b0b;
  box-shadow: var(--shadow);

  /* মূল ফ্রেম (আগের মতোই) */
  border: var(--ring) solid var(--ring-light);
}
.dark .tile{ border-color: var(--ring-dark); }

/* === Image === */
.tile > img{
  width:100%;
  height:100%;
  object-fit:cover;
  display:block;

  /* ইমেজকে একটু ভিতরে কেটে দিচ্ছি যাতে বর্ডার দেখা যায় */
  clip-path: inset(var(--ring) round calc(var(--radius) - var(--ring)));

  transition: transform .45s cubic-bezier(.22,.65,.2,1), filter .45s ease;
}
.tile:hover{ box-shadow: var(--shadow-hover); }
.tile:hover > img{ transform: scale(1.035); filter:saturate(1.06) contrast(1.02); }

/* ইমেজ অনুপাতে auto frame */
.tile{ aspect-ratio:auto; }


        /* ===== Responsive ===== */
        @media(max-width:900px) {
            .grid-wrap {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media(max-width:640px) {
            .grid-wrap {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        /* ===== Image ratio অনুযায়ী auto sizing ===== */
        .tile {
            aspect-ratio: auto;
        }

        /* Chrome/Firefox/Safari সব latest এ কাজ করবে */
    </style>

    <div class="grid-wrap">
        <figure class="tile"><img src="/images/carusol/1.png" alt="Work 1" loading="lazy" decoding="async"></figure>
        <figure class="tile"><img src="/images/carusol/2.png" alt="Work 2" loading="lazy" decoding="async"></figure>
        <figure class="tile"><img src="/images/carusol/3.png" alt="Work 3" loading="lazy" decoding="async"></figure>

        <figure class="tile"><img src="/images/testimonials/4.jpg" alt="Work 4"></figure>
        <figure class="tile"><img src="/images/testimonials/5.jpg" alt="Work 5"></figure>
        <figure class="tile"><img src="/images/testimonials/6.jpg" alt="Work 6"></figure>

        <figure class="tile"><img src="/images/testimonials/7.jpg" alt="Work 7"></figure>
        <figure class="tile"><img src="/images/testimonials/8.jpg" alt="Work 8"></figure>
        <figure class="tile"><img src="/images/testimonials/9.jpg" alt="Work 9"></figure>
        <figure class="tile"><img src="/images/testimonials/10.jpg" alt="Work 10"></figure>
    </div>
</section>
