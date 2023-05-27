function verifdate(){
    if (document.getElementById('datedeb').value > document.getElementById('datefin').value) {
        alert("date debut doit etre avant date fin");
        return false;
    }
}
