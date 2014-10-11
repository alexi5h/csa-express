<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;

//$npersonas=Persona::model()->activos()->count();
?>

<div class="row">       
    <div class="col-lg-10">
        <h1>Bienvenido a <?php echo Yii::app()->name; ?></h1>
        <?php
        if (Yii::app()->user->isGuest) {
            $this->widget(
                    'ext.booster.widgets.TbButton', array(
                'label' => 'Entrar',
                'buttonType' => 'link',
                'url' => Yii::app()->user->ui->loginUrl
                    )
            );
        }
        ?>
    </div>
    
<!--    <div class="col-lg-3 col-xs-6">
         small box 
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>
                    <?php // echo $npersonas ?>
                </h3>
                <p>
                    <?php // echo $npersonas==1 ? Persona::label(1).' registrada' : Persona::label(2).' registradas' ?>
                </p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php // echo Yii::app()->createUrl('/crm/persona/admin') ?>" class="small-box-footer">
                Más info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>-->
</div>