<?php
require_once "pdo.php";
			
			$phone=$_POST["phone"];
			$message=$_POST["message"];



			
 	$stmt = $pdo->query("INSERT INTO chat (phone, message)
	 VALUES ('$phone', '$message')");
		header("location:http://localhost/DafePeople/html/chat.html");


		



?>