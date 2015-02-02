<?php

Yii::import('crm.models._base.BaseCiudad');

class Ciudad extends BaseCiudad {
    
    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    /**
     * @return Ciudad
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Ciudad|Ciudades', $n);
    }
    
    public function relations() {
        return array_merge(parent::relations(),array(
            'trayectorias' => array(self::HAS_MANY, 'Trayectoria', 'ciudad_origen_id'),
        ));
    }
    
    public function scopes() {
        return array(
            'activos' => array(
                'condition' => 't.estado = :estado',
                'params' => array(
                    ':estado' => self::ESTADO_ACTIVO,
                ),
            )
        );
    }

}
