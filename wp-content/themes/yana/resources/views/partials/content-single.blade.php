<article @php(post_class()) itemtype="https://schema.org/CreativeWork" itemscope>
    <div id="post-header" class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item position-relative active">
                <div class="position-absolute start-0 end-0">

                    {!! the_post_thumbnail( 'full') !!}

                </div>

                <div class="position-absolute start-0 end-0 h-100 bg-dark bg-opacity-50"></div>

                <div class="py-5 position-relative">
                    <div class="container px-lg-5">
                        <div class="row gx-5 justify-content-center">
                            <div class="col-12">
                                <div class="text-center my-5">
                                    <h1 class="display-5 fw-bolder text-white mb-2"><?php the_title() ?></h1>
                                    @include('partials.entry-meta-single')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="entry-content">
        <div class="container py-3 py-lg-5">
            <?php the_content() ?>
        </div>
    </div>

    <footer class="entry-comment">
        <div>
            {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
                <p>' . __('Pages:', 'sage'), 'after' => '</p>
            </nav>']) !!}
        </div>
    </footer>

    @php(comments_template())

</article>