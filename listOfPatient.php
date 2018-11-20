<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patient search </title>
    <link rel="stylesheet" type="text/css" href="patient.css">
    <link rel="stylesheet" type="text/css" href="index.css">
<style type=text/css>
th
{
    margin-left:50;
    padding :5px;
}
body
{
background-image:url('wal7.jpeg');
}


</style>
</head>
<body>
<form method="POST" name="lop">
<center><h3 class="heading"> List of patient : </h3></center>
<table cellpadding="10">
<th>SL.No</td>
<th>PID</th>
<th>FName</th>
<th>LName</th>
<th>Age</th>
<th>Weight</th>
<th>Gender</th>
<th>Address </th>
<th>Phone No</th>
<th>Disease</th>
<th>Medicines</th>
<th> Patient Type</th>
<tr>
<?php   
if(strcmp($_GET['by'],"0")==0 || strcmp($_GET['by'],"3")==0)  
{  
    
   if(strcmp($_GET['by'],"0")==0) 
   $query_str=oci_parse($con,"select * from patient");
   else  
 {    $searchBy=$_POST['searchBy'];
     $searchField=$_POST['searchField'];
   // echo " sBy= ".$searchBy;
   // echo " sField= ".$searchField;
    if(strcmp($searchBy,"patient_id")==0)
  {  $query_str=oci_parse($con,"select * from patient where patient_id='$searchField'");
    // echo " IN pid ";
  }
  else   if(strcmp($searchBy,"pLastName")==0)
 {   $query_str=oci_parse($con,"select * from patient WHERE lName='$searchField'");
   // echo " IN lastname "; 
 } 
  else   if(strcmp($searchBy,"pFirstName")==0)
 {  $query_str=oci_parse($con,"select * from patient where fName='$searchField'");
   // echo " In PFIrst name "; 
 } 
}
 if(!oci_execute($query_str))
{
   print("error in selecting all patients : ");
   exit;
}	$count=0;
	while($data=oci_fetch_array($query_str))
    { 	 $count=$count+1;
?>
	<tr>
	<td> <?php echo $count ?> </td>
	<td> <?php echo $data[0] ?> </td>
	<td> <?php echo $data[1] ?> </td>
	<td> <?php echo $data[2] ?> </td>
	<td> <?php echo $data[3] ?> </td>
	<td> <?php echo $data[4] ?> </td>
	<td> <?php echo $data[5] ?> </td>
	<td> <?php echo $data[6] ?> </td>
	<td> <?php echo $data[7] ?> </td>
	<td> <?php echo $data[8] ?> </td>
	<td> <?php echo $data[9] ?> </td>
        <td> <?php echo $data[10] ?> </td> 
	 
              </tr>
	<?php  
 }
}
?>
</table>
</body>
</html>
