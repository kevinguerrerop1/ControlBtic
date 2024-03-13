//JS Aplicacion
$(document).ready(function(e){
    
   $("#btn_carga").click(function(){
        console.log("boton apretado");
    $.ajax({
        url: base_url + 'index.php/editor/ver_carga_documento',
        type: 'post',
        datatype: 'json',
        cache:false,
        data: null
    }).done(function (response) {
        $(".modal-content").html(response);
        $("#modal").modal("show");
    });

});


 $("button[name^=id_doc]").click(function(){
        console.log("boton apretado");
        var id = $(this).attr("id");
    $.ajax({
        url: base_url + 'index.php/editor/ver_editar_documento/'+id,
        type: 'get',
        datatype: 'json',
        cache:false,
        data: null
    }).done(function (response) {
        $(".modal-content").html(response);
        $("#modal").modal("show");
    });

});


});

