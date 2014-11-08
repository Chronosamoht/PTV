


<header>
<!-- Entete de la page -->

<button>
<!-- Recherche avancee -->
Recherche avancée
</button>


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
 
<a  href="index.php?lang=fr">
<img src="img/fb.png" alt="Facebook">
</a>


<button>
 <!-- inscription -->
 inscription
 
</button>

<button >  <!-- connexion -->  connexion </button> 




<a  href="index.php?lang=fr">
<!-- icone_panier -->
<img src="img/caddie.jpg" alt="caddie">
</a>


</section>


</header>