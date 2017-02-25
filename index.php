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
										    if( $count == 1 && $status == 0){
												  $_SESSION['fname']  = $fname;  
												  $_SESSION['status'] = $status;  
					                              $_SESSION['uid'] 	  = $id;
					                              $_SESSION['uname']  = $uname;
					                              $_SESSION['level']  = $level;
					                              
												header("location:home.php?uname=$uname ");
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
  	
  
<form name="login" class="form-style-1" action="index.php" method="POST" >
		STUDENT LOGGING<br/>
	<input type="text" name="username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password" />
	<input  type="submit" name="login" value="Login" />
	<a href="index2.php" >Admin  </a>
</form> 	
	
</div>



<div class="wrap">
<div class="slide">
<img src="images/phy_sci1.png" />	
</div>	
	
<div class="history">
 
 
<p> <h2> History </h2> </p>

The Department of Computer Science was established in 1998/99 session,During the 1983/84 acdemic session,under-graduate teaching in Computer Science was started.The essence of B.Sc degree is to produce enough qualified and competent Computer Scientist and Information Technologists for the country. <br/> <br/>

 

<h2> AIMS AND OBJECTIVES </h2>
 
The programme for the Bacher of Science degree in Computer Science is designed to provide training in the theory and application of Computer science. Thus it emphasises the importance of the underlying theory of variuos branches of Computer Science and Provided a wide spectrum of application areas for students. The objectives of the course therefore are as follows:

<ul>
    <li> To produce Computer Science graduates who are academically equipped to take on advanced coures in Computer Science and or related areas,thus stinulating development and research in these ares and also who ware capable of applying computer science and computer technology in solving problems in industries,business,government and the society in general </li>
   <li> to provide suitable service course for specialists in pther desciplines to enable these specialst to increase their competence,skill and level of proficiency on their various work fields </li>
   <li> to make available modern development in information technology </li>
   <li> To serve as the nerve centre of computer research and developmnet efforts of the University of Benin </li>
</ul>
<br/> Faculty: 
Physical Sciences
<br/>HOD: 
Dr Mrs V.V.N Akwukwuma
Programmes: 
<br/> B.Sc (Computer Science)
Diploma in Data Processing

 
        </div>	
	
	

	
	
</div>




<div class="footer">

<?PHP

include("inc/footer.inc");

?>

	
</div>









</body>
</html>