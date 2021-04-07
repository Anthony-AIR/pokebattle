<?php
    require "Superhero.php";
    require "Avengers.php";
    
    //spiderman
    $spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
    print_r('<pre>'. $spiderman .'</pre>');
    $spiderman->sayOneliner();

    //thor 
    $thor = new Avenger('Thor', 'Male', 'For Asgard!');
    print_r('<pre>' . $thor . '</pre>');
    $thor->sayOneliner();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero</title>
</head>
<body>
    
</body>
</html>