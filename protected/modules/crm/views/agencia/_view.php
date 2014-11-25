<?php
/** @var AgenciaController $this */
/** @var Agencia $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->email)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::mailto($data->email); ?>
                            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->matriz)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('matriz')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->matriz); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->direccion->calle_1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('direccion_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->direccion->calle_1); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>