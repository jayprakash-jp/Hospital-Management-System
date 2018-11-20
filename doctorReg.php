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
  /*background-image:url('patientReg.jpeg'); */
  }
   header
{
       background-image:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)); 
        
        height: 100vh;
        background-size: cover;
        background-position: center;
}
</style>

</head>
<body background="patientReg.jpeg">
<header>
<center><h3 class="heading"> Doctor Information.</h3></center>

<form action="doctorInfo.php" method="POST" name="doctorReg">
<table cellpadding=12>
    <tr>
      <td>First Name : </td> 
      <td> <input id="fname" type='text'  name="fname" placeholder="Enter your First Name" required maxlength="15"> </br><br> </td> 
    <!-- </tr>
    <tr> -->
      <td>Last Name :  </td>
      <td> <input id="lname" type='text'  name="lname" placeholder="Enter your last Name" required maxlength="15" ><br><br> </td> 
    </tr>

     <tr>
      <td>Age:  </td>
      <td> <input id="age" type='text'  name="age" placeholder="Enter your age" required><br><br> </td> 
    </td>
    <!-- </tr>
    <tr> -->
          <td>Date of Birth</td>
          <td><input type="text" name="dob" placeholder="DD-MM-YYYY" required maxlength="10"></td>
    </tr>
    <tr>
          <td>Gender</td>
          <td><input type="radio" name="gender" value="M" checked > Male
              <input type="radio" name="gender" value="F"> Female
              <input type="radio" name="gender" value="O"> Other
     <tr>
          <td>Phone Number</td>
          <td> <input type="text" name="phoneNo" value=""required maxlength="11" > </td>
    <!-- </tr>   
    <tr>  -->
          <td>Doctor Unique Id</td>
          <td><input type="text" name="doctorId"required maxlength="10" > </td>
    </tr>   
    <tr>
        <td>Specialization</td>
        <td> <select name="spec" required>
                  <option value=""> <span style="color:red" > * </span>Select</option>
                  <option value="Allergist ">Allergist</option>
                  <option value="Anesthesiologist  ">Anesthesiologist</option>
                  <option value="Cardiologist ">Cardiologist</option>
                  <option value="Dermatologist ">Dermatologist</option>
                  <option value="Gastroenterologist ">Gastroenterologist</option>
                  <option value="Nephrologist">Nephrologist</option>
                  <option value="Neurologist">Neurologist</option>
                  <option value="Orthopaedic">Orthopaedic</option>
                  <option value="Plastic Surgeon">Plastic Surgeon</option>
              </select>
      </tr>
    <tr>  
          <td>Address : </td>
          <td><textarea name="address" cols="40" rows="5" placeholder="Enter your Address" required maxlength="15"></textarea></td>
    </tr>
       <br>
    <tr>
    <td><input class="btn" type="submit" name="submit" value="Submit"></td>
    <td><input class="btn" type="reset" name="reset" value="Reset"></td>
    </tr>
      </table>
</form>
<hr>
</header>
</body>
</html>
