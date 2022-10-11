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
//tao chuoi luu cau lenh sql
$sql = "SELECT * FROM student";
//thuc thi cau lenh sql va dua doi tuong vao $result
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
  
//   //cach 1: show du lieu nhu bien
//   //show gia tri trong mang
	print_r ($result);
	echo '<br>';
	echo '<br>';
	
//   //Cach 2: show theo tung dong voi for
echo "<table border=1>
              <tr>  
                  <th>ID</th>
                  <th>Hoten</th>
                  <th>email</th>
                  <th>ngaysinh</th>
              </tr>";
  while($row = $result->fetch_assoc()) {
    
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fullname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["Birthday"]. "</td></tr>";
    }
   echo "</table>";
  
} else {
  echo "0 ket qua tra ve";
}
$conn->close();
?>
