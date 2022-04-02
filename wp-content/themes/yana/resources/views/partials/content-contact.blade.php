<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-lg-3">
            <div class="row">
                <div class="col-lg-4 order-2 order-lg-1 mb-3 mb-lg-0">

                    @php the_content() @endphp
                    
                    @include('additional-content.social-icon-start')

                </div>
                <div class="col-lg-8 order-1 order-lg-2">

                    @php echo do_shortcode('[fluentform id="1"]') @endphp

                </div>
            </div>

            <div class="mb-4">
                <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.939911041224!2d-122.38995338489632!3d37.76800712032227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7f1a33f38ea7%3A0xe4941e6c1dc4022b!2s500%20Terry%20A%20Francois%20Blvd%2C%20San%20Francisco%2C%20CA%2094158%2C%20Amerika%20Serikat!5e0!3m2!1sid!2sid!4v1648929215534!5m2!1sid!2sid" width="600" height="300" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

</div>