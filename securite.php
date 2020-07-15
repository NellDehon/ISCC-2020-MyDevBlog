<?php
session_start();
?>
 
<p>
<?php
$login=$_POST['user_login'];
$pass=$_POST['user_password'];
?>
</p>
<p>
<?php 
if($pass == 2020){
    $_SESSION['id']=$_POST['user_login'];
    header('location:ajout-utilisateurs.php');
}
else{
    header('location:administration.php');
}

?>
<?php session_start();
?>
</p>