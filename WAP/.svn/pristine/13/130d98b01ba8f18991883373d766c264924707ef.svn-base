<?php
	  session_start();
	  include("db-connection.php");


    if($_POST){
    $user_name = $_POST['name'];
	$user_pass = $_POST['password'];
	
	try{
	$statement = $db -> prepare("SELECT * FROM singles WHERE  name=:name");
	$statement -> execute(array(':name' => $user_name));
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	var_dump($result);
	
	if(password_verify($user_pass, $result['pass'])){
		
	$_SESSION['username'] = $user_name;
	
	//Find the Matches // Code Starts here
		
		try{
		$w_statement = $db->prepare("SELECT * FROM singles WHERE 
		gender <> :gender
		AND os = :os
		AND age BETWEEN :min AND :max
		AND (type1 = :type1 
			OR type2 = :type2 
			OR type3 = :type3 
			OR type4 = :type4) 
			");

	$w_statement->execute(array(
		':gender' => $result['gender'],
		':os' => $result['os'],
		':min' => $result['min'],
		':max' => $result['max'],
		':type1' => $result['type1'],
		':type2' => $result['type2'],
		':type3' => $result['type3'],
		':type4' => $result['type4'] ));
		
		$w_result = $w_statement ->fetchAll(PDO::FETCH_ASSOC);
		/*print_r($w_result);*/
		
	}
	catch(PDOEXECPTION $ex){
		print $ex->message();
	}
		
	//End of Find Matches Code
		
	$_SESSION['matches'] = $w_result;
		
	header("Location:view-match.php");
	
	}
		else {
		$_SESSION['error'] = "Invalid Username or Password!";
		header("Location:login.php");
		}
	}
		catch(PDOEXCEPTION $message){
			echo $message -> message();
		}
		
 }?>