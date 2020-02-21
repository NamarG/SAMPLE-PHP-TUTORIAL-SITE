<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP Primer - Date And Time Manipulation</title>
</head>
<body>
    
    <?php
    $title = "Date & Time Manipulation";
    include 'includes/navigation.php';

    print "<h1>Date And Time Manipulation</h1>";
    $datenow= getdate();

    echo "<h3>Todays Date</h3>";
    echo $datenow["mday"]."/".$datenow["mon"]."/".$datenow["year"]."<br/>";
    echo date("d/m/y G.i:s<br>",time()) ."<br/>";
    
    //print "today is ";
    //print date("j of F Y, \a\\t g.i a", time());
    //print "<br>";
    print time();

    
    include 'includes/footer.php';

    ?>
</body>
</html>