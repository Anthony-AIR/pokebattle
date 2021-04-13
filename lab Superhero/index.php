<?php
    require "Superhero.php";
    require "Avengers.php";

    //spiderman
    $spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
    print_r( '<pre>'. $spiderman .'</pre>' );
    $spiderman->sayOneliner();

    //thor 
    $thor = new Avenger('Thor', 'Male', 'For Asgard!');
    print_r( '<pre>' . $thor . '</pre>' );
    $thor->sayOneliner();

    //ironman
    $ironman = new Avenger('Ironman', 'Male', 'I am Ironman!');
    print_r( '<pre>' . $ironman . '</pre>' );
    $ironman->sayOneliner();

    //batman
    $batman = new Superhero('batman', 'male', 'justice League', 'I am Vengeance, I am the (K)night! I. AM. BATMAN!');
    Print_r( '<pre>' . $batman . '</pre>' );
    $batman->sayOneliner();
    
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