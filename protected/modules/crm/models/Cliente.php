<?php

Yii::import('crm.models._base.BaseCliente');

class Cliente extends BaseCliente {

    private $nombre_formato;

    /**
     * @return Cliente
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Cliente|Clientes', $n);
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
