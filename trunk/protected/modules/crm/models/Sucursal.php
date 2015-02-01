<?php

Yii::import('crm.models._base.BaseSucursal');

class Sucursal extends BaseSucursal {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    /**
     * @return Sucursal
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Sucursal|Sucursales', $n);
    }

}
