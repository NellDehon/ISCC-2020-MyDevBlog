<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyDevBlog</title>
        <link rel="stylesheet" type="text/css" href="front.css">
    </head>
    <?php include('header.php')?>

<body>
<?php
    include ("connexion.php");
    if(isset($_GET['id'])){
        $pdo = connect_to_database();
        $id_getted = $_GET['id'];
        $sql_line = "SELECT * FROM `Articles` WHERE id = ". $id_getted;
        $request = $pdo -> query($sql_line);
        $result = $request-> fetch();
        echo '<img src="data:image/jpg;base64,',base64_encode($result['Image']),'" alt="image vérification">',"<i>";
        echo $result['date_de_publication'],"<B>","<br>","</i>";
        echo $result['Titre'], "</B>","<br>";
        echo $result['Contenu'], "<br>";
        echo $result['Auteur'], "<br>";
    }
    ?>
</body>


<?php include('footer.php') ?>
</html>
