<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statement</title>
</head>
<body>
<?php
    $title = "Switch Statements";
    include 'includes/navigation.php';
    echo "<hr/><h1>Switch Statements</h1>";

    $grade="d";

 switch($grade){
    case 'a':
        echo"<h1>you are a superstar</h1>";
        break;
    case 'b':
        echo "<h1>you passed with grade ".$grade."</h1>";
        break;
    default: echo "<h1>you have failed</h1>";
    break;

 }
?>

</body>
</html>