<?php if (Yii::app()->user->hasFlash('loginflash')): ?>
    <div class="alert alert-error">
        <?php echo Yii::app()->user->getFlash('loginflash'); ?>
    </div>
<?php else: ?>

    <!--<div class="form">-->
    <?php
    $form = $this->beginWidget('ext.AweCrud.components.AweActiveForm', array(
        'id' => 'logon-form',
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false,),
        'enableClientValidation' => false,
    ));
    ?>
    <h1><?php echo CrugeTranslator::t('logon', "Login"); ?></h1>
    <div class="inset">
        <div class="form-group">
            <?php echo $form->labelEx($model, 'username'); ?>
            <?php echo $form->textField($model, 'username'); ?>
            <?php echo $form->error($model, 'username'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->labelEx($model, 'password'); ?>
            <?php echo $form->passwordField($model, 'password'); ?>
            <?php echo $form->error($model, 'password'); ?>
        </div>
        <div class="form-group">
            <?php echo $form->checkBox($model, 'rememberMe'); ?>
            <?php echo $form->label($model, 'rememberMe'); ?>
            <?php echo $form->error($model, 'rememberMe'); ?>
        </div>
    </div>

    <p class="p-container">
        <!--<span><?php // echo Yii::app()->user->ui->passwordRecoveryLink; ?></span>-->
        <button class="btn btn-primary btn-flat btnlogin"><i class="glyphicon glyphicon-ok"></i> <?php echo CrugeTranslator::t('logon', "Log In") ?></button>
        <?php //Yii::app()->user->ui->tbutton(CrugeTranslator::t('logon', "Log In"));  ?>
        <?php
        if (Yii::app()->user->um->getDefaultSystem()->getn('registrationonlogin') === 1)
            echo '<span>' . Yii::app()->user->ui->registrationLink . '</span>';
        ?>
    </p>
    <?php
    //	si el componente CrugeConnector existe lo usa:
    //
		if (Yii::app()->getComponent('crugeconnector') != null) {
        if (Yii::app()->crugeconnector->hasEnabledClients) {
            ?>
            <div class='crugeconnector'>
                <span><?php echo CrugeTranslator::t('logon', 'You also can login with'); ?>:</span>
                <ul>
                    <?php
                    $cc = Yii::app()->crugeconnector;
                    foreach ($cc->enabledClients as $key => $config) {
                        $image = CHtml::image($cc->getClientDefaultImage($key));
                        echo "<li>" . CHtml::link($image, $cc->getClientLoginUrl($key)) . "</li>";
                    }
                    ?>
                </ul>
            </div>
            <?php
        }
    }
    ?>
    <?php $this->endWidget(); ?>
    <!--</div>-->
<?php endif; ?>