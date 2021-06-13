<?php
$server="localhost";
$username="root";
$password="";
$database="db_internship";
$conn= mysqli_connect($server, $username,$password,$database);
if($_POST)
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gen=$_POST['gen'];
    $city=$_POST['city'];
    
}
$q= mysqli_query($conn,"insert into tbl_user(user_id,user_name,user_gender,user_city)values('{$id}','{$name}','{$gen}','{$city}')") or die("error". mysqli_error($conn)) ;
if($q)
{
    echo"<script>alert('recorded')</script>";
}
?>
<html>
    <head>
    <tittle></tittle>
    <body>


<form action="#" method= "POST">
                
<h1>REGISTRATION</h1>

<table border="4">
<pre>
<tr> <td><b> id:</b>    <input type="number" name="id"   required></td> </tr><br>
     <tr> <td><b> NAME:</b>    <input type="text" name="name" required></td> </tr><br>
   <tr> <td><b> GENDER: </b>   <input type="radio" name="gen" required>male
                               <input type="radio" name="gen" required>female</td></tr><br>
      <tr> <td><b> mobile:</b>    <input type="number" name="mob"  required></td> </tr><br>
                   <tr><td>    <input type="submit" name="sub" value="sign up"></td></tr>
                   
</pre>
                
</table>

</form>
            <body>

    </head>
</html>