<?php
$filename = 'mission_1-6-2.txt';
//echo $filename;
$fp = fopen($filename, 'a');
fwrite($fp,"name & comment");
fwrite($fp,"\nname\n");
fwrite($fp, htmlspecialchars($_POST["name"], ENT_QUOTES));
fwrite($fp,"\ncomment\n");
fwrite($fp, nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)));
fwrite($fp,"\n\n");
fclose($fp);

?>