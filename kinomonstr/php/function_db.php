<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "shop";

/*$name = $_POST["name"];
$descr = $_POST["description"];
$year = $_POST["year"];

echo $name,$descr,$year;*/


// Database connect
$conn = mysqli_connect("localhost", "admin", "12345678", "kinomonster");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}else {
echo ("Sucsess!") ."<br>";
}

mysqli_set_charset($conn, "utf8");

// Dobavlenie zapisi v DB
/*$query = "INSERT INTO films VALUES (null, '$name', '$descr', '$year' ,Now())";
$conn -> query($query);*/

$query = $conn->query("SELECT * FROM `films` WHERE category_id = 1");
// $conn -> query($query);
while ($result = mysqli_fetch_assoc($query)) {
	printf ($result['name']);
	echo "<br>";
};







mysqli_close($conn);


