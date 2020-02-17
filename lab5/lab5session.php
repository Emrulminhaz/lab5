<!DOCTYPE HTML>  
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form With validation and Read file PHP</title>
</head>
<body>  

 
<div class="Form-validation">
<form  action="lab5sessionlast.php" method="post">
  <table>
  <tr class="row">
  <td class="Label"> <LABEL for="gender">Gender</LABEL></td>
  <td> 
  <input type="radio" name="gender" value="female" id="gender"
  <?php if (isset($gender) && $gender ='female') echo "checked='checked'"; ?> />
  <Label for="gender">Female</Label>
  <input type="radio" name="gender" value="Male" id="gender"
  <?php if (isset($gender) && $gender ='Male') echo "checked='checked'"; ?> />
  <Label for="gender">Male</Label>
  <input type="radio" name="gender" value="Other" id="gender"
  <?php if (isset($gender) && $gender ='Other') echo "checked='checked'"; ?> />
  <Label for="gender">Other</Label>
   <?php
if (isset($error_msg["gender"]))
{
  echo "<div class='error'>".$error_msg["gender"]."</div>";
}
?></td></tr>
<tr class="row">
 <td class="Label"> <LABEL for="degree">Degree</LABEL></td>
    <td>
  <input type="radio" name="degree" value="SSC" id="degree"
  <?php if (isset($degree) && $degree ='SSC') echo "checked='checked'"; ?> />
  <Label for="degree">SSC</Label>
  <input type="radio" name="degree" value="HSC" id="degree"
  <?php if (isset($degree) && $degree ='HSC') echo "checked='checked'"; ?> />
  <Label for="gender">HSC</Label>
  <input type="radio" name="degree" value="BSC" id="degree"
  <?php if (isset($degree) && $degree ='BSC') echo "checked='checked'"; ?> />
  <Label for="degree">BSC</Label>
  <input type="radio" name="degree" value="MSC" id="degree"
  <?php if (isset($degree) && $degree ='MSC') echo "checked='checked'"; ?> />
  <Label for="degree">MSC</Label>
  <?php
if (isset($error_msg["degree"]))
{
  echo "<div class='error'>".$error_msg["degree"]."</div>";
}
?></td></tr>

<tr class="row">
  <td class="Label"> <LABEL for="BLOOD">Blood Group</LABEL></td>
        <td>
           <select name="BLOOD" id="BLOOD">
          <option name="BLOOD" value="Null" placeholder="Select a Option"> </option>   
        <option name="BLOOD" value="A+">A+</option>
        <option name="BLOOD" value="A-">A-</option>
        <option name="BLOOD" value="B+">B+</option>
        <option name="BLOOD" value="B-">B-</option>
        <option name="BLOOD" value="AB+">AB+</option>
        <option name="BLOOD" value="AB-">AB-</option>
        <option name="BLOOD" value="O+">O+</option>
        <option name="BLOOD" value="O-">O-</option>
        </select>
        <?php
if (isset($error_msg["BLOOD"]))
{
  echo "<div class='error'>".$error_msg["BLOOD"]."</div>";
}
?></td></tr>
<?php 
$name = $_POST["name"];
$email = $_POST["email"];
$birthdate = $_POST["birthdate"];?>

 <tr class="row">
  <td class="Label"> <LABEL for="submit"></LABEL></td>
  <td><input type="submit" name="form" ></td></tr>

<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["name"] = $_POST["name"] ;
$_SESSION["email"] = $_POST["email"] ;
$_SESSION["birthdate"] = $_POST["birthdate"] ;

echo "Session variables are set.";


?>



</table>
</form>
</div>