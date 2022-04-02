@extends('layouts.app')

@section('content')
    @include('partials.service-header')

    <div class="container">

        @if (! have_posts())
            <x-alert type="warning">
                {!! __('Sorry, no results were found.', 'sage') !!}
            </x-alert>

            {!! get_search_form(false) !!}
        @endif

        <div class="row">
            <div class="col-lg-9 offset-lg-3">
                <div class="row">            
        
                @while(have_posts()) @php(the_post())

                    <article @php(post_class(array('col-lg-4 mb-5 mb-lg-4'))) itemtype="https://schema.org/CreativeWork" itemscope>
                        <div class="card h-100">
                            @if ( has_post_thumbnail () )
                                {!!
                                    the_post_thumbnail( 'w600',
                                        array(
                                            'class' => 'card-img-top img-fluid'
                                        )
                                    )
                                !!}
                            @endif
                            <div class="card-body p-4">

                                @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])

                            </div>
                        </div>
                    </article>

                @endwhile
                
                {!! get_the_posts_navigation() !!}
                    
                </div>
            </div>
        </div>

    </div>
    
@endsection

@section('sidebar')
    @include('sections.sidebar')
@endsection