<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icon-form.png" />
        <title>Formulier</title>
        <link rel="stylesheet" type="text/css" href="myStyle.css">
    </head>
    <body>
        <?php
        
        $fname=$_GET['FirstName']; 
        $lname=$_GET['LastName'];
        
        echo "<div class=bgcolor>Firstname = $fname</div><br>"; 
        echo "<div class=bgcolor>Lastname = $lname</div><br>";
        ?>
    </body>
</html>
