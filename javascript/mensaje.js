function mensaje(e_fin){
    if(confirm("¿Estas seguro que deseas eliminar?")) {
        return true;
    } else {
        e_fin.preventDefault();
    }
}

let msj = document.querySelectorAll('.table__item-delete');

// msj.addEventListener('click', mensaje);
// msj[1].addEventListener('click', mensaje);

for (let i = 0; i < msj.length; i++) {
    msj[i].addEventListener('click', mensaje);
    console.log(i);
}

// Validar contraseña


function validar(e_fin) {
    if(confirm("Para ingresar al modo administrador, tendrá que validar sus credenciales")) {
        return true;
    } else {
        e_fin.preventDefault();
    }
}

let val = document.querySelectorAll('.validate');

for (let i = 0; i < val.length; i++) {
    val[i].addEventListener('click', validar);
    console.log(i);
}