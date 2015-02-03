var cont = 0;
$(function () {
});

function select2vacio(id) {
    if (id == 0) {
        $("#s2id_TrayectoriaCheckpoint_ciudad_id").select2("val", "");
    }
    else {
        $('#' + id).select2("val", "");
    }
}

function AjaxActualizacionInformacion(Formulario) {
    AjaxGestionModalCheckpoint(Formulario, function (list) {
        select2vacio('s2id_TrayectoriaCheckpoint_ciudad_id');
        $('#trayectoria-checkpoint-form').trigger("reset");
    });
}

function AjaxGestionModalCheckpoint($form, CallBack) {
    var form = $($form);
    var settings = form.data('settings');
    settings.submitting = true;
    $.fn.yiiactiveform.validate(form, function (messages) {
        if ($.isEmptyObject(messages)) {
            $.each(settings.attributes, function () {
                $.fn.yiiactiveform.updateInput(this, messages, form);
            });
            AjaxGuardarModalCheckpoint(true, $form, CallBack);
        }
        else {
            settings = form.data('settings'),
                    $.each(settings.attributes, function () {
                        $.fn.yiiactiveform.updateInput(this, messages, form);
                    });
        }
    });
}

function AjaxGuardarModalCheckpoint(verificador, Formulario, callBack) {
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
                    cont++;
                    callBack(listaActualizar, data);
                    if (cont == parseInt(num_trayectorias)) {
                        $('#mainBigModal').modal('hide');
                        bootbox.alert("Se completó el registro");
                    }

                }
            }
        });
    }

}