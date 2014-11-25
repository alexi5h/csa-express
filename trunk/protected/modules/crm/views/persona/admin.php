<?php
/** @var PersonaController $this */
/** @var Persona $model */
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
        <h4 class="box-title"> <i class="fa fa-group"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Persona::label(2) ?> </h4>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-sm" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'persona-grid',
            'type' => 'striped bordered hover advance',
            'dataProvider' => $model->activos()->search(),
            'columns' => array(
//                'nombres',
//                'apellidos',
                array(
                    'name' => 'nombre_formato',
                    'value' => '$data->nombre_formato',
                    'type' => 'raw'
                ),
                'cedula',
//                'ruc',
                'email',
//                array(
//                    'name' => 'estado',
//                    'filter' => array('ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO',),
//                ),
//                array(
//                    'name' => 'sexo',
//                    'filter' => array('M' => 'M', 'F' => 'F',),
//                ),
                array(
                    'name' => 'fecha_nacimiento',
                    'value' => 'Util::FormatDate($data->fecha_nacimiento, "d-m-Y")'
                ),
                array(
                    'name' => 'tipo',
                    'value' => '$data->getTipoPersona()'
                ),
//                'usuario_creacion_id',
//                'fecha_creacion',
//                'fecha_actualizacion',
//                array(
//                    'name' => 'direccion_id',
//                    'value' => 'isset($data->direccion) ? $data->direccion : null',
//                    'filter' => CHtml::listData(Direccion::model()->findAll(), 'id', Direccion::representingColumn()),
//                ),
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