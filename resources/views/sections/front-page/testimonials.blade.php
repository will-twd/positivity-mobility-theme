<section id="testimonials" aria-labelledby="testimonials-heading" class="py-2xl-3xl">
  <div class="u-container">
    <h2 id="testimonials-heading">
      What clients say
    </h2>

    {{--
      Static skeleton for now — testimonials will later be added by the
      client from the CMS (likely a repeater field) and looped here
      instead of these three fixed cards.
    --}}
    <ul class="mt-l grid gap-l-xl sm:grid-cols-2 lg:grid-cols-3">
      <li>
        <figure class="flex h-full flex-col gap-s rounded-lg border border-border bg-surface p-m">
          <blockquote class="text-step--1 text-muted">
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
            do eiusmod tempor incididunt ut labore et dolore magna
            aliqua."
          </blockquote>
          <figcaption class="text-step--1 font-semibold text-foreground">
            Client name, context
          </figcaption>
        </figure>
      </li>

      <li>
        <figure class="flex h-full flex-col gap-s rounded-lg border border-border bg-surface p-m">
          <blockquote class="text-step--1 text-muted">
            "Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat."
          </blockquote>
          <figcaption class="text-step--1 font-semibold text-foreground">
            Client name, context
          </figcaption>
        </figure>
      </li>

      <li>
        <figure class="flex h-full flex-col gap-s rounded-lg border border-border bg-surface p-m">
          <blockquote class="text-step--1 text-muted">
            "Duis aute irure dolor in reprehenderit in voluptate velit
            esse cillum dolore eu fugiat nulla pariatur."
          </blockquote>
          <figcaption class="text-step--1 font-semibold text-foreground">
            Client name, context
          </figcaption>
        </figure>
      </li>
    </ul>
  </div>
</section>
