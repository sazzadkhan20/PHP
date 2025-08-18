<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Task</title>
</head>
<body>
    <?php
    echo "<h1>Assignment Task 1</h1>";
    $length = 10.5;
    $width = 5.6;
    echo "Length of the Rectangle is: ".$length.'<br>';
    echo "Width of the Rectangle is: ".$width.'<br>';
    echo "Area of the Rectangle is: ".$length*$width.'<br>';
    echo "Perimeter of the Rectangle is: ". (2*($length+$width)). '<br>';

    echo "<h1>Assignment Task 2</h1>";
    $amount = 1500;
    $vat = 0.15;
    echo "Amount is: ".$amount." and VAT = 15% of the amount is: ".($amount*$vat).'<br>';

    echo "<h1>Assignment Task 3</h1>";
    $num = 11;
    if($num % 2 == 0)
        echo $num." Number is Even<br>";
    else 
        echo $num." Number is Odd<br>";

    echo "<h1>Assignment Task 4</h1>";
    $num1 = 11;
    $num2 = 15;
    $num3 = 20;
    if($num1 >= $num2 && $num1 >= $num3)
        echo $num1."-Number 1 is a Largest Number<br>";
    elseif($num2 >= $num1 && $num2 >= $num3) 
        echo $num2."-Number 2 is a Largest Number<br>";
    else
        echo $num3."-Number 3 is a Largest Number<br>";

    echo "<h1>Assignment Task 5</h1>";
    echo "The Odd numbers between 10 to 100 are: ";
    for($i=10; $i<=100; $i++)
        if($i % 2 == 1)
            echo $i.' ';

    echo "<h1>Assignment Task 6</h1>";
    $arr = array(10,12,100,23,34,21);
    $searchElement = 23;
    $bool = 0;
    for($i=0; $i<count($arr); $i++)
    {    if($arr[$i] == $searchElement)
        {   echo "Found Element ".$searchElement.'<br>';
            $bool++;
            break;
        }
    }
     if($bool == 0)
        echo "Not Found Element ".$searchElement.'<br>';

    echo "<h1>Assignment Task 7</h1>";
    echo "Pattern - 1 ----------<br>";
    $input = '*';
    for($i=1; $i<=3; $i++)
    {
        for($j=0; $j<$i; $j++)
        {
            echo $input.' ';
        }
        echo "<br>";
    }
    echo "Pattern - 2 ----------<br>";
    for($i=3; $i>=1; $i--)
    {
        for($j=1; $j<=$i; $j++)
        {
            echo $j.' ';
        }
        echo "<br>";
    }
    echo "Pattern - 3 ----------<br>";
    $c = 'A';
    for($i=1; $i<=3; $i++)
    {
        for($j=0; $j<$i; $j++)
        {
            echo $c.' ';
            $c++;
        }
        echo "<br>";
    }
    echo "<h1>Assignment Task 8</h1>";
    $mat = [
        ['1','2','3','A'],
        ['1','2','B','C'],
        ['1','D','E','F']
    ];
    echo "Pattern - 1 ----------<br>";
    $len = count($mat[0])-1;
    for($i=0; $i<count($mat); $i++)
    {
        for($j=0; $j<$len; $j++)
            echo $mat[$i][$j].' ';
        echo "<br>";
        $len--;
    }
    echo "Pattern - 2 ----------<br>";
    $len = count($mat[0])-1;
    for($i=0; $i<count($mat); $i++)
    {
        for($j=$len; $j<count($mat[$i]); $j++)
            echo $mat[$i][$j].' ';
        echo "<br>";
        $len--;
    }
    ?>
</body>
</html>