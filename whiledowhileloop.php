<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - do while/while loops</title>
</head>
<body>
    <?PHP
        $title = "While/Do While Loops";
        include 'includes/navigation.php';
        echo "<hr/><H1>While Loop</H1>";
        $grade = 0;
        while($grade<10){
            echo "<p>grade is less than 10</p>";
            $grade++;
        }
    ?>

    <H1>Do While Loop</H1>
    <?php
    $grade = 0;
        do{
            echo "<p>i am do while loop</p>";
            $grade++;
        }while($grade<10);

        $size = count($numbers);
        echo "<h1>numbers in array = ".$size."</h1>";


        include 'includes/footer.php';

    ?>
</body>
</html>