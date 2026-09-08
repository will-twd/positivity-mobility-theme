@extends('layouts.app')

@section('content')
  @include('sections.front-page.hero')
  @include('sections.front-page.services')
  @include('sections.front-page.about-teaser')
  @include('sections.front-page.blog-feed')
  @include('sections.front-page.testimonials')

  <section id="service-area">
    <h2>Service area / coverage</h2>
  </section>

  <section id="cta">
    <h2>Final CTA</h2>
  </section>
@endsection
