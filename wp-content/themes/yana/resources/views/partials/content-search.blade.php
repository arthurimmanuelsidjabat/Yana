<article @php(post_class('col-lg-4 mb-5 mb-lg-4')) itemtype="https://schema.org/CreativeWork" itemscope>
    <div class="card h-100">
        <header class="card-header bg-white p-4">
            <h3 class="entry-title">
                <a class="text-decoration-none link-dark stretched-link" href="{{ get_permalink() }}">
                    {!! $title !!}
                </a>
            </h3>
        </header>

        <div class="entry-summary card-body p-4">
            {!! the_excerpt() !!}
        </div>
        <div class="card-footer bg-transparent border-top-0 px-4">
            @includeWhen(get_post_type() === 'post', 'partials.entry-meta')
        </div>
    </div>
</article>