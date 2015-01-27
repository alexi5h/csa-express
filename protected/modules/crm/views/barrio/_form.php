<?php
Util::tsRegisterAssetJs('_form.js');
/** @var BarrioController $this */
/** @var Barrio $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'barrio-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => false,
        ));
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Barrio::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php echo $form->textFieldGroup($model, 'nombre', array('maxlength' => 45)) ?>
        <?php
        echo $form->select2Group(
                $model, 'provincia_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($model_provincia, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                )
            ))
        );
        ?>
        <?php
        echo $form->select2Group(
                $model, 'ciudad_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($model_ciudad, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                )
            ))
        );
        ?>
        <?php
        echo $form->select2Group(
                $model, 'parroquia_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($model_parroquia, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                )
            ))
        );
        ?>
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
