<?php 
include_once('../inc/functions/check_login.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion de campagne - RPlanner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../view/css/style.css" />
</head>
<body class="d-flex flex-column h-100 text-bg-dark">
    
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="circle-half" viewBox="0 0 16 16"><path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path></symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle" style="z-index: 1050;">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" data-bs-toggle="dropdown">
            <svg class="bi my-1 theme-icon-active" aria-hidden="true" width="16" height="16"><use href="#circle-half"></use></svg>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow">
            <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">Light</button></li>
            <li><button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">Dark</button></li>
            <li><button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">Auto</button></li>
        </ul>
    </div>

    <main class="container py-5">
        <div class="row mb-4 text-start">
            <div class="col-12">
                <?php
                    if(isConnected()) {
                        include_once("../inc/inc_pages_header.php");
                    } else {
                        echo '<nav class="nav nav-masthead mb-4">
                                <a class="nav-link fw-bold py-1 px-0 active" href="../index.php">Retourner à l\'accueil</a>
                                <a class="nav-link fw-bold py-1 px-0 ms-3" href="#">Tutoriel</a>
                              </nav>';
                    }
                ?>
                <h1 class="fw-bold mt-3">Gestion de campagnes</h1>
            </div>
        </div>

        <section class="mb-5">
            <div class="card bg-dark border-secondary rounded-4 shadow-sm">
                <div class="card-body p-4">
                    <h4 class="card-title fw-bold mb-4 text-start">Ajouter un objet</h4>
                    <form method="POST" id="add_item_form">
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label class="form-label text-white-50 small">Nom de l'objet</label>
                                <input type="text" class="form-control text-bg-dark border-secondary" name="item_name" id="item_name" placeholder="Ex: Épée longue" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-white-50 small">Description</label>
                                <input type="text" class="form-control text-bg-dark border-secondary" name="item_description" id="item_description" placeholder="Ex: Une lame d'acier trempée..." required>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary w-100 rounded-pill fw-bold" name="add_item">Ajouter</button>
                            </div>
                        </div>
                    </form>
                    <?php if (isset($errors) && $errors): ?>
                        <div class="alert alert-danger mt-3 small mb-0"><?php echo implode("<br>", $errors); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <div class="row g-5">
            <div class="col-lg-6">
                <h4 class="fw-bold mb-4 text-start border-start border-primary border-4 ps-3">Inventaire des objets</h4>
                <div class="table-responsive rounded-4 border border-secondary">
                    <table class="table table-dark table-hover align-middle mb-0 text-start">
                        <thead class="table-secondary small text-uppercase fw-bold">
                            <tr>
                                <th class="ps-3">ID</th>
                                <th>Objet</th>
                                <th class="text-end pe-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php showItems($pdo); ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-6">
                <h4 class="fw-bold mb-4 text-start border-start border-info border-4 ps-3">Membres de la campagne</h4>
                <div class="table-responsive rounded-4 border border-secondary">
                    <table class="table table-dark table-hover align-middle mb-0 text-start">
                        <thead class="table-secondary small text-uppercase fw-bold">
                            <tr>
                                <th class="ps-3">ID</th>
                                <th>Nom du personnage</th>
                                <th class="text-end pe-3">Détails</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php showCharacters($pdo); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>