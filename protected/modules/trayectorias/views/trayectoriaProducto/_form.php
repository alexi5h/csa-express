<?php
/** @var TrayectoriaProductoController $this */
/** @var TrayectoriaProducto $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'trayectoria-producto-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => false,
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
        <?php echo $form->dropDownListGroup($model, 'trayectoria_id', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('' => ' -- Seleccione -- ') + CHtml::listData(Trayectoria::model()->findAll(), 'id', Trayectoria::representingColumn()), 'htmlOptions' => array(),))) ?>

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
        <?php // echo $form->textFieldGroup($model, 'producto_id') ?>

        <?php echo $form->textFieldGroup($model, 'cliente_origen_id') ?>

        <?php echo $form->textFieldGroup($model, 'cliente_destino_id') ?>

        <?php echo $form->textFieldGroup($model, 'ciudad_origen_id') ?>

        <?php echo $form->textFieldGroup($model, 'ciudad_destino_id') ?>


        <?php echo $form->textFieldGroup($model, 'fecha_enviado') ?>

        <?php echo $form->dropDownListGroup($model, 'estado', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('EN ESPERA' => 'EN ESPERA', 'ENVIADO' => 'ENVIADO',), 'htmlOptions' => array(),))) ?>

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
