<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>patient search </title>
    <link rel="stylesheet" type="text/css" href="patient.css">
   <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<form action="listOfPatient.php?by=<?php echo 3;?>" method="POST" name="lop">
<center><h3 class="heading"> Patient search .</h3></center>

<tr>
       <td>#Search By - </td>
       <td> <select name="searchBy" required>
                  <option value=""> <span style="color:red" > * </span>Select</option>
                  <option value="patient_id">patient Id</option>
                  <option value="pLastName">Patient Last Name</option>
                  <option value="pFirstName">Patient First Name</option>

              </select>
</tr> <br> <br>
<tr>
      <td>Enter required Field : </td>
</tr>
<tr> 
      <td> <input id="searchField" type='text'  name="searchField" placeholder="Enter ID/FirstName/LastName " ><br><br> </td> 
</tr>
<tr>
    <td><input class="btn" type="submit" name="submit" value="Submit"></td>
    <td><input class="btn" type="reset" name="reset" value="Reset"></td>
</tr>
</body>
</html>
