<?php
/** @var ProductoController $this */
/** @var Producto $data */
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
                
        <?php if (!empty($data->peso)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->peso); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->precio_principal)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('precio_principal')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->precio_principal); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->precio_secundario)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('precio_secundario')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->precio_secundario); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->precio_especial)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('precio_especial')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->precio_especial); ?>
            </div>
        </div>

        <?php endif; ?>
                
        <?php if (!empty($data->productoCategoria->nombre)): ?>
        <div class="field">
            <div class="field_name">
                <b><?php echo CHtml::encode($data->getAttributeLabel('producto_categoria_id')); ?>:</b>
            </div>
            <div class="field_value">
                <?php echo CHtml::encode($data->productoCategoria->nombre); ?>
            </div>
        </div>

        <?php endif; ?>
    </div>