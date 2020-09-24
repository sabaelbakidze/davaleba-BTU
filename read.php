<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "btu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `id`, `product_name`, `description`, `created_at` FROM `products`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Product: " . $row["product_name"]. "  descritpion: " . $row["description"]. " created at: ". $row["created_at"];
  }
} else {
  echo "0 results";
}
$conn->close();
?>

</body>
</html>

