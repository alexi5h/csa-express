<div style="min-width: <?php echo count($etapas) * 278 ?>px" class="clearfix">
    <?php foreach ($etapas as $etapa): ?>
        <div class="kanban-stage">
            <div class="kanban-title"><?php echo $etapa->nombre; ?></div>
            <ul class="kanban-body" cont-id="<?php echo $etapa->id; ?>">
                <?php foreach (Trayectoria::model()->de_etapa($etapa->id)->findAll() as $trayectoria): ?>
                    <li class="kanban-item" data-id="<?php echo $trayectoria['id'] ?>">
                        <div class="kanban-item-title"><?php
                            echo $trayectoria['fecha_creacion'];
                            ?></div>
                        <div><label>Ciudad Origen:</label> <?php echo Ciudad::model()->findByPk($trayectoria['ciudad_origen_id'])->nombre; ?></div>
                        <div><label>Ciudad Destino:</label> <?php echo Ciudad::model()->findByPk($trayectoria['ciudad_destino_id'])->nombre; ?></div>
                        <div></div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endforeach; ?>
</div>