<?php

class TrayectoriaController extends AweController {

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
        $model = new Trayectoria;
        $modelCiudad = Ciudad::model()->findAll();
        $validadorPartial = true;

        $model->peso_actual = 0;
        $model->usuario_creacion_id = Yii::app()->user->id;
        $model->fecha_creacion = Util::FechaActual();
        $model->trayectoria_etapa_id = TrayectoriaEtapa::model()->getIdPesoMinimo();

        $this->performAjaxValidation($model, 'trayectoria-form');

        if (isset($_POST['Trayectoria'])) {
            $result = array();
            $result['success'] = false;
            $model->attributes = $_POST['Trayectoria'];
            $model->peso_actual = 0;
            $model->usuario_creacion_id = Yii::app()->user->id;
            $model->fecha_creacion = Util::FechaActual();
            $model->trayectoria_etapa_id = TrayectoriaEtapa::model()->getIdPesoMinimo();
            if ($model->save()) {
                $validadorPartial = false;
                $result['success'] = true;
                $result['trayectoria_id'] = $model->id;
            }
            echo json_encode($result);
        }
        if ($validadorPartial) {
            $this->render('create', array(
                'model' => $model,
                'modelCiudad' => $modelCiudad,
            ));
        }
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $modelCiudad = Ciudad::model()->findAll();

        $this->performAjaxValidation($model, 'trayectoria-form');

        if (isset($_POST['Trayectoria'])) {
            $model->attributes = $_POST['Trayectoria'];
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'modelCiudad' => $modelCiudad,
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
        $model = new Trayectoria('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Trayectoria']))
            $model->attributes = $_GET['Trayectoria'];

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
        $model = Trayectoria::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'trayectoria-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
