<?php 
include_once('inc/functions/check_login.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de vos personnages - RPlanner</title>
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="../view/css/style.css" />
</head>

<body class="d-flex flex-column h-100 text-bg-dark">
    <noscript>
        <div class="alert alert-warning m-3">Veuillez activer le JavaScript pour le bon fonctionnement de cette page.</div>
    </noscript>

    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
            </symbol>
            <symbol id="circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
            </symbol>
            <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.258.774a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
            </symbol>
            <symbol id="sun-fill" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" data-bs-toggle="dropdown">
            <svg class="bi my-1 theme-icon-active" aria-hidden="true"><use href="#circle-half"></use></svg>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">Light</button></li>
            <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">Dark</button></li>
            <li><button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">Auto</button></li>
        </ul>
    </div>

    <div class="container py-5">
        <div class="row mb-4 text-start">
            <div class="col-12">
                <?php
                if(isConnected()) {
                    include_once("inc/inc_pages_header.php");
                } else {
                    echo '<nav class="nav nav-masthead mb-4">
                            <a class="nav-link fw-bold py-1 px-0 active" href="/">Retourner à l\'accueil</a>
                            <a class="nav-link fw-bold py-1 px-0 ms-3" href="#">Tutoriel</a>
                          </nav>';
                }
                ?>
                <h2 class="fw-bold mt-3">Vos personnages</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php
                $characters = getCharacterInfos($pdo);

                if(!$characters) {
                    echo '<div class="text-center py-5 bg-dark border border-secondary rounded-4">
                            <p class="text-white-50 mb-0">Vous n\'avez pas encore de personnages ! <br>
                            <a href="/characters" class="btn btn-primary mt-3 rounded-pill">Créer mon premier personnage</a></p>
                          </div>';
                } else {
                ?>
                <div class="table-responsive shadow-sm rounded-4 border border-secondary overflow-hidden">
                    <table class="table table-dark table-hover align-middle mb-0 text-start">
                        <thead class="table-secondary text-uppercase small fw-bold">
                            <tr>
                                <th class="ps-4 py-3">Nom du Personnage</th>
                                <th class="py-3">Identifiant</th>
                                <th class="text-end pe-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($characters as $character): ?>
                            <tr>
                                <td class="ps-4">
                                    <a href="#" class="text-white text-decoration-none fw-semibold d-block" 
                                       data-bs-toggle="modal" 
                                       data-bs-target="#modalPerso<?= $character['character_id'] ?>">
                                        <?= htmlspecialchars($character['first_name']) ?> 
                                        <span class="text-uppercase opacity-75 small"><?= htmlspecialchars($character['last_name']) ?></span>
                                    </a>
                                </td>
                                <td>
                                    <span class="badge rounded-pill bg-secondary opacity-50">#<?= $character['character_id'] ?></span>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="btn-group">
                                        <a href="/characters?character_id=<?= $character['character_id'] ?>" 
                                           class="btn btn-sm btn-outline-light px-3">Modifier</a>
                                        <a href="/characters?del_character_id=<?= $character['character_id'] ?>" 
                                           class="btn btn-sm btn-outline-danger px-3" 
                                           onclick="return confirm('Supprimer définitivement ce personnage ?');">Supprimer</a>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php if($characters): foreach ($characters as $character): 
        $attributes = getCharacterDetails($pdo, $character['character_id']);
    ?>
    <div class="modal fade" id="modalPerso<?= $character['character_id'] ?>" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content text-bg-dark border-secondary shadow-lg">
                <div class="modal-header border-secondary">
                    <h5 class="modal-title">Fiche Personnage</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body text-start p-4">
                    <h3 class="text-center mb-4"><?= $attributes['first_name'] ?> <span class="text-uppercase"><?= $attributes['last_name'] ?></span></h3>
                    
                    <div class="mb-4">
                        <h6 class="text-uppercase fw-bold border-bottom border-secondary pb-2 mb-3 text-info">État civil</h6>
                        <ul class="list-unstyled">
                            <li><strong>Sexe :</strong> <span class="text-white-50"><?= $attributes['sex'] ?></span></li>
                            <li><strong>Genre :</strong> <span class="text-white-50"><?= $attributes['gender'] ?></span></li>
                            <li><strong>Orientation :</strong> <span class="text-white-50"><?= $attributes['sexual_orientation'] ?></span></li>
                        </ul>
                    </div>

                    <div class="mb-4">
                        <h6 class="text-uppercase fw-bold border-bottom border-secondary pb-2 mb-3 text-info">Général</h6>
                        <ul class="list-unstyled">
                            <li><strong>Âge :</strong> <span class="text-white-50"><?= $attributes['age'] ?> ans</span></li>
                            <li><strong>Nationalité :</strong> <span class="text-white-50"><?= $attributes['nationality'] ?></span></li>
                            <li><strong>Occupation :</strong> <span class="text-white-50"><?= $attributes['occupation'] ?></span></li>
                        </ul>
                    </div>

                    <div class="mb-0">
                        <h6 class="text-uppercase fw-bold border-bottom border-secondary pb-2 mb-3 text-info">Description & Psychologie</h6>
                        <p class="text-white-50 small"><?= nl2br($attributes['physical_description']) ?></p>
                        <hr class="border-secondary">
                        <p class="text-white-50 small fst-italic"><?= nl2br($attributes['psychology']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; endif; ?>

    <div id="customOverlayPerms" class="alert-overlay"><div class="alert-box"><h3>Attention !</h3><p>Accès refusé.</p><button type="button" id="closeAlertPerms">OK</button></div></div>
    <div id="customOverlayArguments" class="alert-overlay"><div class="alert-box"><h3>Erreur</h3><p>Personnage introuvable.</p><button type="button" id="closeAlertArguments">OK</button></div></div>
    <div id="customOverlay_delSuccess" class="alert-overlay"><div class="alert-box"><h3>Succès</h3><p>Personnage supprimé.</p><button type="button" id="closeAlert_delSuccess">OK</button></div></div>
    <div id="customOverlay_delPerms" class="alert-overlay"><div class="alert-box"><h3>Attention !</h3><p>Permission de suppression refusée.</p><button type="button" id="closeAlert_delPerms">OK</button></div></div>
        
    <script src="../view/js/character_create.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../view/js/character_message.js"></script>

    <?php if (isset($typeAlerte)): ?>
    <script>
        window.addEventListener("load", function() {
            const types = {
                "perms": customAlertPerms,
                "arguments": customAlertArguments,
                "delSuccess": customAlert_delSuccess,
                "delPerms": customAlert_delPerms
            };
            if(types["<?= $typeAlerte ?>"]) types["<?= $typeAlerte ?>"]();
        });
    </script>
    <?php endif; ?>
</body>
</html>