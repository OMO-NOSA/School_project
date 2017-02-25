<?php
SESSION_START();
include_once ("php/db_connect.php");

$fname =  $_SESSION['fname'];

if(isset($_SESSION['regerror1'])){
	$regerror1 =$_SESSION['regerror1'];
	}else{
		$regerror1="";
	}
	
unset($_SESSION['regerror1']);


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title> 300 LEVEL COURSE REG </title>
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



<a href="home.php"> Home  </a>

</div>

<div class="history" >

<h2> REGISTER 300LEVEL COURSES NOW  </h2> <hr/>
<h3> <?php echo $regerror1; ?> </h3> <br/><br/>
<form name="reg300" class="form-style-1" method="POST" action="php/form_process.php">

1
<select name="one">
<option default>empty  </option>
<option name="one" value="csc313">csc313 </option>
<option name="one" value="csc316">csc316 </option>
<option name="one" value="csc318">csc318 </option>
<option name="one" value="mth317">mth317 </option>
<option name="one" value="csc314">csc314 </option>
<option name="one" value="csc311">csc311 </option>
<option name="one" value="bus312">bus312 </option>
<option name="one" value="ced300">ced300 </option>
<option name="one" value="csc333">csc333 </option>
<option name="one" value="csc328">csc328 </option>
<option name="one" value="csc326">csc326 </option>
<option name="one" value="csc325">csc325 </option>
<option name="one" value="csc321">csc321 </option>
<option name="one" value="csc329">csc329 </option>
<option name="one" value="phy326">phy326 </option>
<option name="one" value="csc323">csc323 </option>
</select>
	<br/>
	<br/>
2
<select name="two">
<option default>empty  </option>
<option name="two" value="csc313">csc313 </option>
<option name="two" value="csc316">csc316 </option>
<option name="two" value="csc318">csc318 </option>
<option name="two" value="mth317">mth317 </option>
<option name="two" value="csc314">csc314 </option>
<option name="two" value="csc311">csc311 </option>
<option name="two" value="bus312">bus312 </option>
<option name="two" value="ced300">ced300 </option>
<option name="two" value="csc333">csc333 </option>
<option name="two" value="csc328">csc328 </option>
<option name="two" value="csc326">csc326 </option>
<option name="two" value="csc325">csc325 </option>
<option name="two" value="csc321">csc321 </option>
<option name="two" value="csc329">csc329 </option>
<option name="two" value="phy326">phy326 </option>
<option name="two" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
3
<select name="three">
<option default>empty  </option>
<option name="three" value="csc313">csc313 </option>
<option name="three" value="csc316">csc316 </option>
<option name="three" value="csc318">csc318 </option>
<option name="three" value="mth317">mth317 </option>
<option name="three" value="csc314">csc314 </option>
<option name="three" value="csc311">csc311 </option>
<option name="three" value="bus312">bus312 </option>
<option name="three" value="ced300">ced300 </option>
<option name="three" value="csc333">csc333 </option>
<option name="three" value="csc328">csc328 </option>
<option name="three" value="csc326">csc326 </option>
<option name="three" value="csc325">csc325 </option>
<option name="three" value="csc321">csc321 </option>
<option name="three" value="csc329">csc329 </option>
<option name="three" value="phy326">phy326 </option>
<option name="three" value="csc323">csc323 </option>
</select>
	<br/>
	<br/>
