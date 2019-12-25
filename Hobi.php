<?php  ?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Hobi</title>
</head>
<body>
<h1>
	<?php echo $_GET ["Hobi"]; ?>
</h1>

	<ul>
		<li>Juara <?php echo $_GET["Hobi"]?> Sekecamatan</li>
		<li>Juara <?php echo $_GET["Hobi"]?> Sekelurahan</li>
		<li>Juara <?php echo $_GET["Hobi"]?> Sekabupaten</li>
	</ul>
	
</body>
</html>