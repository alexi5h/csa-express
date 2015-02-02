<?php

Yii::import('trayectorias.models._base.BaseTrayectoriaProducto');

class TrayectoriaProducto extends BaseTrayectoriaProducto {

    const ESTADO_EN_ESPERA = 'EN ESPERA';
    const ESTADO_ENVIADO = 'ENVIADO';
    
    public $cliente_origen;

    /**
     * @return TrayectoriaProducto
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Trayectoria Producto|Trayectoria Productos', $n);
    }
    
    public function relations() {
        return array(
            'trayectoria' => array(self::BELONGS_TO, 'Trayectoria', 'trayectoria_id'),
            'producto' => array(self::BELONGS_TO, 'Producto', 'producto_id'),
            'clienteOrigen' => array(self::BELONGS_TO, 'Cliente', 'cliente_origen_id'),
            'clienteDestino' => array(self::BELONGS_TO, 'Cliente', 'cliente_destino_id'),
            'ciudadOrigen' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_origen_id'),
            'ciudadDestino' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_destino_id'),
        );
    }

    public function rules() {
        return array_merge(parent::rules(), array(
            array('ciudad_origen_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Ciudad Origen no puede ser nulo',
            ),
            array('ciudad_destino_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Ciudad Destino no puede ser nulo',
            ),
        ));
    }

}
