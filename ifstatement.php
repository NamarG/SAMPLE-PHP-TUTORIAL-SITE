<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

    include 'includes/footer.php';
?>

</body>
</html>