<?php

class TrayectoriaProductoController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $admin = false;
    public $defaultAction = 'admin';

    public function filters() {
        return array(
            array('CrugeAccessControlFilter'),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new TrayectoriaProducto;
        $modelProducto = Producto::model()->findAll();
        $modelCiudadOrigen = Ciudad::model()->findAll();
        $modelCiudadDestino = Ciudad::model()->findAll();
        $modelTrayectoria = new Trayectoria;
        $modelClienteOrigen = new Cliente;
        $modelClienteDestino = new Cliente;


        $this->performAjaxValidation($model, 'trayectoria-producto-form');

        if (isset($_POST['TrayectoriaProducto'])) {
            $model->attributes = $_POST['TrayectoriaProducto'];
            $model->estado = TrayectoriaProducto::ESTADO_EN_ESPERA;
            $model->fecha_creacion = Util::FechaActual();

            $modelClienteOrigen->attributes = $_POST['ClienteOrigen'];
            $modelClienteDestino->attributes = $_POST['Cliente'];
            if ($modelClienteOrigen->save() && $modelClienteDestino->save()) {
                $model->cliente_origen_id = $modelClienteOrigen->id;
                $model->cliente_destino_id = $modelClienteDestino->id;
                if ($model->save()) {
                    $modelProducto = Producto::model()->findByPk($model->producto_id);
                    $modelTrayectoria = Trayectoria::model()->findByPk($model->trayectoria_id);
                    $modelTrayectoria->peso_actual = $modelTrayectoria->peso_actual + $modelProducto->peso;
                    $modelTrayectoria->save();
                    $this->redirect(array('admin'));
                }
            }
        }

        $this->render('create', array(
            'model' => $model,
            'modelProducto' => $modelProducto,
            'modelCiudadOrigen' => $modelCiudadOrigen,
            'modelCiudadDestino' => $modelCiudadDestino,
            'modelTrayectoria' => $modelTrayectoria,
            'modelClienteOrigen' => $modelClienteOrigen,
            'modelClienteDestino' => $modelClienteDestino,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $modelProducto = Producto::model()->findAll();
        $modelCiudadOrigen = Ciudad::model()->findAll();
        $modelCiudadDestino = Ciudad::model()->findAll();
        $modelTrayectoria = Trayectoria::model()->findByPk($model->trayectoria_id);
        $modelClienteOrigen = Cliente::model()->findByPk($model->cliente_origen_id);
        $modelClienteDestino = Cliente::model()->findByPk($model->cliente_destino_id);

        $this->performAjaxValidation($model, 'trayectoria-producto-form');

        if (isset($_POST['TrayectoriaProducto'])) {
            $model->attributes = $_POST['TrayectoriaProducto'];
            $modelClienteOrigen->attributes = $_POST['ClienteOrigen'];
            $modelClienteDestino->attributes = $_POST['Cliente'];
            if ($modelClienteOrigen->save() && $modelClienteDestino->save()) {
                $model->cliente_origen_id = $modelClienteOrigen->id;
                $model->cliente_destino_id = $modelClienteDestino->id;
                if ($model->save()) {
                    $modelProducto = Producto::model()->findByPk($model->producto_id);
                    $modelTrayectoria = Trayectoria::model()->findByPk($model->trayectoria_id);
                    $modelTrayectoria->peso_actual = $modelTrayectoria->peso_actual + $modelProducto->peso;
                    $modelTrayectoria->save();
                    $this->redirect(array('admin'));
                }
            }
        }

        $this->render('update', array(
            'model' => $model,
            'modelProducto' => $modelProducto,
            'modelCiudadOrigen' => $modelCiudadOrigen,
            'modelCiudadDestino' => $modelCiudadDestino,
            'modelTrayectoria' => $modelTrayectoria,
            'modelClienteOrigen' => $modelClienteOrigen,
            'modelClienteDestino' => $modelClienteDestino,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new TrayectoriaProducto('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['TrayectoriaProducto']))
            $model->attributes = $_GET['TrayectoriaProducto'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id, $modelClass = __CLASS__) {
        $model = TrayectoriaProducto::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'trayectoria-producto-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
