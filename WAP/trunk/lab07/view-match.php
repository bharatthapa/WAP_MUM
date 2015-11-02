<?php 
session_start();
include("top.html"); 

$s_user_name = $_SESSION['username'];
$s_result = $_SESSION['matches'];
$s_size = 1;
$count =0;
$_SESSION['page']=0;

if(isset($_GET['page'])){

	$_SESSION['page'] = $_GET['page'];
}

if(!empty($s_user_name)){
	
    if(!empty($s_result)){
        ?>
<p><strong>Matches for : <?=$s_user_name; ?></strong></p> <a href="logout.php">Logout !</a>


<a href="view-match.php?page=<?=$_SESSION['page']-1?>"> Previous Match </a> | <a href="view-match.php?page=<?=$_SESSION['page']+1?>"> Next Page</a> <br>

 <?php for($i=0;$i<count($s_result);$i++){ 
       
		$row = $s_result[$i];
if($_SESSION['page']*$s_size < $i && ($_SESSION['page']+1)*$s_size >= $i){ ?>
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
		
    }
else {
    echo "match not found";
}
}
else {

	$_SESSION['error'] = "Please login first";
	header("Location:login.php");
}
 ?>
        <?php include("bottom.html"); ?>