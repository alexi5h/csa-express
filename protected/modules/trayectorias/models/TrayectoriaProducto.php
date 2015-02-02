<?php

Yii::import('trayectorias.models._base.BaseTrayectoriaProducto');

class TrayectoriaProducto extends BaseTrayectoriaProducto
{
    /**
     * @return TrayectoriaProducto
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Trayectoria Producto|Trayectoria Productos', $n);
    }

}