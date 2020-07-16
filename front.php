<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<header>
<h1> MyDevBlog</h1> 

<nav>
    <a class="navigationcolor" href="accueil.php?page=front">Accueil</a>
    <a class="navigationcolor" href="articles.php?page=articles">Articles</a>
    <a class="navigationcolor" href="contact.php?page=contact">Contact</a>
    <a class="navigationcolor" href="administration.php?page=administration">Administration</a>
</nav>
<?php
function afficher_pages()
{
    if ($_GET['page'] == "Accueil") {
        echo "Accueil !";
        include('accueil.php');
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
}

afficher_pages();
?>
</header>
<p> Ceci est une courte description du projet </p>


</body>
</html>