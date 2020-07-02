<?php
session_start();
ob_start();
?>
<?php include('php/db.php');?>


							<?php
$err=isset($_GET['error'])?$_GET['error']:""; 
if($err=='error'){?>
<div class="errormsgbox">Username and password don't match.</div>	
<?php }

if(!isset($_SESSION['adminuser'])){
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$adminuser=mysql_real_escape_string($_POST['adminuser']); 
$adminpassword=mysql_real_escape_string($_POST['adminpassword']); 
$gpassword=md5($adminpassword); // Encrypted Password
$sql="SELECT id FROM admin WHERE adminuser='$adminuser' and adminpassword='$gpassword'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
{
	
$_SESSION["adminuser"] = $adminuser;

header("location:../functions/dashboard.php");
}
else
{
header("location:../login/login.php?error=error");

}
}
ob_end_flush();

?>
                                
				
                            
        
<?php }else{
header("location:../functions/dashboard.php");
}
?>