4
<select name="four">
<option default>empty  </option>
<option name="four" value="csc313">csc313 </option>
<option name="four" value="csc316">csc316 </option>
<option name="four" value="csc318">csc318 </option>
<option name="four" value="mth317">mth317 </option>
<option name="four" value="csc314">csc314 </option>
<option name="four" value="csc311">csc311 </option>
<option name="four" value="bus312">bus312 </option>
<option name="four" value="ced300">ced300 </option>
<option name="four" value="csc333">csc333 </option>
<option name="four" value="csc328">csc328 </option>
<option name="four" value="csc326">csc326 </option>
<option name="four" value="csc325">csc325 </option>
<option name="four" value="csc321">csc321 </option>
<option name="four" value="csc329">csc329 </option>
<option name="four" value="phy326">phy326 </option>
<option name="four" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
5
<select name="five">
<option default>empty  </option>
<option name="five" value="csc313">csc313 </option>
<option name="five" value="csc316">csc316 </option>
<option name="five" value="csc318">csc318 </option>
<option name="five" value="mth317">mth317 </option>
<option name="five" value="csc314">csc314 </option>
<option name="five" value="csc311">csc311 </option>
<option name="five" value="bus312">bus312 </option>
<option name="five" value="ced300">ced300 </option>
<option name="five" value="csc333">csc333 </option>
<option name="five" value="csc328">csc328 </option>
<option name="five" value="csc326">csc326 </option>
<option name="five" value="csc325">csc325 </option>
<option name="five" value="csc321">csc321 </option>
<option name="five" value="csc329">csc329 </option>
<option name="five" value="phy326">phy326 </option>
<option name="five" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
6
<select name="six">
<option default>empty  </option>
<option name="six" value="csc313">csc313 </option>
<option name="six" value="csc316">csc316 </option>
<option name="six" value="csc318">csc318 </option>
<option name="six" value="mth317">mth317 </option>
<option name="six" value="csc314">csc314 </option>
<option name="six" value="csc311">csc311 </option>
<option name="six" value="bus312">bus312 </option>
<option name="six" value="ced300">ced300 </option>
<option name="six" value="csc333">csc333 </option>
<option name="six" value="csc328">csc328 </option>
<option name="six" value="csc326">csc326 </option>
<option name="six" value="csc325">csc325 </option>
<option name="six" value="csc321">csc321 </option>
<option name="six" value="csc329">csc329 </option>
<option name="six" value="phy326">phy326 </option>
<option name="six" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
7
<select name="seven">
<option default>empty  </option>
<option name="seven" value="csc313">csc313 </option>
<option name="seven" value="csc316">csc316 </option>
<option name="seven" value="csc318">csc318 </option>
<option name="seven" value="mth317">mth317 </option>
<option name="seven" value="csc314">csc314 </option>
<option name="seven" value="csc311">csc311 </option>
<option name="seven" value="bus312">bus312 </option>
<option name="seven" value="ced300">ced300 </option>
<option name="seven" value="csc333">csc333 </option>
<option name="seven" value="csc328">csc328 </option>
<option name="seven" value="csc326">csc326 </option>
<option name="seven" value="csc325">csc325 </option>
<option name="seven" value="csc321">csc321 </option>
<option name="seven" value="csc329">csc329 </option>
<option name="seven" value="phy326">phy326 </option>
<option name="seven" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
8
<select name="eight">
<option default>empty  </option>
<option name="eight" value="csc313">csc313 </option>
<option name="eight" value="csc316">csc316 </option>
<option name="eight" value="csc318">csc318 </option>
<option name="eight" value="mth317">mth317 </option>
<option name="eight" value="csc314">csc314 </option>
<option name="eight" value="csc311">csc311 </option>
<option name="eight" value="bus312">bus312 </option>
<option name="eight" value="ced300">ced300 </option>
<option name="eight" value="csc333">csc333 </option>
<option name="eight" value="csc328">csc328 </option>
<option name="eight" value="csc326">csc326 </option>
<option name="eight" value="csc325">csc325 </option>
<option name="eight" value="csc321">csc321 </option>
<option name="eight" value="csc329">csc329 </option>
<option name="eight" value="phy326">phy326 </option>
<option name="eight" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
9
<select name="nine">
<option default>empty  </option>
<option name="nine" value="csc313">csc313 </option>
<option name="nine" value="csc316">csc316 </option>
<option name="nine" value="csc318">csc318 </option>
<option name="nine" value="mth317">mth317 </option>
<option name="nine" value="csc314">csc314 </option>
<option name="nine" value="csc311">csc311 </option>
<option name="nine" value="bus312">bus312 </option>
<option name="nine" value="ced300">ced300 </option>
<option name="nine" value="csc333">csc333 </option>
<option name="nine" value="csc328">csc328 </option>
<option name="nine" value="csc326">csc326 </option>
<option name="nine" value="csc325">csc325 </option>
<option name="nine" value="csc321">csc321 </option>
<option name="nine" value="csc329">csc329 </option>
<option name="nine" value="phy326">phy326 </option>
<option name="nine" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
10
<select name="ten">
<option default>empty  </option>
<option name="ten" value="csc313">csc313 </option>
<option name="ten" value="csc316">csc316 </option>
<option name="ten" value="csc318">csc318 </option>
<option name="ten" value="mth317">mth317 </option>
<option name="ten" value="csc314">csc314 </option>
<option name="ten" value="csc311">csc311 </option>
<option name="ten" value="bus312">bus312 </option>
<option name="ten" value="ced300">ced300 </option>
<option name="ten" value="csc333">csc333 </option>
<option name="ten" value="csc328">csc328 </option>
<option name="ten" value="csc326">csc326 </option>
<option name="ten" value="csc325">csc325 </option>
<option name="ten" value="csc321">csc321 </option>
<option name="ten" value="csc329">csc329 </option>
<option name="ten" value="phy326">phy326 </option>
<option name="ten" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
11
<select name="eleven">
<option default>empty  </option>
<option name="eleven" value="csc313">csc313 </option>
<option name="eleven" value="csc316">csc316 </option>
<option name="eleven" value="csc318">csc318 </option>
<option name="eleven" value="mth317">mth317 </option>
<option name="eleven" value="csc314">csc314 </option>
<option name="eleven" value="csc311">csc311 </option>
<option name="eleven" value="bus312">bus312 </option>
<option name="eleven" value="ced300">ced300 </option>
<option name="eleven" value="csc333">csc333 </option>
<option name="eleven" value="csc328">csc328 </option>
<option name="eleven" value="csc326">csc326 </option>
<option name="eleven" value="csc325">csc325 </option>
<option name="eleven" value="csc321">csc321 </option>
<option name="eleven" value="csc329">csc329 </option>
<option name="eleven" value="phy326">phy326 </option>
<option name="eleven" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
12
<select name="twelve">
<option default>empty  </option>
<option name="twelve" value="csc313">csc313 </option>
<option name="twelve" value="csc316">csc316 </option>
<option name="twelve" value="csc318">csc318 </option>
<option name="twelve" value="mth317">mth317 </option>
<option name="twelve" value="csc314">csc314 </option>
<option name="twelve" value="csc311">csc311 </option>
<option name="twelve" value="bus312">bus312 </option>
<option name="twelve" value="ced300">ced300 </option>
<option name="twelve" value="csc333">csc333 </option>
<option name="twelve" value="csc328">csc328 </option>
<option name="twelve" value="csc326">csc326 </option>
<option name="twelve" value="csc325">csc325 </option>
<option name="twelve" value="csc321">csc321 </option>
<option name="twelve" value="csc329">csc329 </option>
<option name="twelve" value="phy326">phy326 </option>
<option name="twelve" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
13
<select name="thirteen">
<option default>empty  </option>
<option name="thirteen" value="csc313">csc313 </option>
<option name="thirteen" value="csc316">csc316 </option>
<option name="thirteen" value="csc318">csc318 </option>
<option name="thirteen" value="mth317">mth317 </option>
<option name="thirteen" value="csc314">csc314 </option>
<option name="thirteen" value="csc311">csc311 </option>
<option name="thirteen" value="bus312">bus312 </option>
<option name="thirteen" value="ced300">ced300 </option>
<option name="thirteen" value="csc333">csc333 </option>
<option name="thirteen" value="csc328">csc328 </option>
<option name="thirteen" value="csc326">csc326 </option>
<option name="thirteen" value="csc325">csc325 </option>
<option name="thirteen" value="csc321">csc321 </option>
<option name="thirteen" value="csc329">csc329 </option>
<option name="thirteen" value="phy326">phy326 </option>
<option name="thirteen" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
14
<select name="fourteen">
<option default>empty  </option>
<option name="fourteen" value="csc313">csc313 </option>
<option name="fourteen" value="csc316">csc316 </option>
<option name="fourteen" value="csc318">csc318 </option>
<option name="fourteen" value="mth317">mth317 </option>
<option name="fourteen" value="csc314">csc314 </option>
<option name="fourteen" value="csc311">csc311 </option>
<option name="fourteen" value="bus312">bus312 </option>
<option name="fourteen" value="ced300">ced300 </option>
<option name="fourteen" value="csc333">csc333 </option>
<option name="fourteen" value="csc328">csc328 </option>
<option name="fourteen" value="csc326">csc326 </option>
<option name="fourteen" value="csc325">csc325 </option>
<option name="fourteen" value="csc321">csc321 </option>
<option name="fourteen" value="csc329">csc329 </option>
<option name="fourteen" value="phy326">phy326 </option>
<option name="fourteen" value="csc323">csc323 </option>
</select>	
	<br/>
	<br/>
