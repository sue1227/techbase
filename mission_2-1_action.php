<?php
$filename = 'mission_2-1.txt';
//echo $filename;
$fp = fopen($filename, 'a');
fwrite($fp,"name & comment");
fwrite($fp,"\nname\n");
fwrite($fp, htmlspecialchars($_POST["name"], ENT_QUOTES));
fwrite($fp,"\ncomment\n");
fwrite($fp, nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)));
fwrite($fp,"\n\n");
fclose($fp);

$lines = file($filename);  // ファイルを配列に格納し、さらに変数に格納
?>

<ul>

<!-- foreachでファイルの配列をループ処理 -->
<?php foreach ($lines as $line) : ?>

  <!-- 配列の要素を1行ずつ<li>タグに埋め込む -->
  <li><?php echo $line; ?></li>

<?php endforeach; ?>
</ul>