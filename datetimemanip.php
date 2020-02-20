<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Date And Time Manipulation</title>
</head>
<body>
    <h1>Date And Time Manipulation</h1>
    <?php
    $datenow= getdate();

    echo "<h3>Todays Date</h3>";
    echo $datenow["mday"]."/".$datenow["mon"]."/".$datenow["year"]."<br/>";
    echo date("d/m/y G.i:s<br>",time()) ."<br/>";
    
    print "today is ";
    print date("j of F Y, \a\\t g.i a", time());
    print "<br>";
    print time();



    ?>
</body>
</html>