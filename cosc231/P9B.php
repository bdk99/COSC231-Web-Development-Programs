<!--Project 9B By Brendan Klein on 11/2/2020-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Coin Flip Simulation</title>
    </head>
    <body>
        <?php 
            echo "<h1>Coin Flip Simulation</h1>";
            echo"<p>This program will flip a coin a specific number of times and display a summary flips, and the totaled output of the flips at the bottom of the page.</p><br>";

            $arr=[];
            function coinflip($a,$b)
            {
                $x = rand($a,$b);
                if($x == 1)
                    return "Heads";
                if($x == 2)
                    return "Tails";
                if($x > 99)
                    return $x;
            }
            $u=coinflip(100,500);
            echo "Number of Heads and Tails Generated: ".$u . "<br>";
            for($i=0; $i < $u; $i++)
            {
                $selector=coinflip(1,2);
                array_push($arr,$selector);
                echo "Flip ".($i+1).": ".$arr[$i]. "<br>";

                if($selector=="Heads")
                    $HeadsCount=$HeadsCount+1;
                if($selector=="Tails")
                    $TailsCount=$TailsCount+1;
            }

            echo "========================= <br>";
            echo "Total Heads Count: ".$HeadsCount." <br>";
            echo "Total Tails Count: ".$TailsCount;
        ?>
    </body>
</html>