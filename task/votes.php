<html>
	<head>
		<title>ИТЕХ 4 ЛБ</title>
		<meta charset="UTF-8">
	</head>
	<body>
		<?php 
			$handler = fopen("./store.txt", "r+");
			$line = fgets($handler);
			$data =  explode(" ", $line);
			echo "<p>Результаты опроса</p>";
			echo "C++: ".$data[0]."<br / >";
			echo "Python: ".$data[1]."<br / >";
			echo "PHP: ".$data[2]."<br / >";
			fclose($handler);
		?>
	</body>
</html>