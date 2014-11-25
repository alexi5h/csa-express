<?php
/** @var DireccionController $this */
/** @var Direccion $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'type' => 'horizontal',
'id' => 'direccion-form',
'enableAjaxValidation' => true,
'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
'enableClientValidation' => false,
));?>
<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-plus"></i><?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . Direccion::label(1); ?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
    </div>
    <div class="widget-body">
        
        
            
                                        <?php echo $form->textFieldGroup($model, 'calle_1', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'calle_2', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'numero', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'codigo_postal', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->textAreaGroup($model,'referencia',array('rows'=>3, 'cols'=>50)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'latitud', array('maxlength' => 60)) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'longitud', array('maxlength' => 60)) ?>
                                
                                        <?php echo $form->dropDownListGroup( $model, 'barrio_id', array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' =>  array('' => ' -- Seleccione -- ') + CHtml::listData(Barrio::model()->findAll(), 'id', Barrio::representingColumn()),'htmlOptions' => array('empty' => Yii::t('AweApp', 'None')),) )) ?>
                                
                                        <?php echo $form->dropDownListGroup( $model, 'parroquia_id', array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' =>  array('' => ' -- Seleccione -- ') + CHtml::listData(Parroquia::model()->findAll(), 'id', Parroquia::representingColumn()),'htmlOptions' => array(),) )) ?>
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
