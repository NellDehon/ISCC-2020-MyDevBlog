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
<a class="navigationcolor" href="accueil.php?page=front">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contact">Contact</a>
<a class="navigationcolor" href="connexion.php?page=connexion">Connexion</a>
<a class="navigationcolor" href="ajout-article.php?page=articles">Ajouter un article</a>
<a class="navigationcolor" href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajouter un utilisateur</a>
<a class="navigationcolor" href="utilisateurs.php?page=utilisateurs">Utilisateurs</a>        
</nav>

<?php
function afficher_pages()
{
    if ($_GET['page'] == "Accueil") {
        echo "Accueil !";
        include('front.php');
    }
else if ($_GET['page'] == "Articles") {
    echo "Articles";
    include('articles.php');
} 
else if ($_GET['page'] == "Contacts") {
    echo "Contacts";
    include('contact.php');
} 
else if ($_GET['page'] == "Connexion") {
    echo "connexion";
    include('administration.php');
}
else if ($_GET['page'] == "Articles") {
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