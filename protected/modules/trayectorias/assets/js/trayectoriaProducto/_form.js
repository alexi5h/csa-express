$(function () {
    $("#TrayectoriaProducto_ciudad_origen_id").change(function () {
        AjaxListaCiudadDestino("TrayectoriaProducto_ciudad_origen_id", "TrayectoriaProducto_ciudad_destino_id");
        AjaxListaTrayectorias("TrayectoriaProducto_ciudad_destino_id", "TrayectoriaProducto_trayectoria_id");
    });
    $("#TrayectoriaProducto_ciudad_destino_id").change(function () {
        AjaxListaTrayectorias("TrayectoriaProducto_ciudad_destino_id", "TrayectoriaProducto_trayectoria_id");
    });
    $("#TrayectoriaProducto_producto_id").change(function () {
        AjaxListaCiudadDestino("TrayectoriaProducto_ciudad_origen_id", "TrayectoriaProducto_ciudad_destino_id");
        AjaxListaTrayectorias("TrayectoriaProducto_ciudad_destino_id", "TrayectoriaProducto_trayectoria_id");
    });
});
function AjaxListaCiudadDestino(lista, lista_actualizar) {
    $('#s2id_' + lista_actualizar + ' a span').html('');
    AjaxCargarListas(baseUrl + "crm/ciudad/ajaxGetCiudadesByCiudad",
            {ciudad_id: $("#" + lista).val()}, function (data) {
        $("#" + lista_actualizar).html(data);
        $('#s2id_' + lista_actualizar + ' a span.select2-chosen').html($("#" + lista_actualizar + " option[id='p']").html());
        $('#s2id_' + lista_actualizar + ' a span.select2-arrow').html('<b></b>');
    });
}
function AjaxListaTrayectorias(lista, lista_actualizar) {
    $('#s2id_' + lista_actualizar + ' a span').html('');
    AjaxCargarListas(baseUrl + "trayectorias/trayectoria/ajaxGetTrayectoriasbyCiudades", {
        producto_id: $("#TrayectoriaProducto_producto_id").val(),
        ciudad_origen_id: $("#TrayectoriaProducto_ciudad_origen_id").val(),
        ciudad_destino_id: $("#" + lista).val()
    }, function (data) {
        $("#" + lista_actualizar).html(data);
        $('#s2id_' + lista_actualizar + ' a span.select2-chosen').html($("#" + lista_actualizar + " option[id='p']").html());
        $('#s2id_' + lista_actualizar + ' a span.select2-arrow').html('<b></b>');
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