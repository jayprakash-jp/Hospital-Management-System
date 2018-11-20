<?php
include("connect.php");
?>
<?php
if($_POST['submit'])
{   $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $age=$_POST['age'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $phoneNo=$_POST['phoneNo'];
    $doctorId=$_POST['doctorId'];
    $spec=$_POST['spec'];
     $address=$_POST['address'];
  // echo $fname.$lname.$age.$dob.$gender.$phoneNo.$doctorId.$spec.$address;
    $rn=uniqid();
   // echo "random Num = ".$rn;
   $q="Insert into doctor(doctor_id,fname,lname,age,dob,gender,mob_no,doctorunique_id,specialization,address) values('$rn','$fname','$lname','$age','$dob','$gender','$mob_no','$doctorId','$spec','$address')";
$q_str=oci_parse($con,$q);
if(!oci_execute($q_str,OCI_COMMIT_ON_SUCCESS))
{  print("Error1");
} else print ("succesfully saved.");

}
 else echo "submit first ";
