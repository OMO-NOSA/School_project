<?php
error_reporting(0);
SESSION_START();
include_once ("php/db_connect.php");
$fname =  $_SESSION['fname'];
$uname =  $_SESSION['uname'];

if(isset($_SESSION['regerror1'])){
	$regerror1 =$_SESSION['regerror1'];
	}else{
		$regerror1="";
	}
	
unset($_SESSION['regerror1']);


$query2 ="SELECT reg_status FROM 100level WHERE username='$uname' ";
                            $resu=mysqli_query($db_con,$query2); 
                            $count1 = mysqli_num_rows($resu);
                            if($resu){
 									//echo "yea got em!";
							}           	
                               while($row = mysqli_fetch_array($resu)){
                               $reg_status=$row['reg_status'];  
                               }

if($reg_status==0 || $count1==0 ){
	$reg='<a href="course_reg.php">  REGISTER 100 LEVEL COURSES </a>  <br/> ';
	
	
}else{
    $reg='<a href="course_reg_view.php"> VIEW 100 LEVEL REGISTERED COURSES </a> <br/> ';	
}
///////////////////////////////////////////////////////////////////////////////////////////////////
$query3 ="SELECT result_stat FROM 100level_result WHERE username='$uname' ";
                            $resu=mysqli_query($db_con,$query3); 
                            $count1r = mysqli_num_rows($resu);
                            if($resu){
 									//echo "yea got em!";
							}           	
                               while($row = mysqli_fetch_array($resu)){
                               $result_stat=$row['result_stat'];  
                               }
                               if($result_stat ==1){
							   	$result='<a href="student_result.php">  CHECK 100LEVEL RESULT </a> <br/> ';
							   	$next_reg1='<a href="course_reg2.php">  REGISTER 200 LEVEL COURSES </a>  <br/> ';
							   }else{
							   	$result='';
							   	$next_reg1="";
							   }
							   
							   
							   
							   
////////////////////////////////////////////////////////////////////////////////////////////////////// for 200level
$query200 ="SELECT reg_status FROM 200level WHERE username='$uname' ";
                            $resu200=mysqli_query($db_con,$query200);
                            $count2 = mysqli_num_rows($resu200); 
                            if($resu200){
 									//echo "yea got em!";
							}           	
                               while($row200= mysqli_fetch_array($resu200)){
                               $reg_status200=$row200['reg_status'];  
                               }

if($reg_status200==0 && $result_stat==1  ){
	$reg200='<a href="course_reg2.php">  REGISTER 200 LEVEL COURSES </a>  <br/> ';
	
	
}elseif($reg_status200==1 && $result_stat==1   )   {
    $reg200='<a href="course_reg_view2.php"> VIEW 200 LEVEL REGISTERED COURSES </a> <br/> ';	
}else{
	$reg200="";
}
///////////////////////////////////////////////////////////////////////////////////////////////////
$query200_2 ="SELECT result_stat FROM 200level_result WHERE username='$uname' ";
                            $resu200_2=mysqli_query($db_con,$query200_2); 
                            if($resu200_2){
 									//echo "yea got em!";
							}           	
                               while($row200_2 = mysqli_fetch_array($resu200_2)){
                               $result_stat200_2=$row200_2['result_stat'];  
                               }
                               if($result_stat200_2 ==1){
							   	$result200_2='<a href="student_result2.php">  CHECK 200LEVEL RESULT </a> <br/> ';
							   	$next_reg200_2='<a href="course_reg2.php">  REGISTER 300 LEVEL COURSES </a>  <br/> ';
							   }else{
							   	$result200_2='';
							   	$next_reg200_2="";
							   }

////////////////////////////////////////////////////////////////////////////////////////////////////// for 300level
$query300 ="SELECT reg_status FROM 300level WHERE username='$uname' ";
                            $resu300=mysqli_query($db_con,$query300); 
                            if($resu300){
 									//echo "yea got em!";
							}           	
                               while($row300= mysqli_fetch_array($resu300)){
                               $reg_status300=$row300['reg_status'];  
                               }

