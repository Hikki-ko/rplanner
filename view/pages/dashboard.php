<?php 
include_once('inc/functions/check_login.php');
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Espace utilisateur</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../view/css/style.css" />
    </head>
    <body class="h-100 text-bg-dark"> <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="circle-half" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path></symbol>
            <symbol id="sun-fill" viewBox="0 0 16 16"><path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path></symbol>
            <symbol id="moon-stars-fill" viewBox="0 0 16 16"><path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path><path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path></symbol>
        </svg>

        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle" style="z-index: 1050;">
            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" data-bs-toggle="dropdown">
                <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#circle-half"></use></svg>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow">
                <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">Light</button></li>
                <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">Dark</button></li>
                <li><button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">Auto</button></li>
            </ul>
        </div>

        <main class="container py-5">
            <header class="row mb-5 text-start">
                <div class="col-12">
                    <?php
                        if(isConnected()) {
                            include_once("inc/inc_pages_header.php");
                            echo '<h1 class="display-5 fw-bold mb-1 text-capitalize">Bienvenue ' . htmlspecialchars($_SESSION['username']) .' !</h1>';
                        }
                    ?>
                    <p class="h4 text-secondary fw-light mb-3">Sur votre compte Rplanner</p>
                    <p class="lead text-white-50 col-lg-7">
                        Nous sommes heureux de votre visite. Découvrez toutes les fonctionnalités et les avantages de votre gestionnaire de JDR !
                    </p>
                </div>
            </header>

            <section class="text-start">
                <h3 class="mb-4 fw-bold">Votre espace personnel</h3>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 bg-dark text-white border-secondary rounded-4 cards-shadow border-opacity-25">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <div class="mb-4">
                                    <img class="img-fluid w-25 cards-img" src="../view/images/perso.png" alt="Personnages"/>
                                </div>
                                <h5 class="card-title fw-bold">Mes personnages</h5>
                                <p class="card-text text-white-50 small mb-4 flex-grow-1">Consultez et modifiez les fiches de vos héros en un clin d'œil.</p>
                                <div class="mt-auto">
                                    <a href="/character_list" class="btn btn-outline-light rounded-pill px-4 stretched-link">Accéder</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-dark text-white border-secondary rounded-4 cards-shadow border-opacity-25">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <div class="mb-4">
                                    <img class="img-fluid w-25 cards-img" src="../view/images/create_perso.png" alt="Nouveau"/>
                                </div>
                                <h5 class="card-title fw-bold">Nouveau personnage</h5>
                                <p class="card-text text-white-50 small mb-4 flex-grow-1">Ajoutez un nouveau héros pour vos prochaines aventures épiques.</p>
                                <div class="mt-auto">
                                    <a href="/characters" class="btn btn-outline-light rounded-pill px-4 stretched-link">Créer</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card h-100 bg-dark text-white border-secondary rounded-4 cards-shadow border-opacity-25">
                            <div class="card-body text-center p-4 d-flex flex-column">
                                <div class="mb-4">
                                    <img class="img-fluid w-25 cards-img" src="../view/images/campain.png" alt="Campagnes"/>
                                </div>
                                <h5 class="card-title fw-bold">Mes campagnes</h5>
                                <p class="card-text text-white-50 small mb-4 flex-grow-1">Suivez vos scénarios en cours et gérez l'avancement de vos quêtes.</p>
                                <div class="mt-auto">
                                    <a href="/campaigns" class="btn btn-outline-light rounded-pill px-4 stretched-link">Gérer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <script 
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous">
        </script>
    </body>
</html>