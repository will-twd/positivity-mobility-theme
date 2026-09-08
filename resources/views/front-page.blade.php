@extends('layouts.app')

@section('content')
  @include('sections.front-page.hero')
  @include('sections.front-page.services')
  @include('sections.front-page.about-teaser')
  @include('sections.front-page.blog-feed')
  @include('sections.front-page.testimonials')
  @include('sections.front-page.service-area')
  @include('sections.front-page.cta')
@endsection
