<?php include ('../templates/head.php');?>
<?php include ('../templates/nav.php');?>

<article class="Login">
		  <h2>Login</h2>	
			<div class="box2">
			<form name='register' method='post' action="<? php echo $_SERVER ['PHP_SELF'];?>"> 

  

   	
    <input type="text" name="email" placeholder="CORREO">
    <input type="password" name="pass" placeholder="CONTRASEÑA">
   

    

    <input type="submit" name="btn-login" value="Ingresar">
   

  </form>
</div>
</article>

<?php include ('../templates/foot.php');?>