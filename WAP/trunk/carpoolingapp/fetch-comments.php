<?php
	 session_start();
	  include("db-connection.php");

	try{
	//$tripId = $_POST['tripId'];
	$s_statement = $db -> prepare("SELECT comment_text FROM comments ORDER BY created_date DESC");
	$s_statement -> execute();
	$result = $s_statement->fetchAll(PDO::FETCH_ASSOC);
	
	echo json_encode($result);
		

	}
		catch(PDOEXCEPTION $message){
			echo $message -> getMessage();
		}

?>