<?php
/** @var FormController $this */
/** @var Form $model es una instancia que implementa a ICrugeStoredUser */
/** @var Boolean $boolIsUserManagement true o false.  si es true indica que esta operandose bajo el action de adminstracion de usuarios, si es false indica que se esta operando bajo 'editar tu perfil' */
$this->pageTitle = Yii::t('app', 'Administrador de Usuarios');
?>

<div class="box box-solid box-primary">
    <div class="box-header">
        <h4 class="box-title"> <i class="fa fa-user"></i> <?php echo ucwords(CrugeTranslator::t("crear nuevo usuario")); ?> </h4>
        <div class="box-tools pull-right">
            <a class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <div class="box-body">
        <?php
        $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
            'type' => 'horizontal',
            'id' => 'crugestoreduser-form',
            'enableAjaxValidation' => false,
            'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
            'enableClientValidation' => true,
        ));
        ?>


        <?php echo $form->textFieldGroup($model, 'username', array('class' => 'span4')) ?>
        <?php echo $form->textFieldGroup($model, 'email', array('class' => 'span4')) ?>
        <?php
        echo $form->textFieldGroup($model, 'newPassword', array(
            'class' => 'span12',
            'append' => CHtml::ajaxLink(
                    "<i class='fa fa-refresh'></i>"
                    , Yii::app()->user->ui->ajaxGenerateNewPasswordUrl
                    , array('success' => 'js:fnSuccess', 'error' => 'js:fnError')
            )
        ))
        ?>
        <script>
            function fnSuccess(data) {
                $('#CrugeStoredUser_newPassword').val(data);
            }
            function fnError(e) {
                alert("error: " + e.responseText);
            }
        </script>

        <!-- inicio de campos extra definidos por el administrador del sistema -->
        <?php
        if (count($model->getFields()) > 0) {
            echo "<div class='row-fluid form-group'>";
            echo "<div class='separator-form span11'>" . ucfirst(CrugeTranslator::t("datos de la cuenta")) . "</div>";
            echo '<div class="clear"></div>';
            foreach ($model->getFields() as $f) {
                // aqui $f es una instancia que implementa a: ICrugeField
                echo "<div class='col'>";
                echo Yii::app()->user->um->getLabelField($f);
                echo Yii::app()->user->um->getInputField($model, $f);
                echo $form->error($model, $f->fieldname);
                echo "</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
    <div class="box-footer">
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'buttonType' => 'submit',
//                    'type' => 'success',
            'icon' => 'ok',
            'label' => CrugeTranslator::t("Guardar"),
            'context' => 'success',
        ));
        ?>
        <?php
        $this->widget('booster.widgets.TbButton', array(
            'icon' => 'remove',
            'label' => Yii::t('AweCrud.app', 'Cancel'),
            'htmlOptions' => array('onclick' => 'javascript:history.go(-1)')
        ));
        ?>
    </div>
</div>
<?php $this->endWidget(); ?>