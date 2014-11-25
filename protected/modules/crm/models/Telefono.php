<?php

Yii::import('crm.models._base.BaseTelefono');

class Telefono extends BaseTelefono
{
    /**
     * @return Telefono
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Telefono|Telefonos', $n);
    }

}