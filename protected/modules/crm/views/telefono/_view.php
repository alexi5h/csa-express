<?php
/** @var TelefonoController $this */
/** @var Telefono $data */
?>
<div class="view">
                    
        <?php if (!empty($data->numero)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('numero')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->numero); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->estado)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->estado); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->principal)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('principal')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->principal); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->tipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->tipo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->entidad_tipo)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('entidad_tipo')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->entidad_tipo); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->entidad_id)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('entidad_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->entidad_id); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>