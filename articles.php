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
function afficher_pages()
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
include('articles.php');

} 
else if ($_GET['page'] == "Connexion") {
echo "Connexion";
include('connexiondev.php');

} 
}
afficher_pages();
?>


</header>