<div>
    @forelse ($posts as $post)
    <div class="col-lg-4 filtr-item" data-category="development">
        <div class="portfolio-block">
            <img width="200" height="200" class="img-responsive" src=" {{ $post->photo }} "
                alt="Imagen de producto de porcelana fría" style="max-height: 200px; object-fit: cover;">
            <div class="caption">
                <a class="search-icon image-popup" data-effect="mfp-with-zoom" href=" {{ $post->photo }} "
                    data-lightbox="image-1">
                    <i class="tf-ion-android-search"></i>
                </a>
                <h4><a href="">{{ $post->title }}</a></h4>
                <p>
                    {{ $post->text }}
                </p>
            </div>
        </div>
    </div>
    @empty
    <h2>¡No hay trabajos publicados, todavía!</h2>
    @endforelse
</div>
