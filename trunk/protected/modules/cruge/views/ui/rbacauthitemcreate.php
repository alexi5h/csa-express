<?php
/* $model:  es una instancia que implementa a CrugeAuthItemEditor */

$this->pageTitle = Yii::t('app', 'Roles y Asignaciones');
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-plus"></i> <?php echo ucwords(CrugeTranslator::t("Creando") . " " . CrugeTranslator::t($model->categoria)); ?></h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <?php $this->renderPartial('_authitemform', array('model' => $model), false); ?>
</div>