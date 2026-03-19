//Fonction pour l'alerte de permissions
function customAlertPerms() {
    document.getElementById("customOverlayPerms").style.display = "flex";
}

//Fonction pour l'alerte d'arguments (
function customAlertArguments() {
    document.getElementById("customOverlayArguments").style.display = "flex";
}

//Fonction de fermeture pour l'alerte permissions
document.getElementById("closeAlertPerms").addEventListener("click", function() {
    document.getElementById("customOverlayPerms").style.display = "none";
});

//Fonction de fermeture pour l'alerte d'arguments
document.getElementById("closeAlertArguments").addEventListener("click", function() {
    document.getElementById("customOverlayArguments").style.display = "none";
});