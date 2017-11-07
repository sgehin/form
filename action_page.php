<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icon-form.png" />
        <title>Formulier</title>
        <link rel="stylesheet" type="text/css" href="myStyle.css">
        <script>
        function back(){
            onclick:href="index.php";
        }
        </script>
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
        $usremail=$_GET['usremail'];
                
        $handle = fopen('fileA.txt','a');
        fwrite($handle,'GENDER : '.$gender."\n");
        fwrite($handle,'FIRSTNAME : '.$fname."\n");
        fwrite($handle,'LASTNAME : '.$lname."\n");
        fwrite($handle,'DATE OF BIRTH : '.$DateOfBirth."\n");
        fwrite($handle,'COUNTRY : '.$country."\n");
        fwrite($handle,'STREETNAME : '.$Street."\n");
        fwrite($handle,'ZIPCODE : '.$Zipcode."\n");
        fwrite($handle,'CITY : '.$City."\n");
        fwrite($handle,'EMAIL : '.$usremail."\n");
        fwrite($handle,'-----------------------------------------'."\n");
        fclose($handle);
        
        echo "Thank you for filling in the form.";
                   
        ?>
        <br><br>
        <button><a href="index.php">back</a></button>
        
        
    </body>
</html>
