$(function(){
   //Máscara del input de Fecha
//    $("#Trayectoria_fecha_despacho").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"}); 
});
function showModalLoadingWidth() {
    var html = "";
    html += "<div class='modal-header'><h4><i class='icon-refresh'></i> Cargando</h4></div>";
    html += "<div class='loading'><img src='" + themeUrl + "images/truulo-loading.gif' /></div>";
    $("#mainModal").html(html);
    $("#mainModal").modal("show");
}

function showModalDataWidth(html) {
    $("#mainBigModal").html(html);
    $('#mainBigModal').modal({
        backdrop: 'static'
    });
    $("#mainBigModal").modal("show");
//    $('select.fix').selectBox();
}

/**
 * 
 * @param {cadena} url
 * @returns {undefined}
 */
function viewModalWidth(url, CallBack) {
    $.ajax({
        type: "POST",
        url: baseUrl + url,
        beforeSend: function () {
//            showModalLoadingWidth();
        },
        success: function (data) {
//            $("#mainModal").modal("hide");

            showModalDataWidth(data);
            CallBack();

        }
    });
}

function AjaxActualizacionInformacionTrayectoria(Formulario) {
    AjaxGestionModalTrayectoria(Formulario, function (list) {
        $('#trayectoria-form').trigger("reset");
    });
}

function AjaxGestionModalTrayectoria($form, CallBack) {
    var form = $($form);
    var settings = form.data('settings');
    settings.submitting = true;
    $.fn.yiiactiveform.validate(form, function (messages) {
        if ($.isEmptyObject(messages)) {
            $.each(settings.attributes, function () {
                $.fn.yiiactiveform.updateInput(this, messages, form);
            });
            AjaxGuardarModalTrayectoria(true, $form, CallBack);
        }
        else {
            settings = form.data('settings'),
                    $.each(settings.attributes, function () {
                        $.fn.yiiactiveform.updateInput(this, messages, form);
                    });
//            DesBloquearBotonesModal($form, 'Guardar', 'AjaxAtualizacionInformacion');
        }
    });
}

function AjaxGuardarModalTrayectoria(verificador, Formulario, callBack) {
    if (verificador) {
        var listaActualizar = Formulario.split('-');
        listaActualizar = listaActualizar[0] + '-grid';
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: $(Formulario).attr('action'),
            data: $(Formulario).serialize(),
            beforeSend: function (xhr) {
            },
            success: function (data) {
                if (data.success) {
                    viewModalWidth("trayectorias/trayectoriaCheckpoint/create?trayectoria_id=" + data.trayectoria_id, function () {
                    });
                    callBack(listaActualizar, data);

                } else {
//                    DesBloquearBotonesModal(Formulario, 'Guardar', 'AjaxAtualizacionInformacion');
                    bootbox.alert(data.message);
                }
            }
        });
    }

}