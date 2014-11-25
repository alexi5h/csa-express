<?php
/** @var TelefonoController $this */
/** @var Telefono $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'type' => 'horizontal',
'id' => 'telefono-form',
'enableAjaxValidation' => true,
'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
'enableClientValidation' => false,
));?>
<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-plus"></i><?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . Telefono::label(1); ?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
    </div>
    <div class="widget-body">
        
        
            
                                        <?php echo $form->textFieldGroup($model, 'numero', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'estado', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'principal') ?>
                                
                                        <?php echo $form->dropDownListGroup($model, 'tipo',array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' => array('PERSONA' => 'PERSONA','AGENCIA' => 'AGENCIA','SUCURSAL' => 'SUCURSAL',),'htmlOptions' => array(),) )) ?>
                                
                                        <?php echo $form->dropDownListGroup($model, 'entidad_tipo',array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' => array('CELULAR' => 'CELULAR','CONVENCIONAL' => 'CONVENCIONAL',),'htmlOptions' => array(),) )) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'entidad_id') ?>
                                                        <div class="form-actions">
                        <?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'success',
			'label'=>$model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
		)); ?>
            <?php $this->widget('booster.widgets.TbButton', array(
			'label'=> Yii::t('AweCrud.app', 'Cancel'),
			'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
		)); ?>
        </div>
    </div>
</div>
<?php $this->endWidget(); ?>
