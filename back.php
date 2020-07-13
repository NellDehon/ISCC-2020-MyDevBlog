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
<a class="navcolor" href="accueil.php?page=front">Accueil</a>
<a class="navcolor" href="articles.php?page=articles">Articles</a>
<a class="navcolor" href="contact.php?page=contact">Contact</a>
<a class="navcolor" href="connexion.php?page=connexion">Connexion</a>
<a href="ajout-article.php?page=articles">Ajouter un article</a>
<a href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajouter un utilisateur</a>
<a href="utilisateurs.php?page=utilisateurs">Utilisateurs</a>        
</nav>
<?php
function afficher_pages()
{
    if ($_GET['page'] == "Articles") {
    echo "Articles";
    include('ajout-article.php');
} 
else if ($_GET['page'] == "Ajout utilisateurs") {
    echo "Ajouter un utilisateur";
    include('ajout-utilisateurs.php');
} 
else if ($_GET['page'] == "Utilisateurs") {
    echo "utilisateurs";
    include('utilisateurs.php');
}
}

afficher_pages();
?>