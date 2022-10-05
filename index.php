<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>Course ID</th>
      <th>Prefix</th>
      <th>Number</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
<?php
    
$servername = "localhost";
$username = "kevinche_User1";
$password = "I<3oklahoma";
$dbname = "kevinche_HW3DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT course_id, prefix";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

echo  <tr>
    <td scope="row">' . $row["course_id"]. '</td>
                  <td>' . $row["prefix"] .'</td>
  <br>
  </tr>';
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
    </div>
    </table>
