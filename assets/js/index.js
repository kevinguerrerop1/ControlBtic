/* 
 * Fichero Javascript
 * View : view_index.php
 * Autor: Patricio Carvajal C
 */
$(document).ready(function () {
    
 $('body').on('hidden.bs.modal', '.modal', function () {
    $(this).removeData('bs.modal');
    $('.modal-content').empty();
});


///** Ver Modal Registrarse **/
//$("#btn_crear_sol").click(function () {
//    console.log("boton apretado");
//    $.ajax({
//        url: base_url + 'index.php/administrador_sistema/ver_modal_sol',
//        type: 'POST',
//        data: null
//    }).done(function (response) {
//
//         console.log(response);
//        $(".modal-content").html(response);
//        $("#modal").modal("show");
//
//    });
//});
//
//
//});//Fin (document).ready



$("#btn_crear_sol").click(function(){
     var rut_oculto = $(this).attr("rut");
     console.log("datos_reclamante");
    $.ajax({
        url: base_url + 'index.php/administrador_sistema/ver_modal_sol',
        type: 'post',
        datatype: 'json',
        cache:false,
        data: {
            rut_oculto: rut_oculto
        }
    }).done(function (response) {
        console.log(response);
        $(".modal-content").html(response);
        $("#modal").modal("show");
    });

});
});


$("button[name^=id_sol]").click(function(){
        console.log("boton apretado");
        var id = $(this).attr("id");
    $.ajax({
        url: base_url + 'index.php/administrador_sistema/ver_editar_solicitud/'+id,
        type: 'POST',
        datatype: 'json',
        cache:false,
        data: null
    }).done(function (response) {
        $(".modal-content").html(response);
        $("#modal").modal("show");
    });

});


