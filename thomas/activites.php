<!doctype html>

<?php  $nomfichier = basename($_SERVER['SCRIPT_FILENAME']); ?>
<html lang="fr">
<?php include("base/head.php"); ?>
<body>


<?php include("base/header.php"); ?>

<h1> Travel voyage : le meilleur de vos vacances ! </h1>
<?php include("base/menu.php"); ?>
<main class="activites">

<h2> Les activitées </h2>

<div>


<p>
<h3> Bien être </h3>

 <?php echo("<a href=\"$nomfichier?lang=fr\"> <img src=\"img/imgacti/lotus.jpg\" alt=\"lotus\">
</a>");  ?>

</p>

<p>
<h3> Sportive </h3>

 <?php echo("<a href=\"$nomfichier?lang=fr\"> <img src=\"img/imgacti/para.jpg\" alt=\"Parapente\">
</a>");  ?>


</p>

<p>
<h3> Balade </h3>

 <?php echo("<a href=\"$nomfichier?lang=fr\"> <img src=\"img/imgacti/rando.jpg\" alt=\"randonnée\">
</a>");  ?>


</p>


<p>
<h3> Nautique </h3>

 <?php echo("<a href=\"$nomfichier?lang=fr\"> <img src=\"img/imgacti/kayak.jpg\" alt=\"kayak\">
</a>");  ?>

</p>


<p>
<h3> Gastronomique </h3>

 <?php echo("<a href=\"$nomfichier?lang=fr\"> <img src=\"img/imgacti/gastro.jpg\" alt=\"Nourriture\">
</a>");  ?>


</p>

<p>
<h3> Culturel </h3>
 <?php echo("<a href=\"$nomfichier?lang=fr\"> <img src=\"img/imgacti/musee.jpg\" alt=\"Musée\">
</a>");  ?>


</p>

</div>

</main>

<?php include("base/footer.php"); ?>


</body>


</html>
