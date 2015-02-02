<?php

Yii::import('trayectorias.models._base.BaseTrayectoria');

class Trayectoria extends BaseTrayectoria {

    public $hora_despacho;
    /**
     * @return Trayectoria
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Trayectoria|Trayectorias', $n);
    }

    public function relations() {
        return array_merge(parent::relations(), array(
            'ciudadOrigen' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_origen_id'),
            'ciudadDestino' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_destino_id'),
        ));
    }

}
