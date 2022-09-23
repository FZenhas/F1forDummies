<?php 

include('conn.php');

$sql = "SELECT * FROM news ORDER BY RAND() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  echo $row['text'];
}
$conn->close();
?>