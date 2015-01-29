<?php

Yii::import('crm.models._base.BaseDireccion');

class Direccion extends BaseDireccion {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    public $ciudad_id;
    public $provincia_id;
    public $parroquia_id;
    public $barrio_id;

    /**
     * @return Direccion
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Direccion|Direccions', $n);
    }
      public function attributeLabels() {
        return array_merge(parent::attributeLabels(), array(
            'codigo_postal' => Yii::t('app', 'Código Postal'),
            'numero' => Yii::t('app', 'Número'),
             'provincia_id' => Yii::t('app', 'Provincia'),
            'ciudad_id' => Yii::t('app', 'Ciudad'),
        
        ));
    }
     public function rules() {
        return array_merge(parent::rules(),array (
            array('provincia_id, ciudad_id', 'required'),
             ));
    }

}
