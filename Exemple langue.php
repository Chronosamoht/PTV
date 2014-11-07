<!DOCTYPE HTML>
<html>
    <head>
        <title>Langue</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    </head>

	<body>
            <h1>Exemple langue</h1>    
            <?php
		require("lang/decide-lang.php"); //Inserer cette ligne obligatoiremment
                echo ("<p>".EXEMPLE."</p>"); //inserer la variable a nue           
            ?>
	</body>
</html>
