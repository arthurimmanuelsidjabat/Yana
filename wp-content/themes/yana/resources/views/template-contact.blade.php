{{--
  Template Name: Contact Template
--}}

@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.page-contact-header')
        @include('partials.content-contact')
    @endwhile
@endsection