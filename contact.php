<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <header>
    <nav>
    <a href="front.php?page=Accueil">Accueil</a>
    <a href="front.php?page=Contacts">Contacts</a>
    <a href="front.php?page=Articles">Articles</a>
    <a href="front.php?page=connexion">Connexion</a>
    
           
</nav>

   <?php
function afficher_pages()
{
if ($_GET['page'] == "Accueil") {
   echo "Accueil ";
   include 'accueil.php';
}
else if ($_GET['page'] == "Contacts") {
echo "Contacts";
include 'contact.php';

} 
else if ($_GET['page'] == "Articles") {
echo "Page 3!";
include('articles.php');

} 
else if ($_GET['page'] == "Connexion") {
echo "Connexion";
include('connexiondev.php');

} 
}
afficher_pages();
?>
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

</html>