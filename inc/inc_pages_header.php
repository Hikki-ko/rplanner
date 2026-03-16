<div class="d-flex align-items-center justify-content-between gap-3 mb-5 mt-3">
    <h2 class="m-0 fw-bold"><a class="title-redirection" href="../index.php">Rplanner</a></h2>
    
    <?php 
        echo '<div class="dropdown">';
        echo '
        <button class="btn btn-outline-light rounded-pill px-4 dropdown-toggle text-capitalize" type="button" data-bs-toggle="dropdown" aria-expanded="false">Bonjour ' . htmlspecialchars($_SESSION['username']) . ' !</button>
        <ul class="dropdown-menu dropdown-menu-dark rounded-3 mt-2">
            <li><a class="dropdown-item py-2" href="../controller/dashboard_controller.php">Mon espace</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-danger fw-bold py-2" href="../view/pages/logout.php">Déconnexion</a></li>
        </ul>';
        echo '</div>';
    ?>
</div>