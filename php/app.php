<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<html><head></head>
<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "website";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$query = "SELECT notice_id, dept_id FROM notices";
    
$result = $conn->query($query);

    //Create an array
    $json_response = array();

   while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	foreach($row as $key=>$val){
		$row =['id'];
            $row_array[$key] = $val;     
    }
        
		//push the values in the array
       array_push($json_response,$row_array);
}
echo json_encode($json_response);

$conn->close();
     
?>  

</body>
</html>