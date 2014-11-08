


<header>
<!-- Entete de la page -->

<div>
<!-- Recherche avancee -->
Recherche avancée


</div>


<section>
<!-- Traduction, socialize, inscription, connection, icone_panier -->


<section>
  <!-- Traduction -->

<?php 

$lang = $_GET["lang"];
if(isset($lang)) {
    if($_GET["lang"]=="fr"){
        printf("Changer de langue : <a href=\"index.php?lang=en\"> <img src=\"img/uk.png\" alt=\"Drapeau Angleterre\"> </a>");
    } else {
        printf("Change Language : <a href=\"index.php?lang=fr\"> <img src=\"img/fra.png\" alt=\"Drapeau Angleterre\"> </a>");
    }
} else {
    printf("Langue : <img src=\"img/uk.png\" alt=\"Drapeau Angleterre\">");
}

?>
 
</section>

<section>
 <!-- socialize -->
 
 socialize
</section>

<section>
 <!-- inscription -->
 inscription
 
</section>

<section>
 <!-- connection -->
 connexion
 
</section>

<section>
 <!-- icone_panier -->
 
 icône_panier
</section>

</section>


<h1> Travel voyage : le meilleur de vos vacances ! </h1>

</header>