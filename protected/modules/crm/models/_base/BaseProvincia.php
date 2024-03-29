<?php

/**
 * This is the model base class for the table "provincia".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Provincia".
 *
 * Columns in table "provincia" available as properties of the model,
 * followed by relations of table "provincia" available as properties of the model.
 *
 * @property integer $id
 * @property string $nombre
 * @property string $estado
 * @property string $zona
 *
 * @property Ciudad[] $ciudads
 */
abstract class BaseProvincia extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'provincia';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array('nombre, estado, zona', 'required'),
            array('nombre', 'length', 'max'=>45),
            array('estado', 'length', 'max'=>8),
            array('zona', 'length', 'max'=>6),
            array('estado', 'in', 'range' => array('ACTIVO','INACTIVO')), // enum,
            array('zona', 'in', 'range' => array('SUR','CENTRO','NORTE')), // enum,
            array('id, nombre, estado, zona', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'ciudads' => array(self::HAS_MANY, 'Ciudad', 'provincia_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombre' => Yii::t('app', 'Nombre'),
                'estado' => Yii::t('app', 'Estado'),
                'zona' => Yii::t('app', 'Zona'),
                'ciudads' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('estado', $this->estado, true);
        $criteria->compare('zona', $this->zona, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}