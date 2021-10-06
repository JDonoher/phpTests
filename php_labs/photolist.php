<?php
include "connection.php";
$sql = "SELECT * FROM photos";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo List</title>
</head>
<body>
    <?php
        while($row=mysqli_fetch_assoc($result)){
            echo "<br><br><br>Name: ".$row["photoName"].
            "<br>Location: ".$row["photoLocation"].
            "<br>Price: ".$row["photoPrice"].
            "<br><img src=".$row['photoImage']." height=200px width=200px>";
        }
    
    ?>
</body>
</html>