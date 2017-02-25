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
<title> 200 LEVEL COURSE REG </title>
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

<h2> REGISTER 400LEVEL COURSES NOW  </h2> <hr/>
<h3> <?php echo $regerror1; ?> </h3> <br/><br/>
<form name="reg400" class="form-style-1" method="POST" action="php/form_process.php">

1
<select name="one">
<option default>empty  </option>
<option name="one" value="csc419">csc419 </option>
<option name="one" value="csc411">csc411 </option>
<option name="one" value="csc418">csc418 </option>
<option name="one" value="csc432">csc432 </option>
<option name="one" value="csc413">csc413 </option>
<option name="one" value="csc415">csc415 </option>
<option name="one" value="csc412">csc412 </option>
<option name="one" value="csc414">csc414 </option>
<option name="one" value="csc409">csc409 </option>
<option name="one" value="csc421">csc421 </option>
<option name="one" value="csc422">csc422 </option>
<option name="one" value="csc427">csc427 </option>
<option name="one" value="csc428">csc428 </option>
<option name="one" value="csc424">csc424 </option>
<option name="one" value="csc426">csc426 </option>
</select>
	<br/>
	<br/>
2
<select name="two">
<option default>empty  </option>
<option name="two" value="csc419">csc419 </option>
<option name="two" value="csc411">csc411 </option>
<option name="two" value="csc418">csc418 </option>
<option name="two" value="csc432">csc432 </option>
<option name="two" value="csc413">csc413 </option>
<option name="two" value="csc415">csc415 </option>
<option name="two" value="csc412">csc412 </option>
<option name="two" value="csc414">csc414 </option>
<option name="two" value="csc409">csc409 </option>
<option name="two" value="csc421">csc421 </option>
<option name="two" value="csc422">csc422 </option>
<option name="two" value="csc427">csc427 </option>
<option name="two" value="csc428">csc428 </option>
<option name="two" value="csc424">csc424 </option>
<option name="two" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
3
<select name="three">
<option default>empty  </option>
<option name="three" value="csc419">csc419 </option>
<option name="three" value="csc411">csc411 </option>
<option name="three" value="csc418">csc418 </option>
<option name="three" value="csc432">csc432 </option>
<option name="three" value="csc413">csc413 </option>
<option name="three" value="csc415">csc415 </option>
<option name="three" value="csc412">csc412 </option>
<option name="three" value="csc414">csc414 </option>
<option name="three" value="csc409">csc409 </option>
<option name="three" value="csc421">csc421 </option>
<option name="three" value="csc422">csc422 </option>
<option name="three" value="csc427">csc427 </option>
<option name="three" value="csc428">csc428 </option>
<option name="three" value="csc424">csc424 </option>
<option name="three" value="csc426">csc426 </option>
</select>
	<br/>
	<br/>
