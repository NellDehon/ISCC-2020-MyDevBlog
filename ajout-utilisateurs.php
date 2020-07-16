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
<a class="navigationcolor" href="accueil.php?page=front">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>
<a class="navigationcolor" href="administration.php?page=administration">Connexion</a>
<a class="navigationcolor" href="ajout-article.php?page=articles">Ajouter un article</a>
<a class="navigationcolor" href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajouter un utilisateur</a>
<a class="navigationcolor" href="utilisateurs.php?page=utilisateurs">Utilisateurs</a>        
</nav>
</header>
<h3> Ajouter un utilisateur </h3>

    <form action="ajout-utilisateurs.php?page=ajout-utilisateurs" method="post"enctype="multipart/form-data">
    <div class="p6">
 <label for="name">Name</label>
 <input type="text" id="name" name="name"><br><br/>
 <label for="username"><br>Username</label>
 <input type="text" id="username" name="username"><br><br/>
 <label for= "password">Password</label>
 <input type= "text" id= "password" name= "password"><br><br/>
 <div class ="button">
 <input type="submit" value="Ajouter l'utilisateur">
 </div>
</div>
 </form> 
<?php
if(isset($_POST['username'])){
include('connexion.php');
        $pdo = connect_to_database();
        $req = "INSERT INTO Utilisateurs (" . 
                                "name, username, password" .
                                ") VALUES (" .
                                "'" . $_POST['name'] . "', " .
                                "'" . $_POST['username'] . "', " .
                                "'" . $_POST['password'] . "') " ;
        $ret=$pdo->prepare($req);
        $ret->execute();
 
    echo 'L utilisateur a bien été ajouté à la base de données';
}
?>


</body>

<?php include('footer.php') ?>

</html>

