<header class="banner">

    @if (has_nav_menu('primary_navigation'))
    <nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ home_url('/') }}">{!! $siteName !!}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                {!!
                    wp_nav_menu(
                        [
                            'theme_location'            => 'primary_navigation',
                            'depth'                     => 2,
                            'container'                 => 'div',
                            'container_class'           => 'ms-auto',
                            'container_id'              => 'bootscore-navbar',
                            'menu_class'                => 'nav navbar-nav justify-content-end',
                            'fallback_cb'               => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'                    => new bootstrap_5_wp_nav_menu_walker()
                        ]
                    )
                !!}
            </div>
        </div>
    </nav>
    @endif

</header>