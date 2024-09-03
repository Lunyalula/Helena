<?php
include 'db.php';

$sql = "SELECT id, name, email, phone, gender, marital FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'> <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Marital Status</th>
            <th>Actions</th>
        </tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["email"].
         "</td><td>" . $row["phone"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["marital"].
          "</td><td><a href='update.php?id=".$row['id']."'>Edit</a> |
           <a href='delete.php?id=".$row['id']."'>Delete</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
 <a href="create.php">Add New User</a>