<?php
/** @var AgenciaController $this */
/** @var Agencia $model */
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
        <h4 class="box-title"> <i class="fa fa-globe"></i> <?php echo Yii::t('AweCrud.app', 'Manage') ?> <?php echo Agencia::label(2) ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'agencia-grid',
            'type' => 'striped bordered hover advance',
            'dataProvider' => $model->search(),
            'columns' => array(
                'nombre',
                'email',
                array(
                    'name' => 'matriz',
                    'value' => '$data->matriz=="1" ? "<i class=\"fa fa-check\"></i>" : ""',
                    'type' => 'raw',
                ),
                array(
                    'name' => 'direccion_id',
                    'value' => 'isset($data->direccion) ? $data->direccion : null',
                    'filter' => CHtml::listData(Direccion::model()->findAll(), 'id', Direccion::representingColumn()),
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