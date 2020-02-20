<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
    <?php
        $title = "Functions";
        include 'includes/navigation.php';
    echo "<hr/><h1>Functions</h1>";
    function addfunction($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    }
    echo addfunction(3,7);
    $num = 2;
    echo "<br><hr/>";
    echo "<hr/>";
    echo addfunction(3,$num);
    echo "<br><hr/>";

    // function that changes variable by  putting "&" in function input it allows this 
    $number = 0;
    function changenum(&$inpnum){
        $inpnum = $inpnum + 100;
    }
    changenum($num);
    echo $num;


    // echo changenum($number+2);
    
    ?>
</body>
</html>