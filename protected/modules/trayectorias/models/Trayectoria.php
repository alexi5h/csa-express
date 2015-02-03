<?php

Yii::import('trayectorias.models._base.BaseTrayectoria');

class Trayectoria extends BaseTrayectoria {

    private $nombre_trayectoria;

    /**
     * @return Trayectoria
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public static function label($n = 1) {
        return Yii::t('app', 'Trayectoria|Trayectorias', $n);
    }

    public function relations() {
        return array_merge(parent::relations(), array(
            'ciudadOrigen' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_origen_id'),
            'ciudadDestino' => array(self::BELONGS_TO, 'Ciudad', 'ciudad_destino_id'),
        ));
    }
    
    public function rules() {
        return array_merge(parent::rules(), array(
            array('ciudad_origen_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Ciudad Origen no puede ser nulo',
            ),
            array('ciudad_destino_id', 'numerical',
                'integerOnly' => true,
                'min' => 1,
                'tooSmall' => 'Ciudad Destino no puede ser nulo',
            ),
        ));
    }

    public function attributeLabels() {
        return array_merge(parent::attributeLabels(), array(
            'nombre_trayectoria' => Yii::t('app', 'Trayectoria'),
        ));
    }

    public function getTrayectoriasDisponibles($ciudad_origen_id, $ciudad_destino_id) {
        //select tr.id from trayectoria tr
        //inner join trayectoria_checkpoint tch on tr.id = tch.trayectoria_id
        //where tch.ciudad_id in (2)
        //and tr.trayectoria_etapa_id=1
        //group by tr.id;
        $resultFinal = array();

        $command = Yii::app()->db->createCommand()
                ->select("tr.id")
                ->from("trayectoria tr")
                ->join('trayectoria_checkpoint tch', 'tr.id = tch.trayectoria_id')
                ->where('tch.ciudad_id in (' . $ciudad_origen_id . ')')
                ->andWhere('tr.trayectoria_etapa_id = :etapa_id', array(':etapa_id' => TrayectoriaEtapa::model()->getIdPesoMinimo()));
        $result = $command->queryColumn();

        $command2 = Yii::app()->db->createCommand()
                ->select("tr.id")
                ->from("trayectoria tr")
                ->join('trayectoria_checkpoint tch', 'tr.id = tch.trayectoria_id')
                ->where('tch.ciudad_id in (' . $ciudad_destino_id . ')');
        $result2 = $command2->queryColumn();

        if ($result) {
            foreach ($result as $value) {
                foreach ($result2 as $value2) {
                    if ($value == $value2) {
                        array_push($resultFinal, $value);
                    }
                }
            }
        }
        return $resultFinal;
    }

    public function getNombre_trayectoria() {
        $result = $this->ciudadOrigen->nombre . ' - ' . $this->ciudadDestino->nombre;
        $this->nombre_trayectoria = $result;
        return $this->nombre_trayectoria;
    }

    public function setNombre_trayectoria($nombre_trayectoria) {
        $this->nombre_trayectoria = $nombre_trayectoria;
        return $this->nombre_trayectoria;
    }

}
