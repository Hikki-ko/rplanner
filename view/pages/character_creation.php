<!DOCTYPE html>
<html lang=fr>
<head>
	<meta charset="UTF-8">
	<title>Créer un personnage - RPlanner</title>
	<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../view/css/style.css" />
</head>

<body class="d-flex flex-column h-100 text-center text-bg-dark">
	<noscript>
		<p>Veuillez activer le JavaScript pour le bon fonctionnement de cette page.</p>
	</noscript>
	<!-- Changement de thème -->
	<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
			<symbol id="check2" viewBox="0 0 16 16">
				<path
					d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
				></path>
			</symbol>
			<symbol id="circle-half" viewBox="0 0 16 16">
				<path
					d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
				></path>
			</symbol>
			<symbol id="moon-stars-fill" viewBox="0 0 16 16">
				<path
					d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
				></path>
				<path
					d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
				></path>
			</symbol>
			<symbol id="sun-fill" viewBox="0 0 16 16">
				<path
					d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
				></path>
			</symbol>
		</svg>
		<div
			class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle"
		>
			<button
				class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
				id="bd-theme"
				type="button"
				aria-expanded="false"
				data-bs-toggle="dropdown"
				aria-label="Toggle theme (auto)"
			>
				<svg class="bi my-1 theme-icon-active" aria-hidden="true">
					<use href="#circle-half"></use>
				</svg>
				<span class="visually-hidden" id="bd-theme-text">Changer de thème</span>
			</button>
			<ul
				class="dropdown-menu dropdown-menu-end shadow"
				aria-labelledby="bd-theme-text"
			>
				<li>
					<button
						type="button"
						class="dropdown-item d-flex align-items-center"
						data-bs-theme-value="light"
						aria-pressed="false"
					>
						<svg class="bi me-2 opacity-50" aria-hidden="true">
							<use href="#sun-fill"></use>
						</svg>
						Light
						<svg class="bi ms-auto d-none" aria-hidden="true">
							<use href="#check2"></use>
						</svg>
					</button>
				</li>
				<li>
					<button
						type="button"
						class="dropdown-item d-flex align-items-center"
						data-bs-theme-value="dark"
						aria-pressed="false"
					>
						<svg class="bi me-2 opacity-50" aria-hidden="true">
							<use href="#moon-stars-fill"></use>
						</svg>
						Dark
						<svg class="bi ms-auto d-none" aria-hidden="true">
							<use href="#check2"></use>
						</svg>
					</button>
				</li>
				<li>
					<button
						type="button"
						class="dropdown-item d-flex align-items-center active"
						data-bs-theme-value="auto"
						aria-pressed="true"
					>
						<svg class="bi me-2 opacity-50" aria-hidden="true">
							<use href="#circle-half"></use>
						</svg>
						Auto
						<svg class="bi ms-auto d-none" aria-hidden="true">
							<use href="#check2"></use>
						</svg>
					</button>
				</li>
			</ul>
		</div>

		<div class="container-fluid ps-3 text-start">
        <?php
			if(isConnected()) {
				include_once("inc/inc_pages_header.php");
			}else{
				echo "<div class=\"col-4 d-flex justify-content-center p-0\">
						<nav class=\"nav nav-masthead\">
							<a class=\"nav-link fw-bold py-1 px-0 active\" aria-current=\"page\" href=\"/\">Retourner à l'acceuil</a>
							<a class=\"nav-link fw-bold py-1 px-0 ms-3\" href=\"#_\">Tutoriel</a>
						</nav>
					</div>";
			}
        ?>
    	</div>
		<main class="container mt-4">
    <form method="POST" id="add_character_form" class="bg-dark text-white p-4 rounded shadow">
        <h2 class="mb-4">Créer un personnage</h2>
		<!-- Champ invisible temporaire jusqu'à l'ajout de la relation campagne-personnage -->

         <input

            type="hidden"

            class="form-control"

            name="campaign_id"

            id="campaign_id"

            value="666"> 

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ex: Jean">
            </div>
            <div class="col-md-6">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ex: Dupont">
            </div>
            <div class="col-md-4">
                <label class="form-label">Âge</label>
                <input type="number" class="form-control" id="age" name="age" placeholder="0">
            </div>
            <div class="col-md-8">
                <label class="form-label">Nationalité</label>
                <input type="text" class="form-control" id="nationality" name="nationality" placeholder="Française">
            </div>
			<div class="mb-3">
                <label class="form-label">Profession</label>
                <input type="text" class="form-control" id="occupation" name="occupation" placeholder="Etudiant, cadre, etc...">
            </div>
        </div>

        <hr>

        <div class="row g-3 mb-4">
            <div class="col-md-3"><input type="text" class="form-control" id="pronouns" name="pronouns" placeholder="Pronoms"></div>
            <div class="col-md-3"><input type="text" class="form-control" id="gender" name="gender" placeholder="Genre"></div>
            <div class="col-md-3"><input type="text" class="form-control" id="sex" name="sex" placeholder="Sexe"></div>
            <div class="col-md-3"><input type="text" class="form-control" id="sexual_orientation" name="sexual_orientation" placeholder="Orientation"></div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-text">Taille</span>
                    <input type="number" class="form-control" id="height" name="height">
                </div>
            </div>
            <div class="col-md-3">
                <div class="input-group">
                    <span class="input-group-text">Poids</span>
                    <input type="number" class="form-control" id="weight" name="weight">
                </div>
            </div>
            <div class="col-md-3"><input type="text" class="form-control" id="eye_color" name="eye_color" placeholder="Yeux"></div>
            <div class="col-md-3"><input type="text" class="form-control" id="hair_color" name="hair_color" placeholder="Cheveux"></div>
        </div>

        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <label class="form-label">Psychologie</label>
                <textarea class="form-control" id="psychology" name="psychology" rows="3"></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Passions</label>
                <textarea class="form-control" id="hobbies" name="hobbies" rows="3"></textarea>
            </div>
        </div>

		<hr>

		<div class="row g-3 mb-4">
			<div class="col-md-6">
                <label class="form-label">Avatar</label>
                <input type="text" class="form-control" id="faceclaim" name="faceclaim" placeholder="Son faceclaim">
            </div>
            <div class="col-md-6">
                <label class="form-label">Lien vers le faceclaim</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Lien ici">
            </div>
			<div class="col-md-6">
                <label class="form-label">Voix</label>
                <input type="text" class="form-control" id="voice" name="voice" placeholder="Sa voix">
            </div>
            <div class="col-md-6">
                <label class="form-label">Lien vers la voix</label>
                <input type="text" class="form-control" id="voice_link" name="voice_link" placeholder="Lien ici">
            </div>
            <div class="col-md-6">
                <label class="form-label">Physique</label>
                <textarea class="form-control" id="physical_description" name="physical_description" rows="3"></textarea>
            </div>
            <div class="col-md-6">
                <label class="form-label">Santé</label>
                <textarea class="form-control" id="health" name="health" rows="3"></textarea>
            </div>
        </div>

		<div id="custom_fields_container" class="row g-3 mb-3">
    </div>

