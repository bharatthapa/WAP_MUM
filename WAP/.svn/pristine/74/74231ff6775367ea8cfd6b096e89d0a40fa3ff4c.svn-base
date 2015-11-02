<?php include("top.html");?>
    <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){?>
        <h1>Thank you !</h1>
        <pre> Welcome , <?=$_POST["name"]?> !
  Now <a href="matches.php"> Check your matches!</a></pre>

        <?php
   
     file_put_contents("singles.txt","\n".implode(",", $_POST), FILE_APPEND | LOCK_EX);

 } ?>

<?php include("bottom.html");?>