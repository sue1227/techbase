<?php
$filename = 'mission_1-7.txt';
//echo $filename;
$fp = fopen($filename, 'a');
fwrite($fp,"name & comment");
fwrite($fp,"\nname\n");
fwrite($fp, htmlspecialchars($_POST["name"], ENT_QUOTES));
fwrite($fp,"\ncomment\n");
fwrite($fp, nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)));
fwrite($fp,"\n\n");
fclose($fp);

$lines = file($filename);  // �t�@�C����z��Ɋi�[���A����ɕϐ��Ɋi�[
?>

<ul>
<title>mission_1-7_action</title>
<!-- foreach�Ńt�@�C���̔z������[�v���� -->
<?php foreach ($lines as $line) : ?>

  <!-- �z��̗v�f��1�s����<li>�^�O�ɖ��ߍ��� -->
  <li><?php echo $line; ?></li>

<?php endforeach; ?>
</ul>