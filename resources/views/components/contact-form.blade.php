<section id="contact" data-reveal-delay="120" class="relative bg-gradient-to-b from-white to-gray-50 dark:from-gray-900 dark:to-gray-950">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-16 md:py-20">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="font-extrabold text-3xl md:text-4xl tracking-tight text-gray-900 dark:text-white">
        Start a Project
      </h2>
      <p class="mt-3 text-gray-600 dark:text-gray-400">
        Tell me about your goals—get a thoughtful proposal within 24–48h.
      </p>
    </div>

    @if (session('success'))
      <div class="mx-auto mt-6 max-w-2xl rounded-xl border border-emerald-300/60 bg-emerald-50 px-4 py-3 text-emerald-700
                  dark:border-emerald-400/20 dark:bg-emerald-900/20 dark:text-emerald-200">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="mx-auto mt-10 max-w-2xl">
      @csrf
      {{-- honeypot (anti-spam) --}}
      <input type="text" name="company" tabindex="-1" autocomplete="off" class="hidden" aria-hidden="true">

      <div class="grid gap-5 sm:grid-cols-2">
        <div>
          <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Your name</label>
          <input type="text" id="name" name="name" value="{{ old('name') }}" required
                 class="mt-1 w-full rounded-xl border border-gray-200 bg-white/80 px-3 py-2 text-gray-900 shadow-sm
                        placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-600
                        dark:border-white/10 dark:bg-white/5 dark:text-white" />
          @error('name') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
        </div>
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email</label>
          <input type="email" id="email" name="email" value="{{ old('email') }}" required
                 class="mt-1 w-full rounded-xl border border-gray-200 bg-white/80 px-3 py-2 text-gray-900 shadow-sm
                        focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:border-white/10 dark:bg-white/5 dark:text-white" />
          @error('email') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
        </div>
      </div>

      <div class="mt-5 grid gap-5 sm:grid-cols-2">
        <div>
          <label for="budget" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Budget</label>
          <select id="budget" name="budget" class="mt-1 w-full rounded-xl border border-gray-200 bg-white/80 px-3 py-2
                        text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-600
                        dark:border-white/10 dark:bg-white/5 dark:text-white">
            <option value="" selected>Select a range</option>
            <option value="<$1k"><$1k</option>
            <option value="$1k–$3k">$1k–$3k</option>
            <option value="$3k–$6k">$3k–$6k</option>
            <option value="$6k+">$6k+</option>
          </select>
        </div>
        <div>
          <label for="timeline" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Timeline</label>
          <select id="timeline" name="timeline" class="mt-1 w-full rounded-xl border border-gray-200 bg-white/80 px-3 py-2
                        text-gray-900 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-600
                        dark:border-white/10 dark:bg-white/5 dark:text-white">
            <option value="" selected>Select</option>
            <option value="ASAP">ASAP</option>
            <option value="2–4 weeks">2–4 weeks</option>
            <option value="1–2 months">1–2 months</option>
          </select>
        </div>
      </div>

      <div class="mt-5">
        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Project brief</label>
        <textarea id="message" name="message" rows="5" required
                  class="mt-1 w-full rounded-2xl border border-gray-200 bg-white/80 px-3 py-2 text-gray-900 shadow-sm
                         focus:outline-none focus:ring-2 focus:ring-indigo-600 dark:border-white/10 dark:bg-white/5 dark:text-white">{{ old('message') }}</textarea>
        @error('message') <p class="mt-1 text-sm text-rose-600">{{ $message }}</p> @enderror
      </div>

      <div class="mt-6 flex items-center justify-between">
        <p class="text-xs text-gray-500 dark:text-gray-400">By sending, you agree to be contacted about your project.</p>
        <button type="submit"
                class="inline-flex items-center gap-2 rounded-2xl bg-gray-900 px-5 py-3 text-sm font-semibold text-white shadow
                       transition hover:-translate-y-0.5 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900
                       dark:bg-white dark:text-gray-900">
          Get Proposal
          <svg viewBox="0 0 20 20" class="h-4 w-4" fill="currentColor"><path d="M12.293 3.293a1 1 0 011.414 0l4.999 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L15.586 11H6a1 1 0 110-2h9.586l-3.293-3.293a1 1 0 010-1.414z"/></svg>
        </button>
      </div>
    </form>
  </div>
</section>

