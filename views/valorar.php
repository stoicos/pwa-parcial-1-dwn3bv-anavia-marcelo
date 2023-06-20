<?PHP

include_once "classes/Producto.php";

$id = $_GET['id'] ?? FALSE;

$objetoBrownie = new Producto();
$brownie = $objetoBrownie->brownie_x_id($id);

if($brownie->id < 1 || $brownie->id > 12){
    $brownie = "";
};


?>
<?PHP if (!empty($brownie)) { ?>
<div class="container-tarjetas">
<h2>Valorar <?= $brownie->getNombre() ?></h2>
<div class="container-valorar">
        <div>
            <div><img src="<?=$brownie->getImagen()?>" style="width: 16rem;"></div>
            <p><span class="hand-font">Nombre:</span> <?= $brownie->getNombre() ?></p>
            <p><span class="hand-font">Precio:</span> $<?= $brownie->getPrecio() ?></p>
            <p><span class="hand-font">Mi valoración:</span> <?= $brownie->getValoracion() ?></p>
            <div><a href="index.php?sec=muestras" class="boton">Volver</a></div>
        </div>
        <div class="form-validar">
            <form action="views/valorar-brownie.php" method="POST">
                <label for="puntaje" style="display: block;">Puntuar:</label>
                <input type="range" name="puntaje" id="puntaje">
                <div><button class="boton" type="submit">Listo</button></div>
            </form>
        </div>
</div>
</div>
<?PHP }else{ ?>
    <div class="col">
    <h2 class="text-center m-5">No se encontró el producto deseado.</h2>
</div>
<?PHP } ?>
