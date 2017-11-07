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
        $gender=$_GET['Gender'];
        $fname=$_GET['FirstName']; 
        $lname=$_GET['LastName'];
        $DateOfBirth=$_GET['DateOfBirth'];
        $country=$_GET['country'];
        $Street=$_GET['Street'];
        $Zipcode=$_GET['Zipcode'];
        $City=$_GET['City'];
        $nationality=$_GET['nationality'];
        echo "<div class=bgcolor>Gender = $gender</div>"; 
        echo "<div >Firstname = $fname</div>"; 
        echo "<div class=bgcolor>Lastname = $lname</div>";
        echo "<div >DateOfBirth = $DateOfBirth</div>";
        echo "<div class=bgcolor>nationality= $nationality</div>";
        echo "<div >Street = $Street</div>"; 
        echo "<div class=bgcolor>Zipcode = $Zipcode</div>";
        echo "<div >City= $City</div>";
        echo "<div class=bgcolor>country = $country</div>";
        
        $handle = fopen('fileA.txt','a');
        fwrite($handle,$gender."\n");
        fwrite($handle,$fname."\n");
        fclose($handle);
        ?>
        
        
    </body>
</html>
