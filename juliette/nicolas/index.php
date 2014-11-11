<!DOCTYPE html>
<head>
	<title>Agenda TEST</title>
	<meta charset="UTF-8">
	<style>
		ul {
			display : inline-block;
			margin-right : 150px;
		}
		
		ul li {
			list-style-type : none;
			border : 1px solid black;
			width : 128px;
			height : 32px;
		}
		
		table {
			display : inline-block;
			border-collapse : collapse;
		}
		
		th, td {
			border : 1px solid black;
			width : 128px;
			height : 32px;
		}
		
	</style>
</head>
<body>
	<ul>
		<?php
			$list = array("Escalade", "Tennis", "Suicide", "Electrocution", "Hara-kiri", "Mutilation", "Hydrocution", "Pendaison", "Noyade", "Suffocation");
			foreach($list as $activite){
				echo("<li draggable=true>".$activite."<a href=\"#\">-</a></li>");
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
			for($i=0; $i<15; $i++){
				echo("<tr>");
				echo("\t\t<th>".(6+$i)."h</th>");
				for($j=0; $j<7; $j++){
					echo("\t\t<td></td>");
				}
				echo("</tr>");
			}
		?>
	</table>
</body>