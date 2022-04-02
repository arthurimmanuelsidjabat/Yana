@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.front-page-header')
        @include('partials.content-front-page')
    @endwhile
@endsection