<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/icon-form.png" />
        <title>Formulier</title>
        <link rel="stylesheet" type="text/css" href="myStyle.css">
    </head>
    <body>
        <p><img src='New-Circle.png'><h2>Registration of Personalia</h2>
        <h6>For externals</h6>
        </p> <!-- img werktniet -->
        
        <table>
            <tr>
                <td>
                    <p><h4>Personal information</h4></p>
                <form action="action_page.php" method="GET">
                    <input type="radio" name="Gender" value="Female">Female<br>
                    <input type="radio" name="Gender" value="Male">Male<br><br> 
                    First name: <input type="text" name="FirstName" value=""><br>
                    Last name: <input type="text" name="LastName" value=""><br><br>
                    Date of birth<input type="text" name="DateOfBirth" value="" maxlength="10" size="10">dd-mm-yyyy<br><br>
                        Country:<input list="nationality" name="nationality">
                                <datalist id="nationality">
                                    <option value="United states">
                                    <option value="Europe">
                                    <option value="Africa">
                                    <option value="Asia">
                                    <option value="China">
                                </datalist>
                        <input type="submit" value="Submit">  
                    <p><h4>Private address</h4></p>
                    <input type="text" name="Street" value="">Street<br>
                    <input type="text" name="Zipcode" value="">Zipcode<br>
                    <input type="text" name="City" value="">City<br><br>
                        Country:<input list="country" name="country">
                                <datalist id="country">
                                    <option value="United states">
                                    <option value="Europe">
                                    <option value="Africa">
                                    <option value="Asia">
                                    <option value="China"><br>
                    <input type="submit" value="Submit">       <!-- submit knop verdwenen van formulier????-->
                </form>
                </td>
            </tr>
        </table>
                
        
    </body>
</html>