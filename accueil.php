<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="back.css" >
</head>
<header>
<h1> MyDevBlog</h1> 
<nav>
    <a href="front.php?page=Accueil">Accueil</a>
    <a href="front.php?page=Contacts">Contacts</a>
    <a href="front.php?page=Articles">Articles</a>
    <a href="front.php?page=connexion">Connexion</a>
    
           
</nav>

   <?php
function afficher_les_pages()
{
if ($_GET['page'] == "Accueil") {
   echo "Accueil ";
   include 'accueil.php';
}
else if ($_GET['page'] == "Contacts") {
echo "Contacts";
include 'contact.php';

} 
else if ($_GET['page'] == "Articles") {
echo "Page 3!";
include('articles.html');

} 
else if ($_GET['page'] == "Connexion") {
echo "Connexion";
include('connexiondev.php');

} 
}
afficher_les_pages();
?>


</header>
<p> Ceci est une courte description du projet </p>
<img src="girafe.jpg">
<img src="koala.jpg">
<img src="tigre.jpg">
<img src="elephant.jpg">
<img src="panda.jpg">
<footer>
    <nav>
        <a class="navigationcolor" href="vitrine-accueil.html" >Accueil Summer Code Camp</a>
        <a class="navigationcolor" href="mon-cv.html"> Mon CV</a> 
    </nav> 
</footer>
</body>
</html>
