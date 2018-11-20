<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor search </title>
    <link rel="stylesheet" type="text/css" href="patient.css">
    <link rel="stylesheet" type="text/css" href="index.css">
<style type=text/css>
th
{
    margin-left:50;
    padding :5px;
}
</style>
</head>
<body> 
<?php
 //  echo "by=".$_GET['by'];
?>
<form method="POST" name="lod">
<br>
<center><h3 class="heading"> List of Doctor : </h3></center><br>
<table cellpadding="10">
<th>SL.No</td>
<th>doctor_ID</th>
<th>FName</th>
<th>LName</th>
<th>Age</th>
<th>dob</th>
<th>Gender</th>
<th>Phone No</th>
<th>Doctor U.ID </th>
<th> Specialization</th>
<th>Address</th>
<tr>
<?php
if(strcmp($_GET['by'],"0")==0 || strcmp($_GET['by'],"3")==0)
{

 if(strcmp($_GET['by'],"0")==0)
 $query_str=oci_parse($con,"select * from doctor");
 else
 {   $searchBy=$_POST['searchBy'];
     $searchField=$_POST['searchField'];
//      echo " sBy= ".$searchBy;
  //    echo " sField= ".$searchField;
     if(strcmp($searchBy,"Doctor_id")==0)
   {  $query_str=oci_parse($con,"select * from doctor where doctor_id='$searchField'");                                        // echo " IN D.id "; 
   }
     else   if(strcmp($searchBy,"dLastName")==0)
   {  $query_str=oci_parse($con,"select * from doctor WHERE lName='$searchField'");
  //    echo " IN lastname ";
    }
     else if(strcmp($searchBy,"dFirstName")==0)
   {  $query_str=oci_parse($con,"select * from doctor where fName='$searchField'");
    //  echo "In DFIrst name";
    }
}
 if(!oci_execute($query_str))
{
      print("error in selecting all doctor : ");
      exit;
}
        $count=0;
        while($data=oci_fetch_array($query_str))
    {    $count=$count+1;
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
        </tr>
        <?php
      }
   }   ?>

</table>
</body>
</html>
