<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_2</title>
</head>
<body>
<h1>THIS IS A HEADLINE</h1>
<form method="post">
  name<br />
  <input type="text" name="name" size="30" value="" /><br />
  comment<br />
  <textarea name="comment" cols="30" rows="5"></textarea><br />
  <input type="submit" value="ok" />
</form>

<form method="post">
  delete no. <br />
  <input type="text" name="delete_no" size="3" value="" /><br />
  <input type="submit" value="ok" />
</form>

<?php
$filename = 'mission_2-4.txt';
//echo $filename;
if(!(empty($_POST["name"])) && !(empty($_POST["comment"]))){
  $fp = fopen($filename, 'a');
  fwrite($fp, htmlspecialchars($_POST["name"], ENT_QUOTES));
  fwrite($fp,"<>");
  fwrite($fp, nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)));
  fwrite($fp,date('<>Y/m/d H:i:s'));
  fwrite($fp,"\n");
  fclose($fp);
}
?>

<?php
$data = file($filename);
if(isset($_POST["delete_no"])){
    $fp = fopen($filename, 'w');
    $delete = intval($_POST["delete_no"]);
    for($i = 0; $i < count($data); $i++){
        $no = $i + 1;
        if($delete != $no){
          fwrite($fp,$data[$i]);
        }
    }
    fclose($fp);
}
?>

<?php
$data = file($filename);
for($i = 0; $i < count($data); $i++){
    $no = $i + 1;
    echo("No.".$no."<>".$data[$i]."<br /><hr />");
}
?>
</body>
</html>