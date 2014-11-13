<h1>Welcome Yvan</h1>
<ul style="font-size : 1.5em;">
<?php
	$folder = opendir (".");
	while ($file = readdir ($folder)) {
		if ($file != "." && $file != ".." && $file!="index.php" && pathinfo($file, PATHINFO_EXTENSION)!="") {
			echo("\t<li><a href=\"".$file."/\">".$file."</a></li>");
		}
	}
?>
</ul>