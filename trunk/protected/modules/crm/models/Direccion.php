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

}
