
<?php  $nomfichier = basename($_SERVER['SCRIPT_FILENAME']); ?>

<header>
<!-- Entete de la page -->


<div class="recherche">
<button>
<!-- Recherche avancee -->
Recherche avancée
</button>

<div>

<!-- Traduction, socialize, inscription, connection, icone_panier -->

<div class="barre_header">

  <!-- Traduction -->

<?php 

if(isset($_GET["lang"])) {
	$lang = $_GET["lang"];
} else {
	$lang = "fr";
}

if($lang=="fr"){
    printf("Changer de langue : <a href=\"$nomfichier?lang=en\"> <img src=\"img/uk.png\" alt=\"Drapeau Angleterre\"> </a>");
} else {
    printf("Change Language : <a href=\"$nomfichier?lang=fr\"> <img src=\"img/fra.png\" alt=\"Drapeau Français\"> </a>");
}


?>

 <?php echo "<a href=\"$nomfichier?lang=fr \"> <img src=\"img/fb.png\" alt=\"Facebook\"></a>";  ?>



<button>
 <!-- inscription -->
 inscription
 
</button>

<button >  <!-- connexion -->  connexion </button> 




<?php echo "<a  href=\"$nomfichier?lang=fr \"><img src=\"img/caddie.jpg\" alt=\"caddie\"> </a>"; ?>
<!-- icone_panier -->



</div>


</header>