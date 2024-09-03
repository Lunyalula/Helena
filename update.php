<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "No record found";
    }
}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $marital = $_POST['marital'];

    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', gender='$gender', marital='$marital'
     WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header('Location: read.php');
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
    <style>
        body{
            
            background-color: green;
            align-items: center;
        }
    </style>
</head>
<body  >
    <center>
        <h2 style="color:#ffff">Update User:</h2>
        <form action="" method="post">
                <h4 style="color:#ffff">Personal Information:</h4>
                <div style="text-align:center;">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

                    Name: <br>
                    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
                    
                    Email: <br>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
                    
                    Phone: <br>
                    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required><br>
                    
                    Gender: <br>
                    <input type="radio" name="gender" value="Male" <?php echo ($row['gender'] == 'Male') ? 'checked' : ''; ?> required>Male
                    <input type="radio" name="gender" value="Female" <?php echo ($row['gender'] == 'Female') ? 'checked' : ''; ?> required>Female
                    <br><br>

                    Marital Status: <br>
                    <input type="text" name="marital" value="<?php echo $row['marital']; ?>" required><br>
                    
                    <button type="submit" name="update">Update</button>
                </div>
            </fieldset>
        </form>
    </center>
</body>
</html>
