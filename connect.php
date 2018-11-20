<?php
// echo "connect.php page";
$con=oci_connect("kalpajyoti_csb16","kalpajyoti","192.168.125.4/oracle10");
if(!$con)
{ $err=oci_error();
  print("Error in connection to DB: ".$err);
  exit(1);
}
//else print ("Connected to DB : ");
?>