<div class="mb-4">
    <button type="button" class="btn btn-link btn-sm text-decoration-none p-0" id="show_add_field">
        <i class="bi bi-plus-circle"></i> + Ajouter un critère personnalisé (ex: Signe astro, Religion...)
    </button>
</div>

<div id="add_field_wrapper" class="p-3 border rounded bg-light text-dark mb-4 d-none">
    <div class="row g-2 align-items-center">
        <div class="col">
            <input type="text" id="new_field_name" class="form-control form-control-sm" placeholder="Nom du champ...">
        </div>
        <div class="col-auto">
            <button type="button" id="confirm_add_field" class="btn btn-primary btn-sm">Ajouter</button>
            <button type="button" id="cancel_add_field" class="btn btn-outline-secondary btn-sm">Annuler</button>
        </div>
    </div>
</div>

        <div class="mt-5 d-grid gap-2">
            <button type="submit" name="add_character" class="btn btn-primary btn-lg">Ajouter le personnage</button>
			<?php if (isset($errors) && $errors) {echo implode("<br>", $errors);} ?> 
        </div>
    </form>
</main>
	<script src="../view/js/character_create.js"></script>
	<script src="../view/js/custom_form.js"></script>
	<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
			crossorigin="anonymous"
		></script>
</body>
</html>