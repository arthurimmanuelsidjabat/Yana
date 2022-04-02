<footer id="footer" class="footer-content-info bg-light" itemscope itemtype="http://schema.org/WPFooter" itemscope>

    @php(dynamic_sidebar('sidebar-footer'))

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-copyright py-4">
                    <p class="mb-0">&copy; {!! date('Y') !!} <span class="text-danger">❤</span> <a href="{{ home_url('/') }}" class="text-decoration-none text-body">{!! $siteName !!}</a></p>
                </div>
            </div>
        </div>
    </div>

</footer>