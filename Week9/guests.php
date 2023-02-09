<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>My Personal Website</title>
 <link rel="stylesheet" href="style.css" title="type" />
<body>
</br> </br> 
<center>
<h2>My Guests</h2>
</br> 
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, email FROM myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"].  " Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</br>
<a href="Form.php">return</a></button>
</center>
</body>
</html>
