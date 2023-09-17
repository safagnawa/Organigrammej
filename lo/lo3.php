<?php
// إستقبال البيانات القادمة من الحقول في صفحة myform.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["urnamr"];
$email = $_POST["uremail"];
$subj = $_POST["title"];
$message = $_POST["message"];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myform";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO mytable (urnamr, uremail, title ,message)
VALUES ('$name', '$email', '$subj' , '$message')";

if (mysqli_query($conn, $sql)) {
echo "تم إرسال معلومات بنجاح";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>