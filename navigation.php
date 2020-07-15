<nav>
<li><a class="navcolor" href="accueil.php?page=front">Accueil</a></li>
<li><a class="navcolor" href="articles.php?page=articles">Articles</a></li>
<li><a class="navcolor" href="contact.php?page=contact">Contact</a></li>
<li><a class="navcolor" href="administration.php?page=administration">Connexion</a></li>
</nav>
<?php
if (isset($_SESSION['id'])){
    ?>
    <li><a class="navcolor" href="ajout-article.php?page=articles">Ajouter un article</a></li>
<li><a class="navcolor" href="ajout-utilisateurs.php?page=ajout-utilisateurs">Ajouter un utilisateur</a></li>
<li><a class="navcolor" href="utilisateurs.php?page=utilisateurs">Utilisateurs</a></li>
<?php
}
?>
</nav>

