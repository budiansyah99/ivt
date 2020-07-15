<?php
$host = 'server-mysql.mysql.database.azure.com';
$username = 'budi@server-mysql';
$password = 'Jakarta123';
$db_name = 'quickstartdb';


//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM inventory');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

//<br><br>
  //printf("
  //Link AJa
  //<br>
 // 
echo "<table align=center><tr><th>No</th><th>Nama</th><th>Alamat</th></tr></table>";
//Close the connection
  ?>
  
mysqli_close($conn);

?>