4
<select name="four">
<option default>empty  </option>
<option name="four" value="csc419">csc419 </option>
<option name="four" value="csc411">csc411 </option>
<option name="four" value="csc418">csc418 </option>
<option name="four" value="csc432">csc432 </option>
<option name="four" value="csc413">csc413 </option>
<option name="four" value="csc415">csc415 </option>
<option name="four" value="csc412">csc412 </option>
<option name="four" value="csc414">csc414 </option>
<option name="four" value="csc409">csc409 </option>
<option name="four" value="csc421">csc421 </option>
<option name="four" value="csc422">csc422 </option>
<option name="four" value="csc427">csc427 </option>
<option name="four" value="csc428">csc428 </option>
<option name="four" value="csc424">csc424 </option>
<option name="four" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
5
<select name="five">
<option default>empty  </option>
<option name="five" value="csc419">csc419 </option>
<option name="five" value="csc411">csc411 </option>
<option name="five" value="csc418">csc418 </option>
<option name="five" value="csc432">csc432 </option>
<option name="five" value="csc413">csc413 </option>
<option name="five" value="csc415">csc415 </option>
<option name="five" value="csc412">csc412 </option>
<option name="five" value="csc414">csc414 </option>
<option name="five" value="csc409">csc409 </option>
<option name="five" value="csc421">csc421 </option>
<option name="five" value="csc422">csc422 </option>
<option name="five" value="csc427">csc427 </option>
<option name="five" value="csc428">csc428 </option>
<option name="five" value="csc424">csc424 </option>
<option name="five" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
6
<select name="six">
<option default>empty  </option>
<option name="six" value="csc419">csc419 </option>
<option name="six" value="csc411">csc411 </option>
<option name="six" value="csc418">csc418 </option>
<option name="six" value="csc432">csc432 </option>
<option name="six" value="csc413">csc413 </option>
<option name="six" value="csc415">csc415 </option>
<option name="six" value="csc412">csc412 </option>
<option name="six" value="csc414">csc414 </option>
<option name="six" value="csc409">csc409 </option>
<option name="six" value="csc421">csc421 </option>
<option name="six" value="csc422">csc422 </option>
<option name="six" value="csc427">csc427 </option>
<option name="six" value="csc428">csc428 </option>
<option name="six" value="csc424">csc424 </option>
<option name="six" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
7
<select name="seven">
<option default>empty  </option>
<option name="seven" value="csc419">csc419 </option>
<option name="seven" value="csc411">csc411 </option>
<option name="seven" value="csc418">csc418 </option>
<option name="seven" value="csc432">csc432 </option>
<option name="seven" value="csc413">csc413 </option>
<option name="seven" value="csc415">csc415 </option>
<option name="seven" value="csc412">csc412 </option>
<option name="seven" value="csc414">csc414 </option>
<option name="seven" value="csc409">csc409 </option>
<option name="seven" value="csc421">csc421 </option>
<option name="seven" value="csc422">csc422 </option>
<option name="seven" value="csc427">csc427 </option>
<option name="seven" value="csc428">csc428 </option>
<option name="seven" value="csc424">csc424 </option>
<option name="seven" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
8
<select name="eight">
<option default>empty  </option>
<option name="eight" value="csc419">csc419 </option>
<option name="eight" value="csc411">csc411 </option>
<option name="eight" value="csc418">csc418 </option>
<option name="eight" value="csc432">csc432 </option>
<option name="eight" value="csc413">csc413 </option>
<option name="eight" value="csc415">csc415 </option>
<option name="eight" value="csc412">csc412 </option>
<option name="eight" value="csc414">csc414 </option>
<option name="eight" value="csc409">csc409 </option>
<option name="eight" value="csc421">csc421 </option>
<option name="eight" value="csc422">csc422 </option>
<option name="eight" value="csc427">csc427 </option>
<option name="eight" value="csc428">csc428 </option>
<option name="eight" value="csc424">csc424 </option>
<option name="eight" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
9
<select name="nine">
<option default>empty  </option>
<option name="nine" value="csc419">csc419 </option>
<option name="nine" value="csc411">csc411 </option>
<option name="nine" value="csc418">csc418 </option>
<option name="nine" value="csc432">csc432 </option>
<option name="nine" value="csc413">csc413 </option>
<option name="nine" value="csc415">csc415 </option>
<option name="nine" value="csc412">csc412 </option>
<option name="nine" value="csc414">csc414 </option>
<option name="nine" value="csc409">csc409 </option>
<option name="nine" value="csc421">csc421 </option>
<option name="nine" value="csc422">csc422 </option>
<option name="nine" value="csc427">csc427 </option>
<option name="nine" value="csc428">csc428 </option>
<option name="nine" value="csc424">csc424 </option>
<option name="nine" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
10
<select name="ten">
<option default>empty  </option>
<option name="ten" value="csc419">csc419 </option>
<option name="ten" value="csc411">csc411 </option>
<option name="ten" value="csc418">csc418 </option>
<option name="ten" value="csc432">csc432 </option>
<option name="ten" value="csc413">csc413 </option>
<option name="ten" value="csc415">csc415 </option>
<option name="ten" value="csc412">csc412 </option>
<option name="ten" value="csc414">csc414 </option>
<option name="ten" value="csc409">csc409 </option>
<option name="ten" value="csc421">csc421 </option>
<option name="ten" value="csc422">csc422 </option>
<option name="ten" value="csc427">csc427 </option>
<option name="ten" value="csc428">csc428 </option>
<option name="ten" value="csc424">csc424 </option>
<option name="ten" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
11
<select name="eleven">
<option default>empty  </option>
<option name="eleven" value="csc419">csc419 </option>
<option name="eleven" value="csc411">csc411 </option>
<option name="eleven" value="csc418">csc418 </option>
<option name="eleven" value="csc432">csc432 </option>
<option name="eleven" value="csc413">csc413 </option>
<option name="eleven" value="csc415">csc415 </option>
<option name="eleven" value="csc412">csc412 </option>
<option name="eleven" value="csc414">csc414 </option>
<option name="eleven" value="csc409">csc409 </option>
<option name="eleven" value="csc421">csc421 </option>
<option name="eleven" value="csc422">csc422 </option>
<option name="eleven" value="csc427">csc427 </option>
<option name="eleven" value="csc428">csc428 </option>
<option name="eleven" value="csc424">csc424 </option>
<option name="eleven" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
12
<select name="twelve">
<option default>empty  </option>
<option name="twelve" value="csc419">csc419 </option>
<option name="twelve" value="csc411">csc411 </option>
<option name="twelve" value="csc418">csc418 </option>
<option name="twelve" value="csc432">csc432 </option>
<option name="twelve" value="csc413">csc413 </option>
<option name="twelve" value="csc415">csc415 </option>
<option name="twelve" value="csc412">csc412 </option>
<option name="twelve" value="csc414">csc414 </option>
<option name="twelve" value="csc409">csc409 </option>
<option name="twelve" value="csc421">csc421 </option>
<option name="twelve" value="csc422">csc422 </option>
<option name="twelve" value="csc427">csc427 </option>
<option name="twelve" value="csc428">csc428 </option>
<option name="twelve" value="csc424">csc424 </option>
<option name="twelve" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
13
<select name="thirteen">
<option default>empty  </option>
<option name="thirteen" value="csc419">csc419 </option>
<option name="thirteen" value="csc411">csc411 </option>
<option name="thirteen" value="csc418">csc418 </option>
<option name="thirteen" value="csc432">csc432 </option>
<option name="thirteen" value="csc413">csc413 </option>
<option name="thirteen" value="csc415">csc415 </option>
<option name="thirteen" value="csc412">csc412 </option>
<option name="thirteen" value="csc414">csc414 </option>
<option name="thirteen" value="csc409">csc409 </option>
<option name="thirteen" value="csc421">csc421 </option>
<option name="thirteen" value="csc422">csc422 </option>
<option name="thirteen" value="csc427">csc427 </option>
<option name="thirteen" value="csc428">csc428 </option>
<option name="thirteen" value="csc424">csc424 </option>
<option name="thirteen" value="csc426">csc426 </option>
</select>	
	<br/>
	<br/>
