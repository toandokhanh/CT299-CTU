<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id =  $_POST['id'];

	  
$sql = "DELETE FROM student WHERE ID='".$id."'";


if ($conn->query($sql) == TRUE) {
  header('Location: taidulieu_bang1.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






<?php


// $sql = ' select * from " dssv " ';
// $result = oci_parse($link ,$sql ) ;
// oci_execute($result);
//       while($row = oci_fetch_row ($result)){
//       $msv = $row [0] ;
//       $hovaten- $row [1] ;
//       $namhoc = $row [2] ;
//       $kyhoc = $row [3] ;
//       $khoahoc = $row [4] ;
//       $phonghoc- $row [9] ;
//       $giangvien = $row [11] ;

//       }
//       ?>