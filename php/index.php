 <?php
$servername = "localhost";
$username = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
