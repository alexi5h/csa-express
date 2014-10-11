<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'CSA Express',
    'language' => 'es',
    'theme' => 'adminlte',
    'defaultController' => 'crm/dashboard/index',
    // preloading 'log' component
    'preload' => array('log', 'booster'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'ext.AweCrud.components.*', // AweCrud components
        'application.modules.cruge.components.*',
        'application.modules.cruge.extensions.crugemailer.*',
        'application.modules.crm.models.*',
    ),
    'modules' => array(
        'crm',
        // uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'admin',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
            'generatorPaths' => array(
                'application.gii', // a path alias
                'booster.gii',
                'application.gii.widget',
                'ext.AweCrud.generators',
            ),
        ),
        'cruge' => array(
            'tableprefix' => 'cruge_',
            // para que utilice a protected.modules.cruge.models.auth.CrugeAuthDefault.php
            //
            // en vez de 'default' pon 'authdemo' para que utilice el demo de autenticacion alterna
            // para saber mas lee documentacion de la clase modules/cruge/models/auth/AlternateAuthDemo.php
            //
            'availableAuthMethods' => array('default'),
            'availableAuthModes' => array('username', 'email'),
            // url base para los links de activacion de cuenta de usuario
            'baseUrl' => 'http://localhost',
            // NO OLVIDES PONER EN FALSE TRAS INSTALAR
            'debug' => false,
            'rbacSetupEnabled' => true,
            'allowUserAlways' => false,
            // MIENTRAS INSTALAS..PONLO EN: false
            // lee mas abajo respecto a 'Encriptando las claves'
            //
            'useEncryptedPassword' => false,
            // Algoritmo de la función hash que deseas usar
            // Los valores admitidos están en: http://www.php.net/manual/en/function.hash-algos.php
            'hash' => 'md5',
            // Estos tres atributos controlan la redirección del usuario. Solo serán son usados si no
            // hay un filtro de sesion definido (el componente MiSesionCruge), es mejor usar un filtro.
            //  lee en la wiki acerca de:
            //   "CONTROL AVANZADO DE SESIONES Y EVENTOS DE AUTENTICACION Y SESION"
            //
				// ejemplo:
            //		'afterLoginUrl'=>array('/site/welcome'),  ( !!! no olvidar el slash inicial / )
            //		'afterLogoutUrl'=>array('/site/page','view'=>'about'),
            //
            'afterLoginUrl' => null,
            'afterLogoutUrl' => null,
            'afterSessionExpiredUrl' => null,
            // manejo del layout con cruge.
            //
            'loginLayout' => '//layouts/login',
            'registrationLayout' => '//layouts/message',
            'activateAccountLayout' => '//layouts/message',
            'editProfileLayout' => '//layouts/column2',
            // en la siguiente puedes especificar el valor "ui" o "column2" para que use el layout
            // de fabrica, es basico pero funcional.  si pones otro valor considera que cruge
            // requerirá de un portlet para desplegar un menu con las opciones de administrador.
            //
            'generalUserManagementLayout' => 'ui',
            // permite indicar un array con los nombres de campos personalizados, 
            // incluyendo username y/o email para personalizar la respuesta de una consulta a: 
            // $usuario->getUserDescription(); 
            'userDescriptionFieldsArray' => array('email'),
            'superuserName' => 'admin',
        ),
    ),
    // application components
    'components' => array(
        'booster' => array(
            'class' => 'ext.booster.components.Booster',
//            'responsiveCss' => true,
        ),
        'user' => array(
            'allowAutoLogin' => true,
            'class' => 'application.modules.cruge.components.CrugeWebUser',
            'loginUrl' => array('/cruge/ui/login'),
        ),
        'authManager' => array(
            'class' => 'application.modules.cruge.components.CrugeAuthManager',
        ),
        'crugemailer' => array(
            'class' => 'application.modules.cruge.components.CrugeMailer',
            'mailfrom' => 'alexish1993@gmail.com',
            'subjectprefix' => 'csa-express',
            'debug' => true,
        ),
        'format' => array(
            'datetimeFormat' => "d M, Y h:m:s a",
        ),
        'messages' => array(
            // 'class' => 'MessageSource',
            //'basePath'=>Yiibase::getPathOfAlias('application.messages'),
            'extensionPaths' => array(
                'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
            ),
        ),
        // uncomment the following to enable URLs in path-format
        'urlManager' => array(
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<id:\d+>' => '<module:\w+>/<controller>/view',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>'
            ),
        ),
//        'db' => array(
//            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
//        ),
        // uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=csa-express',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
            // use 'site/error' action to display errors
            'errorAction' => 'crm/dashboard/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            // uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'alexish1993@gmail.com',
    ),
);
