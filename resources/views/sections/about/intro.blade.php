<section id="about-intro" aria-labelledby="about-intro-heading" class="py-2xl-3xl">
  <div class="u-container grid items-center gap-l-xl lg:grid-cols-2">
    <div>
      <h2 id="about-intro-heading">
        Bio
      </h2>

      <div class="mt-l flex max-w-prose flex-col gap-s text-muted">
        <?php echo wp_kses_post(get_field('about-introduction')); ?>
      </div>
    </div>

    <div class="aspect-square w-full overflow-hidden rounded-lg border border-border bg-surface">
      <div class="flex h-full items-center justify-center text-step--1 text-muted">
        Image placeholder
      </div>
    </div>
  </div>
</section>
