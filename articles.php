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
<a class="navigationcolor" href="connexion.php?page=connexion">Connexion</a>        
</nav>

</header>
<ul>
   <li><a href="article1.php?page=article1"> S'échapper sans échappement</a></li>
   <li><a href="article2.php?page=article2"> Pourquoi la barbe est à la mode</a></li>
   <li><a href="article3.php?page=article3"> Les avantages de le section européenne</a></li>
   <li><a href="article4.php?page=article4"> Voyage aux Pays-Bas</a></li>
   <li><a href="article5.php?page=article5"> La possible fin</a></li>
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