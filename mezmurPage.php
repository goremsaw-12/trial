<?php
    require('dbconn.php');
    $location = $_GET['lyricLoc'];
    $title = $_GET['lyricTitle'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <h1><?php echo $title?></h1>
        <?php
            $myfile = fopen($location, "r+") or die("Unable to open file!");
            $myread = fread($myfile,filesize($location));
            $lines = explode("\r\n", $myread,$limit = PHP_INT_MAX);

            foreach($lines as $line){
                ?><br><?php
                echo $line;
            }
            
            fclose($myfile);
        ?>
    </p>
</body>
</html>