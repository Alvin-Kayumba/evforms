<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evmak";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
    // Retrieve the form data
    $fname = $_POST['firstname'];
    $mname = $_POST['middlename'];
    $lname = $_POST['surname'];
    $regno = $_POST['regnumber'];
    $aemail = $_POST['email'];
    $mnumber = $_POST['mobilenumber'];
    $degree= $_POST['degree'];
    $yos = $_POST['year'];
    $gender = $_POST['gender'];
    $certificate = $_POST['certificate'];

    // Prepare and execute the SQL statement to insert the data into the database
    $sql = "INSERT INTO evform(firstname,middlename,surname,regnumber,email,mobilenumber,degree,year,gender,certificate)
            VALUES ('$fname', '$mname', '$lname', '$regno',  '$aemail', '$mnumber',  '$degree', '$yos',  '$gender', '$certificate' )";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration succesful')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();


?>