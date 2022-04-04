@php
    wp_reset_query();
    $currentID = get_the_ID();

    $args = array(
        'post_type' => 'slider',
        'post__not_in' => array($currentID),
        'posts_per_page' => 3,
        'orderby' => 'menu_order',
        'order'   => 'ASC',
    );
    $query = new WP_Query( $args );
    $inc=1;
@endphp

<div id="carouselFrontpageFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        @while ($query->have_posts())
        @php $query->the_post() @endphp
        <div class="carousel-item position-relative @if ($query->current_post==0) active @endif">
            <div class="position-absolute start-0 end-0">
                {!!
                    the_post_thumbnail( 'full')
                !!}
            </div>
            <div class="position-absolute start-0 end-0 h-100 bg-dark bg-opacity-25"></div>
            <div class="py-5 position-relative">
                <div class="container px-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <div class="text-center my-5">
                                <h2 class="display-5 fw-bolder text-white mb-2">@php the_title() @endphp</h2>
                                @if ( has_excerpt() ) @php echo '<p class="lead text-white mb-4">' . get_the_excerpt() . '</p>' @endphp @endif
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                    <a class="btn btn-dark btn-lg px-4 me-sm-3" href="{{ home_url('/') }}contact/">@php echo esc_html__( 'Get Started', 'hamanami' ) @endphp</a>
                                    <a class="btn btn-outline-light btn-lg px-4" href="{{ home_url('/') }}services/">@php echo esc_html__( 'Learn More', 'hamanami' ) @endphp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endwhile
        @php wp_reset_postdata() @endphp
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFrontpageFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">@php echo esc_html__( 'Previous', 'hamanami' ) @endphp</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselFrontpageFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">@php echo esc_html__( 'Next', 'hamanami' ) @endphp</span>
    </button>
</div>