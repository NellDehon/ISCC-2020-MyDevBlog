<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<body>
<?php include('header.php') ?>
<h3> Administration </h3>

<form action="securite.php" method="post">
<div class="p6">
 <label for="login">    Login  :</label>
 <input type="text" id="login" name="user_login">
 <label for="password"><br>Password:</label>
 <input type="text2" id="password" name="user_password">
 
 <div class ="button">
 <input type="submit" value="Connexion">
 </div>
 </form>
</div>
<?php
 if(isset($_SESSION['user_id'])){
 setcookie("cookie", $_SESSION['user_id']);
 }
 
?>
</body>
<?php include('footer.php')?>
</html>