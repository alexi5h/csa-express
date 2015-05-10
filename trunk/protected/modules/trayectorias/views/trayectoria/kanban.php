<?php
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Util::tsRegisterAssetJs('kanban.js');
$this->pageTitle = Trayectoria::label(2);

$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Lista'), 'icon' => 'list-alt', 'visible' => Util::checkAccess(array("action_trayectoria_admin")), 'url' => array('admin')),
);
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-road"></i> Trayectorias </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <div id="KambanOportunidad" class="kanban-container clearfix">
            <?php $this->renderPartial('_kanban', array('etapas' => $etapas)); ?>
        </div>
    </div>
</div>