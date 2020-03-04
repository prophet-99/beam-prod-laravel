function validarUnidad(){
    
    let valor = document.getElementById("idNombre").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
        
        showAlertValidacion("El nombre es obligatorio.");
        return false;
    }

    if( valor.length < 3 ) {

        showAlertValidacion("El nombre debe tener 3 carácteres como mínimo.");
        return false;
    }

    valor = document.getElementById("idAbrev").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {

        showAlertValidacion("La abreviatura es obligatoria.");
        return false;
    }

    return true;
}

function validarCategoria(){

    let valor = document.getElementById("idNombre").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {

        showAlertValidacion("El nombre es obligatorio.");
        return false;
    }

    if( valor.length < 3 ) {

        showAlertValidacion("El nombre debe tener 3 carácteres como mínimo.");
        return false;
    }
    
    valor = document.getElementById("idAbrev").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor)){

        showAlertValidacion("La abreviatura es obligatoria.");
        return false;
    }

    valor = document.getElementById("idOrden").value;
    if(valor == null || valor.length == 0 || /^\s+$/.test(valor)){

        showAlertValidacion("El orden es obligatorio.");
        return false;
    }

    if( valor <= 0 ) {

        showAlertValidacion("El orden tiene que ser mayor a 0.");
        return false;
    }

    return true;
}

function validarMarca(){

    let valor = document.getElementById("idNombre").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {

        showAlertValidacion("El nombre es obligatorio.");
        return false;
    }

    if( valor.length < 3 ) {

        showAlertValidacion("El nombre debe tener 3 carácteres como mínimo.");
        return false;
    }

    valor = document.getElementById("idAbrev").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {

        showAlertValidacion("La abreviatura es obligatoria.");
        return false;
    }

    return true;
}

function validarProducto(){

    let valor = document.getElementById("idNombre").value.trim();
    if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {

        showAlertValidacion("El nombre es obligatorio.");
        return false;
    }

    if( valor.length < 3 ) {

        showAlertValidacion("El nombre debe tener 3 carácteres como mínimo.");
        return false;
    }

    valor = document.getElementById("idCategoria").value;
    if( valor == "") {
        
        showAlertValidacion("Debe seleccionar una categoría.");
        return false;
    }

    valor = document.getElementById("idUnidad").value;
    if( valor == "") {
        
        showAlertValidacion("Debe seleccionar una unidad.");
        return false;
    }

    valor = document.getElementById("idMarca").value;
    if( valor == "") {
        
        showAlertValidacion("Debe seleccionar una marca.");
        return false;
    }

    valor = document.getElementById("idVenta").value;
    if(valor == null || valor.length == 0 || /^\s+$/.test(valor)){

        showAlertValidacion("El precio de venta es obligatorio.");
        return false;
    }

    if( valor <= 0 ) {

        showAlertValidacion("El precio de venta tiene que ser mayor a 0.");
        return false;
    }

    valor = document.getElementById("idCompra").value;
    if(valor == null || valor.length == 0 || /^\s+$/.test(valor)){

        showAlertValidacion("El precio de compra es obligatorio.");
        return false;
    }

    if( valor <= 0 ) {

        showAlertValidacion("El precio de compra tiene que ser mayor a 0.");
        return false;
    }

    return true;
}


function showAlertValidacion(msg){
    let timerInterval
    Swal.fire({
      title: 'Error al enviar',
      icon: 'error',
      text: msg,
      timer: 3000,
      timerProgressBar: true,
      onBeforeOpen: () => {
        Swal.showLoading()
        timerInterval = setInterval(() => {
          const content = Swal.getContent()
          if (content) {
            const b = content.querySelector('b');
            if (b) {
              b.textContent = Swal.getTimerLeft();
            }
          }
        }, 100);
      },
      onClose: () => {
        clearInterval(timerInterval)
      }
    });
}

