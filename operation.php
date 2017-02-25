<?php

if(isset($_GET['su'] )  ){

$s_uname=$_GET['su']; 
$mat_no=$_GET['m_num']; 
} 
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>OPERATION  </title>
<meta name="" content="">
<link type="text/css" rel="stylesheet" href="styles/main.css" > </link>
</head>
<body>
<div class="header">
  
<img src="images/logo_uniben.png" />  	
<img src="images/title.png" /> 	
	
</div>



<div class="wrap1">
	
<div class="history">

<ul>
	<li><a href="100level_result.php?su=<?php echo $s_uname; ?>&m_num=<?php echo $mat_no; ?> ">SET 100 LEVEL RESULT   </a>   </li>
	<li><a href="edit_grade.php?su=<?php echo $s_uname; ?>&m_num=<?php echo $mat_no; ?> ">EDIT 100 LEVEL RESULT   </a>   </li>
	
	<hr/>
	<p class="info" >Allow Student Edit Course Reg For </p>
	<form name="edit" method="POST" class="form-style-1" action="php/form_process.php?uname=<?php echo $s_uname;?> ">
		 <select name="edit1" >
		 	<option name="edit1" value="100">100level  </option>
		 	<input type="submit" name="edit" value="submit" />
		 </select>
		
	</form>
	
</ul>
 

</div>	
	
	

	
	
</div>




<div class="footer">
	<?PHP

include("inc/footer.inc");

?>
	
</div>









</body>
</html>