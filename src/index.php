<?php
  $conn = new mysqli("mysql", "root", ".sweetpwd.", "my_db");

  if ($conn->connect_error){
    die("Connection failed:" . $conn->connect_error);
  }

  $sql = "
  SELECT name
  FROM my_table_1
  ";

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo $row['name']."</br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
?>
