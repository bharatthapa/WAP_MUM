<?php 
session_start();
include("top.html");
 
if(!empty($_SESSION['error'])){ ?>
	 <a><h1> <?=$_SESSION['error']; ?> </h1></a>
	
<?php
$_SESSION['error'] = " ";							   
}

if($_SERVER["REQUEST_METHOD"]=="POST"){?>

        <h1>Wel-come !</h1>
        <pre><?=$_POST["name"]?> !
  Now <a>find your matches!</a></pre>
        <?php }
?>
            
                <form action="login-submit.php" method="post" accept-charset="UTF-8">
                    <fieldset>

                        <legend>Returing User: </legend>
                       <p>
                        <label><strong> Enter Name :</strong></label>
                        <input type='text' name='name' id='name' maxlength="16" required/>
                        </p>
						
						 <p>
                        <label><strong> Password :</strong></label>
                        <input type='password' name='password' id='password' required />
                        </p>
						
                        <p><input type='submit' value='Submit' /></p>
                    </fieldset>
                    </from>
    <?php include("bottom.html"); ?>