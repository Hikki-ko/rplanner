function customAlertLogout() {
    document.getElementById("customOverlayLogout").style.display = "flex";
}

document.getElementById("closeAlertLogout").addEventListener("click", function() {
    document.getElementById("customOverlayLogout").style.display = "none";
});