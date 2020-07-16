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
    if ($_GET['page'] == "accueil") {
        echo "Accueil !";
        include('accueil.php');
    }
else if ($_GET['page'] == "articles") {
    echo "Articles";
    include('articles.php');
} 
else if ($_GET['page'] == "contacts") {
    echo "Contacts";
    include('contact.php');
} 
else if ($_GET['page'] == "administration") {
    echo "";
    include('administration.php');
}
}

afficher_pages();
?>
</header>


</body>
</html>