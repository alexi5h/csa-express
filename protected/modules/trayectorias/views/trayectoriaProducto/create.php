<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'modelProducto' => $modelProducto,
    'modelCiudadOrigen' => $modelCiudadOrigen,
    'modelCiudadDestino' => $modelCiudadDestino,
    'modelTrayectoria' => $modelTrayectoria,
    'modelClienteOrigen' => $modelClienteOrigen,
    'modelClienteDestino' => $modelClienteDestino,
));
?>
