<?php
session_start();
include_once("model/inc.connection.php");

$errors = $_SESSION['errors'] ?? [];

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

function display_error($field) {
    if (isset($_SESSION['errors']) && is_array($_SESSION['errors']) && isset($_SESSION['errors'][$field])) {
        $msg = $_SESSION['errors'][$field];
        echo "<div class='text-danger small mb-1' style='text-align: left; font-weight: bold;'>⚠️ $msg</div>";
    }
}

?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Création de compte</title>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="view/css/style.css" />
	</head>
	<body class="d-flex h-100 text-center text-bg-dark">
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
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<h1 class="text-center mb-4">Création de compte</h1>
					<form action="/registeraction" method="POST">
						<!-- Token CSRF -->
						<input type="hidden" name="csrf_token" value="<?= $_SESSION['token'] ?>">
						<!-- Identifiant -->
						 <div class="mb-3">
							<label class="form-label">Identifiant</label>
							<?php display_error('username'); ?>
							<div class="input-group">
								<span class="input-group-text">@</span>
								<input 
								type="text" 
								class="form-control"
								name="inputUsername"
								minlength="3"
								maxlength="30"
								required>
							</div>
						 </div>
						 <!-- Mot de passe -->
						 <div class="mb-3">
							<label class="form-label">
								Mot de passe
							</label>
							<?php display_error('password'); ?>
							<input 
							type="password"
							class="form-control"
							name="inputPassword"
							minlength="8"
							required>
						 </div>
						 <!-- Confirmation mot de passe -->
						 <div class="mb-3">
							<label class="form-label">
								Confirmation du mot de passe
							</label>
							<?php display_error('confirm'); ?>
							<input 
							type="password"
							class="form-control"
							name="confirmationPassword"
							required>
						 </div>
						 <!-- Email -->
						 <div class="mb-3">
							<label class="form-label">
								Email
							</label>
							<input 
							type="email"
							class="form-control"
							name="inputEmail">
							<div 
							class="form-text text-white">
								<em>Non obligatoire, mais utile en cas d'oubli des identifiants !</em>
							</div>
						 </div>
						 <!-- CGU -->
						 <div class="mb-3">
							<input 
							type="checkbox"
							class="form-check-input"
							id="checkCGU"
							name="checkCGU"
							required>
							<label 
							for="checkCGU" 
							class="form-check-label">
							J'ai lu et accepté les conditions générales d'utilisation.
							</label>
						 </div>
						 <!-- Captcha -->
						  <label class="form-label d-block text-start">Vérification</label>
						  <?php display_error('captcha'); ?>
							<img src="/captcha">
							<input 
							type="text"
							name="captcha"
							placeholder="Entrez le code"
							required>
						<!-- Bouton de validation -->
						 <button
						 class="btn btn-primary"
						 type="submit">
							Créer mon compte
						 </button>
					</form>
					<p><em>Vous avez déjà un compte ? <a href="/login">Connectez-vous !</a></em></p>
			</div>
				</div>	
		</main>

		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
			crossorigin="anonymous"
		></script>
		<?php unset($_SESSION['errors']); ?>
	</body>
</html>
