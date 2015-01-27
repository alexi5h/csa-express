<?php

Yii::import('crm.models._base.BaseBarrio');

class Barrio extends BaseBarrio {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    public $provincia_id;
    public $ciudad_id;

    /**
     * @return Barrio
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Barrio|Barrios', $n);
    }

    public function attributeLabels() {
        return array_merge(parent::attributeLabels(), array(
            'provincia_id' => Yii::t('app', 'Provincia'),
            'ciudad_id' => Yii::t('app', 'Ciudad'),
                )
        );
    }

    public function rules() {
        return array_merge(parent::rules(), array(
            array('provincia_id,ciudad_id', 'required', 'on' => 'insert,update'),
            array('provincia_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Elija una provincia',
            ),
            array('ciudad_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Elija una ciudad',
            ),
            array('parroquia_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Elija una parroquia',
            ),
            array('provincia_id,ciudad_id', 'safe', 'on' => 'search'),
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
