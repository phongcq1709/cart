<?php
	try{
		$conn= new PDO
		("mysql:host=localhost;dbname=x-shop;charset=utf8","root","");
		
	}
	catch (PDOException $e){
		echo "Loi ket noi";

	}

?>