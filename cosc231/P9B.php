<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coin Flip Simulation</title>
    </head>
    <body>
        <h1>Coin Flip Simulation</h1>
    <?php 
    
    $arr=[];
    function coinflip($a,$b)
    {
        $x = rand($a,$b);
        if($x == 1)   //Converts a 1 to heads
            return "Heads";
        if($x == 2)   //Converts a 2 to tails 
            return "Tails";
        if($x > 99)   //Returns a number generated between 100 and 500 without using a seperate function
            return $x;
    }
    $u=coinflip(100,500); //Randomly generates number of times coin will be flipped
    echo "Total Number of flipped coins: ".$u . "<br>";
    
    for($i=0; $i < $u; $i++)
    {
        array_push($arr,coinflip(1,6));
        echo "Roll " .($i+1).": ". $arr[$i] . "<br>";
    }

    ?>
    </body>
</html>