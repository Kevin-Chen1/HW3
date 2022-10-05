<?php require_once("header.php"); ?>
<!doctype html>
<html lang="en">

  <table class="table table-striped">
  <thead>
    <tr>
      <th>section id</th>
      <th>instructor id</th>
      <th>course id</th>
      <th>section number</th>
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

$sql = "SELECT section_id, instructor_id, course_id, section_number";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

echo  <tr>
    <td scope="row">' . $row["section_id"]. '</td>
                  <td>' . $row["instructor_id"] .'</td>
                  <td>' . $row["course_id"] .'</td>
                  <td>' . $row["section_number"] .'</td>
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
