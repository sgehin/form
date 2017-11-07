<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon-form.png" />
        <title>Formulier</title>
        <link rel="stylesheet" type="text/css" href="myStyle.css">
    </head>
    <body>
        <p> <h2>Registration of Personalia</h2>
        <h6>For externals</h6>
             
        <table> 
            <tr>
                <td background="img/white.jpg" width=300px"> 
                    <p><h4>Personal information</h4></p>
                    <form action="action_page.php" method="GET">
                        <input type="radio" name="Gender" value="Female">Female<br>
                        <input type="radio" name="Gender" value="Male">Male<br><br> 
                        First name: <input type="text" name="FirstName" value="" required><br>
                        Last name: <input type="text" name="LastName" value="" required><br><br>
                        Date of birth<input type="text" name="DateOfBirth" value="" maxlength="10" size="10">dd-mm-yyyy<br><br>
                        Country:<input list="country" name="country" required>
                                <datalist id="country">
                                    <option value="Belgie">
                                    <option value="Duitsland">
                                    <option value="Engeland">
                                    <option value="Frankrijk">
                                    <option value="Nederland">
                                </datalist>
                        <p><h4>Private address</h4></p>
                        <input type="text" name="Street" value="" required>Street<br>
                        <input type="text" name="Zipcode" value="">Zipcode<br>
                        <input type="text" name="City" value="" required>City<br><br>
                    
                        E-mail: <input type="email" name="usremail" required>                                      
                        <input type="submit" value="Submit"><br>       
                    </form>
                </td>
            </tr>
        
        
       
                
        
    </body>
</html>