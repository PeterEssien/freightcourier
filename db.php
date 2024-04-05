<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("ft8.h.filess.io","FreightCourier_beneathmap","140d470c11a886db03456d477a299c18e6fc19fc","FreightCourier_beneathmap","3306");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
