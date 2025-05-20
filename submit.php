<?php
// Connect to MySQL
$conn = mysqli_connect("localhost", "root", "root", "web",3307);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data using $_REQUEST
$name = $_REQUEST['name'];
$address1 = $_REQUEST['address1'];
$Phonenumber = $_REQUEST['Phonenumber'];
$email = $_REQUEST['email'];

// Insert data into table
$sql = "INSERT INTO contacts (name, address1, Phonenumber, email)
        VALUES ('$name', '$address1', '$Phonenumber', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "<h3>Contact saved successfully!</h3>";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Display all data from the table
$result = mysqli_query($conn, "SELECT * FROM contacts");

echo "<h3>All Contact Entries:</h3>";
echo "<table border='1'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address Line 1</th>
    <th>Address Line 2</th>
    <th>Email</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['address1']}</td>
        <td>{$row['Phonenumber']}</td>
        <td>{$row['email']}</td>
    </tr>";
}

echo "</table>";

mysqli_close($conn);
?>