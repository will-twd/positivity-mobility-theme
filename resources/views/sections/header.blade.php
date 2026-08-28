<header class="border-b border-border">
  <div class="mx-auto flex w-full max-w-6xl items-center justify-between gap-6 px-6 py-4">
    <a class="text-lg font-semibold text-white hover:text-accent-hover" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="text-sm text-muted" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex flex-wrap gap-x-6 gap-y-2', 'echo' => false]) !!}
      </nav>
    @endif
  </div>
</header>
