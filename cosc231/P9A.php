<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dice Rolling Simulation</title>
    </head>
    <body>
        <h1>Dice Rolling Simulator</h1>
    
    <?php 
        echo "<p>This program simulates rolling dice between 50, and 500 times.</p> ";
        echo "<p>It then adds up the sum of all of the 1s 2s 3s 4s 5s and 6s.</p>";

        $onecount =0;
        $twocount =0;
        $threecount =0;
        $fourcount =0;
        $fivecount =0;
        $sixcount =0;

    $arr=[];
    function dicegen($a, $b)
    {
    	return rand($a,$b);
    }

    $u=dicegen(50,500);
    echo "Total number of rolls: " . $u."<br><br>";
    for($i=0; $i < $u; $i++)
    {
        $selector = dicegen(1,6);

        if($selector==1)
            $onecount=$onecount+1;
        if($selector==2)
            $twocount=$twocount+1;
        if($selector==3)
            $threecount=$threecount+1;
        if($selector==4)
            $fourcount=$fourcount+1;
        if($selector==5)
            $fivecount=$fivecount+1;
        if($selector==6)
            $sixcount=$sixcount+1;

        array_push($arr,dicegen(1,6));
        echo "Roll " .($i+1).": ". $arr[$i] . "<br>";
    }
    echo "======================== <br>";
    echo "Number of 1s rolled: ".$onecount ."<br>";
    echo "Number of 2s rolled: ".$twocount ."<br>";
    echo "Number of 3s rolled: ".$threecount ."<br>";
    echo "Number of 4s rolled: ".$fourcount ."<br>";
    echo "Number of 5s rolled: ".$fivecount ."<br>";
    echo "Number of 6s rolled: ".$sixcount ."<br>";

    ?>
    </body>
</html>