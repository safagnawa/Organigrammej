<?php
// إستقبال البيانات القادمة من الحقول في صفحة myform.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["firstname"];
$n_ame = $_POST["lastname"];
$Age = $_POST["age"];
$Address = $_POST["address"];
$Wilaya = $_POST["wilaya"];
$Bladiya = $_POST["bladiya"];
$Raqm = $_POST["raqm"];
}

// معلومات الإتصال بقاعدة البيانات

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "last";

// إنشاء الإتصال
$conn = mysqli_connect($servername, $username, $password, $dbname);
// إختبار الإتصال
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO tpl1 (firstname, lastname, age , address, wilaya, bladiya,raqm)
VALUES ('$name', '$n_ame', $Age , '$Address', '$Wilaya', '$Bladiya', '$Raqm')";
$que = "select ID from tpl1 where firstname = $name and lastname = $n_ame";
if (mysqli_query($que) > 0) {
    echo " you are benifited " 
}else{ 

    if (mysqli_query($conn, $sql)) {
    echo "تم إرسال معلومات بنجاح";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
<form action="lo3.php" method="post"></form>
<button type="submit" class="signup-btn"> next</button>
mysqli_close($conn);

?>