<div class="entry-meta mt-3">
    <time class="updated text-white" datetime="{{ get_post_time('c', true) }}">
        {{ get_the_date() }}
    </time>

    <span class="byline author vcard">
        <span class="text-white">{{ __('By', 'sage') }}</span>
        <a href="{{ get_author_posts_url(get_the_author_meta('ID')) }}" rel="author" class="fn text-white">
            {{ get_the_author() }}
        </a>
    </span>
</div>