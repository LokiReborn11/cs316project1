<?php
  $search = $_POST['nsearch'];
  $servername = "localhost";
  $username = "Jack";
  $password = "pass";
  $db = "";

  $conn = new mysqli($servername, $username, $password, $db);

  if($conn->connect_error){
      die("Connection Failed:". $conn->connect_error);
  }

  $sql = "SELECT * FROM students WHERE name LIKE '%$search%'";
  $result = $conn->query($sql);
  if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
      echo $row["name"]. " ".$row["faction"]."<br>";
    }
  }else{
    echo "No records found";
  }

  $conn->close();

?>
