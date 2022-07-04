<?php
$inputuser = $_POST['user'];
$inputpass = $_POST['pass'];

$user = "root";
$password = "fara";
$database = "users";

$conn = mysqli_connect("localhost", $user, $password);
mysqli_select_db($conn, $database);

$query = "SELECT * FROM users WHERE (user = '$inputuser')";
$querypass = "SELECT * FROM users WHERE (password = '$inputpass')";

$result = mysqli_query($conn, $query);
$resultpass = mysqli_query($coon, $querypass);

$row = mysqli_fetch_array($result);
$rowpass = mysqli_fetch_array($resultpass);

$serveruser = $row["user"];
$serverpass = $row["password"];

// if ($serveruser&&$serverpass) {
// 	// if (!$result) {
// 		die("error: " . mysqli_connect_error());
// 	}

if ($conn === false) {
  die("Ошибка: " . mysqli_connect_error());
}

// echo "Подключение успешно установлено";

mysqli_close($conn);

// echo $inputpass;
// echo $serverpass;

if ($inputpass == $serverpass) {
		header('Location: index2.html');
		exit();
		
	}
	else {
		header("refresh:0.1;url=login.html");
		echo '<script>alert("Sorry, bad login!")</script>';
		exit();
	}


?>