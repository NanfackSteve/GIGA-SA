<?php $title_page = ""; ?>

<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Nos Témoignages</h1>
    </div>
</div>
<!-- Page Header End -->


<!-- Testimonial Start -->
<div class="container-xxl py-1">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-5 mb-4">Ils nous ont fait confiance</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                    Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                    clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                    Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                    clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed.
                    Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea
                    clita.</p>
                <h3>Client Name</h3>
                <span class="text-primary">Profession</span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<script>
    document.getElementById('about').classList.add('active');
</script>
<?php $content_page = ob_get_clean();

require_once('tmp_main_layout.php')

?>