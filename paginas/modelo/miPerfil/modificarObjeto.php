<?php
  session_start();
?>

<h2>Editar objeto </h2>
<form action="actualizarObjeto.php" method="post">
<p>
Id: <input type="text" name="id_producto" value="<?php echo $ObjProducto->getIdProducto(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="descripcion" value="<?php echo $ObjProducto->getDescripcion(); ?>" autofocus required />
</p>

<p>
Id: <input type="text" name="estado" value="<?php echo $ObjProducto->getEstado(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="precio" value="<?php echo $ObjProducto->getPrecio(); ?>" readonly />
</p>

<p>
Id: <input type="text" name="fundacion" value="<?php echo $ObjProducto->getFundacion(); ?>" readonly />
</p>

<p>
Descripcion: <input type="text" name="categoria" value="<?php echo $ObjProducto->getCategoria(); ?>" readonly />
</p>


<a href="MiPerfil.php">  Cancelar</a>
<input type="submit" value="Guardar" />

</form>