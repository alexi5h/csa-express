<?php
/** @var ClienteController $this */
/** @var Cliente $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'type' => 'horizontal',
'id' => 'cliente-form',
'enableAjaxValidation' => true,
'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
'enableClientValidation' => false,
));?>
<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-plus"></i><?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . Cliente::label(1); ?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
    </div>
    <div class="widget-body">
        
        
            
                                        <?php echo $form->textFieldGroup($model, 'nombres', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'apellidos', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'cedula', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'ruc', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->dropDownListGroup( $model, 'direccion_id', array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' =>  array('' => ' -- Seleccione -- ') + CHtml::listData(Direccion::model()->findAll(), 'id', Direccion::representingColumn()),'htmlOptions' => array('empty' => Yii::t('AweApp', 'None')),) )) ?>
                                        </div>                <div class="form-actions">
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
