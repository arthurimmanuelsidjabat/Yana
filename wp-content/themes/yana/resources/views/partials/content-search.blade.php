<article @php(post_class( array('col-lg-6 mb-5') ))>
    <div class="card h-100">
        <header class="card-header bg-white p-4">
            <h3 class="entry-title">
                <a class="text-decoration-none link-dark stretched-link" href="{{ get_permalink() }}">
                    {!! $title !!}
                </a>
            </h3>

            @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
        </header>

        <div class="entry-summary card-body p-4">
            @php(the_excerpt())
        </div>
    </div>
</article>