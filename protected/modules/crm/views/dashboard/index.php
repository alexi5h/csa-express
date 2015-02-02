<?php
/* @var $this SiteController */
$this->pageTitle = Yii::app()->name;

//$npersonas=Persona::model()->activos()->count();
?>

<div class="row col-lg-12">       
    <div class="col-lg-12 alert alert-info">
        <h1 class="text-center text-bold">Bienvenido a "<?php echo Yii::app()->name; ?>"</h1>
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
</div>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3><?php echo count(Yii::app()->user->um->listUsers()) ?></h3>
                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo Yii::app()->createUrl('/cruge/ui/usermanagementadmin') ?>" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3><?php echo count(Persona::model()->findAll()) ?></h3>
                <p>Trabajadores</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-contacts"></i>
            </div>
            <a href="<?php echo Yii::app()->createUrl('/crm/persona/admin') ?>" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?php echo count(Ciudad::model()->findAll()) ?></h3>
                <p>Ciudades</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios7-location"></i>
            </div>
            <a href="<?php echo Yii::app()->createUrl('/crm/ciudad/admin') ?>" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3><?php echo count(Provincia::model()->findAll()) ?></h3>
                <p>Provincias</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-earth"></i>
            </div>
            <a href="<?php echo Yii::app()->createUrl('/crm/provincia/admin') ?>" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div>

<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3><?php echo count(Producto::model()->findAll()) ?></h3>
                <p>Productos</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios7-briefcase"></i>
            </div>
            <a href="<?php echo Yii::app()->createUrl('/productos/producto/admin') ?>" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-blue">
            <div class="inner">
                <h3><?php
                    echo count(Trayectoria::model()->findAll(array(
                                "condition" => "trayectoria_etapa_id =:trayectoria_etapa_id ",
                                "params" => array(':trayectoria_etapa_id' => TrayectoriaEtapa::model()->getIdPesoMinimo(),)
                    )));
                    ?></h3>
                <p>Trayectorias embarcando</p>
            </div>
            <div class="icon">
                <i class="ion ion-android-alarm"></i>
            </div>
            <a href="<?php echo Yii::app()->createUrl('/trayectorias/trayectoria/admin') ?>" class="small-box-footer">
                Más información <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
</div>