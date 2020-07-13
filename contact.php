<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="front.css" >
</head>
<body>
    <header>
    <h1> MyDevBlog</h1> 
    <nav>
    <nav>
<a class="navigationcolor" href="front.php?page=accueil">Accueil</a>
<a class="navigationcolor" href="articles.php?page=articles">Articles</a>
<a class="navigationcolor" href="contact.php?page=contacts">Contact</a>
<a class="navigationcolor" href="connexion.php?page=connexion">Connexion</a>        
</nav>

    </header>
<form action="/ma-page-de-traitement" method="post">
    <div class="p6">
        <label for="name"><br>Nom :</label>
        <input type="text" id="name" name="user_name">
        <label for="mail"><br>e-mail :</label>
        <input type="email" id="mail" name="user_mail">
        <label for="msg"><br>Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
</form>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>

</body>
    <footer>
    <h2> Liens externes </h2>
    <nav>
        <a class="navigationcolor" href="vitrine-accueil.html" >Accueil Summer Code Camp</a>
        <a class="navigationcolor" href="mon-cv.html"> Mon CV</a> 
        <a class="navigationcolor" href="https://www.linkedin.com/in/nell-dehon-380908155/"target="_blank">Linkedin</a>
    </nav> 
</footer>
</body>

</html>

