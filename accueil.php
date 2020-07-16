<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<?php include('header.php') ?>
<p> Depuis le 22 Juin, nous avons participé à un stage de codage grâce à Epitech. <br> Durant ces 3 semaines d'immersion à distance, nous nous sommes initiés à différents languages de programmation, tel que le langage HTML,CSS,PHP,SQL, nous permettant aujourd'hui, grâce aux compétences acquises, de réaliser ce Devblog auquel notre dernière semaine fut dédiée.</br>

<h3> Les derniers articles </h3>
<?php
    include("connexion.php");
    $pdo = connect_to_database();
    $request=$pdo->query('SELECT*FROM `Articles` WHERE id > 0');
    $count = 0;
    $width = 0;
    while ($Articles=$request->fetch()) {
    if(isset($Articles['id'])) {
    echo"<a href= \"article.php?id=", $Articles['id'], "\">";
    echo'<div>
            <div class="article" style= "float:',$width,'%"> 
                <h2>',$Articles['Titre'],'</h2>
                <img class="article" src="data:image/jpg;base64,',base64_encode($Articles['Image']),'" alt="image vérification">;
             ',$Articles['Extrait'],'</div></div>';
    echo"</a>";
            }
    $count++;
    $width += 20;
        }
    ?>

    <div>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>
<br></br>

</div>
<?php include('footer.php')?>
</body>
</html>