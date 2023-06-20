<?PHP
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$mensaje = $_POST['mensaje'];
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
    <h2>Datos enviados con éxito</h2>
    <p><span class="hand-font">G</span>racias por ponerte en contacto con nosotros, <?= $nombre; ?>.</p>
    <p>Estaremos enviando un mail a <?= $mail ?></p>
    <a class="call-to-action" href="../index.php?sec=inicio">Volver</a>
</div> 
</body>
</html>
