<h1>Welcome Home =)</h1>
<ul style="font-size : 1.5em;">
<?php
	$folder = opendir (".");
	while ($file = readdir ($folder)) {
		if ($file != "." && $file != ".." && pathinfo($file, PATHINFO_EXTENSION)=="") {
			echo("\t<li><a href=\"".$file."/\">".$file."</a></li>");
		}
	}
?>
</ul>