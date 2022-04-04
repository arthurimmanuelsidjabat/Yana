<form role="search" method="get" class="search-form" action="{{ home_url('/') }}">
    <div class="input-group">
        <label class="form-label">
            <span class="visually-hidden">
                {{ _x('Search for:', 'label', 'sage') }}
            </span>        
        </label>
        <input class="form-control" type="search" placeholder="{!! esc_attr_x('Search &hellip;', 'placeholder', 'sage') !!}" value="{{ get_search_query() }}" name="s">
        <button class="btn btn-dark"><i class="bi bi-search"></i> {{ _x('Search', 'submit button', 'sage') }}</button>
    </div>
</form>