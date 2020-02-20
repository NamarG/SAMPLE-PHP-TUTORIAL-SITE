<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test site - If Statements</title>
</head>
<body>
    
<?php         
    $title = "If Statements";
    include 'includes/navigation.php';
    echo "<hr/><h2>if statement</h2>";
    $grade = 100;

    if($grade >= 100){
        echo "<H2 style='color: green'>you have passed with 100% your a superstar</H2>";
    }elseif($grade >=50){
        echo "<h2 style='color: lightgreen'>you have passed</h2>";
    }else{
    echo "<h2 style='color: red'>you have failed</h2>";
    }
?>

</body>
</html>