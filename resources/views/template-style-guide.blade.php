{{--
  Template Name: Style Guide

  This file is for development / design reference only. It renders fonts and components
  in order to give visual feedback on changes to the design system. To render this template
  you a new page using this template must be registered with WordPress, and should be set to
  private to ensure it only displays to site admins and editors. 
--}}

@extends('layouts.app')

@section('content')
  <div class="u-container py-2xl-3xl">

    <header class="mb-2xl">
      <h1>{{ $siteName }} — Style Guide</h1>
      <p class="mt-s max-w-prose text-muted">
        Living reference. Everything here renders through the theme's real
        CSS and components, so it can't drift out of sync.
      </p>
    </header>

    {{-- ================= TYPE — ELEMENT DEFAULTS ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s">Type — element defaults</h2>
      <p class="mb-l max-w-prose text-muted">
        Bare tags. Sizes, weight, line-height and wrapping come from the
        <code>@layer base</code> block in <code>app.css</code> (Utopia
        <code>--text-step-*</code>). Per-instance utilities still override.
      </p>

      <div class="flex flex-col gap-m">
        <div>
          <span class="text-step--1 text-muted">&lt;h1&gt; · --text-step-5</span>
          <h1>The quick brown fox jumps over the lazy dog</h1>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;h2&gt; · --text-step-4</span>
          <h2>The quick brown fox jumps over the lazy dog</h2>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;h3&gt; · --text-step-3</span>
          <h3>The quick brown fox jumps over the lazy dog</h3>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;h4&gt; · --text-step-2</span>
          <h4>The quick brown fox jumps over the lazy dog</h4>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;h5&gt; · --text-step-1</span>
          <h5>The quick brown fox jumps over the lazy dog</h5>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;h6&gt; · --text-step-0</span>
          <h6>The quick brown fox jumps over the lazy dog</h6>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;p&gt; · --text-step-0 · line-height 1.6</span>
          <p class="max-w-prose">
            The quick brown fox jumps over the lazy dog. Body copy sets the
            reading measure (<code>max-w-prose</code>) and a relaxed
            line-height. Consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div>
          <span class="text-step--1 text-muted">&lt;small&gt; · --text-step--1</span><br>
          <small>The quick brown fox jumps over the lazy dog</small>
        </div>
      </div>
    </section>

    {{-- ================= TYPE — FULL STEP SCALE ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s">Type — full step scale</h2>
      <p class="mb-l max-w-prose text-muted">
        All eight Utopia steps, including ones no template uses yet. Applied
        directly (as <code>text-step-N</code> utilities) on non-heading
        elements — buttons, captions, badges.
      </p>

      <div class="flex flex-col gap-2xs">
        @foreach (['-2', '-1', '0', '1', '2', '3', '4', '5'] as $step)
          <p style="font-size: var(--text-step-{{ $step }})">
            <span class="text-step--1 text-muted">text-step-{{ $step }}</span>
            &nbsp;Positivity Mobility
          </p>
        @endforeach
      </div>
    </section>

    {{-- ================= COLOUR ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s">Colour</h2>
      <p class="mb-l max-w-prose text-muted">
        The full <code>@theme</code> palette. Client steer: black background,
        white text, blue accent — everything else is reasonable judgement.
      </p>

      @php
        $colours = [
            ['token' => 'black', 'util' => 'bg-black', 'role' => 'page background'],
            ['token' => 'white', 'util' => 'text-white', 'role' => 'primary text'],
            ['token' => 'surface', 'util' => 'bg-surface', 'role' => 'cards / raised sections'],
            ['token' => 'surface-raised', 'util' => 'bg-surface-raised', 'role' => 'nested / hover surfaces'],
            ['token' => 'border', 'util' => 'border-border', 'role' => 'borders, dividers'],
            ['token' => 'muted', 'util' => 'text-muted', 'role' => 'secondary text, captions'],
            ['token' => 'accent', 'util' => 'bg-accent', 'role' => 'links, outlines, interactive'],
            ['token' => 'accent-hover', 'util' => 'hover:bg-accent-hover', 'role' => 'hover / active on dark'],
        ];
      @endphp

      <div class="grid gap-m sm:grid-cols-2 lg:grid-cols-4">
        @foreach ($colours as $c)
          <div>
            <div class="mb-2xs rounded-lg border border-border"
              style="background: var(--color-{{ $c['token'] }}); block-size: var(--spacing-2xl)"></div>
            <p class="text-step--1">
              <span class="font-semibold">--color-{{ $c['token'] }}</span><br>
              <span class="text-muted">{{ $c['util'] }} — {{ $c['role'] }}</span>
            </p>
          </div>
        @endforeach
      </div>
    </section>

    {{-- ================= SPACING ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s">Spacing</h2>
      <p class="mb-l max-w-prose text-muted">
        Utopia fluid scale — the same token drives padding, margin, gap,
        width and height (<code>p-s</code>, <code>gap-l</code>,
        <code>mb-xl</code> …). Bars scale with the viewport.
      </p>

      <div class="flex flex-col gap-2xs">
        @foreach (['3xs', '2xs', 'xs', 's', 'm', 'l', 'xl', '2xl', '3xl'] as $step)
          <div class="flex items-center gap-s">
            <span class="text-step--1 text-muted" style="inline-size: 6rem">--spacing-{{ $step }}</span>
            <span class="block rounded bg-accent"
              style="inline-size: var(--spacing-{{ $step }}); block-size: var(--spacing-s)"></span>
          </div>
        @endforeach
      </div>
    </section>

    {{-- ================= COMPONENTS ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s">Components</h2>
      <p class="mb-l max-w-prose text-muted">What's been built so far.</p>

      {{-- Button — TODO: extract to <x-button> on its next use (APPROACH.md, "componentize on the second use"). --}}
      <h3 class="mb-s">Button / CTA</h3>
      <a href="{{ home_url('/contact') }}"
        class="inline-flex items-center rounded-full bg-accent px-m py-xs text-step--1 font-semibold text-white transition-colors hover:bg-accent-hover focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-accent-hover">
        Enquire now
      </a>
      <p class="mt-s text-step--1 text-muted">
        Not a component yet — styled inline in <code>hero.blade.php</code>.
        Next task: extract <code>&lt;x-button&gt;</code>.
      </p>

      <h3 class="mb-s mt-xl">Service card <span class="text-step--1 font-normal text-muted">&lt;x-service-card&gt;</span>
      </h3>
      <div class="grid gap-l-xl sm:grid-cols-2">
        <x-service-card name="Lorem ipsum dolor sit"
          description="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua." />
        <x-service-card name="Consectetur adipiscing elit"
          description="Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis." />
      </div>

      <h3 class="mb-s mt-xl">Image placeholder</h3>
      <div class="overflow-hidden rounded-lg border border-border bg-surface"
        style="inline-size: 12rem; block-size: 12rem">
        <div class="flex h-full items-center justify-center text-step--1 text-muted">
          Image placeholder
        </div>
      </div>

      <p class="mt-xl text-step--1 text-muted">
        <code>&lt;x-alert&gt;</code> also exists (Sage stock) but is broken —
        it references Tailwind default colours that were removed from the
        palette. Pending rebuild or deletion; not shown here.
      </p>
    </section>

    {{-- ================= FONTS ================= --}}
    <section class="border-t border-border pt-xl">
      <h2 class="mb-s">Fonts</h2>
      <p class="mb-l max-w-prose text-muted">
        System sans-serif stack (Tailwind's default <code>--font-sans</code>).
        No custom or web font yet — deferred. Weights in use:
      </p>

      <div class="flex flex-col gap-2xs">
        <p class="font-normal">The quick brown fox jumps over the lazy dog — 400 / normal (body)</p>
        <p class="font-semibold">The quick brown fox jumps over the lazy dog — 600 / semibold (card titles, CTA)</p>
        <p class="font-bold">The quick brown fox jumps over the lazy dog — 700 / bold (headings)</p>
      </div>
    </section>

  </div>
@endsection
