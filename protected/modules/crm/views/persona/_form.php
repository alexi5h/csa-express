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
        <?php echo $form->textFieldGroup($model, 'email', array('maxlength' => 45)) ?>
        <?php echo $form->textFieldGroup($model, 'cedula', array('maxlength' => 20)) ?>
        <?php echo $form->textFieldGroup($model, 'ruc', array('maxlength' => 20)) ?>
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
        <div id="contenedor1">
            <div class="control-group">
                <label class="control-label"><?php echo $form->labelEx($model, 'direccion_id') ?></label>
                <div class="controls">
                    <?php
                    echo $form->textFieldGroup($modelDireccion, 'calle_1')
                    ?>  
                </div>
            </div>
            <div class="control-group" >
                <div class="controls controls-row">
                    <?php echo $form->textFieldGroup($modelDireccion, 'calle_2') ?>  
                </div>
            </div>
            <div class="control-group" >
                <div class="controls controls-row">
                    <?php echo $form->textFieldGroup($modelDireccion, 'numero') ?>  
                </div>
            </div>
            <div class="control-group" >
                <div class="controls controls-row">
                    <?php echo $form->textFieldGroup($modelDireccion, 'codigo_postal') ?>  
                </div>
            </div>
            <div class="controls controls-row">
                <div class="control-group">
                    <?php
                    echo $form->select2Group(
                            $modelDireccion, 'provincia_id', array(
                        'widgetOptions' => array(
                            'asDropDownList' => true,
                            'data' => CHtml::listData($model_provincia, 'id', 'nombre'),
                            'options' => array(
                                'placeholder' => '-- Seleccione --',
                            ),
                        ))
                    );
                    ?>
                    <?php echo $form->error($modelDireccion, 'provincia_id'); ?>
                </div>
                <div class="control-group">
                    <?php
                    echo $form->select2Group(
                            $modelDireccion, 'ciudad_id', array(
                        'widgetOptions' => array(
                            'asDropDownList' => true,
                            'data' => CHtml::listData($model_ciudad, 'id', 'nombre'),
                            'options' => array(
                                'placeholder' => '-- Seleccione --',
                            )
                        ))
                    );
                    ?>
                    <?php echo $form->error($modelDireccion, 'ciudad_id'); ?>
                </div>
            </div>
            <div class="controls controls-row">
                <div class="control-group">
                    <?php
                    echo $form->select2Group(
                            $modelDireccion, 'parroquia_id', array(
                        'widgetOptions' => array(
                            'asDropDownList' => true,
                            'data' => CHtml::listData($model_parroquia, 'id', 'nombre'),
                            'options' => array(
                                'placeholder' => '-- Seleccione --',
                            )
                        ))
                    );
                    ?>
                    <?php echo $form->error($modelDireccion, 'parroquia_id'); ?>
                </div>

                <div class="control-group  success">
                    <?php
                    echo $form->select2Group(
                            $modelDireccion, 'barrio_id', array(
                        'widgetOptions' => array(
                            'asDropDownList' => true,
                            'data' => CHtml::listData($model_barrio, 'id', 'nombre'),
                            'options' => array(
                                'placeholder' => '-- Seleccione --',
                            )
                        ))
                    );
                    ?>
                    <?php echo $form->error($modelDireccion, 'barrio_id'); ?>
                </div>
            </div>
            <div class="control-group" >
                <div class="controls controls-row">
                    <div class="control-group span8">
                        <?php echo $form->textAreaGroup($modelDireccion, 'referencia', array('class' => 'span12', 'placeholder' => 'Referencia')) ?>

                    </div>
                </div>
            </div>
        </div>

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