<?php include("top.html"); 
	  include("db-connection.php");
?>

    <?php
    if($_POST){
    $user_name = $_POST['name'];
	$user_pass = $_POST['password'];
	
	try{
	$statement = $db->prepare("SELECT * FROM singles WHERE 
		name = :username");
	$statement->execute(array(':username' => $user_name));
	$result = $statement->fetch(PDO::FETCH_ASSOC);
	
		if(password_verify($user_pass, $result['pass'])){
		echo 'Login Successful';
		}
		else {
		echo 'password did not matched';
		}
	}
	catch(PDOEXCEPTION $ex){
		print $ex->message();
	}
		
	//Fetch whole data from singles
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
		
//		die($result['gender'].'|'.$result['os'].'|'.$result['min'].'|'.$result['max'].'|'.$result['type1'].'|'.$result['type2'].'|'.$result['type3'].'|'.$result['type4']);
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
		

    if(!empty($w_result)){
        ?>
<p><strong>Matches for : <?=$user_name; ?></strong></p>
 <?php foreach($w_result as $row){ ?>
        

        <div class="match">
            <img src="images/user.jpg" alt="user" />
            <div>
                <ul>
                    <li>
                        <p>
                            <?=$row['name']; ?>
                        </p>
                    </li>
                    <label><strong>gender:</strong></label>
                    <li>
                        <?=$row['gender']; ?>
                    </li>
                    <label><strong>age:</strong></label>
                    <li>
                        <?=$row['age']; ?>
                    </li>
                    <label><strong>type:</strong></label>
                    <li>
                        <?=$row['type1'].$row['type2'].$row['type3'].$row['type4']; ?>
                    </li>
                    <label><strong>OS:</strong></label>
                    <li>
                        <?=$row['os']; ?>
                    </li>
                </ul>
            </div>
        </div>
<?php }
    }
else {
    echo "match not found";
}
 }?>
        <?php include("bottom.html"); ?>