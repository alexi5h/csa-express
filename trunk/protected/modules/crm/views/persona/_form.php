<?php
Util::tsRegisterAssetJs('_form.js');

/** @var PersonaController $this */
/** @var Persona $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'persona-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => false,
        ));
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-plus"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Persona::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php echo $form->textFieldGroup($model, 'nombres', array('maxlength' => 100)) ?>

        <?php echo $form->textFieldGroup($model, 'apellidos', array('maxlength' => 100)) ?>

        <?php echo $form->textFieldGroup($model, 'cedula', array('maxlength' => 20)) ?>

        <?php echo $form->textFieldGroup($model, 'ruc', array('maxlength' => 20)) ?>

        <?php echo $form->textFieldGroup($model, 'email', array('maxlength' => 45)) ?>

        <?php // echo $form->dropDownListGroup($model, 'estado', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',), 'htmlOptions' => array(),))) ?>

        <?php
        echo $form->radioButtonListGroup(
                $model, 'sexo', array(
            'widgetOptions' => array(
                'data' => array('M' => 'Masculino', 'F' => 'Femenino',),
                'htmlOptions' => array(
                    'template' => '{beginLabel}{input} {labelTitle}{endLabel}',
                    'separator' => "<label class='radio-inline'>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</label>",
                ),
            ),
            'inline' => true,
        ));
        ?>

        <?php
        echo $form->datePickerGroup($model, 'fecha_nacimiento', array(
            'prepend' => '<i class="fa fa-calendar"></i>',
            'widgetOptions' => array(
                'options' => array(
                    'language' => 'es',
                    'format' => 'dd/mm/yyyy',
                ),
                'htmlOptions' => array(
//                    'id' => 'datemask',
                    'data-inputmask' => "'alias': 'dd/mm/yyyy'",
                    'data-mask' => '',
                ),
            ),
        ));
        ?>

        <?php // echo $form->dropDownListGroup($model, 'tipo', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('A' => 'A', 'L' => 'L',), 'htmlOptions' => array(),))) ?>

        <?php
        echo $form->radioButtonListGroup(
                $model, 'tipo', array(
            'widgetOptions' => array(
                'data' => array('A' => 'Administrativo', 'L' => 'Logística',),
                'htmlOptions' => array(
                    'template' => '{beginLabel}{input} {labelTitle}{endLabel}',
                    'separator' => "<label class='radio-inline'>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</label>",
                ),
            ),
            'inline' => true,
        ));
        ?>

        <?php // echo $form->textFieldGroup($model, 'usuario_creacion_id')  ?>

    </div>
    <div class="box-footer">
        <center>
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'buttonType' => 'submit',
                'icon' => 'ok',
                'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
                'context' => 'success',
            ));
            ?>
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'label' => Yii::t('AweCrud.app', 'Cancel'),
                'icon' => 'remove',
                'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
            ));
            ?>
        </center>
    </div>
</div>
<?php $this->endWidget(); ?>