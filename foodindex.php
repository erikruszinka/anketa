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
    <form name="test" id="form" method="POST" action="foodscript.php">
        <h1>What is your favourite food?</h1>
        <div><input type="radio" name="food" id="Pizza" value="Pizza" ><span>Pizza</span></div>
        <div><input type="radio" name="food" id="Frenchfries" value="French fries" ><span>French fries</span></div>
        <div><input type="radio" name="food" id="Pasta" value="Pasta" ><span>Pasta</span></div>
        <div><input type="radio" name="food" id="Kebab" value="Kebab" ><span>Kebab</span></div>
        <div><input type="radio" name="food" id="Burgers" value="Burgers" ><span>Burgers</span></div>
        <div><input type="checkbox" name="checkbox" id="message"><span>I agree with all rules</span></div>
        <input type="submit" name='buttonSend' value='Send' id="send">
    </form>
    
    
    
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>