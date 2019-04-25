<?php
$servername = "https://apecpv.co.th:3307";
$username = "root";
$password = "Adicet@212";
$dbname = "project_erdi";

/////////////////////////////Create connection/////////////////////////////////
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
mysqli_set_charset($conn,"utf8");

$sql = "SELECT * FROM `user`";
$result = $conn->query($sql);
$data = array();
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['id'];
    }
} else {
   echo "no data"
}
echo json_encode($data);
$conn->close();
?> 
