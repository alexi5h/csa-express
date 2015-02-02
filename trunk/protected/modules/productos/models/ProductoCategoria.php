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
        return Yii::t('app', 'ProductoCategoria|ProductoCategorias', $n);
    }

}
