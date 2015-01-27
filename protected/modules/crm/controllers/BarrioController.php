<?php

class BarrioController extends AweController {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    public $admin = true;
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
        $model = new Barrio;
        $model_provincia = Provincia::model()->findAll();
        $model_ciudad = new Ciudad;
        $model_parroquia = new Parroquia;
//        $model_parroquia=  Parroquia::model()->findAll();

        $this->performAjaxValidation($model, 'barrio-form');

        if (isset($_POST['Barrio'])) {
            $model->attributes = $_POST['Barrio'];
            $model->estado = Barrio::ESTADO_ACTIVO;
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'model_provincia' => $model_provincia,
            'model_ciudad' => $model_ciudad,
            'model_parroquia' => $model_parroquia,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        
        $model_provincia = new Provincia;
        $model_provincia = Provincia::model()->findAll();
        $provincia_update = Provincia::model()->findByPk($model->parroquia->ciudad->provincia_id);
        $model->provincia_id = $provincia_update->id;

        $model_ciudad = Ciudad::model()->findAll(array(
            "condition" => "provincia_id =:provincia_id ",
            "order" => "nombre",
            "params" => array(':provincia_id' => $model->provincia_id,)
        ));
        $ciudad_update = Ciudad::model()->findByPk($model->parroquia->ciudad_id);
        $model->ciudad_id = $ciudad_update->id;
        
        $model_parroquia = Parroquia::model()->findAll(array(
            "condition" => "ciudad_id =:ciudad_id ",
            "order" => "nombre",
            "params" => array(':ciudad_id' => $model->ciudad_id,)
        ));
//        $parroquia_update = Parroquia::model()->findByPk($model->parroquia_id);
//        $model->ciudad_id = $provincia_update->id;

        $this->performAjaxValidation($model, 'barrio-form');

        if (isset($_POST['Barrio'])) {
            $model->attributes = $_POST['Barrio'];
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'model_provincia' => $model_provincia,
            'model_ciudad' => $model_ciudad,
            'model_parroquia' => $model_parroquia,
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
        $model = new Barrio('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Barrio']))
            $model->attributes = $_GET['Barrio'];

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
        $model = Barrio::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'barrio-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
