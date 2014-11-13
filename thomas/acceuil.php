<!doctype html>

<html lang="fr">

<?php include("base/head.php"); ?>

<body>


<?php include("base/header.php"); ?>

<h1> Travel voyage : le meilleur de vos vacances ! </h1>
<?php include("base/menu.php"); ?>

<main>
<!-- Partie principale de la page -->


<h2> Organisez vos vacances en 3 étapes : </h2>

<?php include("onglet.php"); ?>


<section class="bonplan">
<!-- Bon plan -->
<h3> Bon plan </h3>

<p>
<!-- populaire -->
Populaire
<br/>
<?php echo "<a  href=\"$nomfichier?lang=fr \">"; ?>
<!-- photo_vacances -->
<img src="img/imgvacances/040.jpg" alt="populaire">
</a>
</p>

<p>
<!-- News -->
News <br/>
<?php echo "<a  href=\"$nomfichier?lang=fr \">"; ?>
<!-- photo_vacances -->
<img src="img/imgvacances/047.jpg" alt="News">
</a>
</p>

<p>
<!-- Promotions -->
Promotions <br/>
<?php echo "<a  href=\"$nomfichier?lang=fr \">"; ?>
<!-- photo_vacances -->
<img src="img/imgvacances/57.jpg" alt="Promotions">
</a>
</p>

</section>


</main>

<?php include("base/footer.php"); ?>


</body>


</html>
