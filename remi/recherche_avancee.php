<head>
    <meta charset="UTF-8"/>
</head>

<?php
$i = 0;
$typeservice = $_POST["typeservice"];
$tags = $_POST["tags"];

if ($typeservice != 'default') {
    $choix[$i++] = "typeservice LIKE";
    switch ($typeservice) {

        case "hebergement":
            $choix[$i++] = " 'hebergement'";
            break;
        case "sport":
            $choix[$i++] = " 'sport'";
            break;
    }
}

if ($tags != 'default') {
    $choix[$i++] = "tags LIKE ";
    switch ($tags) {
        case "escalade":
            $choix[$i++] = " 'escalade'";
            break;
        case "randonnee":
            $choix[$i++] = " 'randonnee'";
            break;
    }
}
/*
  for ($j = 0; $j < $i; $j+=2) {
  $critere = $critere . $choix[$j] . $choix[$j+1] . " AND ";
  }
 */
$critere = $choix[0] . $choix[1];
if ($i != 0) {
    mysql_connect('localhost', 'projet', 'tejorp');
    mysql_select_db('projet');
    $requete = htmlspecialchars($critere);
    $query = mysql_query("SELECT * FROM annonces WHERE " . $requete . " ORDER BY id DESC") or die(mysql_error());
    $nb_resultats = mysql_num_rows($query);

    if ($nb_resultats != 0) {

        echo "<h3>Résultats de votre recherche.</h3>";

        while ($donnees = mysql_fetch_array($query)) {
            echo "Nom : " . $donnees ['nom'] . "<br/>";
            echo "Description : " . $donnees ['description'] . "<br/><br/>";
        }

        echo "<br/>";
        echo "<br/>";
        echo "<a href=\"recherche_rapide.html\">Faire une nouvelle recherche</a>";
    } else {

        echo "<h3>Pas de résultats</h3>";
        echo "<p>Nous n'avons trouvé aucun résultat pour votre requête ";
    }
    mysql_close();
    echo "<a href=\"recherche_avancee.html\">Réessayez</a> avec autre chose.";
} else {
    echo "<a href=\"recherche_avancee.html\">Réessayez</a> avec autre chose.";
}
?>