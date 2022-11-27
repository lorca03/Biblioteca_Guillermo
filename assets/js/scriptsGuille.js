const añadirEntidad =document.getElementById('AñadirEntidad');
const formEntidad =document.getElementById('formEntidad');

function añadir($elemneto) {
    if (formEntidad.style.display=='none') {
        añadirEntidad.textContent='Cerrar';
        formEntidad.style.display='block';
    }else{
        añadirEntidad.textContent='Añadir '+$elemneto;
        formEntidad.style.display='none';
    }
}
