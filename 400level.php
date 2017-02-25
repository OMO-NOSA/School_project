<?php
error_reporting(0);
SESSION_START();
include_once ("php/db_connect.php");
$fname =  $_SESSION['fname'];
$level =  $_SESSION['level'];



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
<h3>Welcome <?php echo $fname; ?>   </h3>
<h2>Course Adviser 400 LEVEL     </h2> <hr/>
<a href="home2.php"><< BACK  </a> 
<?php

 $query2 ="SELECT * FROM user WHERE level='400' AND status='0' ";
                            $resu=mysqli_query($db_con,$query2); 
                            if($resu){
 								//	echo "yea got em!";
							}           	
                               while($row = mysqli_fetch_array($resu)){
                               $s_name     =$row['fname'];  
                               $mat_no =$row['mat_no'];  
                               $s_uname =$row['username'];  
                               $_SESSION['sname']  = $s_name; 
                               echo'<ul>    
<li><a href="operation4.php?su='.$s_uname.'&m_num='.$mat_no.' ">'.$s_name.'&nbsp;&nbsp;&nbsp;&nbsp;'.$mat_no.' </a>  </li>
                                   </ul>    ';
                               
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