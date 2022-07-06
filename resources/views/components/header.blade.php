<div>
    <header id="navigation" class="navbar navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand logo" href="{{ route('welcome') }}">
                    <img src="{{ asset('asets/images/logo_sm.png') }}" alt="Logo de sueñitos mágicos"
                        style="max-width: 50px;" />
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="Navigation">
                <ul id="nav" class="nav navbar-nav navigation-menu">
                    <li><a data-scroll href="#body">Inicio</a></li>
                    <li><a data-scroll href="#about">Sobre nosotros</a></li>
                    <!-- <li><a data-scroll href="#services">Servicios</a></li> -->
                    <li><a data-scroll href="#portfolio">Portafolio</a></li>
                    {{-- <li><a data-scroll href="#counter">Redes</a></li> --}}
                    <li><a data-scroll href="#our-team">Fundadora</a></li>
                    <!--<li><a data-scroll href="#blog">Blog</a></li> -->
                    <li><a data-scroll href="#contact-us">Contacto</a></li>

                    @auth
                    <li>
                        <form id="contact-form" role="form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="Logout" class="btn btn-transparent">
                        </form>
                    </li>
                    @endauth
                </ul>
            </nav>

        </div>
    </header>
</div>
