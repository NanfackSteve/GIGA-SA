<?php $title_page = "Contactez-nous"; ?>

<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Contactez-Nous</h1>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Start -->
<div class="container-xxl py-2">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <!-- <h4 class="section-title">Appointment</h4> -->
                <h1 class="display-5 mb-5">Si vous avez des questions, n'hésitez pas à nous contacter</h1>

                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-flex ">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light "
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-2x fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Appelez-nous !</p>
                                <h3 class="mb-0">(+237) 671 669 004</h3>

                            </div>
                            <a class="btn btn-square btn-primary ms-4 mt-4" href="tel:+237671669004"
                                style="width: 85px;">Appelez</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                style="width: 65px; height: 75px;">
                                <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Adresse</p>
                                <h3 class="mb-0">Yaounde, Cameroun</h3>
                            </div>
                            <a class="btn btn-square btn-primary ms-4 mt-4" href="https://maps.app.goo.gl/"
                                style="width: 85px;">Itinéraire</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 pt-3 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4 text-primary">Envoyez-nous un Mail en remplissant ce formulaire</h3>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Votre Nom">
                                <label for="name">Votre Nom</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Votre Email">
                                <label for="email">Votre Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Sujet">
                                <label for="subject">Sujet</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message"
                                    style="height: 100px"></textarea>
                                <label for="message">Entrez votre Message/Requete</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- Row End -->

        <!-- Google Map Start -->
        <div class="row mt-5">
            <iframe class="w-100 mb-n2" style="height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <!-- Google Map End -->
    </div> <!-- Container End -->
</div>
<!-- Contact End -->

<script>
document.getElementById('contact').classList.add('active');
</script>
<?php $content_page = ob_get_clean();

require_once('tmp_main_layout.php')

?>