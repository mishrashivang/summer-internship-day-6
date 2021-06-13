
<?php
$server="localhost";
$username="root";
$password="";
$database="db_internship";
$conn= mysqli_connect($server, $username,$password,$database);
if($_POST)
{
    $a=$_POST['id'];
    $b=$_POST['name'];
    $c=$_POST['gen'];
    $d=$_POST['city'];
    
}
$q= mysqli_query($conn,"insert into tbl_user(user_id,user_name,user_gender,user_city)values('$a','$b','$c','$d')") or die("error". mysqli_error($conn)) ;
if($q)
{
    echo"<script>alert('recorded')</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>shivangi mishra</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
      <?php
   
    include './theme/logo.php';
    ?>
    
<div id="wrapper"> 
	<!-- end #header -->
	
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
	  </div>
		<!-- end #content -->
                
		<!-- end #sidebar -->
		
	</div>
    
    <div>
    </div>
	
        <div id="page">
                                         
            <form action="" method= "POST">
                
<h1>REGISTRATION</h1>

<table border="4">
<pre>
<tr> <td><b> id:</b>    <input type="number" name="id"  required></td> </tr><br>
     <tr> <td><b> NAME:</b>    <input type="text" name="name"  required></td> </tr><br>
   <tr> <td><b> GENDER: </b>   <input type="radio" name="gen" required>male
                               <input type="radio" name="gen" required>female</td></tr><br>
      <tr> <td><b> city:</b>    <input type="text" name="city"  required></td> </tr><br>
                   <tr><td>    <input type="submit" name="sub" value="sign up"></td></tr>
                   
</pre>
                
</table>

</form>

            
</div>
        <?php
        include './theme/footer.php';
        ?>
</body>
</html>
