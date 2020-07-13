<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" type="text/css" href="front.css">
    </head>
   <header>
<h1>My Dev Blog</h1>
<br>
<nav>
    <a class="navcolor" href="accueil.php?page=accueil">Accueil</a>
    <a class="navcolor" href="contact.php?page=contact">Contact</a>
    <a class="navcolor" href="article.php?page=articles">Articles</a>
    <a class="navcolor" href="connexion.php?page=connexion">Connexion</a>
</nav>
</header>

<body>
<?php
    include ("connexion.php");
    if(isset($_GET['id'])){
        $pdo = connect_to_database();
        $id_getted = $_GET['id'];
        $sql_line = "SELECT * FROM `Articles` WHERE id = ". $id_getted;
        $request = $pdo -> query($sql_line);
        $result = $request-> fetch();
        echo '<img src="data:image/jpg;base64,',base64_encode($result['Image']),'" alt="image vérification">';
        echo "date_de_publication = ", $result['date_de_publication'],"<br>";
        echo "Titre = ", $result['Titre'], "<br>";
        echo"Contenu = ", $result['Contenu'], "<br>";
        echo "Auteur = ", $result['Auteur'], "<br>";
    }
    ?>
</body>


<footer>
<br><h2>Liens externes</h2>
<ul>
    <li><a  href="mon-cv.html" target="_blank">Mon CV</a></li><br>
    <li><a  href="https://www.linkedin.com/in/nell-dehon-380908155/" target="_blank">Profil Linkedin</a></li><br>
    <li><a  href="http://192.168.64.2/ISCC-2020/ISCC-2020-J02/mon-cv.html" target="_blank">Mon Cv </a></li><br>
    <li><a  href="connexion.php?page=connexion" target="_blank">Connexion </a></li><br>

</ul>
   </footer>
</html>
