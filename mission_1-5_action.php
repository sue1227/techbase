<?php
$filename = 'mission_1-5.txt';
//echo $filename;

$fp = fopen($filename, 'a');
fwrite($fp,"\nname\n");
fwrite($fp, htmlspecialchars($_POST["name"], ENT_QUOTES));
fwrite($fp,"\ncomment\n");
fwrite($fp, nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)));
fclose($fp);

?>