<?php
include_once("include/config.php"); 
//$db=new DB_CLASS();
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
<title>User : Reply</title>

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
	margin-top: 50px;
}
a{
text-decoration:none;
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
<form name="composefrm" action="" method="post">
<table width="600px" align="center" cellpadding="0" cellspacing="5" id="innertable" style="border-style:solid; border-color:#FFCC00; border-width:2px">
<tr bgcolor="#FFCC00"><td colspan="2" align="center">Reply Mail</td></tr>
<?php
if(isset($_REQUEST['id']))
{
$mid=$_REQUEST['id'];
$sql="Select * from mailtb where mid='$mid'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$to=$row['mailfrom'];
}
?>

<tr>
<td valign="top">To</td>
<td valign="top"><input type="text" name="to" id="to" style="width:300px" value=<?php echo $to ?> /></td>
</tr>
<tr><td valign="top">Subject</td>
<td valign="top">
<input type="text" name="subject" id="subject" style="width:300px"  />
</td>
</tr>
<tr>
<Td>Message</Td>
<td>
<textarea id="message" name="message" style="width:300px; height:100px">
</textarea>
</td>
</tr>
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
$from=$_COOKIE['uname'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$md=date('Y-m-d h:i:s');
$df='n';
$dt='n';

$to=$_POST['to'];
$sql="Insert into MailTB(mailfrom,mailto,mailsubject,mailmessage,maildate,delfrom,delto) values('$from','$to','$subject','$message','$md','$df','$dt')";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "<script>alert('Mail Send Successfully');</script>";
echo "<script>window.location='outbox.php';</script>";
}
}

?>

</body>
</html>
