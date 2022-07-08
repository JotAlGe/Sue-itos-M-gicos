<div>
    <section class="portfolio section" id="portfolio">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Nuestro <span class="color">trabajo</span></h2>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div> <!-- /end col-lg-12 -->
            </div> <!-- end row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="portfolio-filter">
                        <button class="active" type="button" data-filter="all">Todo</button>
                        <button type="button" data-filter="photography">Fotografías</button>
                        <button type="button" data-filter="design">Diseño</button>
                        <button type="button" data-filter="development">Exclusividad</button>

                        @auth
                        <button type="button" data-filter="development">
                            <a href="{{ route('home') }}" style="color: #57cbcc;">Publicar otro trabajo
                            </a>
                        </button>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="row filtr-container">
                {{-- jobs --}}
                @livewire('posts.index')

            </div>
        </div> <!-- end container -->
    </section> <!-- End section -->
</div>
