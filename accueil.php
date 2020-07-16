<!DOCTYPE html>
<html>
<body>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<?php include('header.php') ?>
<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra dui sed dolor rutrum porta. Nam at cursus lorem, at volutpat eros. Nunc sit amet eros vulputate, aliquet diam sit amet, pharetra quam. Morbi lacus risus, elementum ut sagittis pellentesque, blandit quis odio. Sed feugiat ut turpis sit amet imperdiet. Cras quis eros mi. Donec bibendum posuere vehicula. Suspendisse potenti. Nulla ac nunc sit amet erat mollis viverra. Quisque suscipit mollis sapien in eleifend. Nunc viverra rhoncus cursus. Curabitur sollicitudin, ante a aliquam aliquet, sem quam tempor neque, eget fringilla ligula nibh ut dolor.

Nulla laoreet pharetra pellentesque. Vivamus finibus blandit erat, nec tincidunt ante. Sed vitae arcu quam. Curabitur rhoncus sapien et urna tempor, et egestas sem commodo. Vivamus ligula ante, tristique at consectetur eu, semper sed nunc. Duis blandit a diam eget euismod. Nulla at tellus vitae lacus sollicitudin pulvinar ut nec quam. Praesent malesuada, felis at semper facilisis, diam nulla viverra libero, ultrices facilisis erat eros in massa. Vivamus sed molestie dui. Aenean tristique tincidunt libero, vitae aliquet magna placerat ut. </p>
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