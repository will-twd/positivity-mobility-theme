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
      <h1>Theme Style Guide</h1>
    </header>

    {{-- ================= TYPE — ELEMENT DEFAULTS ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s underline">Base Element Styles</h2>

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
            The quick brown fox jumps over the lazy dog.
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
      <h2 class="mb-s underline">Utopia Step Size Variables</h2>
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
      <h2 class="mb-s underline">Colour</h2>

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

    {{-- ================= COMPONENTS ================= --}}
    <section class="mb-2xl border-t border-border pt-xl">
      <h2 class="mb-s underline">Components</h2>

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
  </div>
@endsection
