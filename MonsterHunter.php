<?php
  $xml=simplexml_load_file("test.xml") or die("Error: Cannot create object");
  $json = json_encode($xml);
  $array = json_decode($json, TRUE);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>MHW Cudovista</title>

</head>
<body>
<header id="navigacija">
        <nav>
            <a href="about.html" class="a1">About</a>
            <a href="MonsterHunter.php" class="a2">Monsters</a>
        </nav>
    </header>

    <div class="sidenav">
        <?php
        for($i=0;$i<count($array["Monster"]);$i++){
            echo"<a href='#". $array['Monster'][$i]["Name"] ."'>". $array['Monster'][$i]["Name"] ."</a>";
        }
        
        ?>
    </div>
    <div class="izbor">








        <?php  
                for($i=0;$i<count($array["Monster"]);$i++){
                    echo "<div class='monster'>";
                    echo"<a id='". $array['Monster'][$i]["Name"] ."'></a>";
                    echo "<h2>". $array['Monster'][$i]["Name"] ."</h2>";
                    echo "<img src=img/img". $i .".jpg class='slika'>";
                    echo"<p>Found in: ". $array['Monster'][$i]["foundIn"] ."</p>";
                    echo"<p>Species: ". $array['Monster'][$i]["species"] ."</p>";
                    echo"<p>Average size: ". $array['Monster'][$i]["AvgSize"] ."</p>";
                    echo"<p>Health: ". $array['Monster'][$i]["HP"] ."</p>";
                    echo"<p>Description:<br> ". $array['Monster'][$i]["description"] ."</p>";
                    echo"<p>Weaknesses: ";
                        echo"<li>Fire: "; if($array['Monster'][$i]["weaknesses"]["fire"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Thunder: "; if($array['Monster'][$i]["weaknesses"]["thunder"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Water: "; if($array['Monster'][$i]["weaknesses"]["water"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Ice: "; if($array['Monster'][$i]["weaknesses"]["ice"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Dragon: "; if($array['Monster'][$i]["weaknesses"]["dragon"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"</p>";

                        echo"</p>Resistances: ";
                        echo"<li>Fire: "; if($array['Monster'][$i]["resistances"]["fire"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Thunder: "; if($array['Monster'][$i]["resistances"]["thunder"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Water: "; if($array['Monster'][$i]["resistances"]["water"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Ice: "; if($array['Monster'][$i]["resistances"]["ice"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }
                        echo"<li>Dragon: "; if($array['Monster'][$i]["resistances"]["dragon"]=="true")
                        {
                            echo"<img src=img/Da.png class='Mark'></li>";
                        }
                        else
                        {
                            echo"<img src=img/Ne.png class='Mark'></li>";
                        }


                        echo"</p>";
                    echo"</div>";
                    
                    }
                
                
        ?>

    </div>
    <footer>
    <p>Luka Leko</p>
    <p>JMBAG:0246087169</p>
</footer>
</body>
</html>