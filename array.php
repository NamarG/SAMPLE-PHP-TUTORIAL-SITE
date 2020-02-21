<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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


    include 'includes/footer.php';
    ?>    


</body>
</html>