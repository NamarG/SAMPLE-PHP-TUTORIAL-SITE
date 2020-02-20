<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For Loop</title>
</head>

<body>
      
    <?php 
        $title = "For Loops";
        include 'includes/navigation.php';
        print "<h1>For Loop Demo Page</h1>";
        //for loop
        for($count=0; $count<=10; $count++){
            echo "<p>hello world count = ".$count."</p>";
        }
    ?>
    


</body>

</html>