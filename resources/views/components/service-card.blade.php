{{--
  Service cards components for front-page "Services" section.

  Anonymous component with markup only, no PHP class. @props declares data for the componenent to accept as HTML attributes.  
  anything not listed falls back to $attributes. In the parent, a plain attribute (eg. name="…") passes a literal
  string, a colon-prefixed one (:name="…") will evaluate the value as PHP.
--}}
@props(['name', 'description', 'href' => home_url('/services')])

<a href="{{ $href }}"
  {{ $attributes->class([
      'group flex h-full flex-col gap-s rounded-lg border border-border bg-surface p-m',
      'transition-colors hover:bg-surface-raised',
      'focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent-hover',
  ]) }}>
  <span aria-hidden="true"
    class="flex size-xl items-center justify-center rounded-full border border-border text-step--2 text-muted">
    icon
  </span>

  <h3 class="text-step-2 font-semibold text-white group-hover:text-accent-hover">
    {{ $name }}
  </h3>

  <p class="text-step--1 text-muted">
    {{ $description }}
  </p>
</a>
