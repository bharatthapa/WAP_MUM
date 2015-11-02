<?php include("db-connection.php"); ?>
    
<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){?>
        <h1>Thank you !</h1>
        <pre> Welcome , <?=$_POST["name"]?> !
  Now <a href="matches.php"> Check your matches!</a></pre>

<?php
   
	$username = $_POST["name"];
	$password = $_POST["password"];
	$gen = $_POST["gender"];
	$min_max_age = $_POST["age"];
	$p_type = $_POST["ptype"];
	$OS = $_POST["os"];
	$min_age = $_POST["min"];
	$max_age = $_POST["max"];
	
									   
	$pass_hash = password_hash($password, PASSWORD_DEFAULT);
	
	try{								   
    $query = $db->prepare("INSERT INTO singles VALUES(NULL, :name, :pass, :gender, :age, :type1, :type2, :type3, :type4,  :os, :min, :max)");

	$query->execute(array(':name' => $username,
						   ':pass' => $pass_hash,
						   ':gender' => $gen,
						   ':age' => $min_max_age,
						   ':type1' => $p_type[0],
						   ':type2' => $p_type[1],
						   ':type3' => $p_type[2],
						   ':type4' => $p_type[3],
						   ':os' => $OS,
						   ':min' => $min_age,
						   ':max' => $max_age
						 	));
	}
catch(PDOEXCEPTION $ex){
print $ex->message();
}
									   
	header("Location:signup-success.php?name=$username");		   
} ?>
