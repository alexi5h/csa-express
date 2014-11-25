<?php

/**
 * This is the model base class for the table "agencia".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Agencia".
 *
 * Columns in table "agencia" available as properties of the model,
 * followed by relations of table "agencia" available as properties of the model.
 *
 * @property integer $id
 * @property string $nombre
 * @property string $email
 * @property integer $matriz
 * @property integer $direccion_id
 *
 * @property Direccion $direccion
 * @property Sucursal[] $sucursals
 */
abstract class BaseAgencia extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'agencia';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array('id, nombre, matriz, direccion_id', 'required'),
            array('id, matriz, direccion_id', 'numerical', 'integerOnly'=>true),
            array('email', 'email'),
            array('nombre', 'length', 'max'=>45),
            array('email', 'length', 'max'=>50),
            array('email', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombre, email, matriz, direccion_id', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'direccion' => array(self::BELONGS_TO, 'Direccion', 'direccion_id'),
            'sucursals' => array(self::HAS_MANY, 'Sucursal', 'agencia_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombre' => Yii::t('app', 'Nombre'),
                'email' => Yii::t('app', 'Email'),
                'matriz' => Yii::t('app', 'Matriz'),
                'direccion_id' => Yii::t('app', 'Direccion'),
                'direccion' => null,
                'sucursals' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('matriz', $this->matriz);
        $criteria->compare('direccion_id', $this->direccion_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}