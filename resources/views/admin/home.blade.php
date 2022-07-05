<!DOCTYPE html>
<html lang="en">

    <head>
        <x-partials.head />
    </head>

    <body>
        <x-preloader />
        <x-header />

        {{-- content here --}}

        <section id="contact-us" class="contact-us section-bg">
            <div class="container">
                <div class="row">

                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>Hola <span class="color">{{ auth()->user()->name }}</span>
                        </h2>
                        <div class="border"></div>
                    </div>

                    <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                        <h2 class="font-weight-bold">Nuevo trabajo</h2>
                        <h3 class="font-weight-bold">Sube un nuevo trabajo para que el mundo lo vea...
                        </h3>
                    </div>

                    <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

                    </div>

                </div>
            </div>

        </section>
        <x-footer />
        <x-partials.scripts />
    </body>

</html>
