<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon super Devblog</title>
    <meta charset="utf-8"/>
    <link href="front.css" rel="stylesheet" type="text/css">
</head>
<body>
<header>
    <h1>Mydevblog</h1>
   
    <nav>
<a class="navigationcolor" href="accueil.php?page=front">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>
<a class="navigationcolor" href="administration.php?page=administration">Connexion</a>
<a class="navigationcolor" href="ajout-article.php?page=articles">Ajouter un article</a>
<a class="navigationcolor" href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajouter un utilisateur</a>
<a class="navigationcolor" href="utilisateurs.php?page=utilisateurs">Utilisateurs</a>        
</nav>
</header>
<h3>Ajouter un article</h3>
<form action="ajout-article.php?page=articles" method="post"enctype="multipart/form-data"><br></br>
<div class="p6">
     <label for="titre">Titre de l'article</label>
     <input type="text" id="titre" name="titre"><br><br/>
    <label for="auteur">Auteur de l'article</label>
    <input type="text" id="auteur" name="auteur"><br><br/>
    <label for="image"><br>Image</label>
    <input type="file" id="image" name="image"><br><br/>
    <label for= "contenu"> Contenu de l'article</label>
    <input type= "text" id= "contenu" name= "contenu"><br><br/>
    <label for="extrait">Extrait de l'article</label>
    <input type= "text" id= "extrait" name= "extrait"><br><br/>
    
    <div class ="button">
        <input type="submit" value="Envoyer">
 </div>
</div>
 </form> 

<?php
function transfert(){
    $ret        = false;
    $img_blob   = '';
    $taille_max = 20000000;
    $ret        = is_uploaded_file($_FILES['image']['tmp_name']);
    
    if (!$ret) {
        echo "Problème de transfert";
        return false;
    } else {
 
        
        if ($_FILES['image']['size']> $taille_max) {
            echo "Trop gros !";
            return false;
        }
        include('connexion.php');
        $pdo= connect_to_database();
        $img_blob = file_get_contents ($_FILES['image']['tmp_name']);
        $req = "INSERT INTO Articles (" . 
                                "Titre, Auteur, Contenu,Extrait,Image" .
                                ") VALUES (" .
                                "'" . $_POST['titre'] . "', " .
                                "'" . $_POST['auteur'] . "', " .
                                "'" . $_POST['contenu'] . "', " .
                                "'" . $_POST['extrait']. "', " .
                                "'" .addslashes($img_blob) . "') ";
        $ret = $pdo->prepare($req);
        $ret->execute();
        return true;
    }
}
if(isset($_POST['titre'])){
    transfert();
    echo 'Votre article a bien été envoyé à la base de données';
}
?>

</body>

<?php include('footer.php') ?> 

</html>