<head>
    <meta charset="UTF-8"/>
</head>

<?php
$i = 0;
$typeservice = $_POST["typeservice"];
<<<<<<< HEAD
$tags = $_POST["tags"];
=======
$soustype = $_POST["soustype"];
>>>>>>> 762383ae54a1fc508f084c8817529ee76c0fc3aa

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

<<<<<<< HEAD
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
=======
if ($soustype != 'default') {
    $choix[$i++] = " AND soustype LIKE ";
    switch ($soustype) {
        case "escalade":
            $choix[$i++] = " 'escalade'";
            break;
        case "laser game":
            $choix[$i++] = " 'laser game'";
            break;
    }
}

$critere = $choix[0] . $choix[1] . $choix[2] . $choix[3];
  

echo $critere;
if ($i >= 2) {
>>>>>>> 762383ae54a1fc508f084c8817529ee76c0fc3aa
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
<<<<<<< HEAD
        echo "<a href=\"recherche_rapide.html\">Faire une nouvelle recherche</a>";
=======
>>>>>>> 762383ae54a1fc508f084c8817529ee76c0fc3aa
    } else {

        echo "<h3>Pas de résultats</h3>";
        echo "<p>Nous n'avons trouvé aucun résultat pour votre requête ";
    }
    mysql_close();
    echo "<a href=\"recherche_avancee.html\">Réessayez</a> avec autre chose.";
<<<<<<< HEAD
} else {
=======
} 
else {
    echo "Votre recherche est vide, recommencez <br/>";
>>>>>>> 762383ae54a1fc508f084c8817529ee76c0fc3aa
    echo "<a href=\"recherche_avancee.html\">Réessayez</a> avec autre chose.";
}
?>