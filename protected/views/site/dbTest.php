<?php 
$connection = Yii::app()->db;
$command = $connection->createCommand("SELECT 1");
$result = $command->queryScalar();
if ($result !== false) {
    echo "Conexión exitosa";
} else {
    echo "Error de conexión";
}
?>