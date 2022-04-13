

<section class="py-5">
	<div class="container px-lg-5 my-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-7">
                <div class="text-lg-center">
                    <h2 class="h1">@php echo esc_html__( '☕', 'hamanami' ) @endphp</h2>
                    <h2 class="h1 mb-3">@php echo esc_html__( 'Mauris Vitae Tortor Condimentum', 'hamanami' ) @endphp</h2>
                    <p class="mb-0">@php echo esc_html__( 'Nisl purus in mollis nunc sed id semper. Amet consectetur adipiscing elit.', 'hamanami' ) @endphp</p>
                    <p class="mb-0">@php echo esc_html__( 'Pellentesque elit ullamcorper dignissim cras tincidunt lobortis pharetra vel turpis.', 'hamanami' ) @endphp</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-3 pb-3 pt-lg-0 pb-lg-5">
	<div class="container">
		<div class="row">
			@php
                wp_reset_query();

                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'menu_order',
                    'order'   => 'ASC',
                );
                $query = new WP_Query( $args );
            @endphp
			
			@while ($query->have_posts())
			@php $query->the_post() @endphp
			<div class="col-lg-4 mb-5 mb-lg-0">
                <div class="card h-100 border-0 shadow-mg">
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
                        <a class="text-decoration-none link-dark stretched-link" href="@php the_permalink() @endphp">
                            <h5 class="card-title mb-3">@php the_title() @endphp</h5>
                        </a>
                        @if ( has_excerpt() ) @php echo '<p class="card-text mb-0">' . get_the_excerpt() . '</p>' @endphp @endif
                    </div>
                </div>
			</div>
			@endwhile
			@php wp_reset_postdata() @endphp
		</div>
	</div>
</section>