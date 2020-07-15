<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="back.css" >
</head>
<?php include('header.php') ?>
<nav>
<a class="navigationcolor" href="accueil.php?page=accueil">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>
<a class="navigationcolor" href="administration.php?page=administration">Administration</a>        
<a class="navigationcolor" href="ajout-article.php?page=accueil">Ajout articles</a>
<a class="navigationcolor" href="ajout-utilisateurs.php?page=articles">Ajout utilisateurs</a>
<a class="navigationcolor" href="utilisateurs.php?page=contacts">Utilisateurs</a>       
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
else if ($_GET['page'] == "Ajout_utilisateurs") {
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