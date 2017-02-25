<?php
SESSION_START();
require 'php/db_connect.php';
$status_msg="";
if(isset($_SESSION['basic_error'])){
	$basic_error =$_SESSION['basic_error'];
	}else{
		$basic_error="";
	}
	
unset($_SESSION['basic_error']);	
	
	
if(isset($_POST['login'])) {
	                      
	                      $username= mysqli_real_escape_string($db_con,$_POST['username']);
                          $password= $_POST['password'];  
	                           
	               if ($result= $db_con->prepare("SELECT id,username,fname,status,level
	                                          FROM user WHERE username= ? AND password= ? ")){
                    $result->bind_param('ss',$username,$password);
                    $result->execute();
                    $result->store_result();
                    $count = mysqli_stmt_num_rows($result);
                    $result->bind_result($id,$uname,$fname,$status,$level);
                    $result->fetch();
                    
					}	else {
						      $status_msg = "There was a problem logging you in, we would fix this as soon as possible   ";
					}				    
										    if( $count == 1 && $status == 1){
												  $_SESSION['fname']  = $fname;  
												  $_SESSION['status'] = $status;  
					                              $_SESSION['uid'] 	  = $id;
					                              $_SESSION['uname']  = $uname;
					                              $_SESSION['level']  = $level;
					                              
												header("location:home2.php?uname=$uname ");
											} 
				                           	
				                        
										   else {
										  	$status_msg = '<span class="red"> invalid username or password..  </span>   ';
										  }
					                          
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
</div>


<div class="wrap11">

	
	
<div class="login">
	<p class="info1"> TUTORS LOGIN   </p>
	
<form method="POST" name="login" action="index2.php"  class="form-style-1">
     <p>Username  </p>
 	<input  type="text" class="form-style-1-2" name="username" placeholder="username" />
 	<p>Password  </p>
 	<input  type="password" class="form-style-1-2" name="password" placeholder="password" />
 	
 	<input  type="submit" name="login" value="login" /> <hr />
 	
 	 <a href="#" class="small-font" > click here to recover lost password. </a> <hr/>
 	
 	
 </form>
		<?php echo $status_msg; ?>	
	
	
</div>	
	
	
	
	
	
	
	
	
	
	
</div>









<div class="footer">

<?PHP

include("inc/footer.inc");

?>

	
</div>









</body>
</html>