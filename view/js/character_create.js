document.addEventListener("DOMContentLoaded", () => {
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
		
		/* On envoie le formulaire si tout est ok */
		if (!isGood) {
			e.preventDefault();
		}
	});
});