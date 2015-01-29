$(function () {
    //Máscara del input de Fecha
    $("#Persona_fecha_nacimiento").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});

    $("#Direccion_provincia_id").change(function () {
        AjaxListaCiudades("Direccion_provincia_id", "Direccion_ciudad_id");
        AjaxListaParroquias("Direccion_ciudad_id", "Direccion_parroquia_id");
        AjaxListaBarrios("Direccion_parroquia_id", "Direccion_barrio_id");
    });
    $("#Direccion_ciudad_id").change(function () {
        AjaxListaParroquias("Direccion_ciudad_id", "Direccion_parroquia_id");
        AjaxListaBarrios("Direccion_parroquia_id", "Direccion_barrio_id");
    });
    $("#Direccion_parroquia_id").change(function () {
        AjaxListaBarrios("Direccion_parroquia_id", "Direccion_barrio_id");
    });
});
function AjaxListaCiudades(lista, lista_actualizar) {
    $('#s2id_' + lista_actualizar + ' a span').html('');
    AjaxCargarListas(baseUrl + "crm/ciudad/ajaxGetCiudadesByProvincia",
            {provincia_id: $("#" + lista).val()}, function (data) {
        $("#" + lista_actualizar).html(data);
        $('#s2id_' + lista_actualizar + ' a span.select2-chosen').html($("#" + lista_actualizar + " option[id='p']").html());
        $('#s2id_' + lista_actualizar + ' a span.select2-arrow').html('<b></b>');
//        $("#" + lista_actualizar).selectBox("refresh");
    });
}
function AjaxListaParroquias(lista, lista_actualizar) {
    $('#s2id_' + lista_actualizar + ' a span').html('');
    AjaxCargarListas(baseUrl + "crm/parroquia/ajaxGetParroquiasbyCiudad",
            {ciudad_id: $("#" + lista).val()}, function (data) {
        $("#" + lista_actualizar).html(data);
        $('#s2id_' + lista_actualizar + ' a span.select2-chosen').html($("#" + lista_actualizar + " option[id='p']").html());
        $('#s2id_' + lista_actualizar + ' a span.select2-arrow').html('<b></b>');
//        $("#" + lista_actualizar).selectBox("refresh");
    });
}
function AjaxListaBarrios(lista, lista_actualizar) {
    $('#s2id_' + lista_actualizar + ' a span').html('');
    AjaxCargarListas(baseUrl + "crm/barrio/ajaxGetBarriosByParroquia",
            {parroquia_id: $("#" + lista).val()}, function (data) {
        $("#" + lista_actualizar).html(data);
        $('#s2id_' + lista_actualizar + ' a span.select2-chosen').html($("#" + lista_actualizar + " option[id='p']").html());
        $('#s2id_' + lista_actualizar + ' a span.select2-arrow').html('<b></b>');
//        $("#" + lista_actualizar).selectBox("refresh");
    });
}
function AjaxCargarListas(url, data, callBack) {
    $.ajax({
        type: 'POST',
        url: url,
        data: data,
        success: function (data) {
            callBack(data);
        }
    });
}