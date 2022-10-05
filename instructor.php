<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>instructor ID</th>
      <th>instructor name</th>
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

$sql = "SELECT instructor_id, instructor_name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

echo  <tr>
    <td scope="row">' . $row["instructor_id"]. '</td>
                  <td>' . $row["instructor_name"] .'</td>
  <br>
  </tr>';
  }
} else {
  echo "0 results";
}
?>
  </tbody>
    </table>
    </div>
    </table>
