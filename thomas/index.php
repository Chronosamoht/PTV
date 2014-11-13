<h1>Home of ThoThoThomas</h1>
<ul style="font-size : 1.5em;">
<?php
	$folder = opendir (".");
	while ($file = readdir ($folder)) {
		if ($file != "." && $file != "index.php") {
			if(pathinfo($file, PATHINFO_EXTENSION)==""){
				echo("\t<li><a href=\"".$file."/\">".$file."</a></li>");
			}else{
				echo("\t<li><a href=\"".$file."\">".$file."</a></li>");
			}
		}
	}
?>
</ul>
