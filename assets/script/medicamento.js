function getID(id) {
    document.getElementById("_id").value = id;
    document.getElementById("modal").style.display = "block";
}

function exit() {
    document.getElementById("modal").style.display = "none";
}

function update(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("clave_update").value = id;
            document.getElementById("clave_org").value = id;
            document.getElementById("desc_update").value = this.responseText;
            document.getElementById("modal_update").style.display = "block";
        }
    }
    xhttp.open("POST", "data/select.php?update=ok&clave=" + id, true);
    xhttp.send();

}

function exit_update() {
    document.getElementById("modal_update").style.display = "none";
}

//Validar medicamento
function validar() {
    var clave = document.getElementsByName("clave")[0].value;
    var desc = document.getElementsByName("desc")[0].value;
    let alerta = document.getElementById("alerta");

    if (clave.match("^[0-9]{3}\.[0-9]{3}\.[0-9]{4}\.[0-9]{2}$")) {
        if (desc.match("[a-z0-9A-Z]+")) {
            document.getElementById("form_medicamento").submit();
        } else {
            alerta.innerText = "Por favor, llene todos los campos";
            alerta.style.color = "red";
        }
    } else {
        alerta.innerText = "El formato de la clave es incorrecto";
        alerta.style.color = "red";
    }
}


//Validar medicamento
function validar_update() {
    var clave = document.getElementsByName("clave_update")[0].value;
    var desc = document.getElementsByName("desc_update")[0].value;
    let alerta = document.getElementById("alerta_update");

    if (clave.match("^[0-9]{3}\.[0-9]{3}\.[0-9]{4}\.[0-9]{2}$")) {
        if (desc.match("[a-z0-9A-Z]+")) {
           document.getElementById("form_update").submit();
        } else {
            alerta.innerText = "Por favor, llene todos los campos";
            alerta.style.color = "red";
        }
    } else {
        alerta.innerText = "El formato de la clave es incorrecto";
        alerta.style.color = "red";
    }
}
