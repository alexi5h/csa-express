<?php
Util::tsRegisterAssetJs('_form.js');
/** @var TrayectoriaProductoController $this */
/** @var TrayectoriaProducto $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'trayectoria-producto-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => true,
        ));
?>
<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . TrayectoriaProducto::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        echo $form->select2Group(
                $model, 'producto_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($modelProducto, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                ),
            ))
        );
        ?>
        <?php
        echo $form->select2Group(
                $model, 'ciudad_origen_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($modelCiudadOrigen, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                ),
            ))
        );
        ?>
        <?php
        echo $form->select2Group(
                $model, 'ciudad_destino_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($modelCiudadDestino, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                ),
            ))
        );
        ?>
        <?php
        echo $form->select2Group(
                $model, 'trayectoria_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($modelTrayectoria, 'id', 'nombre_trayectoria'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                ),
            ))
        );
        ?>

        <?php // echo $form->textFieldGroup($model, 'fecha_enviado') ?>

        <?php // echo $form->dropDownListGroup($model, 'estado', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('EN ESPERA' => 'EN ESPERA', 'ENVIADO' => 'ENVIADO',), 'htmlOptions' => array(),))) ?>


        <div id="contenedor_cliente_origen" class="form-group">
            <div class="control-group" style="margin-bottom: 10px">
                <label class="control-label"> Datos de clientes</label>
            </div>
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <div class="control-group">
                        <label class="control-label"><?php echo $form->labelEx($model, 'cliente_origen_id') ?></label>
                    </div>
                    <?php
                    echo $form->textFieldGroup($modelClienteOrigen, 'nombres', array(
                        'widgetOptions' => array(
                            'htmlOptions' => array(
                                'name' => 'ClienteOrigen[nombres]',
                            ),
                        ),
                    ));
                    ?>
                    <?php
                    echo $form->textFieldGroup($modelClienteOrigen, 'apellidos', array(
                        'widgetOptions' => array(
                            'htmlOptions' => array(
                                'name' => 'ClienteOrigen[apellidos]',
                            ),
                        ),
                    ));
                    ?>
                    <?php
                    echo $form->textFieldGroup($modelClienteOrigen, 'cedula', array(
                        'widgetOptions' => array(
                            'htmlOptions' => array(
                                'name' => 'ClienteOrigen[cedula]',
                            ),
                        ),
                    ));
                    ?>
                    <?php echo $form->error($modelClienteOrigen, 'cedula', array('inputID' => 'ClienteOrigen_cedula')); ?>
                    <?php
                    echo $form->textFieldGroup($modelClienteOrigen, 'ruc', array(
                        'widgetOptions' => array(
                            'htmlOptions' => array(
                                'name' => 'ClienteOrigen[ruc]',
                            ),
                        ),
                    ));
                    ?>
                </div>
                <div class="col-lg-6">
                    <div class="control-group">
                        <label class="control-label"><?php echo $form->labelEx($model, 'cliente_destino_id') ?></label>
                    </div>
                    <?php echo $form->textFieldGroup($modelClienteDestino, 'nombres') ?>
                    <?php echo $form->textFieldGroup($modelClienteDestino, 'apellidos') ?>
                    <?php echo $form->textFieldGroup($modelClienteDestino, 'cedula') ?>
                    <?php echo $form->textFieldGroup($modelClienteDestino, 'ruc') ?>
                </div>

            </div>
        </div>
    </div>
    <div class="box-footer">
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
            'icon' => 'ok',
            'context' => 'success',
            'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
        ));
        ?>
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'label' => Yii::t('AweCrud.app', 'Cancel'),
            'icon' => 'remove',
            'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
        ));
        ?>
    </div>
</div>
<?php $this->endWidget(); ?>
