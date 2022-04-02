@extends('layouts.app')

@section('content')
    @while(have_posts()) @php(the_post())
        @include('partials.front-page-header')
        @includeFirst(['partials.content-page', 'partials.content'])
    @endwhile
@endsection