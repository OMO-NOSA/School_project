<?php
SESSION_START();
include_once ("php/db_connect.php");
$uname =  $_SESSION['uname'];
$fname =  $_SESSION['fname'];



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> COURSE REG </title>
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
<h3>Welcome <?php echo $fname; ?>   </h3>



<a href="home.php"> << BACK  </a>

</div>

<div class="history" >

<h2>200 LEVEL COURSES </h2> <hr/>

<?php
$query2 ="SELECT * FROM 200level WHERE username='$uname' AND reg_status='1' ";
                            $resu=mysqli_query($db_con,$query2); 
                            if($resu){
 								//	echo "yea got em!";
							}           	
                               while($row = mysqli_fetch_array($resu)){
                               $one=$row['one'];  
                               $two =$row['two'];  
                               $three =$row['three']; 
                               $four =$row['four'];
                               $five =$row['five'];  
                               $six =$row['six'];  
                               $seven =$row['seven'];  
                               $eight =$row['eight'];  
                               $nine =$row['nine'];  
                               $ten =$row['ten'];  
                               $eleven =$row['eleven'];  
                               $twelve =$row['twelve'];  
                               $thirteen =$row['thirteen'];  
                               $fourteen =$row['fourteen'];   
                              
                                echo '<ul>
                                		<li> '.$one.'  </li>  
                               			 <li> '.$two.'  </li> 
                               			 <li> '.$three.'  </li> 
                               			 <li> '.$four.'  </li> 
                               			 <li> '.$five.'   </li> 
                               			 <li> '.$six.'   </li> 
                               			 <li> '.$seven.'   </li> 
                               			 <li> '.$eight.'   </li> 
                               			 <li> '.$nine.'   </li> 
                               			 <li> '.$ten.'   </li> 
                               			 <li> '.$eleven.'   </li> 
                               			 <li> '.$twelve.'   </li> 
                               			 <li> '.$thirteen.'   </li> 
                               			 <li> '.$fourteen.'   </li> 
                          				 </ul>
                          				 ';	
	}
	
?>	
</div>
	
	
</div>




<div class="footer">
	<?PHP

include("inc/footer.inc");

?>
	
</div>









</body>
</html>