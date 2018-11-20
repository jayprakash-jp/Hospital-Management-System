<?php
include("connect.php");
?>
<?php
if($_POST['submit'])
{  
    $fname=$_POST['fname'];
  //  echo "fname : ".$fname;
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $phoneNo=$_POST['phoneNo'];
    $disease=$_POST['disease'];
    $doctorId=$_POST['doctoeId'];
    $address=$_POST['address'];
    $medicine=$_POST['medicine'];
    $patType=$_POST['patType'];
   
if(strcmp($patType,"in")==0)
{
   //  echo " indoor";
    $admDate=$_POST['admDate'];
    $disDate=$_POST['disDate'];
    $roomNo=$_POST['roomNo'];
    $bedNo=$_POST['be'];
}
else if(strcmp($patType,"out")==0)
{  // echo " outdoor";
    $outpatDate=$_POST['outpatDate'];
}
else if(strcmp($patType,"reffered")==0)
{  // echo " reffred";
    $refferedTo=$_POST['refferedTo'];
    $refferedDate=$_POST['refferedDate'];
  //  echo $refferedDate;
}
$rn=uniqid();
//echo "randomNum=".$rn;
$q="Insert into patient(patient_id,fname, lname,age,weight,gender,address,mob_no,disease,medicines,patient_type) values('$rn','$fname','$lname','$age','$weight','$gender','$address','$phoneNo','$disease','$medicine','$patType')";
$q_str=oci_parse($con,$q);
if(!oci_execute($q_str,OCI_COMMIT_ON_SUCCESS))
{  
    print ("Error1");
   exit(1);
}
//else print ("sucess ");

if(strcmp($patType,"in")==0)
{ $rn2=uniqid();
$q="Insert into indor(indor_id,admission_date,discharge_date,room_no,bed_no) 
values('$rn2','$admDate','$disDate','$roomNo','$bedNo')";
$q_str=oci_parse($con,$q);
if(!oci_execute($q_str,OCI_COMMIT_ON_SUCCESS))
{   
    print ("Error2");
}
else print ("Your record has saved sucessfully ! ");
}
else if(strcmp($patType,"out")==0)
{ $rn3=uniqid();
$q="Insert into outdoor(outdoor_id,date_dis)
values('$rn3','$outdate')";
$q_str=oci_parse($con,$q);
if(!oci_execute($q_str,OCI_COMMIT_ON_SUCCESS))
{
    print ("Error3");
    exit(1);
}
else print ("your record has saved successfully! ");
}
else   
{ $rn4=uniqid();
$q="Insert into reffered(reffered_id,reffered_date,reffered,patient_id)
values('$rn4','$refferedDate','$refferedTo')";
$q_str=oci_parse($con,$q);
if(!oci_execute($q_str,OCI_COMMIT_ON_SUCCESS))
{
   print("Error4 ");
   exit(1);
}
else print ("Your record has saved successfully. ");
}
}   
 else echo "please submit first";
?>
