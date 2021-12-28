<html>
	<head>
		<title>ИТЕХ 4 ЛБ</title>
		<meta charset="UTF-8">
	</head>
	<body>
		Тест 1:
		<?php
		echo "Hello, World!<br>"
		?>
		Тест 2:
		<?php echo 2+2 ?>
		<form action="action.php" method="POST" target="_blank">
			<p>[Опрос] Ваш любимый язык программирования</p>
			<input type="radio" name="vote" value="0"><label>C++</label> <br />
			<input type="radio" name="vote" value="1"><label>Python</label> <br />
			<input type="radio" name="vote" value="2"><label>PHP</label> <br />
			<input type="submit" value="Submit" name="submit">
		</form>
	</body>
</html>