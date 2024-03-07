<?php $title_page = 'GIGA - Mentions Légales '; ?>

<?php ob_start(); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-2 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Mentions Légales</h1>
    </div>
</div>
<!-- Page Header End -->

<div class="container bg-light py-3">
    <div class="row">

        <div class="col-sm-12 col-lg-10">

            <div class="text-start mx-auto mb-4 wow fadeIn" data-wow-delay="0.1s" style="max-width: 650px;">
                <h3 class="display-5 ">Siège social</h3>
                <p class="text-primary ">Nom de l'entreprise : <span style="font-weight: bold;">Great Innovations
                        for
                        Great Achievement, en abrégé GIGA SA</span></p>
                <p class="text-primary">Directeur Général : <span style="font-weight: bold;">GIGA SA</span></p>
            </div>

            <div class="text-start mx-auto mb-4 wow fadeIn" data-wow-delay="0.5s" style="max-width: 650px;">
                <h3 class="display-5 ">Immatriculation</h3>
                <p class="text-primary">Inscription au registre de commerce et du Crédit Mobilier</p>
                <p class="text-primary">Numéro d’inscription : <span style="font-weight: bold;">RC/YAO/2022/B/803</span>
                </p>
                <p class="text-primary"><b>N</b>uméro d'<b>I</b>dentifiant fiscal <b>U</b>nique (NIU) : <span
                        style="font-weight: bold;">M03221722237</span></p>
            </div>

            <div class="text-start mx-auto wow fadeIn" data-wow-delay="0.7s" style="max-width: 650px;">
                <h3 class="display-5 ">Contact</h3>
                <p class="text-primary">Adresse : <span style="font-weight: bold;">Yaoundé, Cameroun </span></p>
                <p class="text-primary">Email : <span style="font-weight: bold;">contact@giga-sa.cm</span></p>
                <p class="text-primary">Boite Postal (BP) : <span style="font-weight: bold;">12678</span></p>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('about').classList.add('active');
</script>
<?php $content_page = ob_get_clean();

require_once('tmp_main_layout.php')

?>