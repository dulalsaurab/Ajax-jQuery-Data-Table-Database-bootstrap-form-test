
<?php 
if(isset($_POST['text'])){

	$searchText = $_POST['text']; 
  // echo "didnt find anything here".$searchText;
}



$mysqli = new mysqli("localhost", "root", "", "telephone",8080);
if ($mysqli->connect_errno) {
    #echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{

		#echo "Connected to the databse"."\n";

}
$searchText = mysql_real_escape_string($searchText);
$sql = "SELECT *FROM directory WHERE name LIKE '%{$searchText}%' or address LIKE '%{$searchText}%'";
// echo $sql;
if ($result=mysqli_query($mysqli,$sql))
  {
  // Fetch one and one row
    $fetchData = array();
  while ($row=mysqli_fetch_row($result))
    {
      $Data = array('name' => $row[2],
                         'mobileNo' => $row[4],
                         'email' => $row[5],
                         'address' => $row[6],
                         'comapnyName' => $row[7],
                         'companyPhone' => $row[9]);
    $fetchData[] = $Data;

    }
    echo json_encode($fetchData);
  // Free result set
  mysqli_free_result($result);
}

mysqli_close($mysqli);

?>