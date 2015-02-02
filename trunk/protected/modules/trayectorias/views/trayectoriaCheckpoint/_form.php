<?php
/** @var TrayectoriaCheckpointController $this */
/** @var TrayectoriaCheckpoint $model */
/** @var AweActiveForm $form */
$form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
'type' => 'horizontal',
'id' => 'trayectoria-checkpoint-form',
'enableAjaxValidation' => true,
'clientOptions' => array('validateOnSubmit' => false, 'validateOnChange' => true,),
'enableClientValidation' => false,
));?>
<div class="widget blue">
    <div class="widget-title">
        <h4><i class="icon-plus"></i><?php echo Yii::t('AweCrud.app',$model->isNewRecord ? 'Create' : 'Update') . ' ' . TrayectoriaCheckpoint::label(1); ?></h4>
        <span class="tools">
            <a href="javascript:;" class="icon-chevron-down"></a>
            <!--a href="javascript:;" class="icon-remove"></a-->
        </span>
    </div>
    <div class="widget-body">
        
        
            
                                        <?php echo $form->dropDownListGroup($model, 'estado',array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' => array('EN ESPERA' => 'EN ESPERA','APROBADO' => 'APROBADO',),'htmlOptions' => array(),) )) ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'ciudad_id') ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'usuario_actualizacion_id') ?>
                                
                                        <?php echo $form->textFieldGroup($model, 'fecha_actualizacion_id') ?>
                                
                                        <?php echo $form->dropDownListGroup( $model, 'trayectoria_id', array( 'wrapperHtmlOptions' => array('class' => 'col-sm-12',),'widgetOptions' => array('data' =>  array('' => ' -- Seleccione -- ') + CHtml::listData(Trayectoria::model()->findAll(), 'id', Trayectoria::representingColumn()),'htmlOptions' => array(),) )) ?>
                                
                                        <?php echo $form->textAreaGroup($model,'observaciones',array('rows'=>3, 'cols'=>50)) ?>
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
