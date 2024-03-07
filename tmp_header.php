    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
        </div>
        <img class="position-absolute top-50 start-50 translate-middle" src="img/icons/logo-giga-sa.png" height="50"
            width="50" alt="Icon">
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn"
        data-wow-delay="0.1s">

        <!-- Logo Brand-->
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0 p-0 d-flex align-items-center ">
            <img class="me-3" src="img/icons/logo-giga-sa.png" height="60" width="60" style="font-family: sans-serif;"
                alt="Icon">
            <div class="pt-3">
                <h2 class="text-primary mb-0">GIGA
                    S.A
                </h2>
                <h5 class="mt-0" style="font-weight: bolder; color: #b09861;">Free Your
                    Immagination</h5>
            </div>
        </a>

        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a id="home" href="index.php" class="nav-item nav-link active">Accueil</a>
                <div class="nav-item dropdown">
                    <a id="about" href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">A Propos</a>
                    <div class="dropdown-menu border-0 m-0">
                        <a href="about.php" class="dropdown-item">Qui sommes-nous ?</a>
                        <hr class="dropdown-divider">
                        <a href="about_testimonial.php" class="dropdown-item">Témoignages</a>
                        <hr class="dropdown-divider">
                        <a href="about_legacy.php" class="dropdown-item">Mentions Légales</a>
                    </div>
                </div>
                <a id="services" href="service.php" class="nav-item nav-link">Nos Prestations</a>
                <a id="teams" href="team.php" class="nav-item nav-link">Nos Equipes</a>
                <a id="contact" href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
        </div>

    </nav>
    <!-- Navbar End -->

    <!-- Slogan Start -->
    <div id="banner" class="bg-dark " style="margin-bottom: -1px;">
        <marquee behavior=" scroll" direction="left" width="70%" height="35px" class="bg-dark text-light"
            style="padding-top: 10px; padding-left: 20%; padding-right: 20%; margin-left:15%; margin-right:15%;">
            <b>Bienvenue sur le Site Officiel de « Great Innovations for Great Achievement (GIGA) : Se développer
                par
                l'innovation</b>
        </marquee>
    </div>
    <!-- Slogan End -->

    <script>
let nav_items = document.getElementsByClassName('nav-link');
for (let i = 0; i < nav_items.length; i++) {
    if (nav_items[i].classList.contains('active')) nav_items[i].classList.remove('active');
}
    </script>