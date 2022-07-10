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
                        <h2 class="font-weight-bold">Mensaje de {{ $message->name_mess }}</h2>
                        <h3 class="font-weight-bold">Su email es {{ $message->email_mess }}</h3>
                        <span>{{ $message->created_at->diffForHumans() }}</span>
                    </div>

                    <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">

                        <p style="font-size: 2rem; font-weight: bold; color: #57cbcc;">
                            {{ $message->message }}
                        </p>
                    </div>
                    <a href="{{ route('messages.index') }}" style="font-size: 2rem; font-weight: bold;">
                        << Volver </a>

                </div>
            </div>

        </section>


        <x-footer />
        <x-partials.scripts />
    </body>

</html>
