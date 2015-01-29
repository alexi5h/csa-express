<?php

Yii::import('crm.models._base.BasePersona');

class Persona extends BasePersona {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    private $nombre_formato;
    
    public $provincia_id;
    public $ciudad_id;
    public $parroquia_id;
    public $barrio_id;

    /**
     * @return Persona
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Persona|Personas', $n);
    }

    public function attributeLabels() {
        return array_merge(parent::attributeLabels(), array(
            'nombre_formato' => Yii::t('app', 'Nombre Completo'),
        ));
    }

    public function rules() {
        return array_merge(parent::rules(), array(
            array('nombre_formato', 'safe', 'on' => 'search'),
                )
        );
    }

    public function scopes() {
        return array(
            'activos' => array(
                'condition' => 't.estado = :estado',
                'params' => array(
                    ':estado' => self::ESTADO_ACTIVO,
                ),
            )
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
//        $criteria->compare('nombres', $this->nombre_completo, true);
//        $criteria->compare('apellidos', $this->apellidos, true);
        $criteria->compare('CONCAT(t.nombres, CONCAT(" ", t.apellidos))', $this->nombre_formato, true);
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

    //Imprimir formateado el campo "tipo"
    public function getTipoPersona() {
        if ($this->tipo == 'A')
            return 'ADMINISTRATIVO';
        else
            return 'LOGÍSTICA';
    }

    public function getNombre_formato() {
        $return = $this->nombres;
        $return = $return . ' ' . $this->apellidos;
        $this->nombre_formato = $return;
        return $this->nombre_formato;
    }

    public function setNombre_formato($nombre_formato) {
        $this->nombre_formato = $nombre_formato;
        return $this->nombre_formato;
    }

}
