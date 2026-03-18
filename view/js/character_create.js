document.addEventListener("DOMContentLoaded", () => {
	// Ajout de boutons de suppression sur les champs personnalisés pré-existants.
	document.querySelectorAll(".custom_field").forEach((field) => {
		createDeleteButton(field);
	})
	
	// Vérification formulaire d'ajout de personnage (vérifie aussi l'édition de personnage).
	const add_character_form = document.getElementById("add_character_form");
	add_character_form.addEventListener("submit", (e) => {
		
		let isGood = true;

		document.querySelectorAll(".error").forEach(el => el.remove());

		function showError(element, message) {
			isGood = false;
			const span = document.createElement("span");
			span.className = "error";
			span.textContent = message;
			element.insertAdjacentElement("afterend", span);
		}

		/* FIRST NAME */
		let first_name = document.getElementById("first_name");
		if (first_name.value.trim() === "" || first_name.value.trim().length > 30) {
			showError(first_name, "Le prénom doit être inférieur à 30 caractères et renseigné.");
		}

		/* LAST NAME */
		let last_name = document.getElementById("last_name");
		if (last_name.value.trim() === "" || last_name.value.trim().length > 30) {
			showError(last_name, "Le nom doit être inférieur à 30 caractères et renseigné.");
		}

		/* AGE */
		let age = document.getElementById("age");
		if (age.value.trim() === "" || !/^\d+$/.test(age.value.trim())) {
			showError(age, "L'age doit être numérique et renseigné.");
		}

		/* NATIONALITY */
		let nationality = document.getElementById("nationality");
		if (nationality.value.trim() === "" || nationality.value.trim().length > 30) {
			showError(nationality, "La nationalité doit être inférieure à 30 caractères et renseignée.");
		}

		/* PRONOUNS */
		let pronouns = document.getElementById("pronouns");
		if (pronouns.value.trim() === "" || pronouns.value.trim().length > 30) {
			showError(pronouns, "Les pronoms doivent être inférieurs à 30 caractères et renseignés.");
		}

		/* GENDER */
		let gender = document.getElementById("gender");
		if (gender.value.trim() === "" || gender.value.trim().length > 30) {
			showError(gender, "Le genre doit être inférieur à 30 caractères et renseigné.");
		}

		/* SEX */
		let sex = document.getElementById("sex");
		if (sex.value.trim() === "" || sex.value.trim().length > 30) {
			showError(sex, "Le sexe doit être inférieur à 30 caractères et renseigné.");
		}

		/* SEXUAL ORIENTATION */
		let sexual_orientation = document.getElementById("sexual_orientation");
		if (sexual_orientation.value.trim() === "" || sexual_orientation.value.trim().length > 30) {
			showError(sexual_orientation, "L'orientation sexuelle doit être inférieure à 30 caractères et renseignée.");
		}

		/* OCCUPATION */
		let occupation = document.getElementById("occupation");
		if (occupation.value.trim() === "" || occupation.value.trim().length > 30) {
			showError(occupation, "L'occupation doit être inférieure à 30 caractères et renseignée.");
		}

		/* VOICE */
		let voice = document.getElementById("voice");
		if (voice.value.trim() === "" || voice.value.trim().length > 50) {
			showError(voice, "La voix doit être inférieure à 50 caractères et renseignée.");
		}

		/* VOICE LINK */
		let voice_link = document.getElementById("voice_link");
		if (voice_link.value.trim() === "" || voice_link.value.trim().length > 100) {
			showError(voice_link, "Le lien vers la voix doit être inférieur à 100 caractères et renseigné.");
		}

		/* PSYCHOLOGY */
		let psychology = document.getElementById("psychology");
		if (psychology.value.trim() === "") {
			showError(psychology, "La psychologie doit être renseignée.");
		}

		/* HOBBIES */
		let hobbies = document.getElementById("hobbies");
		if (hobbies.value.trim() === "") {
			showError(hobbies, "Les passions doivent être renseignées.");
		}

		/* HEIGHT */
		let height = document.getElementById("height");
		if (height.value.trim() === "" || !/^\d+$/.test(height.value.trim())) {
			showError(height, "La taille doit être numérique et renseignée.");
		}

		/* WEIGHT */
		let weight = document.getElementById("weight");
		if (weight.value.trim() === "" || !/^\d+$/.test(weight.value.trim())) {
			showError(weight, "Le poids doit être numérique et renseigné.");
		}

		/* EYE COLOR */
		let eye_color = document.getElementById("eye_color");
		if (eye_color.value.trim() === "" || eye_color.value.trim().length > 30) {
			showError(eye_color, "La couleur des yeux doit être inférieure à 30 caractères et renseignée.");
		}

		/* HAIR COLOR */
		let hair_color = document.getElementById("hair_color");
		if (hair_color.value.trim() === "" || hair_color.value.trim().length > 30) {
			showError(hair_color, "La couleur des cheveux doit être inférieure à 30 caractères et renseignée.");
		}

		/* PHYSICAL DESCRIPTION */
		let physical_description = document.getElementById("physical_description");
		if (physical_description.value.trim() === "") {
			showError(physical_description, "La description physique doit être renseignée.");
		}

		/* HEALTH */
		let health = document.getElementById("health");
		if (health.value.trim() === "") {
			showError(health, "La santé doit être renseignée.");
		}

		/* FACECLAIM */
		let faceclaim = document.getElementById("faceclaim");
		if (faceclaim.value.trim() === "" || faceclaim.value.trim().length > 100) {
			showError(faceclaim, "Le lien vers le faceclaim doit être inférieur à 100 caractères et renseigné.");
		}

		/* IMAGE */
		let image = document.getElementById("image");
		if (image.value.trim() === "" || image.value.trim().length > 100) {
			showError(image, "Le lien vers l'image doit être inférieur à 100 caractères et renseigné.");
		}
		
		/* CUSTOM FIELDS */
		if (isGood) {
			let custom_fields = document.querySelectorAll(".custom_field");
			if (custom_fields.length != 0) {
				let fields_object = {};
				custom_fields.forEach((field) => {
					fields_object[field.getAttribute("data_name")] = field.value;
				})
				let json = JSON.stringify(fields_object);
				let hidden_input = document.createElement("input");
				hidden_input.setAttribute("name", "custom_fields");
				hidden_input.setAttribute("type", "hidden");
				hidden_input.value = json;
				add_character_form.appendChild(hidden_input);
			}
		}
		
		/* On envoie le formulaire si tout est ok */
		if (!isGood) {
			e.preventDefault();
		}
	});
	
	// Bouton "ajouter un champ".
	const field_button = document.getElementById("confirm_add_field");
	field_button.addEventListener("click", () => {
		let custom_fields_div = document.getElementById("custom_fields_container");
		// Récupération du nom entré
		let name_input = document.getElementById("new_field_name");
		// Création du nouvel input
		let new_field = document.createElement("input");
		new_field.setAttribute("class", "custom_field");
		new_field.setAttribute("data_name", name_input.value);
		new_field.setAttribute("placeholder", name_input.value);
		// Insertion du champ si une valeur a été donnée
		if (name_input.value.trim() !== "") {
			custom_fields_div.appendChild(new_field);
			// Ajout du bouton de suppression
			createDeleteButton(new_field);
		}
		
	});
	
	function createDeleteButton(field) {
		// Création du bouton
		let delete_button = document.createElement("button")
		delete_button.setAttribute("type", "button");
		delete_button.textContent = "Supprimer le champ";
		// Insertion du bouton à côté de l'élément choisi
		field.insertAdjacentElement("afterend", delete_button)
		// Ajout de la capacité de suppression au bouton de suppression, qui sera toujours le dernier élément ajoué au div des champs personnalisés.
		delete_button.addEventListener("click", () => {
			field.remove();
			delete_button.remove();
		});
	}
});