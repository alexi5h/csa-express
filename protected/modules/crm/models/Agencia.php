<?php

Yii::import('crm.models._base.BaseAgencia');

class Agencia extends BaseAgencia
{
    /**
     * @return Agencia
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function label($n = 1)
    {
        return Yii::t('app', 'Agencia|Agencias', $n);
    }

}