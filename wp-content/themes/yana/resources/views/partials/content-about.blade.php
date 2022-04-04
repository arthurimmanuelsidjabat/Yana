<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-lg-3">
            @php the_content() @endphp
        </div>
    </div>
    
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
</div>

<div class="container pt-3">
    <div class="page-header">
        <h2 class="h1">Team</h2>
    </div>
</div>

<div class="container">
    <div class="separator border-bottom border-3 my-4"></div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-lg-3">
            <div class="row gx-5">
                @php
                    wp_reset_query();

                    $args = array(
                        'post_type' => 'team',
                        'posts_per_page' => 3,
                        'orderby' => 'menu_order',
                        'order'   => 'ASC',
                    );
                    $query = new WP_Query( $args );
                @endphp
                
                @while ($query->have_posts())
                @php $query->the_post() @endphp
                <div class="col-lg-4 mb-5 mb-lg-3">
                    <div class="card h-100 border-0 shadow-mg">
                        @if ( has_post_thumbnail () )
                            {!!
                                the_post_thumbnail( 'full',
                                    array(
                                        'class' => 'card-img-top img-fluid'
                                    )
                                )
                            !!}
                        @endif
                        
                        <div class="card-body p-4">
                            <div class="team-name">
                                <h5 class="card-title mb-0">@php the_title() @endphp</h5>
                            </div>

                            <div class="separator border-bottom border-3 my-2 w-25"></div>

                            <div class="team-role mb-3">
                                @php $taxonomy = get_the_terms( get_the_ID(), 'team-roles' ) @endphp
                                @foreach ( $taxonomy as $tax )
                                    <p class="text-success h6 mb-0">@php echo esc_html( $tax->name ) @endphp</p>
                                @endforeach
                            </div>

                            <div class="team-bio">
                                @if ( has_excerpt() ) @php echo '<p class="card-text mb-0">' . get_the_excerpt() . '</p>' @endphp @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endwhile
                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </div>
</div>