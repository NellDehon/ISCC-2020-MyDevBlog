<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<body>
<?php include('header.php')?>
<h3> Contact </h3>
<form action="/ma-page-de-traitement" method="post">
    <div class="p6">
        <label for="name"><br>Votre nom :</label>
        <input type="text" id="name" name="user_name">
        <label for="mail"><br>Votre e-mail :</label>
        <input type="email" id="mail" name="user_mail">
        <label for="msg"><br>Votre message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>

</body>
<?php include('footer.php')?>
</body>

</html>

