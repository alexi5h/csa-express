$(function () {
    $("#Parroquia_provincia_id").change(function () {
        AjaxListaCiudades("Parroquia_provincia_id", "Parroquia_ciudad_id");
    });
});
function AjaxListaCiudades(lista, lista_actualizar) {
    $('#s2id_' + lista_actualizar + ' a span').html('');
    AjaxCargarListas(baseUrl + "crm/ciudad/ajaxGetCiudadesByProvincia",
            {provincia_id: $("#" + lista).val()}, function (data) {
        $("#" + lista_actualizar).html(data);
        $('#s2id_' + lista_actualizar + ' a span.select2-chosen').html($("#" + lista_actualizar + " option[id='p']").html());
        $('#s2id_' + lista_actualizar + ' a span.select2-arrow').html('<b></b>');
        $("#" + lista_actualizar).selectBox("refresh");
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