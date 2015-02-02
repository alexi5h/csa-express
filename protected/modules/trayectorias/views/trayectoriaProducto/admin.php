<?php
/** @var TrayectoriaProductoController $this */
/** @var TrayectoriaProducto $model */
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
        <h4 class="box-title"> <i class="fa fa-map-marker"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo TrayectoriaProducto::label(2) ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'trayectoria-producto-grid',
            'type' => 'striped bordered hover advance',
            'dataProvider' => $model->search(),
            'columns' => array(
                array(
                    'name' => 'trayectoria_id',
                    'value' => 'isset($data->trayectoria) ? $data->trayectoria->nombre_trayectoria : null',
                ),
                array(
                    'name' => 'producto_id',
                    'value' => 'isset($data->producto) ? $data->producto->nombre : null',
                ),
                array(
                    'name' => 'cliente_origen_id',
                    'value' => 'isset($data->clienteOrigen) ? $data->clienteOrigen->nombre_formato : null',
                ),
                array(
                    'name' => 'cliente_destino_id',
                    'value' => 'isset($data->clienteDestino) ? $data->clienteDestino->nombre_formato : null',
                ),
                array(
                    'name' => 'ciudad_origen_id',
                    'value' => 'isset($data->ciudadOrigen) ? $data->ciudadOrigen->nombre : null',
                ),
                array(
                    'name' => 'ciudad_destino_id',
                    'value' => 'isset($data->ciudadDestino) ? $data->ciudadDestino->nombre : null',
                ),
                /*
                  'fecha_creacion',
                  'fecha_enviado',
                  array(
                  'name' => 'estado',
                  'filter' => array('EN ESPERA'=>'EN ESPERA','ENVIADO'=>'ENVIADO',),
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