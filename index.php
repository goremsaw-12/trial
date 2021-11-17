<?php
    require('dbconn.php');
    $sql = "SELECT * FROM songs";
    $result = mysqli_query($conn,$sql);
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
    <h1> Mezmur Debeter </h1>

    <ul> 
    <?php
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $title = $row["title"];
                $location = $row["location"];
            ?>
            <li> <?php echo '<a href="mezmurpage.php?lyricLoc='. $location.'&lyricTitle='.$title.'">'?>   <?php echo $title;?>   </a></li><br><?php
            }
        } else {
            echo "No Songs to show";
        }

        mysqli_close($conn);
    ?>
    </ul>
</body>
</html>