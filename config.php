<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstn = $_POST["firstn"];
$lastn = $_POST["lastn"];
$email = $_POST["email"];
$password = $_POST["password"];
$city = $_POST["city"];
$adress = $_POST["adress"];
$zcode = $_POST["zcode"];
$date = $_POST["date"];

}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cash_bank";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable (firstn, lastn, email ,password,city,adress,zcode,date)
VALUES ('$firstn', '$lastn', '$email' , '$password', '$city', '$adress', '$zcode', '$date')";

if (mysqli_query($conn, $sql)) {
echo "sended";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
