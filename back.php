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
<a href="ajout-article.php?page=articles">Ajouter un article</a>
<a href="ajout-utilisateurs.php?page=contacts">Ajouter un utilisateur</a>
<a href="utilisateurs.php?page=connexion">Utilisateurs</a>        
</nav>
<?php
function afficher_pages()
{
    if ($_GET['page'] == "Accueil") {
        echo "Accueil !";
        include('back.php');
    }
else if ($_GET['page'] == "Articles") {
    echo "Articles";
    include('ajout-article.php');
} 
else if ($_GET['page'] == "Contacts") {
    echo "Contacts";
    include('ajout-utilisateurs.php');
} 
else if ($_GET['page'] == "Connexion") {
    echo "connexion";
    include('utilisateurs.php');
}
}

afficher_pages();
?>