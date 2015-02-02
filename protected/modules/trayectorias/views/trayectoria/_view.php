<?php
/** @var TrayectoriaController $this */
/** @var Trayectoria $data */
?>
<div class="view">
                    
        <?php if (!empty($data->ciudad_origen_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_origen_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ciudad_origen_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->ciudad_destino_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_destino_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ciudad_destino_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->peso_actual)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('peso_actual')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->peso_actual); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->peso_limite)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('peso_limite')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->peso_limite); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->usuario_creacion_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('usuario_creacion_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->usuario_creacion_id); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->fecha_creacion)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('fecha_creacion')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo Yii::app()->getDateFormatter()->formatDateTime($data->fecha_creacion, 'medium', 'medium'); ?>
            <br/>
                 <?php echo date('D, d M y H:i:s', strtotime($data->fecha_creacion)); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->trayectoriaEtapa->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('trayectoria_etapa_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->trayectoriaEtapa->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>