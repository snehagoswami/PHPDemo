<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("us-cdbr-azure-southcentral-f.cloudapp.net","b4d2189d1c23c6","fe5ac0f1","acsm_dd3c02e81260654");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>