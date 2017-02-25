<?php
error_reporting(0);
SESSION_START();
include_once ("php/db_connect.php");
$fname =  $_SESSION['fname'];
$s_name =  $_SESSION['sname'];
$level =  $_SESSION['level'];



if(isset($_GET['su'] )  ){

$s_uname=$_GET['su']; 
$mat_no=$_GET['m_num']; 

 $query2 ="SELECT * FROM 400level WHERE username ='$s_uname' AND reg_status='1' ";
                            $resu=mysqli_query($db_con,$query2); 
                            if($resu){
 								//echo "yea got em!";
							}           	
                               while($row = mysqli_fetch_array($resu)){
                               $one     =$row['one'];  
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
                               $fifteen =$row['fifteen'];  
  
 
                               }
    //    echo "$nine<hr/> ";            
include_once ("php/module.php");

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

<div class="history">
<h2> <?php echo "$s_name  $mat_no"; ?>  </h2>
<h2> SET RESULT FOR 400LEVEL </h2>	<hr/>
<a href="400level.php"><< BACK  </a> 
	
<form name="grade400"	method="POST" class="form-style-1" action="php/form_process.php?u=<?php echo $s_uname;?>" >
<ul>
	<li>  <?php echo $one; ?>
		<input  type="radio" name="one" value="<?php echo $a1;?> " /> a  
		<input  type="radio" name="one" value="<?php echo $b1;?> " /> b  
		<input  type="radio" name="one" value="<?php echo $c1;?> " /> c  
		<input  type="radio" name="one" value="<?php echo $d1;?> " /> d  
		<input  type="radio" name="one" value="<?php echo $e1;?> " /> e  
		<input  type="radio" name="one" value="<?php echo $f1;?> " /> f  
	</li> <hr/>
	
		<li> <?php echo $two; ?>
		<input  type="radio" name="two" value="<?php echo $a2;?> " /> a  
		<input  type="radio" name="two" value="<?php echo $b2;?> " /> b  
		<input  type="radio" name="two" value="<?php echo $c2;?> " /> c  
		<input  type="radio" name="two" value="<?php echo $d2;?> " /> d  
		<input  type="radio" name="two" value="<?php echo $e2;?> " /> e  
		<input  type="radio" name="two" value="<?php echo $f2;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $three; ?>
		<input  type="radio" name="three" value="<?php echo $a3;?> " /> a  
		<input  type="radio" name="three" value="<?php echo $b3;?> " /> b  
		<input  type="radio" name="three" value="<?php echo $c3;?> " /> c  
		<input  type="radio" name="three" value="<?php echo $d3;?> " /> d  
		<input  type="radio" name="three" value="<?php echo $e3;?> " /> e  
		<input  type="radio" name="three" value="<?php echo $f3;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $four; ?>
		<input  type="radio" name="four" value="<?php echo $a4;?> " /> a  
		<input  type="radio" name="four" value="<?php echo $b4;?> " /> b  
		<input  type="radio" name="four" value="<?php echo $c4;?> " /> c  
		<input  type="radio" name="four" value="<?php echo $d4;?> " /> d  
		<input  type="radio" name="four" value="<?php echo $e4;?> " /> e  
		<input  type="radio" name="four" value="<?php echo $f4;?> " /> f  
	</li>			
	
 <hr/>
	
		<li> <?php echo $five; ?>
		<input  type="radio" name="five" value="<?php echo $a5;?> " /> a  
		<input  type="radio" name="five" value="<?php echo $b5;?> " /> b  
		<input  type="radio" name="five" value="<?php echo $c5;?> " /> c  
		<input  type="radio" name="five" value="<?php echo $d5;?> " /> d  
		<input  type="radio" name="five" value="<?php echo $e5;?> " /> e  
		<input  type="radio" name="five" value="<?php echo $f5;?> " /> f  
	</li>	
	
 <hr/>
	
		<li> <?php echo $six; ?>
		<input  type="radio" name="six" value="<?php echo $a6;?> " /> a  
		<input  type="radio" name="six" value="<?php echo $b6;?> " /> b  
		<input  type="radio" name="six" value="<?php echo $c6;?> " /> c  
		<input  type="radio" name="six" value="<?php echo $d6;?> " /> d  
		<input  type="radio" name="six" value="<?php echo $e6;?> " /> e  
		<input  type="radio" name="six" value="<?php echo $f6;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $seven; ?>
		<input  type="radio" name="seven" value="<?php echo $a7;?> " /> a  
		<input  type="radio" name="seven" value="<?php echo $b7;?> " /> b  
		<input  type="radio" name="seven" value="<?php echo $c7;?> " /> c  
		<input  type="radio" name="seven" value="<?php echo $d7;?> " /> d  
		<input  type="radio" name="seven" value="<?php echo $e7;?> " /> e  
		<input  type="radio" name="seven" value="<?php echo $f7;?> " /> f  
	</li>

 <hr/>
	
		<li> <?php echo $eight; ?>
		<input  type="radio" name="eight" value="<?php echo $a8;?> " /> a  
		<input  type="radio" name="eight" value="<?php echo $b8;?> " /> b  
		<input  type="radio" name="eight" value="<?php echo $c8;?> " /> c  
		<input  type="radio" name="eight" value="<?php echo $d8;?> " /> d  
		<input  type="radio" name="eight" value="<?php echo $e8;?> " /> e  
		<input  type="radio" name="eight" value="<?php echo $f8;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $nine; ?>
		<input  type="radio" name="nine" value="<?php echo $a9;?> " /> a  
		<input  type="radio" name="nine" value="<?php echo $b9;?> " /> b  
		<input  type="radio" name="nine" value="<?php echo $c9;?> " /> c  
		<input  type="radio" name="nine" value="<?php echo $d9;?> " /> d  
		<input  type="radio" name="nine" value="<?php echo $e9;?> " /> e  
		<input  type="radio" name="nine" value="<?php echo $f9;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $ten; ?>
		<input  type="radio" name="ten" value="<?php echo $a10;?> " /> a  
		<input  type="radio" name="ten" value="<?php echo $b10;?> " /> b  
		<input  type="radio" name="ten" value="<?php echo $c10;?> " /> c  
		<input  type="radio" name="ten" value="<?php echo $d10;?> " /> d  
		<input  type="radio" name="ten" value="<?php echo $e10;?> " /> e  
		<input  type="radio" name="ten" value="<?php echo $f10;?> " /> f  
	</li>

 <hr/>
	
		<li> <?php echo $eleven; ?>
		<input  type="radio" name="eleven" value="<?php echo $a11;?> " /> a  
		<input  type="radio" name="eleven" value="<?php echo $b11;?> " /> b  
		<input  type="radio" name="eleven" value="<?php echo $c11;?> " /> c  
		<input  type="radio" name="eleven" value="<?php echo $d11;?> " /> d  
		<input  type="radio" name="eleven" value="<?php echo $e11;?> " /> e  
		<input  type="radio" name="eleven" value="<?php echo $f11;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $twelve; ?>
		<input  type="radio" name="twelve" value="<?php echo $a12;?> " /> a  
		<input  type="radio" name="twelve" value="<?php echo $b12;?> " /> b  
		<input  type="radio" name="twelve" value="<?php echo $c12;?> " /> c  
		<input  type="radio" name="twelve" value="<?php echo $d12;?> " /> d  
		<input  type="radio" name="twelve" value="<?php echo $e12;?> " /> e  
		<input  type="radio" name="twelve" value="<?php echo $f12;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $thirteen; ?>
		<input  type="radio" name="thirteen" value="<?php echo $a13;?> " /> a  
		<input  type="radio" name="thirteen" value="<?php echo $b13;?> " /> b  
		<input  type="radio" name="thirteen" value="<?php echo $c13;?> " /> c  
		<input  type="radio" name="thirteen" value="<?php echo $d13;?> " /> d  
		<input  type="radio" name="thirteen" value="<?php echo $e13;?> " /> e  
		<input  type="radio" name="thirteen" value="<?php echo $f13;?> " /> f  
	</li>
	
 <hr/>
	
		<li> <?php echo $fourteen; ?>
		<input  type="radio" name="fourteen" value="<?php echo $a14;?> " /> a  
		<input  type="radio" name="fourteen" value="<?php echo $b14;?> " /> b  
		<input  type="radio" name="fourteen" value="<?php echo $c14;?> " /> c  
		<input  type="radio" name="fourteen" value="<?php echo $d14;?> " /> d  
		<input  type="radio" name="fourteen" value="<?php echo $e14;?> " /> e  
		<input  type="radio" name="fourteen" value="<?php echo $f14;?> " /> f  
	</li>

 <hr/>
	
		<li> <?php echo $fifteen; ?>
		<input  type="radio" name="fifteen" value="<?php echo $a15;?> " /> a  
		<input  type="radio" name="fifteen" value="<?php echo $b15;?> " /> b  
		<input  type="radio" name="fifteen" value="<?php echo $c15;?> " /> c  
		<input  type="radio" name="fifteen" value="<?php echo $d15;?> " /> d  
		<input  type="radio" name="fifteen" value="<?php echo $e15;?> " /> e  
		<input  type="radio" name="fifteen" value="<?php echo $f15;?> " /> f  
	</li>
	
 <hr/>

</ul>	

<input  type="submit" name="grade400" value="SUBMIT RESULT" />


</form>	
	
	
</div>




	
	
</div>




<div class="footer">
	<?PHP

include("inc/footer.inc");

?>
	
</div>









</body>
</html>