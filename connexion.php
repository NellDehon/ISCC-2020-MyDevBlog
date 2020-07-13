<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<body>
    <header>
    <h1> MyDevBlog</h1> 

    <nav>
<a class="navigationcolor" href="front.php?page=accueil">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>
<a class="navigationcolor" href="connexion.php?page=connexion">Connexion</a>        
</nav>
<form action="back.php" method="post">
 <label for="login">login:</label>
 <input type="text" id="login" name="user_login">
 <label for="password"><br>password :</label>
 <input type="text2" id="password" name="user_password">
 
 <div class ="button">
 <input type="submit" value="valide">
 </div>
 </form>
<?php
 if(isset($_SESSION['user_id'])){
 setcookie("cookie", $_SESSION['user_id']);
 }
 
?>
</body>
  <footer>
    <h2> Liens externes </h2>
    <nav>
        <a class="navigationcolor" href="vitrine-accueil.html" >Accueil Summer Code Camp</a>
        <a class="navigationcolor" href="mon-cv.html"> Mon CV</a> 
        <a class="navigationcolor" href="https://www.linkedin.com/in/nell-dehon-380908155/"target="_blank">Linkedin</a>
    </nav> 
</footer>
</html>