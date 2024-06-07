<?php include_once("include/config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Co. Internal MailServer : Feedback</title>
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
	margin-top: 130px;
}
</style>
<script>
function check()
{
fn=document.getElementById("firstname");
if(fn=="")
{
alert("Require First Name");
return false;
}
}
</script>
</head>

<body>
<table width="900px" align="center" style="border-style:solid; border-color:#CCCCCC; border-width:1px" cellpadding="0" cellspacing="0">
<tr><td colspan="2" align="center"><?php include("Top.php"); ?></td></tr>
<tr>
<td width="180px" valign="top"><?php include("Left.php"); ?></td>
<td width="720px" valign="top">
<!-- Feedback HTML Start -->
<form name="feedbackfrm" action="" method="post" onsubmit="return check();">
<table width="500px" align="center" cellpadding="0" cellspacing="5" id="innertable" style="border-style:solid; border-color:#FFCC00; border-width:2px">
<tr bgcolor="#FFCC00"><td colspan="2" align="center">Feedback</td></tr>
<tr><td>Firstname</td><td><input type="text" id="firstname" name="firstname" /></td></tr>
<tr><td>Lastname</td><td><input type="text" id="lastname" name="lastname" /></td></tr>
<tr><td>Email</td><td><input type="text" id="email" name="email" /></td></tr>
<tr><td>Feedback</td><td>
<textarea id="feedback" name="feedback"></textarea>
</td></tr>

<tr><td></td><td><input type="submit" id="btnsubmit" name="btnsubmit" value="Submit" /></td></tr>
</table>
</form>
<!-- Feedback HTML End -->
</td>
</tr>
<tr><td colspan="2" align="center"><?php include("Bottom.php"); ?></td></tr>
</table>
<?php
if(isset($_POST['btnsubmit']))
{
//$db=new DB_CLASS();
$fn=$_POST['firstname'];
$ln=$_POST['lastname'];
$em=$_POST['email'];
$fd=$_POST['feedback'];
$fdate=date('Y-m-d');

$sql="Insert into feedbacktb(Firstname,Lastname,Email,Feedback,FeedbackDate) values('$fn','$ln','$em','$fd','$fdate')";
$result=mysqli_query($conn,$sql);
if($result){
echo "<script>alert('Feedback submitted successfully');</script>";
}

}
?>
</body>
</html>
