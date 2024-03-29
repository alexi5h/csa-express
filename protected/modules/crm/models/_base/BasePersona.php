<?php

/**
 * This is the model base class for the table "persona".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Persona".
 *
 * Columns in table "persona" available as properties of the model,
 * followed by relations of table "persona" available as properties of the model.
 *
 * @property integer $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $cedula
 * @property string $ruc
 * @property string $email
 * @property string $estado
 * @property string $sexo
 * @property string $fecha_nacimiento
 * @property string $tipo
 * @property integer $usuario_creacion_id
 * @property string $fecha_creacion
 * @property string $fecha_actualizacion
 * @property integer $direccion_id
 *
 * @property Direccion $direccion
 */
abstract class BasePersona extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'persona';
    }

    public static function representingColumn() {
        return 'nombres';
    }

    public function rules() {
        return array(
            array('nombres, apellidos, cedula, sexo, fecha_nacimiento, tipo, usuario_creacion_id', 'required'),
            array('usuario_creacion_id, direccion_id', 'numerical', 'integerOnly'=>true),
            array('email', 'email'),
            array('nombres, apellidos', 'length', 'max'=>100),
            array('cedula, ruc', 'length', 'max'=>20),
            array('email', 'length', 'max'=>45),
            array('estado', 'length', 'max'=>8),
            array('sexo, tipo', 'length', 'max'=>1),
            array('fecha_actualizacion', 'safe'),
            array('estado', 'in', 'range' => array('ACTIVO','INACTIVO')), // enum,
            array('sexo', 'in', 'range' => array('M','F')), // enum,
            array('tipo', 'in', 'range' => array('A','L')), // enum,
            array('ruc, email, estado, fecha_actualizacion, direccion_id', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, nombres, apellidos, cedula, ruc, email, estado, sexo, fecha_nacimiento, tipo, usuario_creacion_id, fecha_creacion, fecha_actualizacion, direccion_id', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'direccion' => array(self::BELONGS_TO, 'Direccion', 'direccion_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'nombres' => Yii::t('app', 'Nombres'),
                'apellidos' => Yii::t('app', 'Apellidos'),
                'cedula' => Yii::t('app', 'Cedula'),
                'ruc' => Yii::t('app', 'Ruc'),
                'email' => Yii::t('app', 'Email'),
                'estado' => Yii::t('app', 'Estado'),
                'sexo' => Yii::t('app', 'Sexo'),
                'fecha_nacimiento' => Yii::t('app', 'Fecha Nacimiento'),
                'tipo' => Yii::t('app', 'Tipo'),
                'usuario_creacion_id' => Yii::t('app', 'Usuario Creacion'),
                'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
                'fecha_actualizacion' => Yii::t('app', 'Fecha Actualizacion'),
                'direccion_id' => Yii::t('app', 'Direccion'),
                'direccion' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('nombres', $this->nombres, true);
        $criteria->compare('apellidos', $this->apellidos, true);
        $criteria->compare('cedula', $this->cedula, true);
        $criteria->compare('ruc', $this->ruc, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('estado', $this->estado, true);
        $criteria->compare('sexo', $this->sexo, true);
        $criteria->compare('fecha_nacimiento', $this->fecha_nacimiento, true);
        $criteria->compare('tipo', $this->tipo, true);
        $criteria->compare('usuario_creacion_id', $this->usuario_creacion_id);
        $criteria->compare('fecha_creacion', $this->fecha_creacion, true);
        $criteria->compare('fecha_actualizacion', $this->fecha_actualizacion, true);
        $criteria->compare('direccion_id', $this->direccion_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'fecha_creacion',
                'updateAttribute' => 'fecha_actualizacion',
                'timestampExpression' => new CDbExpression('NOW()'),
            )
        ), parent::behaviors());
    }
}