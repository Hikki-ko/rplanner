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
		<link rel="stylesheet" href="../css/style.css" />
</head>

<body class="d-flex h-100 text-center text-bg-dark">
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

		<main class="container mt-5">
			<form method="POST" id="add_character_form">
				<div class="mb-3"></div>
		<!-- Champ invisible temporaire jusqu'à l'ajout de la relation campagne-personnage -->
		 <input 
			type="hidden" 
			class="form-control"
			name="campaign_id" 
			id="campaign_id" 
			value="666">

		<input 
			type="text"
			class="form-control" 
			name="first_name" 
			id="first_name" 
			placeholder="Prénom">

		<input 
			type="text"
			class="form-control" 
			name="last_name" 
			id="last_name" 
			placeholder="Nom">

		<input 
			type="number"
			class="form-control" 
			name="age" id="age" 
			placeholder="Âge">
			
		<input 
			type="text"
			class="form-control" 
			name="nationality" 
			id="nationality" 
			placeholder="Nationalité">

		<input type="text" name="pronouns" id="pronouns" placeholder="Pronoms">
		<input type="text" name="gender" id="gender" placeholder="Genre">
		<input type="text" name="sex" id="sex" placeholder="Sexe">
		<input type="text" name="sexual_orientation" id="sexual_orientation" placeholder="Orientation sexuelle">
		<input type="text" name="occupation" id="occupation" placeholder="Occupation">
		<input type="text" name="voice" id="voice" placeholder="Voix">
		<input type="text" name="voice_link" id="voice_link" placeholder="Lien vers la voix">
		<textarea name="psychology" id="psychology" placeholder="Psychologie"></textarea>
		<textarea name="hobbies" id="hobbies" placeholder="Passions"></textarea>
		<input type="number" name="height" id="height" placeholder="Taille">
		<input type="number" name="weight" id="weight" placeholder="Poids">
		<input type="text" name="eye_color" id="eye_color" placeholder="Couleur des yeux">
		<input type="text" name="hair_color" id="hair_color" placeholder="Couleur des cheveux">
		<textarea name="physical_description" id="physical_description" placeholder="Description physique"></textarea>
		<textarea name="health" id="health" placeholder="Santé"></textarea>
		<input type="text" name="faceclaim" id="faceclaim" placeholder="Faceclaim">
		<input type="text" name="image" id="image" placeholder="Image">
		<div id="custom_fields_container"></div>
		<p>Créer un nouveau champ :</p>
		<input type="text" id="new_field_name" placeholder="Nom du champ">
		<button type="button" id="add_field">Ajouter le champ</button>
		<br>
		<br>
		<?php if (isset($errors) && $errors) {echo implode("<br>", $errors);} ?>
		<br>
		<br>
		<button type="submit" name="add_character">Ajouter le personnage</button>
			</form>
		</main>
	<script src="../view/js/character_create.js"></script>
</body>
</html>