<?php include("top.html"); ?>

    <?php
    if($_POST){
    $name = $_POST["name"];
    $wholeFile = file_get_contents("singles.txt");
    $arrayList = explode("\n", $wholeFile);
    foreach($arrayList  as $singleArray){
    $singleElement = explode(",", $singleArray);
    if(in_array($name, $singleElement, true)){
        $gender = $singleElement[1];
        $age = $singleElement[2];
        $type = $singleElement[3];
        $OS = $singleElement[4];
        $min_age = $singleElement[5];
        $max_age = $singleElement[6];
        break;
        }
    }
    // comparing the matches 
    $temp = array();
    foreach($arrayList  as $singleArray){
    $count=0;
    $singleElement1 = explode(",", $singleArray);
    
    if($singleElement1[1] != $singleElement[1]
       && $singleElement1[4] == $singleElement[4]
        &&(($singleElement1[2] >= $min_age) && ($singleElement1[2] <= $max_age))){
        for($i=0; $i<strlen($type); $i++){
            for($j=0; $j<strlen($singleElement1[3]); $j++){
                if($type[$i] == $singleElement1[3][$j]){
                    $count++;
                }
            }
         if($count >= 2){
            array_push($temp, $singleElement1);
             break;
            }
        }
        }
        
        
    }
}
?>

<?php
    if(!empty($temp)){
        ?>
<p><strong>Matches for : <?=$name; ?></strong></p>
 <?php foreach($temp as $arr){ ?>
        

        <div class="match">
            <img src="images/user.jpg" alt="user" />
            <div>
                <ul>
                    <li>
                        <p>
                            <?=$arr[0]; ?>
                        </p>
                    </li>
                    <label><strong>gender:</strong></label>
                    <li>
                        <?=$arr[1]; ?>
                    </li>
                    <label><strong>age:</strong></label>
                    <li>
                        <?=$arr[2]; ?>
                    </li>
                    <label><strong>type:</strong></label>
                    <li>
                        <?=$arr[3]; ?>
                    </li>
                    <label><strong>OS:</strong></label>
                    <li>
                        <?=$arr[4]; ?>
                    </li>
                </ul>
            </div>
        </div>
<?php }
    }
else {
    echo "match not found";
}
?>
        <?php include("bottom.html"); ?>