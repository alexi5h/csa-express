<?php
/** @var ParroquiaController $this */
/** @var Parroquia $model */
$this->menu = array(
    array('label' => Yii::t('AweCrud.app', 'Create'), 'icon' => 'plus', 'url' => array('create'),
    //'visible' => (Util::checkAccess(array('action_incidenciaPrioridad_create')))
    ),
);
?>
<div id="flashMsg"  class="flash-messages">

</div> 

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Parroquia::label(2) ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'parroquia-grid',
            'type' => 'striped bordered hover advance',
            'dataProvider' => $model->search(),
            'columns' => array(
                'nombre',
//                array(
//                    'name' => 'estado',
//                    'filter' => array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',),
//                ),
                array(
                    'name' => 'ciudad_id',
                    'value' => 'isset($data->ciudad) ? $data->ciudad : null',
                    'filter' => CHtml::listData(Ciudad::model()->findAll(), 'id', Ciudad::representingColumn()),
                ),
                array(
                    'name' => 'provincia',
                    'value' => 'isset($data->ciudad) ? $data->ciudad->provincia : null',
                    'filter' => CHtml::listData(Provincia::model()->findAll(), 'id', Provincia::representingColumn()),
                ),
                array(
                    'class' => 'CButtonColumn',
                    'template' => '{update} {delete}',
                    'afterDelete' => 'function(link,success,data){ 
                    if(success) {
                         $("#flashMsg").empty();
                         $("#flashMsg").css("display","");
                         $("#flashMsg").html(data).animate({opacity: 1.0}, 5500).fadeOut("slow");
                    }
                    }',
                    'buttons' => array(
                        'update' => array(
                            'label' => '<button class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button>',
                            'options' => array('title' => 'Actualizar'),
                            'imageUrl' => false,
                        //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                        ),
                        'delete' => array(
                            'label' => '<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>',
                            'options' => array('title' => 'Eliminar'),
                            'imageUrl' => false,
                        //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                        ),
                    ),
                    'htmlOptions' => array(
                        'width' => '90px'
                    )
                ),
            ),
        ));
        ?>
    </div>
</div>