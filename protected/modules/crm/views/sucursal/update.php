
<?php

echo $this->renderPartial('_form', array(
    'model' => $model,
    'modelAgencia' => $modelAgencia,
    'modelDireccion' => $modelDireccion,
    'model_provincia' => $model_provincia,
    'model_ciudad' => $model_ciudad,
    'model_parroquia' => $model_parroquia,
    'model_barrio' => $model_barrio,
));
?>
