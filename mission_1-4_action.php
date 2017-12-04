<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>mission_1-7</title>
</head>
<body>
<table border="1">
  <tr>
    <td>name</td><td><?php echo htmlspecialchars($_POST["name"], ENT_QUOTES) ?></td>
  </tr>
  <tr>
    <td>comment</td><td><?php echo nl2br(htmlspecialchars($_POST["comment"], ENT_QUOTES)) ?></td>
  </tr>
</table>

</body>
</html>