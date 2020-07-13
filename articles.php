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
<a href="front.php?page=accueil">Accueil</a>
<a href="articles.php?page=articles">Articles</a>
<a href="contact.php?page=contacts">Contact</a>
<a href="connexion.php?page=connexion">Connexion</a>        
</nav>

</header>
<ul>
   <li><a href="article1.php?page=article1"> Article n'1</a></li>
   <li><a href="article2.php?page=article2"> Article n'2</a></li>
   <li><a href="article3.php?page=article3"> Article n'3</a></li>
   <li><a href="article4.php?page=article4"> Article n'4</a></li>
   <li><a href="article5.php?page=article5"> Article n'5</a></li>
</ul>
<?php
function afficher_pages()
{
    if ($_GET['page'] == "Article 1") {
        echo "Article 1";
        include('article1.php');
    }
else if ($_GET['page'] == "Article 2") {
    echo "Article 2";
    include('articles2.php');
} 
else if ($_GET['page'] == "Article 3") {
    echo "Articles 3";
    include('article3.php');
} 
else if ($_GET['page'] == "Article 4") {
    echo "Article 4";
    include('article4.php');
}
else if ($_GET['page'] == "Article 5") {
   echo "Article 5";
   include('article5.php');
}
}

afficher_pages();
?>
<footer>
    <h2> Liens externes </h2>
    <nav>
        <a class="navigationcolor" href="vitrine-accueil.html" >Accueil Summer Code Camp</a>
        <a class="navigationcolor" href="mon-cv.html"> Mon CV</a> 
        <a class="navigationcolor" href="https://www.linkedin.com/in/nell-dehon-380908155/"target="_blank">Linkedin</a>
    </nav> 
</footer>
</body>
</html>