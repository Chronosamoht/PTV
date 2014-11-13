<head>
    <meta charset="UTF-8"/>
</head>

<?php
if (isset($_POST['pseudo'])) { // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
    mysql_connect('localhost', 'projet', 'tejorp');
    mysql_select_db('projet'); // on se connecte à MySQL.
    $requete = htmlspecialchars($_POST['pseudo']); // on crée une variable $requete pour faciliter l'écriture de la requête SQL
    $query = mysql_query("SELECT * FROM comptes WHERE pseudo LIKE '%$requete%' ORDER BY id DESC") or die(mysql_error());
    $nb_resultats = mysql_num_rows($query); // compte le nombre de résultat pour la requete

    if ($nb_resultats != 0) {

        echo "<h3>Résultats de votre recherche.</h3>";
        echo "Nous avons trouvé " . $nb_resultats;
        // on vérifie le nombre de résultats pour orthographier correctement. 
        if ($nb_resultats > 1) {
            echo ' résultats ';
        } else {
            echo ' résultat ';
        }

        echo "dans notre base de données. <br/> Voici les activités que nous avons trouvé :<br/><br/>";
        while ($donnees = mysql_fetch_array($query)) { // on fait un while pour afficher la liste des activités trouvées
            echo "Pseudo : " . $donnees['pseudo'] . "<br/>";

            echo "Email : " . $donnees['email'] . "<br/><br/>";
        } // fin de la boucle

        echo "<br/>";
        echo "<br/>";
        echo "<a href=\"recherche_rapide.html\">Faire une nouvelle recherche</a>";
    } else {

        echo "<h3>Pas de résultats</h3>";
        echo "<p>Nous n'avons trouvé aucun résultat pour votre requête ";
        $pseudo = htmlspecialchars($_POST['pseudo']);
        echo "$pseudo" . "<a href=\"recherche_rapide.html\">Réessayez</a> avec autre chose.";
    }// Fini d'afficher l'erreur ^^
    mysql_close(); // on ferme mysql, on n'en a plus besoin
} else if ($_POST['pseudo'] == NULL) {
    echo "Votre recherche est nulle";

    echo "<a href=\"recherche_rapide.html\">Réessayez</a> avec autre chose.";
}
// et voilà, c'est fini !
?>