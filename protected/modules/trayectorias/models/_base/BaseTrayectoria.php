<?php

/**
 * This is the model base class for the table "trayectoria".
 * DO NOT MODIFY THIS FILE! It is automatically generated by AweCrud.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Trayectoria".
 *
 * Columns in table "trayectoria" available as properties of the model,
 * followed by relations of table "trayectoria" available as properties of the model.
 *
 * @property integer $id
 * @property integer $ciudad_origen_id
 * @property integer $ciudad_destino_id
 * @property integer $peso_actual
 * @property integer $peso_limite
 * @property integer $usuario_creacion_id
 * @property string $fecha_creacion
 * @property string $fecha_despacho
 * @property string $num_checkpoints
 * @property integer $trayectoria_etapa_id
 *
 * @property TrayectoriaEtapa $trayectoriaEtapa
 * @property TrayectoriaCheckpoint[] $trayectoriaCheckpoints
 * @property TrayectoriaProducto[] $trayectoriaProductos
 */
abstract class BaseTrayectoria extends AweActiveRecord {

    public static function model($className=__CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'trayectoria';
    }

    public static function representingColumn() {
        return 'fecha_creacion';
    }

    public function rules() {
        return array(
            array('ciudad_origen_id, ciudad_destino_id, peso_actual, peso_limite, usuario_creacion_id, num_checkpoints, trayectoria_etapa_id', 'required'),
            array('ciudad_origen_id, ciudad_destino_id, peso_actual, peso_limite, usuario_creacion_id, trayectoria_etapa_id', 'numerical', 'integerOnly'=>true),
            array('num_checkpoints', 'length', 'max'=>45),
            array('fecha_despacho', 'safe'),
            array('fecha_despacho', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, ciudad_origen_id, ciudad_destino_id, peso_actual, peso_limite, usuario_creacion_id, fecha_creacion, fecha_despacho, num_checkpoints, trayectoria_etapa_id', 'safe', 'on'=>'search'),
        );
    }

    public function relations() {
        return array(
            'trayectoriaEtapa' => array(self::BELONGS_TO, 'TrayectoriaEtapa', 'trayectoria_etapa_id'),
            'trayectoriaCheckpoints' => array(self::HAS_MANY, 'TrayectoriaCheckpoint', 'trayectoria_id'),
            'trayectoriaProductos' => array(self::HAS_MANY, 'TrayectoriaProducto', 'trayectoria_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
                'id' => Yii::t('app', 'ID'),
                'ciudad_origen_id' => Yii::t('app', 'Ciudad Origen'),
                'ciudad_destino_id' => Yii::t('app', 'Ciudad Destino'),
                'peso_actual' => Yii::t('app', 'Peso Actual'),
                'peso_limite' => Yii::t('app', 'Peso Limite'),
                'usuario_creacion_id' => Yii::t('app', 'Usuario Creacion'),
                'fecha_creacion' => Yii::t('app', 'Fecha Creacion'),
                'fecha_despacho' => Yii::t('app', 'Fecha Despacho'),
                'num_checkpoints' => Yii::t('app', 'Num Checkpoints'),
                'trayectoria_etapa_id' => Yii::t('app', 'Trayectoria Etapa'),
                'trayectoriaEtapa' => null,
                'trayectoriaCheckpoints' => null,
                'trayectoriaProductos' => null,
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('ciudad_origen_id', $this->ciudad_origen_id);
        $criteria->compare('ciudad_destino_id', $this->ciudad_destino_id);
        $criteria->compare('peso_actual', $this->peso_actual);
        $criteria->compare('peso_limite', $this->peso_limite);
        $criteria->compare('usuario_creacion_id', $this->usuario_creacion_id);
        $criteria->compare('fecha_creacion', $this->fecha_creacion, true);
        $criteria->compare('fecha_despacho', $this->fecha_despacho, true);
        $criteria->compare('num_checkpoints', $this->num_checkpoints, true);
        $criteria->compare('trayectoria_etapa_id', $this->trayectoria_etapa_id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function behaviors() {
        return array_merge(array(
            'CTimestampBehavior' => array(
                'class' => 'zii.behaviors.CTimestampBehavior',
                'createAttribute' => 'fecha_creacion',
                'updateAttribute' => null,
                'timestampExpression' => new CDbExpression('NOW()'),
            )
        ), parent::behaviors());
    }
}