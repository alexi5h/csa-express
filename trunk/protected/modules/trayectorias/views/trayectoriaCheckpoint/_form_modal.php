<?php
Util::tsRegisterAssetJs('_form_modal.js');
Yii::app()->clientScript->scriptMap['jquery.js'] = false;
?>

<script>
    var num_trayectorias = "<?php echo $modelTrayectoria->num_checkpoints; ?>";
</script>

<!--<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
            <h4 class="box-title"> <i class="fa fa-road"></i> <?php echo Yii::t('AweCrud.app', $model->isNewRecord ? 'Create' : 'Update') . ' ' . TrayectoriaCheckpoint::label(1); ?> </h4>
        </div>
        <div class="modal-body">
            <?php
            $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
                'type' => 'horizontal',
                'id' => 'trayectoria-checkpoint-form',
                'enableAjaxValidation' => true,
                'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
                'enableClientValidation' => false,
            ));
            ?>

            <?php
            echo $form->select2Group(
                    $model, 'ciudad_id', array(
                'widgetOptions' => array(
                    'asDropDownList' => true,
                    'data' => CHtml::listData($modelCiudad, 'id', 'nombre'),
                    'options' => array(
                        'placeholder' => '-- Seleccione --',
                    ),
                ))
            );
            ?>

            <?php echo $form->textAreaGroup($model, 'observaciones'); ?>

            <?php $this->endWidget(); ?>

        </div>
        <div class="modal-footer">
            <?php
            $this->widget('booster.widgets.TbButton', array(
                'buttonType' => 'submit',
                'icon' => 'ok',
                'context' => 'success',
                'label' => $model->isNewRecord ? Yii::t('AweCrud.app', 'Create') : Yii::t('AweCrud.app', 'Save'),
                'htmlOptions' => array(
                    'onClick' => 'AjaxActualizacionInformacion("#trayectoria-checkpoint-form")'
                ),
            ));
            ?>
            <?php
//            $this->widget('booster.widgets.TbButton', array(
//                'icon' => 'remove',
//                'label' => Yii::t('AweCrud.app', 'Cerrar'),
//                'htmlOptions' => array('data-dismiss' => 'modal'),
//            ));
            ?>
        </div>
    </div>
</div>
<!--</div>-->