<html>
<head>
</head>

<body>
	<?php $letters = ['A','B','C','D','E','F','G','H','I'];
	$break = 3;

	foreach ($letters as $index => $letter) {
		if ($index % $break == 0) {
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
		}
		echo $letter . "     ";
	}
	echo "<br>";

		?>
</body>
</html>