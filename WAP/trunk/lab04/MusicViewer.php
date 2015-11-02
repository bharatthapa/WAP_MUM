<!DOCTYPE html>
<html>
<!--
	Web Programming Step by Step
	Lab #3, PHP
	-->

<head>
    <title>Music Viewer</title>
    <meta charset="utf-8" />
    <link href="viewer.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <h1>My Music Page</h1>

    <!-- Exercise 1: Number of Songs (Variables) -->
    <p>

        I love music.
        <?php 
        $totalSongs=5678;
        $songHours= round($totalSongs/10);

			 echo "I have $totalSongs total songs, 
       
			which is over $songHours hours of music! ";
         ?>
    </p>
    <!-- Exercise 2: Top Music News (Loops) -->
    <!-- Exercise 3: Query Variable -->
    <div class="section">
        <h2>Yahoo! Top Music News</h2>
        <ol>
            <?php 
            if(isset($_GET["newspages"]))
                $no_of_pages= $_GET["newspages"];
            else
                $no_of_pages= 5;
            for($i=1;$i<=$no_of_pages; $i++){ 
			echo '<li><a href="http://music.yahoo.com/news/archive/' . $i . '.html">Page ' . $i . '</a></li>';
			}?>
        </ol>
    </div>
    <!-- Exercise 4: Favorite Artists (Arrays) -->
    <!-- Exercise 5: Favorite Artists from a File (Files) -->
    <div class="section">
        <h2>My Favorite Artists</h2>

        <ol>
            <?php
                
                foreach(file("favorite.txt") as $artistName){
                $temp = implode("-", explode(" ", strtolower($artistName)));
                echo'<li><a href="http://music.yahoo.com/videos/'.$temp.'">'. $artistName. '</a></li>';
                    
                }?>
        </ol>
    </div>

    <!-- Exercise 6: Music (Multiple Files) -->
    <!-- Exercise 7: MP3 Formatting -->
    <div class="section">
        <h2>My Music and Playlists</h2>

        <ul id="musiclist">
            
            <?php 

            foreach(glob("songs/*.mp3") as $listSongs)
            echo '  
            <li class="mp3item">
                <a href="songs/'.basename($listSongs).'">'.basename($listSongs).'('.round(filesize($listSongs)/1024).' K.B.)</a>
                <br>
                <audio controls> <source src="'.$listSongs.'" type="audio/ogg"></audio>
            </li>';
            echo "\n";

            ?>

            <!-- Exercise 8: Playlists (Files) -->
           <!--  $fileContent = basename($singleM3Ufile);
            foreach(file(.'"' .$fileContent. '"'.) as $singleline)
            echo $singleline;-->
            
            <?php 
            foreach(glob("songs/*.m3u") as $singleM3Ufile)
            {
            echo '       
            <li class="playlistitem">'.$singleM3Ufile.':';
             ?>
            <?php 
            $wholeFile = file_get_contents($singleM3Ufile);
            $splitFileToLines = explode("\n", $wholeFile);
            ?>
                <ul>
                    <?php
                    foreach($splitFileToLines as $singleLine)
                    if(strpos($singleLine,".mp3")==true)
                    echo '<li>'.$singleLine.'</li>';
                    ?>
                </ul>
            </li> 
            <?php 
            }?>
        </ul>
    </div>

    <div>
        <a href="http://validator.w3.org/check/referer">
            <img src="http://mumstudents.org/cs472/Labs/3/w3c-html.png" alt="Valid HTML5" />
        </a>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img src="http://mumstudents.org/cs472/Labs/3/w3c-css.png" alt="Valid CSS" />
        </a>
    </div>
</body>

</html>