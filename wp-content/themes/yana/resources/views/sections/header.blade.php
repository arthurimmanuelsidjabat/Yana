<header class="banner" itemtype="http://schema.org/WPHeader" itemscope>
    <div class="logo-wrapper py-4">
        <div class="container-xxl">
            <div class="row g-0">
                <div class="col-4">

                    @if ( !is_front_page() )
                    <p class="lh-1 h6 mb-0"><a class="lead fw-bold text-decoration-none" href="{{ home_url('/') }}"><svg class="logo-icon w-100 h-auto" width="48" height="48" viewBox="0 0 48 48"><path fill="#FFC107" d="M11.143 15L13 28 35 28 36.857 15z"/><path fill="#795548" d="M39,15v-2.5c0-0.828-0.672-1.5-1.5-1.5h-27C9.672,11,9,11.672,9,12.5V15H39z"/><path fill="#77574F" d="M13.143 29L15 42 33 42 34.857 29z"/><path fill="#77574F" d="M24 23A5 5 0 1 0 24 33A5 5 0 1 0 24 23Z"/><path fill="#4E342E" d="M20 28c0-.732.211-1.409.555-2h-7.84l.714 5h7.951C20.541 30.267 20 29.201 20 28zM27.445 26C27.789 26.591 28 27.268 28 28c0 1.201-.541 2.267-1.38 3h7.951l.714-5H27.445zM36 6L12 6 11 11 37 11z"/><path fill="#5D4037" d="M24,21c3.866,0,7,3.134,7,7s-3.134,7-7,7s-7-3.134-7-7S20.134,21,24,21 M24,20c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S28.411,20,24,20L24,20z"/><path fill="#FFF3E0" d="M24,21c-3.866,0-7,3.134-7,7s3.134,7,7,7s7-3.134,7-7S27.866,21,24,21z M24,32c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S26.209,32,24,32z"/></svg> {!! $siteName !!}</a></p>
                    @else
                    <h1 class="lh-1 h6 mb-0"><a class="lead fw-bold text-decoration-none" href="{{ home_url('/') }}"><svg class="logo-icon w-100 h-auto" width="48" height="48" viewBox="0 0 48 48"><path fill="#FFC107" d="M11.143 15L13 28 35 28 36.857 15z"/><path fill="#795548" d="M39,15v-2.5c0-0.828-0.672-1.5-1.5-1.5h-27C9.672,11,9,11.672,9,12.5V15H39z"/><path fill="#77574F" d="M13.143 29L15 42 33 42 34.857 29z"/><path fill="#77574F" d="M24 23A5 5 0 1 0 24 33A5 5 0 1 0 24 23Z"/><path fill="#4E342E" d="M20 28c0-.732.211-1.409.555-2h-7.84l.714 5h7.951C20.541 30.267 20 29.201 20 28zM27.445 26C27.789 26.591 28 27.268 28 28c0 1.201-.541 2.267-1.38 3h7.951l.714-5H27.445zM36 6L12 6 11 11 37 11z"/><path fill="#5D4037" d="M24,21c3.866,0,7,3.134,7,7s-3.134,7-7,7s-7-3.134-7-7S20.134,21,24,21 M24,20c-4.411,0-8,3.589-8,8s3.589,8,8,8s8-3.589,8-8S28.411,20,24,20L24,20z"/><path fill="#FFF3E0" d="M24,21c-3.866,0-7,3.134-7,7s3.134,7,7,7s7-3.134,7-7S27.866,21,24,21z M24,32c-2.209,0-4-1.791-4-4s1.791-4,4-4s4,1.791,4,4S26.209,32,24,32z"/></svg> {!! $siteName !!}</a></h1>
                    @endif

                </div>
                <div class="col-7 offset-1">
                    @include('additional-content.social-icon-end')
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