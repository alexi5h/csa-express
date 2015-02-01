<?php
Util::tsRegisterAssetJs('_form.js');
/** @var SucursalController $this */
/** @var Sucursal $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
    'type' => 'horizontal',
    'id' => 'sucursal-form',
    'enableAjaxValidation' => true,
    'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
    'enableClientValidation' => true,
        ));
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . Sucursal::label(1); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php echo $form->textFieldGroup($model, 'nombre', array('maxlength' => 45)) ?>

        <?php echo $form->textFieldGroup($model, 'email', array('maxlength' => 50)) ?>

        <?php echo $form->dropDownListGroup($model, 'agencia_id', array('wrapperHtmlOptions' => array('class' => 'col-sm-12',), 'widgetOptions' => array('data' => array('' => ' -- Seleccione -- ') + CHtml::listData(Agencia::model()->findAll(), 'id', Agencia::representingColumn()), 'htmlOptions' => array(),))) ?>

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
                        <?php echo $form->textAreaGroup($modelDireccion, 'referencia') ?>
                    </div>
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
