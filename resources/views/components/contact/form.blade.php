<div>
    <section id="contact-us" class="contact-us section-bg">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                    <h2>Enviame <span class="color">un mensaje</span></h2>
                    <div class="border"></div>
                </div>
                <!-- /section title -->

                <!-- Contact Details -->
                <div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
                    <h3>Detalles de contacto</h3>
                    <p>En esta sección te los medios de contacto, para que me cuentes lo que quieres y poder hacer
                        realidad tus deseos.
                    </p>
                    <div class="contact-details">
                        <div class="con-info clearfix">
                            <i class="tf-map-pin"></i>
                            <span>Sarmiento - San Juan - Argentina</span>
                        </div>

                        <!-- <div class="con-info clearfix">
                            <i class="tf-ion-ios-telephone-outline"></i>
                            <span>Celu: 2644768233</span>
                        </div> -->

                        <div class="con-info clearfix">
                            <i class="tf-ion-iphone"></i>
                            <span>Celu: 2644768233</span>
                        </div>

                        <div class="con-info clearfix">
                            <i class="tf-ion-ios-email-outline"></i>
                            <span>Email: adajuli1919@gmail.com</span>
                        </div>
                    </div>
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
                    <form id="contact-form" method="post" action="sendmail.php" role="form">

                        <div class="form-group">
                            <input type="text" placeholder="Tu nombre..." class="form-control" name="name"
                                id="name">
                        </div>

                        <div class="form-group">
                            <input type="email" placeholder="Tu Email..." class="form-control" name="email"
                                id="email">
                        </div>

                        <div class="form-group">
                            <input type="text" placeholder="Asunto..." class="form-control" name="subject"
                                id="subject">
                        </div>

                        <div class="form-group">
                            <textarea rows="6" placeholder="Mensaje..." class="form-control" name="message"
                                id="message"></textarea>
                        </div>

                        <div id="mail-success" class="success">
                            Thank you. The Mailman is on His Way :)
                        </div>

                        <div id="mail-fail" class="error">
                            Sorry, don't know what happened. Try later :(
                        </div>

                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Enviar">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->

            </div> <!-- end row -->
        </div> <!-- end container -->

    </section> <!-- end section -->
</div>