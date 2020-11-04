<!--Project 10A By Brendan Klein on 11/2/2020 PROJECT #8--> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Temperature Converter!</title>
    </head>
    <body>
        <h1>Temperature Converter!</h1>
        <p>This program converts 5 fahrenheit values to their celsius equivilent! (Automatically rounded to 2 decimal places)</p>
        <p>Leaving the CheckBox unchecked will automatically convert from fahrenheit to celsius!</p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["Project10A.php"]);?>">
            First number: <input name="num1" type="text"><br>
            Second number: <input name="num2" type="text"><br>
            Third number: <input name="num3" type="text"><br>
            Fourth number: <input name="num4" type="text"><br>
            Fifth number: <input name="num5" type="text"><br>
            <br>
            Click this Checkbox to convert from celsius to fahrenheit!
            <input type="checkbox" id="cconvert" name="cconvert" value="true">
            <br>
            <input type="submit">
            <br>

        </form>
    <?php 

        echo "<br>";
        function test_input($data) 
        {   
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $a = $_REQUEST['num1']; 
            $b = $_REQUEST['num2'];
            $c = $_REQUEST['num3'];
            $d = $_REQUEST['num4'];
            $e = $_REQUEST['num5'];

            $cconverter=$_REQUEST['cconvert'];

            if($cconverter)
            {
                $carray=array($a,$b,$c,$d,$e);
                $farray=[];
            }
            else
            {
                $farray=array($a,$b,$c,$d,$e);
                $carray=[];
            }
            

            if (empty($a)||empty($b)||empty($c)||empty($d)||empty($e)) 
            {
                echo "All values are required for program to run!";
            }
            else 
            {

                if($cconverter==true)
                {
                    for($j=0; $j<5; $j++)
                    {                 
                        array_push($farray,(($carray[$j])*(9/5))+32);
                        echo "Given the celsius value: ".$carray[$j]."°, the converted fahrenheit value would be: ".round($farray[$j],2)."°<br>";
                    }
                }
                else
                {
                    for($j=0; $j<5; $j++)
                    { 
                        array_push($carray,(($farray[$j])-32)*(5/9));
                        echo "Given the fahrenheit value: ".$farray[$j]."°, the converted celsius value would be: ".round($carray[$j],2)."°<br>";
                    }
                }
            }
        }
    ?>
    </body>
</html>