//Fonction d'ouverture pour les alerte d'édition et de suppression
function customAlertPerms() {
    document.getElementById("customOverlayPerms").style.display = "flex";
}

function customAlertArguments() {
    document.getElementById("customOverlayArguments").style.display = "flex";
}

function customAlert_delSuccess() {
    document.getElementById("customOverlay_delSuccess").style.display = "flex";
}

function customAlert_delPerms() {
    document.getElementById("customOverlay_delPerms").style.display = "flex";
}

//Fermeture des alertes d'édition et de suppression
document.getElementById("closeAlertPerms").addEventListener("click", function() {
    document.getElementById("customOverlayPerms").style.display = "none";
});

document.getElementById("closeAlertArguments").addEventListener("click", function() {
    document.getElementById("customOverlayArguments").style.display = "none";
});

document.getElementById("closeAlert_delSuccess").addEventListener("click", function() {
    document.getElementById("customOverlay_delSuccess").style.display = "none";
});

document.getElementById("closeAlert_delPerms").addEventListener("click", function() {
    document.getElementById("customOverlay_delPerms").style.display = "none";
});