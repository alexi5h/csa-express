<?php

Yii::import('trayectorias.models._base.BaseTrayectoriaEtapa');

class TrayectoriaEtapa extends BaseTrayectoriaEtapa {

    const ESTADO_ACTIVO = 'ACTIVO';
    const ESTADO_INACTIVO = 'INACTIVO';

    /**
     * @return TrayectoriaEtapa
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Trayectoria Etapa|Trayectoria Etapas', $n);
    }

    public function getIdPesoMinimo() {
        $command = Yii::app()->db->createCommand()
                ->select("t.id")
                ->from("trayectoria_etapa t")
                ->where("t.estado = :estado", array(':estado' => self::ESTADO_ACTIVO))
                ->order("t.peso asc")
                ->limit(1);
        $resultMin = $command->queryColumn();
        return $resultMin[0];
    }
    
    public function getTrayectoriaEtapa() {
        $command = Yii::app()->db->createCommand()
                ->select("t.id,
                        t.nombre,
                        t.peso,
                        t.estado")
                ->from("trayectoria_etapa t")
                ->where("t.estado = :estado", array(':estado' => self::ESTADO_ACTIVO))
                ->order("t.peso ASC");
        return ($command->queryAll());
    }
    
    public function getPesoMaximo() {
        $command = Yii::app()->db->createCommand()
                ->select("max(t.peso)")
                ->from("trayectoria_etapa t")
                ->where("t.estado = :estado", array(':estado' => self::ESTADO_ACTIVO));
        $result = $command->queryColumn();
        return $result[0];
    }

}
