
<section class="resepl">
<!-- Rechercher Sélectionner Plannifier -->

<?php

 echo(" <nav> <!-- Menu Rechercher -->
<li> <a href=\"$nomfichier?lang=fr&q=r \"> Rechercher  </a> </li> 
 <li> <a href=\"$nomfichier?lang=fr&q=s \"> Sélectionner  </a> </li> 
  <li> <a href=\"$nomfichier?lang=fr&q=p \"> Plannifier  </a> </li> </nav> ");

if(isset($_GET["q"])) {
	$quoi = $_GET["q"];
} else {
	$quoi = "r";
}

if($quoi=="r"){

	echo("<p> <h3> Rechercher </h3>");
    printf("Ceci est une recherche (pensez-y très fort peux être qu'elle viendra toute seule!) </p>");

} elseif ($quoi=="s") {

	echo("<p> <h3>Sélectionner </h3> ");
	printf("Ceci est une séléction (pensez-y très fort peux être qu'elle viendra toute seule!) </p>"); 

}  elseif ($quoi=="p") {

	echo("<p> <h3>Plannifier </h3> ");
	printf("Ceci est une planification (pensez-y très fort peux être qu'elle viendra toute seule!) </p>");

}

?>


</section>

