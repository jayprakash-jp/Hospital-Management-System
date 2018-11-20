<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patient Info</title>
    <link rel="stylesheet" type="text/css" href="patient.css">
<style type="text/css">
body{
  background-image:url("patientReg.jpeg");
}
</style>
</head>
<body>
<center><h3 class="heading"> Patient Information.</h3></center>

<form action="patientInfo.php" name="RegForm" method="POST" name="patientReg" onsubmit="return checkForInvalid()">
<table cellpadding=1>
    <tr>
      <td>First Name : </td> 
      <td> <input id="fname" type='text'  name="fname" placeholder="Enter your First Name" required><br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Last Name :  </td>
      <td> <input id="lname" type='text'  name="lname" placeholder="Enter your last Name" required ><br><br> </td> 
    </tr>

     <tr>
      <td>Age:  </td>
      <td> <input id="age" type='text'  name="age" placeholder="Enter your age" required ><br><br> </td> 
    <!-- </tr>

    <tr> -->
      <td>Weight:  </td>
      <td> <input id="age" type='text'  name="weight" placeholder="Enter your weight" required><br><br> </td> 
    </tr>
    <tr>
          <td>Gender</td>
          <td><input type="radio" name="gender" value="M" checked> Male
              <input type="radio" name="gender" value="F"> Female
              <input type="radio" name="gender" value="O"> Other

          </td>
    <!-- </tr>
    <tr> -->
          <td>Date of Birth</td>
          <td><input type="text" name="dob" placeholder="DD-MM-YYYY" maxlength="10" required></td>
    </tr>

     <tr>
          <td>Phone Number</td>
          <td> <input type="tel" name="phoneNo" value="" required maxlength="11"> </td>
    <!-- </tr>
    <tr> -->
          <td>Disease</td>
          <td><input type="text" name="disease" value="" ></td>
    </tr>   
    <tr> 
          <td>Doctor Id</td>
          <td><input type="number" name="doctorId"> </td>
    </tr>   
    <tr>  
          <td>Address : </td>
          <td><textarea name="address" cols="40" rows="5" placeholder="Enter your Address" required maxlength="20"></textarea></td>
    <!-- </tr>
	<tr> -->
          <td>Medicines</td>
          <td><input type="text" name="medicine" placeholder="Medicine Given" value="" maxlength="20" ></td>
    </tr>
    <tr id="type">
          <td>Patient Type</td>
          <td> <input type="radio" name="patType" value="in" checked> Indoor
          <input type="radio" name="patType" value="out"> Outdoor
          <input type="radio" name="patType" value="reffered"> referred </td>
    </tr>
      </table>

 <br>
       <p><span style="color:red"> * </span> For indoor patients</p>
        <table cellpadding=10>
          <tr>
            <td>Admission date </td>
            <td> <input type="text" name="admDate"  maxlength="10"> </td>
          </tr>
          <tr>
            <td>Discharge date </td>
            <td> <input type="text" name="disDate"  maxlength="10"> </td>
          </tr>
          <tr>
            <td>Room No </td>
            <td> <input type="number" name="roomNo" > </td>
          </tr>
          <tr>
            <td>Bed No.</td>
            <td> <input type="number" name="bedNo"> </td>
          </tr>
        </table>

       <p><span style="color:red"> * </span> For outdoor patients</p>
       <table cellpadding=10>  
       <tr>
            <td> Date </td>
            <td> <input type="text" name="outPatDate"  maxlength="10"> </td>
          </tr>
          <table>
          <p><span style="color:red"> * </span> For Reffered patients</p>
          <table cellpadding=10> 
          <tr>
            <td> Reffered to</td>
            <td> <input type="text" name="refferedTo" placeholder="Hospital Name /Doctor Name">  </td>
          </tr>
          <tr>
            <td> Reffered date</td>
            <td> <input type="text" name="refferedDate"placeholder="DD-MM-YYYY" maxlength="10" >  </td>
          </tr>
         
          <tr>
    <td><input class="btn" type="submit" name="submit" value="Submit"></td>
    <td><input class="btn" type="reset" name="reset" value="Reset"></td>
    </tr>
        </table>
</form>
<hr>

</body>
</html>
