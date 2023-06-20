<div style="margin:2rem;">
<h2>Contacto</h2>
<div class="form-contacto">
<form action="views/procesar_datos_post.php" method="POST">
    <div class="form-row">
        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre">
    </div>
    <div class="form-row">
        <label for="apellido">Apellido</label>
        <input type="text" id="apellido" name="apellido">
    </div>
    <div class="form-row">
        <label for="mail">Tu mail</label>
        <input type="text" id="mail" name="mail">
    </div>
    <div class="form-row">
        <label for="mensaje">Tu mensaje</label>
        <textarea id="mensaje" name="mensaje" style="height:4rem; width:100%;color:black;"></textarea>
    </div>

    <button class="boton" type="submit">Enviar</button>
</form>
</div>
</div>