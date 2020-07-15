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
    include("connexion.php");
    $pdo = connect_to_database();
    $request=$pdo->query('SELECT * FROM `Articles`');
    $count = 0;
    $width = 0;
    while ($Articles=$request -> fetch()){
        if(isset($Articles['id'])) {
            echo "<a href= \"article.php?id=", $Articles['id'], "\">";
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

<?php include('footer.php')?>

</html>

