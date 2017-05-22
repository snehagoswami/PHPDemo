<?php
 // DB connection info
 

     $conn = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b4d2189d1c23c6","fe5ac0f1");
	if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

	 $sql = "CREATE DATABASE acsm_dd3c02e81260654";

if(mysqli_query($conn, $sql)){
    echo "Database demo created successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?> 
 