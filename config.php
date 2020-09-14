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

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cash_bank";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable (firstn, lastn, email ,password,city,adress,zcode,date)
VALUES ('$firstn', '$lastn', '$email' , '$password', '$city', '$adress', '$zcode', '$date')";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>