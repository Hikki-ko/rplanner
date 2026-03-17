document.addEventListener('DOMContentLoaded', () => {
    const btnShow = document.getElementById('show_add_field');
    const btnConfirm = document.getElementById('confirm_add_field');
    const btnCancel = document.getElementById('cancel_add_field');
    const wrapper = document.getElementById('add_field_wrapper');
    const container = document.getElementById('custom_fields_container');
    const inputName = document.getElementById('new_field_name');

    // 1. Afficher le petit formulaire
    btnShow.addEventListener('click', () => {
        wrapper.classList.remove('d-none');
        btnShow.classList.add('d-none');
        inputName.focus();
    });

    // 2. Annuler
    btnCancel.addEventListener('click', () => {
        wrapper.classList.add('d-none');
        btnShow.classList.remove('d-none');
        inputName.value = '';
    });

    // 3. Créer le champ
    btnConfirm.addEventListener('click', () => {
        const fieldName = inputName.value.trim();
        
        if (fieldName !== "") {
            // Création de la structure Bootstrap (col-md-6 pour l'alignement)
            const newCol = document.createElement('div');
            newCol.className = 'col-md-6';
            
            // On génère un ID unique basé sur le nom
            const safeId = fieldName.toLowerCase().replace(/\s+/g, '_');

            newCol.innerHTML = `
                <label class="form-label text-info">${fieldName}</label>
                <div class="input-group">
                    <input type="text" name="custom_${safeId}" class="form-control" placeholder="Valeur...">
                    <button class="btn btn-outline-danger" type="button" onclick="this.parentElement.parentElement.remove()">
                        &times;
                    </button>
                </div>
            `;

            container.appendChild(newCol);
            
            // Reset et masquer le formulaire d'ajout
            inputName.value = '';
            wrapper.classList.add('d-none');
            btnShow.classList.remove('d-none');
        }
    });
});