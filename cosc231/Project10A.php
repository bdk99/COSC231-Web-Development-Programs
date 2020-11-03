<!--Project 10A By Brendan Klein on 11/2/2020 PROJECT #6--> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Number Names</title>
    </head>
    <body>
        <h1>Number Names</h1>
        <p>This program displays the written out version of a number between 0 (zero) and 20 (twenty)</p>
        <p>Put a number between 0 and 20 in the 5 textfields below to view their word meaning!</p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["Project10A.php"]);?>">
            First number: <input name="num1" type="text"><br>
            Second number: <input name="num2" type="text"><br>
            Third number: <input name="num3" type="text"><br>
            Fourth number: <input name="num4" type="text"><br>
            Fifth number: <input name="num5" type="text"><br>
            <input type="submit">
            <br>
        </form>
        <?php 
            function test_input($data) 
            {   
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        
            $namesarr=array("zero","one","two","three","four","five","six","seven","eight","nine","ten","eleven","twelve","thirteen","fourteen","fifteen","sixteen","seventeen","eighteen","nineteen","twenty");

            if ($_SERVER["REQUEST_METHOD"] == "POST")
            {
                $a = $_REQUEST['num1']; 
                $b = $_REQUEST['num2'];
                $c = $_REQUEST['num3'];
                $d = $_REQUEST['num4'];
                $e = $_REQUEST['num5'];
            
                $digit=array($a,$b,$c,$d,$e);

                
                if (empty($a)||empty($b)||empty($c)||empty($d)||empty($e)) 
                {
                    echo "All values are required for program to run!";
                }
                if ($a>20||$a<0||$b>20||$b<0||$c>20||$c<0||$d>20||$d<0||$e>20||$e<0)
                {
                    echo "Valid inputs for this program are the numbers 0-20!  Close the program and restart to try again";
                } 
                else 
                {
                    for($j=0; $j<5; $j++)
                    {
                        echo "Given the value: ".$digit[$j].", the written out number value would be: ".$namesarr[$digit[$j]]."<br>";
                    }
                }
            }
        ?>
    </body>
</html>