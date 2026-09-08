<section id="blog" aria-labelledby="blog-heading" class="py-2xl-3xl">
  <div class="u-container">
    <h2 id="blog-heading">
      From the blog
    </h2>

    {{-- Static skeleton for now — will be wired up to a WP_Query of recent posts. --}}
    <div class="mt-l grid gap-l-xl lg:grid-cols-2">
      <article class="flex flex-col gap-s rounded-lg border border-border bg-surface p-m">
        <div class="aspect-video w-full overflow-hidden rounded-lg border border-border bg-surface-raised">
          <div class="flex h-full items-center justify-center text-step--1 text-muted">
            Image placeholder
          </div>
        </div>

        <h3 class="text-step-2 font-semibold text-foreground">
          Lorem ipsum dolor sit amet consectetur
        </h3>

        <p class="text-step--1 text-muted">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </article>

      <div class="flex flex-col gap-m">
        <article class="flex flex-col gap-2xs rounded-lg border border-border bg-surface p-m">
          <h3 class="text-step-1 font-semibold text-foreground">
            Consectetur adipiscing elit
          </h3>

          <p class="text-step--1 text-muted">
            Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip.
          </p>

          <time class="text-step--2 text-muted">Lorem ipsum date</time>
        </article>

        <article class="flex flex-col gap-2xs rounded-lg border border-border bg-surface p-m">
          <h3 class="text-step-1 font-semibold text-foreground">
            Duis aute irure dolor
          </h3>

          <p class="text-step--1 text-muted">
            Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim.
          </p>

          <time class="text-step--2 text-muted">Lorem ipsum date</time>
        </article>
      </div>
    </div>

    <a href="{{ home_url('/blog') }}"
      class="mt-l inline-flex items-center rounded-full bg-accent px-m py-xs text-step--1 font-semibold text-foreground transition-colors hover:bg-accent-hover focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent-hover">
      View all posts
    </a>
  </div>
</section>
