<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
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
<td width="180px" valign="top"><?php  include("Left.php"); ?></td>
<td width="720px" valign="top">
<!-- Login HTML Start -->
<form name="loginfrm" action="logincode.php" method="post">
<table width="350px" align="center" cellpadding="0" cellspacing="5" id="innertable" style="border-style:solid; border-color:#FFCC00; border-width:2px">
<tr bgcolor="#FFCC00"><td colspan="2" align="center">User Login</td></tr>
<tr><td>Username</td><td><input type="text" id="username" name="username" /></td></tr>
<tr><td>Password</td><td><input type="password" id="password" name="password" /></td></tr>
<tr><td></td><td><input type="checkbox" id="chk1" name="chk1" />Remember me</td></tr>
<tr>
<td></td>
<td><input type="submit" id="btnsubmit" name="btnsubmit" value="Login" />
</td></tr>
<tr><td></td><td><label id="abc" style="color:#FF0000"></label></td></tr>
</table>
<!-- Login HTML End -->
</td>
</tr>
<tr><td colspan="2" align="center"><?php include("Bottom.php"); ?></td></tr>
</table>
</form>
<?php
if(isset($_REQUEST['id']))
{
$id=$_REQUEST['id'];
if($id==1)
echo "<script>document.getElementById('abc').innerHTML='Invalid username'</script>";
else if($id==2)
echo "<script>document.getElementById('abc').innerHTML='Invalid password'</script>";
}
?>
</body>
</html>
