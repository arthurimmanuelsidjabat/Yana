@extends('layouts.app')

@section('content')
@include('partials.page-header')
<div class="container py-5">

    @if (! have_posts())
    <div class="row">
        <div class="col-lg-6">
            <div class="page-error-404">
                <div class="page-header">
                    <h1>404</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="page-error-404-content">
                <div class="text-start">
                    <div class="text-medium mb-4">
                        <x-alert type="warning">{!! __('Ooops, This Page Could Not Be Found!', 'sage') !!}</x-alert>
                    </div>
                    <div class="mb-4">
                        {!! __('The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'sage') !!}
                    </div>
                </div>
                {!! get_search_form(false) !!}
            </div>
        </div>
    </div>
    @endif

</div>
@endsection