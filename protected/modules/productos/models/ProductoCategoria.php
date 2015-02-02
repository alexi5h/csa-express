<?php

Yii::import('productos.models._base.BaseProductoCategoria');

class ProductoCategoria extends BaseProductoCategoria {
    
    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    /**
     * @return ProductoCategoria
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Producto Categoría|Producto Categorías', $n);
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
