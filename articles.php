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
<a class="navigationcolor" href="accueil.php?page=accueil">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>
<a class="navigationcolor" href="administration.php?page=connexion">Connexion</a>        
</nav>
</header>
<body>
<?php
    include("connexion.php");
    $pdo = connect_to_database();
    $request=$pdo->query('SELECT * FROM `Articles`');
    $count = 0;
    $width = 0;
    while ($Articles=$request -> fetch()){
        if(isset($Articles['id'])) {
            echo "<a href= \"Articles.php?id=", $Articles['id'], "\">";
           echo '<div>
         
        <div class="Article" style= "float:',$width,'%">    
            <h2>',$Articles['Titre'],'</h2>
            <img src="data:image/jpg;base64,',base64_encode($Articles['Image']),'" alt="image vérification">;
         ',$Articles['Extrait'],'</div></div>';
            echo "</a>";
        }
        $count++;
        $width += 20;
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

