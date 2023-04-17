function increaseValue(btn) {
    const max = btn.parentElement.previousElementSibling.innerHTML;
    const inputEl = btn.previousElementSibling;
    let value = parseInt(inputEl.value);
    if(value < max){
        value++;
    }
    else {
        value = max;
    }
    inputEl.value = value;
}

function decreaseValue(btn) {
    const inputEl = btn.nextElementSibling;
    let value = parseInt(inputEl.value);
    if (value > 0) {
        value--;
    } else {
        value = 0;
    }
    inputEl.value = value;
}

function zoomImg(img) {
    const overlay = document.getElementById("overlay");
    const overlayImg = document.getElementById("overlay-image");

    overlayImg.src = img.src;

    overlay.style.display = "flex";
}

function closeImg() {
    document.getElementById("overlay").style.display = "none";
}

function cacherStock(){
    var stockHead = document.getElementById("stock-head");
    var stock = document.querySelectorAll(".stock");
    if(stockHead.style.display == "none"){
        stockHead.style.display = "table-cell";
        stock.forEach(cell => cell.style.display = "table-cell");
    }
    else{
        stockHead.style.display = "none";
        stock.forEach(cell => cell.style.display ="none");
    }
}

function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var dateN = document.getElementById("dateN").value;
    var sujet = document.getElementById("sujet").value;
    var conte = document.getElementById("conte").value;

    if (nom == "" || prenom == "" || email == "" || dateN == "" || sujet == "" || conte == "") {
        alert("Veuillez remplir tous les champs!");
        return false;
    }
}
