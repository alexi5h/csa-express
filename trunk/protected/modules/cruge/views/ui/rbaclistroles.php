<?php
$this->pageTitle = Yii::t('app', 'Roles y Asignaciones');
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-group"></i> <?php echo ucwords(CrugeTranslator::t("roles")); ?></h4>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-sm" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="row-fluid">
            <div class='col-lg-12'>
                <?php
                echo CHtml::link('<i class="fa fa-plus icon-white"></i> ' . CrugeTranslator::t("Crear Nuevo Rol")
                        , Yii::app()->user->ui->getRbacAuthItemCreateUrl(CAuthItem::TYPE_ROLE), array('class' => 'btn btn-success pull-right'));
                ?>
            </div>
        </div>
        <?php $this->renderPartial('_listauthitems', array('dataProvider' => $dataProvider), false); ?>
    </div>
</div>