<!DOCTYPE html>
<head>
	<title>Agenda TEST</title>
	<meta charset="UTF-8">
	<link href="style.css" type="text/css" rel="stylesheet"/>
	<script type="text/javascript">
		function sizePlusPlus(oLi){
			oLi.parentNode.parentNode.rowSpan += 1;
			oLi.parentNode.style.height= (oLi.parentNode.offsetHeight+33)+"px";
		}
	</script>
</head>
<body>
	<h1>Home of Coli =3</h1>
	<ul class="dropper">
		<?php
			$list = array("Escalade", "Tennis", "Suicide", "Electrocution", "Hara-kiri", "Mutilation", "Hydrocution", "Pendaison", "Noyade", "Suffocation");
			foreach($list as $activite){
				echo("<li class=\"draggable\">".$activite."<a href=\"#\">-</a><div class=\"handle\" onclick=\"sizePlusPlus(this);\">▼</div></li>");
			}
		?>
	</ul>
	<table>
		<tr>
			<th></th>
			<th>Lundi</th>
			<th>Mardi</th>
			<th>Mercredi</th>
			<th>Jeudi</th>
			<th>Vendredi</th>
			<th>Samedi</th>
			<th>Dimanche</th>
		</tr>
		<?php
			for($i=0; $i<18; $i++){
				echo("<tr>");
				echo("\t\t<th>".(6+$i)."h</th>");
				for($j=0; $j<7; $j++){
					echo("\t\t<td class=\"dropper\"></td>");
				}
				echo("</tr>");
			}
		?>
	</table>
	<!--<div id="lol"></div>-->
	<script src="script.js"></script>
</body>