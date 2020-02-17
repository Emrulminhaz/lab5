<!DOCTYPE HTML>  
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Registration form with session</title>
</head>
<body>  

 
<div class="Form-validation">
<form  action="lab5session.php" method="post">
  <table>
  <tr class="row">
  <td class="Label"> <LABEL for="name">NAME</LABEL></td>
    <td><input class="text" type="text" id="name" name="name" placeholder="NAME">
    <?php
if (isset($error_msg["name"]))
  {echo "<div class='error'>".$error_msg["name"]."</div>";
}
?>
</td> 
  </tr>
  <tr class="row">
    <td class="Label"> <LABEL for="email">E-MAIL</LABEL></td>
    <td><input class="text" type="text" id="email" name="email" placeholder="E-Mail">
    <?php
if (isset($error_msg["email"]))
{
  echo "<div class='error'>".$error_msg["email"]."</div>";
}
?></td> </tr>
    <tr class="row">
  <td class="Label"> <LABEL for="birthdate">DATE OF BIRTH</LABEL></td>
   <td><input type="Date" name="birthdate" id="birthdate" >
   <?php
if (isset($error_msg["birthdate"]))
{
  echo "<div class='error'>".$error_msg["birthdate"]."</div>";
}
?></td></tr>

 <tr class="row">
  <td class="Label"> <LABEL for="submit"></LABEL></td>
  <td><input type="submit" name="form" ></td></tr>


</table>
</form>
</div>
