<!DOCTYPE html>

<html lang="fr">
    <head>
        <meta charset="utf-8" />
    </head>
    
    <body>
<section>
<?php

echo "<p>Votre inscription a bien été prise en compte, ".$_POST['pseudo'];


foreach($_POST as $key => $value) {
    echo "<li>paramètre <strong>$key</strong> de valeur <strong>$value</strong> ";
    
}

?>
</section>        
    </body>
</html>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

