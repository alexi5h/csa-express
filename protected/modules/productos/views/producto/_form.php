<?php
/** @var ProductoController $this */
/** @var Producto $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'producto-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => false,
        ));
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-plus"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Producto::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">

        <?php echo $form->textFieldGroup($model, 'nombre', array('maxlength' => 45)) ?>

        <?php echo $form->textFieldGroup($model, 'peso') ?>

        <?php echo $form->textFieldGroup($model, 'precio_principal', array('maxlength' => 10)) ?>

        <?php echo $form->textFieldGroup($model, 'precio_secundario', array('maxlength' => 10)) ?>

        <?php echo $form->textFieldGroup($model, 'precio_especial', array('maxlength' => 10)) ?>

        <?php
        echo $form->select2Group(
                $model, 'producto_categoria_id', array(
            'widgetOptions' => array(
                'asDropDownList' => true,
                'data' => CHtml::listData($modelCategoria, 'id', 'nombre'),
                'options' => array(
                    'placeholder' => '-- Seleccione --',
                ),
            ))
        );
        ?>
        
        <?php // echo $form->dropDownListGroup($model, 'producto_categoria_id', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('' => ' -- Seleccione -- ') + CHtml::listData(ProductoCategoria::model()->findAll(), 'id', ProductoCategoria::representingColumn()), 'htmlOptions' => array(),))) ?>

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
