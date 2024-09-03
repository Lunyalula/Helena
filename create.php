<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $marital = $_POST['marital'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, phone, gender, marital, password)
     VALUES ('$name', '$email', '$phone', '$gender', '$marital', '$password')";

    if ($conn->query($sql) === TRUE) {
        header('Location: read.php');
        exit();
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
      <link rel="stylesheet" href="kipenzi.css">
</head>
<body>
    <center>
        <h2><i>Self Form:</i></h2>
        <form action="create.php" method="post">
            <fieldset>
                <legend>Personal Information:</legend>
                <div style="text-align:left;">
                    Name: <br>
                    <input type="text" name="name" required><br>
                    
                    Email: <br>
                    <input type="email" name="email" required><br>
                    
                    Phone: <br>
                    <input type="text" name="phone" required><br>
                    
                    Gender: <br>
                    <input type="radio" name="gender" value="Male" required>Male
                    <input type="radio" name="gender" value="Female" required>Female
                    <br><br>

                    Marital Status: <br>
                    <input type="text" name="marital" required><br>
                   
                    Password: <br>
                    <input type="password" name="password" required><br><br>
                    <a href="read.php"><button type="submit" name="submit">login</button></a>
                </div>
            </fieldset>
        </form>
    </center>
</body>
</html>
