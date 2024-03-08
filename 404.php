<?php $title_page = "Error 404 - Page Not Found" ?>

<?php ob_start(); ?>

<!-- 404 Start -->
<div class="container-xxl py-5 wow zoomIn" data-wow-delay="0.5s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                <h1 class="display-1">404</h1>
                <h1 class="mb-4">Page non trouvée</h1>
                <p class="mb-4">Nous sommes désolés, la page que vous recherchez n’existe pas sur notre site !</p>
                <a class="btn btn-primary py-3 px-5" href="index.php">Retourner à la Page d'accueil</a>
            </div>
        </div>
    </div>
</div>
<!-- 404 End -->

<?php $content_page = ob_get_clean();

require_once('tmp_main_layout.php')

?>