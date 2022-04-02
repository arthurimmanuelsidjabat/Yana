<header class="banner" itemtype="http://schema.org/WPHeader" itemscope>
    <div class="logo-wrapper py-4">
        <div class="container-xxl">
            <div class="row g-0">
                <div class="col-4">

                    @if ( !is_front_page() )
                    <p class="h6 mb-0"><a class="navbar-brand" href="{{ home_url('/') }}">{!! $siteName !!}</a></p>
                    @else
                    <h1 class="h6 mb-0"><a class="navbar-brand" href="{{ home_url('/') }}">{!! $siteName !!}</a></h1>
                    @endif

                </div>
                <div class="col-7 offset-1">
                    <ul class="social-icon-container list-group list-unstyled list-group-horizontal d-flex justify-content-end">
                        <li class="social-icon">
                            <a class="text-decoration-none" target="_blank" href="https://www.facebook.com/" rel="nofollow">
                                <i class="bi bi-facebook"></i>
                            </a>
                        </li>
                        <li class="social-icon">
                            <a class="text-decoration-none" target="_blank" href="https://twitter.com/" rel="nofollow">
                                <i class="bi bi-twitter"></i>
                            </a>
                        </li>
                        <li class="social-icon">
                            <a class="text-decoration-none" target="_blank" href="https://www.instagram.com/" rel="nofollow">
                                <span class="bi bi-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @if (has_nav_menu('primary_navigation'))
    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 bg-light" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <div class="container">
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
                            'container_class'           => 'w-100',
                            'container_id'              => 'bootscore-navbar',
                            'menu_class'                => 'nav navbar-nav nav-lg-fill justify-content-between',
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