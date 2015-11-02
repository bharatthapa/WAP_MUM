<?php include("top.html");?>

    <?php   
   if($_SERVER["REQUEST_METHOD"]=="POST"){?>
        <h1>Wel-come !</h1>
        <pre><?=$_POST["name"]?> !
  Now <a>find your matches!</a></pre>
        <?php } ?>
            
                <form action="matches-submit.php" method="post" accept-charset="UTF-8">
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
						
                        <p><input type='submit' value='View My Matches' /></p>
                    </fieldset>
                    </from>
    <?php include("bottom.html"); ?>