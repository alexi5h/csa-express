<?php

Yii::import('productos.models._base.BaseProducto');

class Producto extends BaseProducto {
    
    /**
     * @return Producto
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Producto|Productos', $n);
    }

}
