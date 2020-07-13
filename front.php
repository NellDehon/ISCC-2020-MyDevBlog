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
<a class="navigationcolor" href="front.php?page=accueil">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>       
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
    include('connexion.php');
}
}

afficher_pages();
?>
</header>
<p> Ceci est une courte description du projet </p>

<footer>
    <h2> Liens externes </h2>
    <nav>
        <a class="navigationcolor" href="vitrine-accueil.html" >Accueil Summer Code Camp</a>
        <a class="navigationcolor" href="mon-cv.html"> Mon CV</a> 
        <a class="navigationcolor" href="https://www.linkedin.com/in/nell-dehon-380908155/"target="_blank">Linkedin</a>
        <a class="navigationcolor" href="connexion.php?page=connexion">Connexion</a>  
    </nav> 
</footer>
</body>
</html>