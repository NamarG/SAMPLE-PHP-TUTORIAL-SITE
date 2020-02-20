<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manipulation</title>
</head>
<body>
    
    <?php
        $title = "String Manipulation";
        include 'includes/navigation.php';

        echo "<hr/><h1>String Manipulation</h1><h2>String Concatenation</h2>";
        $phrase1 = "why didnt you do your homework";
        $phrase2 = "my dog ate it";

        echo "<p>".$phrase1."</p><p>".$phrase2."</p>";
    ?>

    <h2>functions on strings</h2>
    <?php
        echo "<p>".ucfirst($phrase1)."</p><p>".ucfirst($phrase2)."</p>";
        echo "<p>".ucwords("this was all lower case and i used ucwords()")."</p>";
        echo "<p>".strtoupper("this was all lower case and i used strtoupper()")."</p>";
        echo "<p>".strtolower("THIS WAS ALL UPPER CASE AND I USED STRTOLOWER()")."</p>";

        echo "<BR>";
        echo "<BR>";
        echo "<BR>";
        echo "<BR>";

        echo "did the line breaks work";
        echo "<BR>";

        echo str_repeat("repeated ",5);
        echo "<BR>";
        //nested function
        echo strtoupper(str_repeat("repeated ",5));
        echo "<BR>";
        echo ucwords("get a substring: ").strtoupper(substr($phrase1,22,8));
        echo "<BR>";
        echo "<BR>";

        echo "get position of a string ". strpos($phrase1,"homework");
        echo "<BR>";
        echo "get position of a string ". strpos($phrase1,"h");
        echo "<BR>";
        echo "<BR>";
        echo "find characters do: ". strchr($phrase1,"do");

        echo "<BR>";
        echo "str length for phrase1 = ". strlen($phrase1);
        echo "<BR>";
        echo "<BR>";

        $trimtest= " B C D ";
        echo "Without Trim :"."A".$trimtest."E";
        echo "<BR>";
        echo "With Trim :"."A".trim($trimtest)."E";
        echo "<BR>";
        echo "With Trim right :"."A".rtrim($trimtest)."E";
        echo "<BR>";
        echo "With Trim left :"."A".ltrim($trimtest)."E";
        echo "<BR>";


    ?>



</body>
</html>