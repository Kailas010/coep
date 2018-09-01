<?php
$mysqli = new mysqli("localhost", "root", "", "website");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

 //Select the Database

$query = "SELECT * FROM home_items  WHERE item_type= '1'  ORDER BY item_id DESC ";
    
$result = $mysqli->query($query);

    //Create an array
    $json_response = array();

   while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
	foreach($row as $key=>$val){
            $row_array[$key] = $val;     
    }
        
		//push the values in the array
       array_push($json_response,$row_array);
}
echo json_encode($json_response);

     
    $mysqli->close();
?>
