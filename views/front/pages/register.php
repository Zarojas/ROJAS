<?php include ('../templates/head.php');?>
<?php include ('../templates/nav.php');?>

<article class="Registro">
		  <h2>REGISTRO</h2>	
			<div class="box2">
			<form name='register' method='post' action="<? php echo $_SERVER ['PHP_SELF'];?>"> 

  

   	<input type="text" name="Nombre" placeholder="NOMBRE">

    <input type="text" name="Correo" placeholder="CORREO">
    
    <input type="password" name="contraseña" placeholder="CONTRASEÑA">

    <input type="password" name="contraseña" placeholder="CONFIRMA CONTRASEÑA">
    
    <input type="button" value="ENVIAR" class="boton">
  </form>
</div>
</article>


<article>
	
	<div class="video">
		<iframe width="650" height="315" src="https://www.youtube.com/embed/ycV6cnK3SIs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe></div>
</article>

<?php include ('../templates/foot.php');?>