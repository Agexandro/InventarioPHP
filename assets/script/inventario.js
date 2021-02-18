
//Modal Delete
function getID(id, lote, cad) {
    document.getElementById("_id").value = id;
    document.getElementById("_lote").value = lote;
    document.getElementById("_cad").value = cad;
    document.getElementById("modal").style.display = "block";
}

function exit() {
    document.getElementById("modal").style.display = "none";
}
//Modal update
function update(id, lote, piezas, cad) {
    document.getElementById("clave_update").value = id;
    document.getElementById("lote_update").value = lote;
    document.getElementById("piezas_update").value = piezas;
    document.getElementById("cad_update").value = cad;
    document.getElementById("clave_org").value = id + ',' + lote + "," + cad;
    document.getElementById("modal_update").style.display = "block";
}

function exit_update() {
    document.getElementById("modal_update").style.display = "none";
}

function exit_update() {
    document.getElementById("modal_update").style.display = "none";
}


//Validar formulario 

function validar(){
    var lote = document.getElementById("lote").value;
    var piezas = document.getElementById("piezas").value;
    var cad = document.getElementById("cad").value;
    var alerta = document.getElementById("alerta");

    if (lote.trim().length>0 & piezas.trim().length>0 & cad.trim().length >0) {
        document.getElementById("submit_lote").submit();
    } else {
        alerta.style.color = "red";
        alerta.innerText= "Por favor, llene los campos correctamente";
    }
}

function validar_update(){
    var lote = document.getElementById("lote_update").value;
    var piezas = document.getElementById("piezas_update").value;
    var cad = document.getElementById("cad_update").value;
    var alerta = document.getElementById("alerta_update");

    if (lote.trim().length>0 & piezas.trim().length>0 & cad.trim().length >0) {
        document.getElementById("submit_lote_update").submit();
    } else {
        alerta.style.color = "red";
        alerta.innerText= "Por favor, llene los campos correctamente";
    }
}

//Validar formulario 

function validar_u013(){
    var lote = document.getElementById("lote").value;
    var piezas = document.getElementById("piezas").value;
    var cad = document.getElementById("cad").value;
    var alerta = document.getElementById("alerta");

    if (lote.trim().length>0 & piezas.trim().length>0 & cad.trim().length >0) {
        document.getElementById("submit_u013").submit();
    } else {
        alerta.style.color = "red";
        alerta.innerText= "Por favor, llene los campos correctamente";
    }
}

function validar_u013_update(){
    var lote = document.getElementById("lote_update").value;
    var piezas = document.getElementById("piezas_update").value;
    var cad = document.getElementById("cad_update").value;
    var alerta = document.getElementById("alerta_update");

    if (lote.trim().length>0 & piezas.trim().length>0 & cad.trim().length >0) {
        document.getElementById("submit_u013_update").submit();
    } else {
        alerta.style.color = "red";
        alerta.innerText= "Por favor, llene los campos correctamente";
    }
}