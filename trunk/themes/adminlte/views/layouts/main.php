
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--><html lang="es"> <!--<![endif]-->

    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <link rel="icon" type="image/png" href="<?php echo Yii::app()->theme->baseUrl; ?>/img/iconnav.png">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ionicons.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/kanban.css" />

        <!-- jvectormap -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <!--<link href="<?php //echo Yii::app()->theme->baseUrl;      ?>/css/morris/morris.css" rel="stylesheet" type="text/css" />-->
        <!--<link rel="stylesheet" type="text/css" href="../../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.css" />-->

        <script>
            var baseUrl = "<?php print Yii::app()->baseUrl . '/'; ?>";
            var themeUrl = "<?php print Yii::app()->theme->baseUrl . '/'; ?>";
            var user_id = "<?php print Yii::app()->user->id; ?>";
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="<?php echo Yii::app()->homeUrl ?>" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <?php echo Yii::app()->name ?>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-fixed-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <?php echo Yii::app()->user->name ? Yii::app()->user->name : "Guest" ?>
                                <span><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!--                                <li class="user-header">
                                                                    <img src="<?php // echo Yii::app()->theme->baseUrl;    ?>/img/avatar3.png" class="img-circle" alt="User Image" />
                                                                    <p>
                                <?php // echo Yii::app()->user->name ? Yii::app()->user->name : "Guest" ?>
                                                                        <small>Member since Nov. 2012</small>
                                                                    </p>
                                                                </li>-->
                                <?php if (!Yii::app()->user->isGuest): ?>
                                    <li class="gestion-user"><?php echo CHtml::link('<i class="fa fa-user"></i>&nbsp;&nbsp;Mi Cuenta', array('/cruge/ui/editprofile')) ?></a></li>
                                    <?php if (Yii::app()->user->checkAccess('admin')): ?>
                                        <li class="gestion-user"><?php echo CHtml::link('<i class="fa fa-cog"></i>&nbsp;&nbsp;Administración', Yii::app()->user->ui->userManagementAdminUrl) ?></li>
                                    <?php endif; ?>
                                    <li class="gestion-user"><?php echo CHtml::link('<i class="fa fa-key"></i>&nbsp;&nbsp;Cerrar Sesión', Yii::app()->user->ui->logoutUrl) ?></a></li>
                                <?php else: ?>
                                    <li class="gestion-user"><?php echo CHtml::link('<i class="fa fa-key"></i>&nbsp;&nbsp;Iniciar Sesión', Yii::app()->user->ui->loginUrl) ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas fixed">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <!--                    <div class="user-panel">
                                            <div class="pull-left image">
                                                <img src="<?php // echo Yii::app()->theme->baseUrl;    ?>/img/avatar3.png" class="img-circle" alt="User Image" />
                                            </div>
                                            <div class="pull-left info">
                                                <p>Hello, <?php // echo Yii::app()->user->name ? Yii::app()->user->name : "Guest"    ?></p>
                    
                                                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                            </div>
                                        </div>-->
                    <!-- search form -->
                    <!--                    <form action="#" method="get" class="sidebar-form">
                                            <div class="input-group">
                                                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                                <span class="input-group-btn">
                                                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>-->
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <!--<ul class="sidebar-menu">-->
                    <?php
                    $this->widget('zii.widgets.CMenu', array(
                        'items' => $this->admin ? Menu::getAdminMenu($this) : Menu::getMenu($this),
                        'encodeLabel' => false,
//                        'itemCssClass' => '',
                        'activeCssClass' => 'active',
                        'htmlOptions' => array('class' => 'sidebar-menu'),
                        'submenuHtmlOptions' => array('class' => 'treeview-menu')
                    ));
                    ?>
                    <!--</ul>-->
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
<!--                <section class="content-header">
                    
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                <?php
//                    $this->widget('zii.widgets.CBreadcrumbs', array(
//                        'links' => $this->breadcrumbs,
//                        'homeLink' => false,
//                        'tagName' => 'ol',
//                        'separator' => '',
//                        'activeLinkTemplate' => '<li><a href="{url}">{label}</a> </li>',
//                        'inactiveLinkTemplate' => '<li><span>{label}</span></li>',
//                        'htmlOptions' => array('class' => 'breadcrumb')
//                    ));
                ?>
                    </ol>
                </section>-->

                <!-- Main content -->
                <section class="content">
                    <div class="row-fluid">
                        <?php echo $content; ?>
                    </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->

        <!-- MAIN MODAL -->
        <div class="row-fluid">
            <?php
// El modal de la página
//            $this->beginWidget('booster.widgets.TbModal', array('id' => 'mainModal', 'options' => array('backdrop' => 'static')));
//            $this->endWidget();
            ?>
        </div>
        <div class="modal fade" id="mainBigModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        </div>

        <!-- END MAIN MODAL -->


        <!-- jQuery 2.0.2 -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
        <!-- Morris.js charts -->
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
        <!--<script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
        <!-- Sparkline -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <!--<script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>-->
        <!-- datepicker -->
        <!--<script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5 -->
        <!--<script src="../../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.js" type="text/javascript"></script>-->
        <!-- input-mask -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
        <!--<script src="<?php // echo Yii::app()->theme->baseUrl;    ?>/js/plugins/input-mask/jquery.inputmask.numeric.extensions.js" type="text/javascript"></script>-->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/dashboard.js" type="text/javascript"></script>

        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/AdminLTE/demo.js" type="text/javascript"></script>
        <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.nicescroll.js" type="text/javascript"></script>

        <script>
            change_layout();
        </script>
    </body>
    <!-- END BODY -->
</html>