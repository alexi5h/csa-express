<?php
/** @var TrayectoriaController $this */
/** @var Trayectoria $model */
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
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Trayectoria::label(2) ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'trayectoria-grid',
            'type' => 'striped bordered hover advance',
            'dataProvider' => $model->search(),
            'columns' => array(
                array(
                    'name'=>'ciudad_origen_id',
                    'value'=>'$data->ciudadOrigen'
                ),
                array(
                    'name'=>'ciudad_origen_id',
                    'value'=>'$data->ciudadDestino'
                ),
//                'ciudad_origen_id',
//                'ciudad_destino_id',
                'peso_actual',
                'peso_limite',
                array(
                    'name'=>'usuario_creacion_id',
                    'value'=>  'Yii::app()->user->um->loadUserById($data->usuario_creacion_id)->username'
                ),
//                'usuario_creacion_id',
                'fecha_creacion',
                /*
                  array(
                  'name' => 'trayectoria_etapa_id',
                  'value' => 'isset($data->trayectoriaEtapa) ? $data->trayectoriaEtapa : null',
                  'filter' => CHtml::listData(TrayectoriaEtapa::model()->findAll(), 'id', TrayectoriaEtapa::representingColumn()),
                  ),
                 */
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
                            'label' => '<button class="btn btn-primary"><i class="icon-pencil"></i></button>',
                            'options' => array('title' => 'Actualizar'),
                            'imageUrl' => false,
                        //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_update"))'
                        ),
                        'delete' => array(
                            'label' => '<button class="btn btn-danger"><i class="icon-trash"></i></button>',
                            'options' => array('title' => 'Eliminar'),
                            'imageUrl' => false,
                        //'visible' => 'Util::checkAccess(array("action_incidenciaPrioridad_delete"))'
                        ),
                    ),
                    'htmlOptions' => array(
                        'width' => '80px'
                    )
                ),
            ),
        ));
        ?>
    </div>
</div>