<header>
    <a class="text-decoration-none link-dark stretched-link" href="@php the_permalink() @endphp">
        <h5 class="card-title mb-3">@php the_title() @endphp</h5>
    </a>
</header>

<div class="entry-summary">

    @if ( has_excerpt() ) @php echo '<p class="card-text mb-0">' . get_the_excerpt() . '</p>' @endphp @endif

</div>