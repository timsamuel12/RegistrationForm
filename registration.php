<?php
    if(isset($_POST['submit']))
    {
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $date = $_POST['date'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
    }

?>

<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset ="UTF-8">
    <title>Registration Form</title>
</head>
<body>
    <h1>Register Below</h1>

    <form method = "post">
    First Name:
        <input type ="text" name = "fname" placeholder = "Enter First Name"><br><br>
    Last Name:
        <input type ="text" name = "lname" placeholder ="Enter Last Name"><br><br>
    Date:
        <input type ="date" name ="date" placeholder = "Enter Date of Birth"><br><br>
    Email:
        <input type ="text" name="email" placeholder ="Enter a valid email address"><br><br>
    Password:
        <input type ="text" name="pass" placeholder ="Enter desired password"><br><br>
    <input type ="submit" name ="submit" value ="Registration">
    </form>"
</body>
</html>
