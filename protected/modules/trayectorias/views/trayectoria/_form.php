<?php
Util::tsRegisterAssetJs('_form.js');
/** @var TrayectoriaController $this */
/** @var Trayectoria $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'trayectoria-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => false,
        ));
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-plus"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Trayectoria::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        echo $form->select2Group(
                $model, 'ciudad_origen_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($modelCiudad, 'id', 'nombre'),
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
                'data' => CHtml::listData($modelCiudad, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                ),
            ))
        );
        ?>

        <?php echo $form->textFieldGroup($model, 'peso_limite') ?>
        <?php echo $form->textFieldGroup($model, 'num_checkpoints') ?>
        <div class="form-group">
            <label class="control-label" for="Trayectoria_fecha_despacho">Fecha Despacho</label>
            <div class="col-sm-5">
                <?php
                $this->widget('booster.widgets.TbDateTimePicker', array(
                    'model' => $model,
                    'attribute' => 'fecha_despacho',
                    'options' => isset($options) ? $options : array(),
//            'htmlOptions' => $this->htmlOptions,
                ));
                ?>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <?php
        $this->widget('booster.widgets.TbButton', array(
//            'buttonType' => 'submit',
            'icon' => 'ok',
            'context' => 'success',
            'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
            'htmlOptions' => array('onclick' => 'AjaxActualizacionInformacionTrayectoria("#trayectoria-form")')
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