<nav>
        
    <?php if ($_GET['page'] == 'Accueil'): ?>
        <strong><a href="front.php?page=accueil" style="color: #">Accueil</a></strong>

    <?php else: ?>
        <a href="front.php?page=accueil">Accueil</a>
    <?php endif; ?>

    <?php if ($_GET['page'] == 'articles'): ?>
        <strong><a href="front.php?page=articles"style="color: #17c1ff">articles</a></strong>
    <?php else: ?>
        <a href="front.php?page=articles">articles</a>
    <?php endif; ?>

    <?php if ($_GET['page']== 'Contacts'): ?>
        <strong><a href="front.php?page=contacts"style="color: #17c1ff">Contacts</a></strong>
    <?php else: ?>
        <a href="front.php?page=contacts">Contacts</a>
    <?php endif; ?>
 

    <?php if ($_GET['page']== 'Connexion'): ?>
        <strong><a href="front.php?page=connexion"style="color: #17c1ff">Connexion</a></strong>
    <?php else: ?>
        <a href="front.php?page=connexion">Connexion</a>
    <?php endif; ?>
 
</nav> 
<?php
function afficher_pages(){
    if($_GET['page'] == "Accueil"){
   echo  "Accueil !";
   include('accueildev.php');

    }
else if($_GET['page'] == "Articles"){
echo "Page 2 !";
include('articles.php');
}
else if($_GET['page'] == "Contacts"){
    echo "Contacts";
    include 'contact.php';
}
else if($_GET['page'] == "connexion"){
    echo "connexion";
    include('connexiondev.php');
}

}
afficher_pages();
?>
<p>