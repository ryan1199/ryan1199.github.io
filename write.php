<?php
$myfile = fopen("name.txt", "w") or die("Error!");
$txt = $_POST["name"];
fwrite($myfile, $txt);
fclose($myfile);
?>
