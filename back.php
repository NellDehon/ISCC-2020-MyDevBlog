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
<a class="navigationcolor" href="ajout-article.php?page=ajout-articles">Ajout articles</a>
<a class="navigationcolor" href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajout utilisateurs</a>
<a class="navigationcolor" href="utilisateurs.php?page=utilisateurs">Utilisateurs</a>       
</nav>


<?php
function afficher_pages()
{
    if ($_GET['page'] == "accueil") {
        echo "";
        include('front.php');
    }
else if ($_GET['page'] == "articles") {
    echo "";
    include('articles.php');
} 
else if ($_GET['page'] == "contacts") {
    echo "";
    include('contact.php');
} 
else if ($_GET['page'] == "administration") {
    echo "";
    include('administration.php');
}
else if ($_GET['page'] == "articles") {
    echo "";
    include('ajout-article.php');
} 
else if ($_GET['page'] == "ajout-utilisateurs") {
    echo "";
    include('ajout-utilisateurs.php');
} 
else if ($_GET['page'] == "utilisateurs") {
    echo "";
    include('utilisateurs.php');
}
}

afficher_pages();
?>
<?php include('footer.php') ?>
</body>
</html>