<?php
/** @var DireccionController $this */
/** @var Direccion $data */
?>
<div class="view">
                    
        <?php if (!empty($data->calle_1)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('calle_1')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->calle_1); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->calle_2)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('calle_2')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->calle_2); ?>
            </div>
        </div>

        <?php endif; ?>
                
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
                
        <?php if (!empty($data->codigo_postal)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('codigo_postal')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->codigo_postal); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->referencia)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('referencia')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->referencia); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->latitud)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('latitud')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->latitud); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->longitud)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('longitud')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->longitud); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->barrio->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('barrio_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->barrio->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->parroquia->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('parroquia_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->parroquia->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>