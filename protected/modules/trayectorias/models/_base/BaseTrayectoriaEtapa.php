<?php

/**
 * This is the model base class for the table "trayectoria_etapa".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "TrayectoriaEtapa".
 *
 * Columns in table "trayectoria_etapa" available as properties of the model,
 * followed by relations of table "trayectoria_etapa" available as properties of the model.
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $peso
 * @property string $estado
 *
 * @property Trayectoria[] $trayectorias
 */
abstract class BaseTrayectoriaEtapa extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'trayectoria_etapa';
    }

    public static function representingColumn() {
        return 'nombre';
    }

    public function rules() {
        return array(
            array('nombre, peso, estado', 'required'),
            array('peso', 'numerical', 'integerOnly'=>true),
            array('nombre', 'length', 'max'=>45),
            array('estado', 'length', 'max'=>8),
            array('estado', 'in', 'range' => array('ACTIVO','INACTIVO')), // enum,
            array('id, nombre, peso, estado', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'trayectorias' => array(self::HAS_MANY, 'Trayectoria', 'trayectoria_etapa_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombre' => Yii::t('app', 'Nombre'),
                'peso' => Yii::t('app', 'Peso'),
                'estado' => Yii::t('app', 'Estado'),
                'trayectorias' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('peso', $this->peso);
        $criteria->compare('estado', $this->estado, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
        ), parent::behaviors());
    }
}