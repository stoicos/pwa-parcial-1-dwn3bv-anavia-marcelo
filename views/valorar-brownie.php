<?PHP
$puntaje = $_POST['puntaje'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="manifest" href="../manifest.json">
</head>
<body>
    <div style="margin:2rem">
    <h2>Valoración enviada con éxito</h2>
    <p><span class="hand-font">G</span>racias por valorar nuestro brownie con el puntaje de: <?= $puntaje; ?>.</p>
    <a class="call-to-action" href="../index.php?sec=muestras">Volver</a>
</div> 
</body>
</html>