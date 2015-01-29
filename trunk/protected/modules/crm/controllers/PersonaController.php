<?php

class PersonaController extends AweController {

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
        $model = new Persona;

        $modelDireccion = new Direccion;
        $model_provincia = Provincia::model()->findAll();
        $model_ciudad = new Ciudad;
        $model_parroquia = new Parroquia;
        $model_barrio = new Barrio;

        $this->performAjaxValidation($modelDireccion, 'persona-form');
        $this->performAjaxValidation($model, 'persona-form');

        if (isset($_POST['Persona'])) {
            $model->attributes = $_POST['Persona'];

            $model->estado = Persona::ESTADO_ACTIVO;
            $model->usuario_creacion_id = Yii::app()->user->id;
            $model->fecha_creacion = Util::FechaActual();
            $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'Y-m-d');

            $arrayDireccion = $_POST['Direccion'];
            if ($arrayDireccion['barrio_id'] == '0') {
                $arrayDireccion['barrio_id'] = '';
            }
            $modelDireccion->attributes = $arrayDireccion;
            if ($modelDireccion->save()) {
                $model->direccion_id = $modelDireccion->id;
            }
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('create', array(
            'model' => $model,
            'modelDireccion' => $modelDireccion,
            'model_provincia' => $model_provincia,
            'model_ciudad' => $model_ciudad,
            'model_parroquia' => $model_parroquia,
            'model_barrio' => $model_barrio,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'd-m-Y');

        $modelDireccion = Direccion::model()->findByPk($model->direccion_id);
        $model_provincia = new Provincia;
        $model_provincia = Provincia::model()->findAll();
        $provincia_update = Provincia::model()->findByPk($modelDireccion->parroquia->ciudad->provincia_id);
        $modelDireccion->provincia_id = $provincia_update->id;

        $model_ciudad = Ciudad::model()->findAll(array(
            "condition" => "provincia_id =:provincia_id ",
            "order" => "nombre",
            "params" => array(':provincia_id' => $modelDireccion->provincia_id,)
        ));
        $ciudad_update = Ciudad::model()->findByPk($modelDireccion->parroquia->ciudad_id);
        $modelDireccion->ciudad_id = $ciudad_update->id;

        $model_parroquia = Parroquia::model()->findAll(array(
            "condition" => "ciudad_id =:ciudad_id ",
            "order" => "nombre",
            "params" => array(':ciudad_id' => $modelDireccion->ciudad_id,)
        ));
        $parroquia_update = Parroquia::model()->findByPk($modelDireccion->parroquia_id);
        $modelDireccion->parroquia_id = $parroquia_update->id;

        $model_barrio = Barrio::model()->findAll(array(
            "condition" => "parroquia_id =:parroquia_id ",
            "order" => "nombre",
            "params" => array(':parroquia_id' => $modelDireccion->parroquia_id,)
        ));
        if (isset($modelDireccion->barrio_id)) {
            $barrio_update = Barrio::model()->findByPk($modelDireccion->barrio_id);
            $modelDireccion->barrio_id = $barrio_update->id;
        }


        $this->performAjaxValidation($modelDireccion, 'persona-form');
        $this->performAjaxValidation($model, 'persona-form');

        if (isset($_POST['Persona'])) {
            $model->attributes = $_POST['Persona'];
            $model->fecha_nacimiento = Util::FormatDate($model->fecha_nacimiento, 'Y-m-d');
            $model->fecha_actualizacion = Util::FechaActual();

            $arrayDireccion = $_POST['Direccion'];
            if ($arrayDireccion['barrio_id'] == '0') {
                $arrayDireccion['barrio_id'] = '';
            }
            $modelDireccion->attributes = $arrayDireccion;
            if ($modelDireccion->save()) {
                $model->direccion_id = $modelDireccion->id;
            }
            if ($model->save()) {
                $this->redirect(array('admin'));
            }
        }

        $this->render('update', array(
            'model' => $model,
            'modelDireccion' => $modelDireccion,
            'model_provincia' => $model_provincia,
            'model_ciudad' => $model_ciudad,
            'model_parroquia' => $model_parroquia,
            'model_barrio' => $model_barrio,
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
            $model = $this->loadModel($id);
            $model->estado = Persona::ESTADO_INACTIVO;
            $model->save();

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
        $model = new Persona('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Persona']))
            $model->attributes = $_GET['Persona'];

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
        $model = Persona::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model, $form = null) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'persona-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
