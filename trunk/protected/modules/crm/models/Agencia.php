<?php

Yii::import('crm.models._base.BaseAgencia');

class Agencia extends BaseAgencia {

    /**
     * @return Agencia
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Agencia|Agencias', $n);
    }

    public function attributeLabels() {
        return array(
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'email' => Yii::t('app', 'Email'),
            'matriz' => Yii::t('app', 'Matriz'),
            'direccion_id' => Yii::t('app', 'Dirección'),
            'direccion' => null,
            'sucursals' => null,
        );
    }
    
    public function rules() {
        return array(
            array('nombre, direccion_id', 'required'),
            array('matriz, direccion_id', 'numerical', 'integerOnly'=>true),
            array('email', 'email'),
            array('nombre', 'length', 'max'=>45),
            array('email', 'length', 'max'=>50),
            array('email', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombre, email, matriz, direccion_id', 'safe', 'on'=>'search'),
        );
    }

}
