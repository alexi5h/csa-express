<?php
/** @var CiudadController $this */
/** @var Ciudad $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'ciudad-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => false,
        ));
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Ciudad::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php echo $form->textFieldGroup($model, 'nombre', array('maxlength' => 45)) ?>
        <?php echo $form->dropDownListGroup($model, 'estado', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',), 'htmlOptions' => array(),))) ?>
        <?php echo $form->dropDownListGroup($model, 'tipo', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('PRINCIPAL' => 'PRINCIPAL', 'SECUNDARIA' => 'SECUNDARIA', 'TRAYECTO ESPECIAL' => 'TRAYECTO ESPECIAL',), 'htmlOptions' => array(),))) ?>
        <?php echo $form->dropDownListGroup($model, 'provincia_id', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('' => ' -- Seleccione -- ') + CHtml::listData(Provincia::model()->findAll(), 'id', Provincia::representingColumn()), 'htmlOptions' => array(),))) ?>
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