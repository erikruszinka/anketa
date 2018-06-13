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
        if($_POST['terms'] == 'accept'&& isset($_POST['food'])) 
        {
        $insert="UPDATE points SET vote = vote + 1 WHERE name = '$food'";
        $conn = mysqli_connect("localhost:3306","root","","food");
        if (!$conn) {
            die("Connection failed: " .mysqli_connect_error());
            }
            echo "Vote successfully accepted! Thank you.";
            if ($conn->query($insert) === TRUE) {
                echo "</br>New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }else{
            echo("</br>Please accept terms before vote");
        }
        
        $see_results = $conn->query("select * from points");
        $get_sum = $conn->query("select * from points");
        $vote_count=0;
        while($row=$get_sum->fetch_assoc()){
            $vote_count++;
            $vote=$row['vote'];
            switch($vote_count){
                case 1: $Pizza=$vote;
                case 2: $Pasta=$vote;
                case 3: $Kebab=$vote;
                case 4: $Burgers=$vote;
                case 5: $Frenchfries=$vote;
            }
        }
    
    
        $sum=$Pizza+$Pasta+$Kebab+$Burgers+$Frenchfries;
        $quantity=0;
        while($row=$see_results->fetch_assoc()){
            $fullname=$row['name'];
            $votes=$row['vote'];
            $quantity++;
            switch($quantity){
                case 1: $pizza=$row['vote']; 
                $pizza_part=round((($pizza/$sum)*100),2);
                $pizza_col=$pizza_part*2;
                print "</br>"
                .$fullname.": ".$votes." votes<br><div style='background-color:red; height: 12px; width: ".$pizza_col."px;  float:left;'></div>&nbsp<b>".$pizza_part."%</b>"."<br><br>";
                break;
                case 2: $frenchfries=$row['vote']; 
                $frenchfries_part=round((($frenchfries/$sum)*100),2);
                $frenchfries_col=$frenchfries_part*2;
                print ""
                .$fullname.": ".$votes." votes<br><div style='background-color:blue; height: 12px;  width: ".$frenchfries_col."px; float:left;'></div>&nbsp<b>".$frenchfries_part."%</b>"."<br><br>";
                break;
                case 3: $kebab=$row['vote'];
                $kebab_part=round((($kebab/$sum)*100),2);
                $kebab_col=$kebab_part*2;
                print ""
                .$fullname.": ".$votes." votes<br><div style='background-color:green; height: 12px; width: ".$kebab_col."px; float:left;'></div>&nbsp<b>".$kebab_part."%</b>"."<br><br>";
                break;
                case 4: $burgers=$row['vote'];
                $burgers_part=round((($burgers/$sum)*100),2);
                $burgers_col=$burgers_part*2;
                print ""
                .$fullname.": ".$votes." votes<br><div style='background-color:yellow; height: 12px;  width: ".$burgers_col."px; float:left;'></div>&nbsp<b>".$burgers_part."%</b>"."<br><br>";
                break;
                case 5: $pasta=$row['vote'];
                $pasta_part=round((($pasta/$sum)*100),2);
                $pasta_col=$pasta_part*2;
                print ""
                .$fullname.": ".$votes." votes<br><div style='background-color:orange; height: 12px;  width: ".$pasta_col."px; float:left;'></div>&nbsp<b>".$pasta_part."%</b>"."<br><br>";
                break;
            }
        }
        ?>
</body>
<style>
    div{
        display: inline-block;
    }
    
    </style>
</html>