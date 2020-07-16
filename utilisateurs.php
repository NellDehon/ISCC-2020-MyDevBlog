<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="back.css" >
</head>
<header>
<h1> MyDevBlog</h1> 
<nav>
<a class="navigationcolor" href="accueil.php?page=accueil">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contact">Contact</a>
<a class="navigationcolor" href="administration.php?page=administration">Administration</a>
<a class="navigationcolor" href="ajout-article.php?page=articles">Ajouter un article</a>
<a class="navigationcolor" href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajouter un utilisateur</a>
<a class="navigationcolor" href="utilisateurs.php?page=utilisateurs">Utilisateurs</a>        
</nav>
</header>
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
else if ($_GET['page'] == "administration") {
    echo "administration";
    include('administration.php');
}
else if ($_GET['page'] == "Articles") {
    echo "Articles";
    include('ajout-article.php');
} 
else if ($_GET['page'] == "Ajout utilisateurs") {
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
<h3> Supprimer un utilisateur </h3>
  <form action="utilisateurs.php?page=utilisateurs" method="post"enctype="multipart/form-data">
  <div class="p6">
 <label for="name">Name</label>
 <input type="text" id="name" name="name"><br><br/>
 <label for="username"><br>Username</label>
 <input type="text" id="username" name="username"><br><br/>
 <label for= "password"> Password</label>
 <input type= "text" id= "password" name= "password"><br><br/>
 <div class ="button">
 <input type="submit" value="Supprimer l'utilisateur">
 </div>
 </form> 
</div>
<?php
if(isset($_POST['username'])){
include('connexion.php');
        $pdo = connect_to_database();
        $req = "DELETE FROM 'Utilisateurs' WHERE (" .
                                "'" . $_POST['name'] . "', " .
                                "'" . $_POST['username'] . "', " .
                                "'" . $_POST['password'] . "') " ;
        $ret=$pdo->prepare($req);
        $ret->execute();
 
    echo 'L utilisateur a bien été supprimé de la base de données';
}
?>
<?php include('footer.php') ?> 