if($reg_status300==0 && $result_stat200_2==1  ){
	$reg300='<a href="course_reg3.php">  REGISTER 300 LEVEL COURSES </a>  <br/> ';
	
	
}elseif($reg_status300==1 && $result_stat200_2==1   )  {
    $reg300='<a href="course_reg_view3.php"> VIEW 300 LEVEL REGISTERED COURSES </a> <br/> ';	
}else{
	$reg300="";
}
///////////////////////////////////////////////////////////////////////////////////////////////////
$query300_3 ="SELECT result_stat FROM 300level_result WHERE username='$uname' ";
                            $resu300_3=mysqli_query($db_con,$query300_3); 
                            if($resu300_3){
 									//echo "yea got em!";
							}           	
                               while($row300_3 = mysqli_fetch_array($resu300_3)){
                               $result_stat300_3=$row300_3['result_stat'];  
                               }
                               if($result_stat300_3 ==1){
							   	$result300_3='<a href="student_result3.php">  CHECK 300LEVEL RESULT </a> <br/> ';
							   	$next_reg300_3='<a href="course_reg4.php">  REGISTER 400 LEVEL COURSES </a>  <br/> ';
							   }else{
							   	$result300_3='';
							   	$next_reg300_3="";
							   }
////////////////////////////////////////////////////////////////////////////////////////////////////// for 300level
$query400 ="SELECT reg_status FROM 400level WHERE username='$uname' ";
                            $resu400=mysqli_query($db_con,$query400); 
                            if($resu400){
 									//echo "yea got em!";
							}           	
                               while($row400= mysqli_fetch_array($resu400)){
                               $reg_status400=$row400['reg_status'];  
                               }

if($reg_status400==0 && $result_stat300_3==1  ){
	$reg400='<a href="course_reg4.php">  REGISTER 400 LEVEL COURSES </a>  <br/> ';
	
	
}elseif($reg_status400==1 && $result_stat300_3==1   )  {
    $reg400='<a href="course_reg_view4.php"> VIEW 400 LEVEL REGISTERED COURSES </a> <br/> ';	
}else{
	$reg400="";
}
///////////////////////////////////////////////////////////////////////////////////////////////////
$query400_4 ="SELECT result_stat FROM 400level_result WHERE username='$uname' ";
                            $resu400_4=mysqli_query($db_con,$query400_4); 
                            if($resu400_4){
 									//echo "yea got em!";
							}           	
                               while($row400_4 = mysqli_fetch_array($resu400_4)){
                               $result_stat400_4=$row400_4['result_stat'];  
                               }
                               if($result_stat400_4 ==1){
							   	$result400_4='<a href="student_result4.php">  CHECK 400LEVEL RESULT </a> <br/> ';
							   	$next_reg400_4='<a href="course_reg4.php">  REGISTER 400 LEVEL COURSES </a>  <br/> ';
							   }else{
							   	$result400_4='';
							   	$next_reg400_4="";
							   }


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>NOSA  </title>
<meta name="" content="">
<link type="text/css" rel="stylesheet" href="styles/main.css" > </link>
</head>
<body>
<div class="header">
  
<img src="images/logo_uniben.png" />  	
<img src="images/title.png" />
  	 	
<a href="logout.php">Log out  </a>
	
</div>



<div class="wrap1">

<div class="slides">
<h2>Welcome <?php echo $fname; ?>   </h2><hr/>
<h3> <?php echo $regerror1; ?> </h3> <br/><br/>
<h3>100 LEVEL </h3>
<?php echo $reg; ?>

<?php echo $result; ?>
<br/>
<br/>
<h3>200 LEVEL  </h3>
<?php echo $reg200; ?>

<?php echo $result200_2; ?>

<br/>
<br/>
<h3>300 LEVEL  </h3>
<?php echo $reg300; ?>

<?php echo $result300_3; ?>
<br/>
<br/>
<br/>
<h3>400 LEVEL  </h3>
<?php echo $reg400; ?>

<?php echo $result400_4; ?>

<br/>
<br/>
<br/>



</div>


	
	
</div>




<div class="footer">
	
	<?PHP

include("inc/footer.inc");

?>
</div>









</body>
</html>