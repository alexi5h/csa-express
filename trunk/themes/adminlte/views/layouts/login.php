<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <!--<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" />-->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/loginbatmanfiles/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/loginbatmanfiles/css/style.css" />

    </head>
    <body id="login">
        <img id="bg" src="<?php echo Yii::app()->theme->baseUrl; ?>/img/Download-Free-Website-Abstract-Wallpaper.jpg" alt="Fondo" />
        <?php echo $content ?>
        <!--<script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/loginbatmanfiles/js/prefixfree.min.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/loginbatmanfiles/js/modernizr.js"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/login.js"></script>
        <span class="author">Designed by Alexis Hidalgo</span>
    </body>
</html>