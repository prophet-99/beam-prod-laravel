function setEditableCategoria(idParam){

    document.getElementById("desc" + idParam).contentEditable = true;
    document.getElementById("desc" + idParam).className = "edit-class mt-2";
    document.getElementById("abrev" + idParam).contentEditable = true;
    document.getElementById("abrev" + idParam).className = "edit-class mt-2";
    document.getElementById("orden" + idParam).contentEditable = true;
    document.getElementById("orden" + idParam).className = "edit-class mt-2";

    buttonsShowCategoria(idParam);
}

function setNotEditableCategoria(idParam){

    document.getElementById("desc" + idParam).contentEditable = false;
    document.getElementById("desc" + idParam).className = "";
    document.getElementById("abrev" + idParam).contentEditable = false;
    document.getElementById("abrev" + idParam).className = "";
    document.getElementById("orden" + idParam).contentEditable = false;
    document.getElementById("orden" + idParam).className = "";

    buttonsHiddenCategoria(idParam);
}

function buttonsShowCategoria(idParam){

    document.getElementById("btnSucc" + idParam).hidden = false;
    document.getElementById("btnDang" + idParam).hidden = false;
}

function buttonsHiddenCategoria(idParam){

    document.getElementById("btnSucc" + idParam).hidden = true;
    document.getElementById("btnDang" + idParam).hidden = true;
}

function updateCategoria(idParam){

    $.post($("#urlUpd")[0].value, 
    {
        "_token": $("meta[name='csrf-token']").attr("content"), 
        "id": idParam,
        "nombre": document.getElementById("desc" + idParam).innerHTML,
        "orden": document.getElementById("orden" + idParam).innerHTML,
        "abrev": document.getElementById("abrev" + idParam).innerHTML
    }
    , (res)=>{
    
        alertActualizado();
        $("#renderTablas")[0].innerHTML = res.html;

        //inicializa filtros tablas
        $('#table_lista').DataTable(); 
        
    });

    buttonsHiddenCategoria(idParam);
    setNotEditableCategoria(idParam);
}


function setEditableUnidad(idParam){

    document.getElementById("desc" + idParam).contentEditable = true;
    document.getElementById("desc" + idParam).className = "edit-class mt-2";
    document.getElementById("abrev" + idParam).contentEditable = true;
    document.getElementById("abrev" + idParam).className = "edit-class mt-2";

    buttonsShowUnidad(idParam);
}

function setNotEditableUnidad(idParam){

    document.getElementById("desc" + idParam).contentEditable = false;
    document.getElementById("desc" + idParam).className = "";
    document.getElementById("abrev" + idParam).contentEditable = false;
    document.getElementById("abrev" + idParam).className = "";

    buttonsHiddenUnidad(idParam);
}

function buttonsShowUnidad(idParam){

    document.getElementById("btnSucc" + idParam).hidden = false;
    document.getElementById("btnDang" + idParam).hidden = false;
}

function buttonsHiddenUnidad(idParam){

    document.getElementById("btnSucc" + idParam).hidden = true;
    document.getElementById("btnDang" + idParam).hidden = true;
}

function updateUnidad(idParam){
        
    $.post($("#urlUpd")[0].value, 
    {
        "_token": $("meta[name='csrf-token']").attr("content"), 
        "id": idParam,
        "nombre": document.getElementById("desc" + idParam).innerHTML,
        "abrev": document.getElementById("abrev" + idParam).innerHTML
    }
    , (res)=>{
    
        alertActualizado();
        $("#renderTablas")[0].innerHTML = res.html;

        //inicializa filtros tablas
        $('#table_lista').DataTable(); 
        
    });


    buttonsHiddenUnidad(idParam);
    setNotEditableUnidad(idParam);
}

function setEditableMarca(idParam){

    document.getElementById("desc" + idParam).contentEditable = true;
    document.getElementById("desc" + idParam).className = "edit-class mt-2";
    document.getElementById("abrev" + idParam).contentEditable = true;
    document.getElementById("abrev" + idParam).className = "edit-class mt-2";

    buttonsShowMarca(idParam);
}

function setNotEditableMarca(idParam){

    document.getElementById("desc" + idParam).contentEditable = false;
    document.getElementById("desc" + idParam).className = "";
    document.getElementById("abrev" + idParam).contentEditable = false;
    document.getElementById("abrev" + idParam).className = "";

    buttonsHiddenMarca(idParam);
}

function buttonsShowMarca(idParam){

    document.getElementById("btnSucc" + idParam).hidden = false;
    document.getElementById("btnDang" + idParam).hidden = false;
}

function buttonsHiddenMarca(idParam){

    document.getElementById("btnSucc" + idParam).hidden = true;
    document.getElementById("btnDang" + idParam).hidden = true;
}

