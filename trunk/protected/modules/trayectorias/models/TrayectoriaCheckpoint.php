<?php

Yii::import('trayectorias.models._base.BaseTrayectoriaCheckpoint');

class TrayectoriaCheckpoint extends BaseTrayectoriaCheckpoint {

    const ESTADO_EN_ESPERA = 'EN ESPERA';
    const ESTADO_APROBADO = 'APROBADO';

    /**
     * @return TrayectoriaCheckpoint
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Trayectoria Checkpoint|Trayectoria Checkpoints', $n);
    }

}
