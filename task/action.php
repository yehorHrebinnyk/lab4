<?php 
	if (isset($_POST['submit'])) {
	    $handler = fopen("./store.txt", "r+");
		$line = fgets($handler);
		$data =  explode(" ", $line);
		
		fclose($handler);
		foreach ($data as $value) {
			$value = intval($value);
		}
		$data[$_POST["vote"]] += 1;
		file_put_contents("./store.txt", implode($data, " "));
		header('Location: /task/votes.php');
		die();
	 }
?>
