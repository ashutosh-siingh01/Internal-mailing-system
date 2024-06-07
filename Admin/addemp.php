<?php 
include_once("include/config.php"); 
?>
<?php
if(isset($_COOKIE['uname'])){
$un=$_COOKIE['uname'];
echo "Welcome  ".$un;
}
else{
echo "<script>window.location='Login.php'</script>";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin : Add Employee</title>
<style type="text/css">
    .style2
    {
        font-size: small;
    }
    .style3
    {
        font-size: small;
        font-weight: bold;
    }
#innertable {
	margin-top: 10px;
}
</style>
</head>

<body>
<table width="900px" align="center" style="border-style:solid; border-color:#CCCCCC; border-width:1px" cellpadding="0" cellspacing="0">
<tr><td colspan="2" align="center"><?php include("Top.php"); ?></td></tr>
<tr>
<td width="180px" valign="top"><?php include("Left.php"); ?></td>
<td width="720px" valign="top">
<!-- Change Password HTML Start -->
<form name="changepasswordfrm" action="" method="post">
<table width="100%" align="center" cellpadding="0" cellspacing="5" id="innertable" style="border-style:solid; border-color:#FFCC00; border-width:2px">
<tr bgcolor="#FFCC00"><td colspan="2" align="center">Add Employee</td></tr>
<tr bgcolor="#FF9933"><Td colspan="2">User Detail</Td></tr>
<tr><td>Firstname</td><td><input type="text" id="firstname" name="firstname" style="width:300px" /></td></tr>
<tr><td>Lastname</td><td><input type="text" id="lastname" name="lastname" style="width:300px" ></td></tr>
<tr bgcolor="#FF9933"><Td colspan="2">Login Detail</Td></tr>
<tr><td>Username</td><td><input type="text" id="username" name="username" style="width:300px" /></td></tr>
<tr><td>Password</td><td><input type="password" id="password" name="password" style="width:200px" ></td></tr>
<tr><td>Confirm Password</td><td><input type="password" id="cpassword" name="cpassword" style="width:200px" ></td></tr>
<tr>
<td></td>
<td><input type="submit" id="btnsubmit" name="btnsubmit" value="Submit" />
</td></tr>
<tr><td></td><td><label id="abc" style="color:#FF0000"></label></td></tr>
</table>
</form>
<!-- Change Password HTML End -->
</td>
</tr>
<tr><td colspan="2" align="center"><?php include("Bottom.php"); ?></td></tr>
</table>
<?php
if(isset($_POST['btnsubmit']))
{
//$db=new DB_CLASS();

$fn=strtoupper($_POST['firstname']);
$ln=strtoupper($_POST['lastname']);
$un=strtolower($_POST['username']);
$pwd=md5(strtolower($_POST['password']));
$role='user';
$rdate=date('Y-m-d');

$sql="Insert into regtb(Firstname,Lastname,Username,Password,Role,RegDate) values('$fn','$ln','$un','$pwd','$role','$rdate')";
$result=mysqli_query($conn,$sql);
if($result){
echo "<script>document.getElementById('abc').innerHTML='Registration Completed  Successfully';</script>";
}
}
?>
</body>
</html>
