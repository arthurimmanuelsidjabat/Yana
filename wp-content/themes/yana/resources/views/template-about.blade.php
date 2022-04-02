{{--
  Template Name: About Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.page-about-header')
        @include('partials.content-about')
    @endwhile
@endsection