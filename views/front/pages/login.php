<?php include ('../templates/head.php');?>
<?php include ('../templates/nav.php');?>

<?php 
if (isset($_POST ['email'])){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $rep_pass = $_POST['rep_pass'];


        if ($pass == $rep_pass) {

            include ('../templates/head.php');
            include ('../templates/nav.php');
            include ('../forms/form-login.php');
            include ('../templates/foot.php');
            
        }else{
            header('Location: http://localhost/ROJAS/views/front/pages/register.php');

        }
    }else{
            header('Location: http://localhost/ROJAS/views/front/pages/register.php');
    }


?>

<?php include ('../templates/foot.php');?>