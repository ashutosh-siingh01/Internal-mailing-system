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
<title>User : Change Password</title>
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
	margin-top: 150px;
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
<table width="350px" align="center" cellpadding="0" cellspacing="5" id="innertable" style="border-style:solid; border-color:#FFCC00; border-width:2px">
<tr bgcolor="#FFCC00"><td colspan="2" align="center">Change Password</td></tr>
<tr><td>Old Password</td><td><input type="password" id="oldpassword" name="oldpassword" /></td></tr>
<tr><td>New Password</td><td><input type="password" id="newpassword" name="newpassword" /></td></tr>
<tr><td>Confirm Password</td><td><input type="password" id="cpassword" name="cpassword" /></td></tr>
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

$un=$_COOKIE['uname'];
$op=md5($_POST['oldpassword']);
$np=md5($_POST['newpassword']);

$sql="Select * from regtb where username='$un' and Password='$op'";
$result=mysqli_query($conn,$sql);
$count=mysqli_num_rows($result);

if($count>0)
{
$sql1="Update Regtb set password='$np' where username='$un'";
$result1=mysqli_query($conn,$sql1);
if($result1){
echo "<script>document.getElementById('abc').innerHTML='Password Changed Successfully';</script>";
}
}
else
{
echo "<script>document.getElementById('abc').innerHTML='Invalid Old Password';</script>";
}

}
?>
</body>
</html>
