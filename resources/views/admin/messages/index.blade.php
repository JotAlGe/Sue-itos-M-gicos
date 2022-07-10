<!DOCTYPE html>
<html lang="en">

    <x-partials.head />

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

                    <div class="contact-info col-md-4 wow fadeInUp" data-wow-duration="500ms">
                        <h2 class="font-weight-bold">Mensajes</h2>
                        <h3 class="font-weight-bold">Estos son los mensajes de tus seguidores...
                        </h3>
                    </div>

                    <div class="contact-form col-md-8 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                        <table class="table table-dark custom-table">
                            <thead>
                                <tr>
                                    <th scope="col">Número de mensaje</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Asunto</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Mensaje</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($messages as $message)

                                <tr scope="row">
                                    <td>
                                        {{ $message->id }}
                                    </td>
                                    <td><a href="{{route('messages.show', $message->id)}}">{{$message->name_mess}}</a>
                                    </td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->email_mess }}</td>
                                    <td>
                                        <small class="d-block">{{ $message->message }}</small>
                                    </td>
                                    <td><a href="{{route('messages.show', $message->id)}}" class="more">Detalles</a>

                                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST"
                                            onsubmit="
                                                                                    return confirm('¿Eliminar el mensaje de {{ $message->name_mess }}?')
                                                                                    ">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                @empty
                                <h2>No hay mensajes, aún...</h2>
                                @endforelse

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </section>

        <x-footer />
        <x-partials.scripts />
    </body>

</html>
