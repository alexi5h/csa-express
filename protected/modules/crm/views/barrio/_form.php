<?php
/** @var BarrioController $this */
/** @var Barrio $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'type' => 'horizontal',
'id' => 'barrio-form',
'enableAjaxValidation' => true,
'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
'enableClientValidation' => false,
));?>
<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-plus"></i><?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . Barrio::label(1); ?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
    </div>
    <div class="widget-body">
        
        
            
                                        <?php echo $form->textFieldGroup($model, 'nombre', array('maxlength' => 45)) ?>
                                
                                        <?php echo $form->dropDownListGroup($model, 'estado',array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' => array('ACTIVO' => 'ACTIVO','INACTIVO' => 'INACTIVO',),'htmlOptions' => array(),) )) ?>
                                
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
