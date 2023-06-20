<?PHP

include_once "classes/Producto.php";

$miBrownie = new Producto();

$muestras = $miBrownie->catalogo_completo();

?>

<div class="container-tarjetas">
<h2>Mis Brownies,<br>Tus Brownies</h2>
  <?PHP foreach($muestras as $brownie)  { ?>
        <div class="tarjeta">
            <div><img src="<?=$brownie->getImagen()?>"></div>
            <p><span class="hand-font">Nombre:</span> <?= $brownie->getNombre() ?></p>
            <p><span class="hand-font">Precio:</span> $<?= $brownie->getPrecio() ?></p>
            <p><span class="hand-font">Mi valoración:</span> <?= $brownie->getValoracion() ?></p>
            <div><a href="index.php?sec=valorar&id=<?= $brownie->getId()?>" class="boton">Valorar</a></div>
        </div>
    <?PHP } ?>
</div>