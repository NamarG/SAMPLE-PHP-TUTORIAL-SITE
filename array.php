<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays</title>
</head>
<body>
    
    <?php
    $title = "Arrays";
    include 'includes/navigation.php';

    echo "<h1>Arrays</h1>";
    $numbers = array(1,2,3,4,5,6,7,8,9,10);
    $count=0;
    while($count<10){
        echo "<p>".$numbers[$count]."</p>";
        $count++;
    }

    $size = count($numbers);
    echo "<h1>numbers in array = ".$size."</h1>";
    ?>    


</body>
</html>