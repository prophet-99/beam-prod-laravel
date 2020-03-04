$(document).ready(function(){

    $.get( $("#idUrl").attr("value"), 
        {"_token": $("meta[name='csrf-token']").attr("content")}, 
        function(res){

            $("#idForms").html(res.html);
        });
});

function cargarPage(url){
    
    $.get( url, 
            {"_token": $("meta[name='csrf-token']").attr("content")}, 
            function(res){

                $("#idForms").html(res.html);
            });
   
}

function showAlertCreate(msj){

    Swal.fire({
        position: 'center',
        icon: 'success',
        title: msj,
        showConfirmButton: false,
        timer: 1500
      });
}

function cargarLista(ruta){

    $.get( ruta, 
        function(res){

            $("#renderTablas").html(res.html);
        });

}