function updateMarca(idParam){

    $.post($("#urlUpd")[0].value, 
    {
        "_token": $("meta[name='csrf-token']").attr("content"), 
        "id": idParam,
        "nombre": document.getElementById("desc" + idParam).innerHTML,
        "abrev": document.getElementById("abrev" + idParam).innerHTML
    }
    , (res)=>{
    
        alertActualizado();
        $("#renderTablas")[0].innerHTML = res.html;

        //inicializa filtros tablas
        $('#table_lista').DataTable(); 
        
    });

    buttonsHiddenMarca(idParam);
    setNotEditableMarca(idParam);
}

function setEditableProducto(idParam){

    document.getElementById("desc" + idParam).contentEditable = true;
    document.getElementById("desc" + idParam).className = "edit-class mt-2";
    document.getElementById("categ" + idParam).hidden = true;
    document.getElementById("selCat" + idParam).hidden = false;
    
    let fkCategoria = document.getElementById("categHidden" + idParam).innerHTML;
    document.getElementById("selCat" + idParam).value = fkCategoria;

    document.getElementById("unidad" + idParam).hidden = true;
    document.getElementById("selUn" + idParam).hidden = false;

    let fkCategoria2 = document.getElementById("unidHidden" + idParam).innerHTML;
    document.getElementById("selUn" + idParam).value = fkCategoria2;

    document.getElementById("marca" + idParam).hidden = true;
    document.getElementById("selMar" + idParam).hidden = false;

    let fkCategoria3 = document.getElementById("marcHidden" + idParam).innerHTML;
    document.getElementById("selMar" + idParam).value = fkCategoria3;

    document.getElementById("pVenta" + idParam).contentEditable = true;
    document.getElementById("pVenta" + idParam).className = "edit-class mt-2";
    document.getElementById("pCompra" + idParam).contentEditable = true;
    document.getElementById("pCompra" + idParam).className = "edit-class mt-2";

    buttonsShowProducto(idParam);
}

function setNotEditableProducto(idParam){

    document.getElementById("desc" + idParam).contentEditable = false;
    document.getElementById("desc" + idParam).className = "";
    document.getElementById("categ" + idParam).hidden = false;
    document.getElementById("selCat" + idParam).hidden = true;
    document.getElementById("unidad" + idParam).hidden = false;
    document.getElementById("selUn" + idParam).hidden = true;
    document.getElementById("marca" + idParam).hidden = false;
    document.getElementById("selMar" + idParam).hidden = true;
    document.getElementById("pVenta" + idParam).contentEditable = false;
    document.getElementById("pVenta" + idParam).className = "";
    document.getElementById("pCompra" + idParam).contentEditable = false;
    document.getElementById("pCompra" + idParam).className = "";

    buttonsHiddenProducto(idParam);
}

function buttonsShowProducto(idParam){

    document.getElementById("btnSucc" + idParam).hidden = false;
    document.getElementById("btnDang" + idParam).hidden = false;
}

function buttonsHiddenProducto(idParam){

    document.getElementById("btnSucc" + idParam).hidden = true;
    document.getElementById("btnDang" + idParam).hidden = true;
}

function updateProducto(idParam){

    $.post($("#urlUpd")[0].value, 
    {
        "_token": $("meta[name='csrf-token']").attr("content"), 
        "id": idParam,
        "desc": document.getElementById("desc" + idParam).innerHTML,
        "categ": document.getElementById("selCat" + idParam).value,
        "unid": document.getElementById("selUn" + idParam).value,
        "marc": document.getElementById("selMar" + idParam).value,
        "pVenta": document.getElementById("pVenta" + idParam).innerHTML,
        "pCompra": document.getElementById("pCompra" + idParam).innerHTML
    }
    , (res)=>{
    
        alertActualizado();
        $("#renderTablas")[0].innerHTML = res.html;

        //inicializa filtros tablas
        $('#table_lista').DataTable(); 
        
    });

    buttonsHiddenMarca(idParam);
    setNotEditableMarca(idParam);
}

function alertActualizado(){
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Su registro se actualizó',
        showConfirmButton: false,
        timer: 1500
      })
}

function deleteRegistro(idParam){

    Swal.fire({
        title: '¿Está seguro?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText:'No, cancelar'
      }).then((result) => {
        if (result.value) {

            $.post($("#urlDel")[0].value, 
                    {
                        "_token": $("meta[name='csrf-token']").attr("content"), 
                        "id": idParam,
                    }
                    , (res)=>{
                        
                        $("#renderTablas").fadeOut();
                        $("#renderTablas")[0].innerHTML = res.html;
                        $("#renderTablas").fadeIn();

                        //inicializa filtros tablas
                        $('#table_lista').DataTable(); 
                    });
          

          Swal.fire(
            'Eliminado',
            'Su registro se ha eliminado correctamente.',
            'success'
          );
        }
      });

}