15
<select name="fifteen">
<option default>empty  </option>
<option name="fifteen" value="csc313">csc313 </option>
<option name="fifteen" value="csc316">csc316 </option>
<option name="fifteen" value="csc318">csc318 </option>
<option name="fifteen" value="mth317">mth317 </option>
<option name="fifteen" value="csc314">csc314 </option>
<option name="fifteen" value="csc311">csc311 </option>
<option name="fifteen" value="bus312">bus312 </option>
<option name="fifteen" value="ced300">ced300 </option>
<option name="fifteen" value="csc333">csc333 </option>
<option name="fifteen" value="csc328">csc328 </option>
<option name="fifteen" value="csc326">csc326 </option>
<option name="fifteen" value="csc325">csc325 </option>
<option name="fifteen" value="csc321">csc321 </option>
<option name="fifteen" value="csc329">csc329 </option>
<option name="fifteen" value="phy326">phy326 </option>
<option name="fifteen" value="csc323">csc323 </option>
</select>
	<br/>
	<br/>
16
<select name="sixteen">
<option default>empty  </option>
<option name="sixteen" value="csc313">csc313 </option>
<option name="sixteen" value="csc316">csc316 </option>
<option name="sixteen" value="csc318">csc318 </option>
<option name="sixteen" value="mth317">mth317 </option>
<option name="sixteen" value="csc314">csc314 </option>
<option name="sixteen" value="csc311">csc311 </option>
<option name="sixteen" value="bus312">bus312 </option>
<option name="sixteen" value="ced300">ced300 </option>
<option name="sixteen" value="csc333">csc333 </option>
<option name="sixteen" value="csc328">csc328 </option>
<option name="sixteen" value="csc326">csc326 </option>
<option name="sixteen" value="csc325">csc325 </option>
<option name="sixteen" value="csc321">csc321 </option>
<option name="sixteen" value="csc329">csc329 </option>
<option name="sixteen" value="phy326">phy326 </option>
<option name="sixteen" value="csc323">csc323 </option>
</select>
	
	<hr/>
	<input  type="submit" name="reg300" value="REGISTER" />
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