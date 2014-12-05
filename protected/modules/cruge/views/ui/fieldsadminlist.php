<?php
$this->pageTitle = Yii::t('app', 'Campos Personalizados');
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-list"></i> <?php echo ucwords(CrugeTranslator::t("campos personalizados")); ?></h4>
        <div class="box-tools pull-right">
            <button class="btn btn-primary btn-sm" data-widget="collapse">
                <i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <?php
        $cols = array();
        // presenta los campos de ICrugeField
        foreach (Yii::app()->user->um->getSortFieldNamesForICrugeField() as $key => $fieldName) {
            $value = null;
            if ($fieldName == 'required')
                $value = '$data->getRequiredName()';
            $cols[] = array('name' => $fieldName, 'value' => $value);
        }
        $cols[] = array(
            'class' => 'CButtonColumn',
            'template' => '{update} {delete}',
            'deleteConfirmation' => CrugeTranslator::t("Esta seguro de eliminar este campo ?"),
            'buttons' => array(
                'update' => array(
                    'label' => '<button class="btn btn-primary"><i class="fa fa-pencil"></i></button>',
                    'options' => array('title' => CrugeTranslator::t("editar campo")),
                    'url' => 'array("fieldsadminupdate","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                ),
                'delete' => array(
                    'label' => '<button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>',
                    'options' => array('title' => CrugeTranslator::t("eliminar campo")),
                    'url' => 'array("fieldsadmindelete","id"=>$data->getPrimaryKey())',
                    'imageUrl' => false,
                ),
            ),
            'htmlOptions' => array(
                'width' => '90px'
            )
        );
        //$this->widget(Yii::app()->user->ui->CGridViewClass, array(
        //    'dataProvider'=>$dataProvider,
        //    'columns'=>$cols,
        //	'filter'=>$model,
        //));

        $this->widget('booster.widgets.TbGridView', array(
            'id' => 'llamada-grid',
            'type' => 'striped condensed',
            'dataProvider' => $model->search(),
            'filter' => $model,
            'columns' => $cols
        ));
        ?>
    </div>
</div>