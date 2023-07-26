<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evmak";

$conn = new mysqli($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed:".$conn->connection_error);
}
echo "<table border='1'>
<tr>
    <th>First name</th>
    <th>Middle name</th>
    <th>Last name</th>
    <th>Registration number</th>
    <th>Email</th>
    <th>Mobile number</th>
    <th>Degree</th>
    <th>Year </th>
    <th>Gender</th>
    <th>Certificate</th>
</tr>";

$sql = "SELECT * from evform";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()){ ?>
    <tr>
    <td><?=$row['firstname']?></td>
    <td><?=$row['middlename']?></td>
    <td><?=$row['surname']?></td>
    <td><?=$row['regnumber']?></td>
    <td><?=$row['email']?></td>
    <td><?=$row['mobilenumber']?></td>
    <td><?=$row['degree']?></td>
    <td><?=$row['year']?></td>
    <td><?=$row['gender']?></td>
    <td><?=$row['certificate']?></td>
    </tr>
    <?php }; 



// echo "First Name: " .$row['firstname'] . "<br>";
// echo "Middle Name: " .$row['middlename'] . "<br>";
// echo "Last Name: " .$row['surname'] . "<br>";
// echo "Registration number: " .$row['regnumber'] . "<br>";
// echo "Email: " .$row['email'] . "<br>";
// echo "Phone: " .$row['mobilenumber'] . "<br>";
// echo "Degree Program: " .$row['degree'] . "<br>";
// echo "Year of study: " .$row['year'] . "<br>";
// echo "Gender: " .$row['gender'] . "<br>";
// echo "Certificate: " .$row['certificate'] . "<br>";

$conn->close();
?>