
function zeigeSteuernummer() {
    if (document.getElementById("privat").checked === true   ) {
        document.getElementById("steuernr").style.display = 'none';
    }else{
        document.getElementById("steuernr").style.display = 'block';
    }
}


