<?php
/** @var ClienteController $this */
/** @var Cliente $data */
?>
<div class="view">
                    
        <?php if (!empty($data->nombres)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('nombres')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->nombres); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->apellidos)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('apellidos')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->apellidos); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->cedula)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->cedula); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->ruc)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('ruc')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->ruc); ?>
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