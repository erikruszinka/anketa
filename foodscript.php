<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Favourite Food</title>
</head>
<body>
    <?php
        $food = $_POST['food'];
        if($_POST['checkbox'] == 'accept'&& isset($_POST['food'])) 
        {
        $insert="UPDATE points SET vote = vote + 1 WHERE name = '$food'";
        $conn = mysqli_connect("localhost:3306","root","","food");
        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
            }
            echo "Vote successfully accepted! Thank you.";
            if ($conn->query($insert) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
            echo("Please accept terms before vote");
        }
        ?>
</body>
</html>