<?PHP
//valido secciones por seguridad
$seccionesValidas = [
    "inicio" => [
        "titulo" => "Inicio"
    ],
    "muestras" => [
        "titulo" => "Muestras"
    ],
    "equipo" => [
      "titulo" => "Equipo"
    ],
    "contacto" => [
      "titulo" => "Contacto"
    ],
    "valorar" => [
        "titulo" => "Valorar"
    ]
];
//null coalesce como salvaguardas
$seccion = $_GET['sec'] ?? "inicio";
//aplico la seccion a la url
if(!array_key_exists($seccion, $seccionesValidas)){
    $vista = "404";
}else{
    $vista = $seccion;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="manifest" href="manifest.json">
</head>
<body>
<div class="container">
    <header>
        <nav>
            <h1><a href="index.php?sec=inicio">Mis <span class="hand-font">Brownies</span></a></h1>
            <div>
                <ul class="menu-container">
                    <li><a href="index.php?sec=inicio">Inicio</a></li>
                    <li><a href="index.php?sec=muestras">Muestras</a></li>
                    <li><a href="index.php?sec=equipo">Equipo</a></li>
                    <li><a href="index.php?sec=contacto">Contacto</a></li>
                </ul>
            </div>
            <div class="menu-icon">
                <a href="#">MENU</a>
            </div>
        </nav>
    </header>  
    <main>
        <?PHP
            require_once file_exists("views/$vista.php") ? "views/$vista.php" : "views/404.php";
        ?>
    <div class="container-separator">
        <div class="line"></div><div class="separator"><span class="hand-font">Mis Brownies</span></div><div class="line"></div>
    </div>
    </main> 

    <footer>
        <p>Marcelo Anavia - PWA</p>
    </footer>
</div>
<script src="index.js"></script>
</body>
</html>