14
<select name="fourteen">
<option default>empty  </option>
<option name="fourteen" value="csc419">csc419 </option>
<option name="fourteen" value="csc411">csc411 </option>
<option name="fourteen" value="csc418">csc418 </option>
<option name="fourteen" value="csc432">csc432 </option>
<option name="fourteen" value="csc413">csc413 </option>
<option name="fourteen" value="csc415">csc415 </option>
<option name="fourteen" value="csc412">csc412 </option>
<option name="fourteen" value="csc414">csc414 </option>
<option name="fourteen" value="csc409">csc409 </option>
<option name="fourteen" value="csc421">csc421 </option>
<option name="fourteen" value="csc422">csc422 </option>
<option name="fourteen" value="csc427">csc427 </option>
<option name="fourteen" value="csc428">csc428 </option>
<option name="fourteen" value="csc424">csc424 </option>
<option name="fourteen" value="csc426">csc426 </option>
</select>	
		<br/>
	<br/>
15
<select name="fifteen">
<option default>empty  </option>
<option name="fifteen" value="csc419">csc419 </option>
<option name="fifteen" value="csc411">csc411 </option>
<option name="fifteen" value="csc418">csc418 </option>
<option name="fifteen" value="csc432">csc432 </option>
<option name="fifteen" value="csc413">csc413 </option>
<option name="fifteen" value="csc415">csc415 </option>
<option name="fifteen" value="csc412">csc412 </option>
<option name="fifteen" value="csc414">csc414 </option>
<option name="fifteen" value="csc409">csc409 </option>
<option name="fifteen" value="csc421">csc421 </option>
<option name="fifteen" value="csc422">csc422 </option>
<option name="fifteen" value="csc427">csc427 </option>
<option name="fifteen" value="csc428">csc428 </option>
<option name="fifteen" value="csc424">csc424 </option>
<option name="fifteen" value="csc426">csc426 </option>
</select>	
	
	<hr/>
	<input  type="submit" name="reg400" value="REGISTER" />
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