<!DOCTYPE html>
<html lang="en">
    <x-partials.head />

    <body>
        <x-preloader />
        <x-header />

        {{-- form  --}}
        <section id="contact-us" class="contact-us section-bg">
            <div class="container">
                <div class="row">

                    <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                        <h2>¿Eres <span class="color">Melisa?</span></h2>
                        <div class="border"></div>
                    </div>

                    <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                        <h2 class="font-weight-bold">Login</h2>
                        <h3 class="font-weight-bold">Ingresa tu correo y contraseña para poder subir un nuevo trabajo.
                        </h3>
                    </div>

                    <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <x-admin.login />
                    </div>

                </div>
            </div>

        </section>

        <x-footer />
        <x-partials.scripts />
    </body>

</html>
