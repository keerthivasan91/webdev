<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "root", "college", 3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form
$name = $_POST['name'];
$usn = $_POST['usn'];
$branch = $_POST['branch'];

// Insert into student table
$sql = "INSERT INTO students (name, usn, branch) VALUES ('$name', '$usn', '$branch')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Student registered successfully!</h3>";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Display all students
$result = mysqli_query($conn, "SELECT * FROM students");

echo "<h3>All Registered Students:</h3>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>USN</th>
    <th>Branch</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['usn']}</td>
        <td>{$row['branch']}</td>
    </tr>";
}
echo "</table>";

mysqli_close($conn);
?>
