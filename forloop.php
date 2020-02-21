<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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


        include 'includes/footer.php';
    
    ?>
    


</body>

</html>