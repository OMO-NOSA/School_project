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

<h2> REGISTER 200LEVEL COURSES NOW  </h2> <hr/>
<h3> <?php echo $regerror1; ?> </h3> <br/><br/>
<form name="reg200" class="form-style-1" method="POST" action="php/form_process.php">

1
<select name="one">
<option default>empty  </option>
<option name="one" value="csc211">csc211 </option>
<option name="one" value="csc212">csc212 </option>
<option name="one" value="mth230">mth230 </option>
<option name="one" value="mth219">mth219 </option>
<option name="one" value="csc217">csc217 </option>
<option name="one" value="csc237">csc237 </option>
<option name="one" value="bus211">bus211 </option>
<option name="one" value="csc222">csc222 </option>
<option name="one" value="csc220">csc220 </option>
<option name="one" value="phy224">phy224 </option>
<option name="one" value="mth227">mth227 </option>
<option name="one" value="csc224">csc224 </option>
<option name="one" value="mth228">mth228 </option>
<option name="one" value="bus221">bus221 </option>
</select>
	<br/>
	<br/>
2
<select name="two">
<option default>empty  </option>
<option name="two" value="csc211">csc211 </option>
<option name="two" value="csc212">csc212 </option>
<option name="two" value="mth230">mth230 </option>
<option name="two" value="mth219">mth219 </option>
<option name="two" value="csc217">csc217 </option>
<option name="two" value="csc237">csc237 </option>
<option name="two" value="bus211">bus211 </option>
<option name="two" value="csc222">csc222 </option>
<option name="two" value="csc220">csc220 </option>
<option name="two" value="phy224">phy224 </option>
<option name="two" value="mth227">mth227 </option>
<option name="two" value="csc224">csc224 </option>
<option name="two" value="mth228">mth228 </option>
<option name="two" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
3
<select name="three">
<option default>empty  </option>
<option name="three" value="csc211">csc211 </option>
<option name="three" value="csc212">csc212 </option>
<option name="three" value="mth230">mth230 </option>
<option name="three" value="mth219">mth219 </option>
<option name="three" value="csc217">csc217 </option>
<option name="three" value="csc237">csc237 </option>
<option name="three" value="bus211">bus211 </option>
<option name="three" value="csc222">csc222 </option>
<option name="three" value="csc220">csc220 </option>
<option name="three" value="phy224">phy224 </option>
<option name="three" value="mth227">mth227 </option>
<option name="three" value="csc224">csc224 </option>
<option name="three" value="mth228">mth228 </option>
<option name="three" value="bus221">bus221 </option>
</select>
	<br/>
	<br/>
4
<select name="four">
<option default>empty  </option>
<option name="four" value="csc211">csc211 </option>
<option name="four" value="csc212">csc212 </option>
<option name="four" value="mth230">mth230 </option>
<option name="four" value="mth219">mth219 </option>
<option name="four" value="csc217">csc217 </option>
<option name="four" value="csc237">csc237 </option>
<option name="four" value="bus211">bus211 </option>
<option name="four" value="csc222">csc222 </option>
<option name="four" value="csc220">csc220 </option>
<option name="four" value="phy224">phy224 </option>
<option name="four" value="mth227">mth227 </option>
<option name="four" value="csc224">csc224 </option>
<option name="four" value="mth228">mth228 </option>
<option name="four" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
5
<select name="five">
<option default>empty  </option>
<option name="five" value="csc211">csc211 </option>
<option name="five" value="csc212">csc212 </option>
<option name="five" value="mth230">mth230 </option>
<option name="five" value="mth219">mth219 </option>
<option name="five" value="csc217">csc217 </option>
<option name="five" value="csc237">csc237 </option>
<option name="five" value="bus211">bus211 </option>
<option name="five" value="csc222">csc222 </option>
<option name="five" value="csc220">csc220 </option>
<option name="five" value="phy224">phy224 </option>
<option name="five" value="mth227">mth227 </option>
<option name="five" value="csc224">csc224 </option>
<option name="five" value="mth228">mth228 </option>
<option name="five" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
6
<select name="six">
<option default>empty  </option>
<option name="six" value="csc211">csc211 </option>
<option name="six" value="csc212">csc212 </option>
<option name="six" value="mth230">mth230 </option>
<option name="six" value="mth219">mth219 </option>
<option name="six" value="csc217">csc217 </option>
<option name="six" value="csc237">csc237 </option>
<option name="six" value="bus211">bus211 </option>
<option name="six" value="csc222">csc222 </option>
<option name="six" value="csc220">csc220 </option>
<option name="six" value="phy224">phy224 </option>
<option name="six" value="mth227">mth227 </option>
<option name="six" value="csc224">csc224 </option>
<option name="six" value="mth228">mth228 </option>
<option name="six" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
7
<select name="seven">
<option default>empty  </option>
<option name="seven" value="csc211">csc211 </option>
<option name="seven" value="csc212">csc212 </option>
<option name="seven" value="mth230">mth230 </option>
<option name="seven" value="mth219">mth219 </option>
<option name="seven" value="csc217">csc217 </option>
<option name="seven" value="csc237">csc237 </option>
<option name="seven" value="bus211">bus211 </option>
<option name="seven" value="csc222">csc222 </option>
<option name="seven" value="csc220">csc220 </option>
<option name="seven" value="phy224">phy224 </option>
<option name="seven" value="mth227">mth227 </option>
<option name="seven" value="csc224">csc224 </option>
<option name="seven" value="mth228">mth228 </option>
<option name="seven" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
8
<select name="eight">
<option default>empty  </option>
<option name="eight" value="csc211">csc211 </option>
<option name="eight" value="csc212">csc212 </option>
<option name="eight" value="mth230">mth230 </option>
<option name="eight" value="mth219">mth219 </option>
<option name="eight" value="csc217">csc217 </option>
<option name="eight" value="csc237">csc237 </option>
<option name="eight" value="bus211">bus211 </option>
<option name="eight" value="csc222">csc222 </option>
<option name="eight" value="csc220">csc220 </option>
<option name="eight" value="phy224">phy224 </option>
<option name="eight" value="mth227">mth227 </option>
<option name="eight" value="csc224">csc224 </option>
<option name="eight" value="mth228">mth228 </option>
<option name="eight" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
9
<select name="nine">
<option default>empty  </option>
<option name="nine" value="csc211">csc211 </option>
<option name="nine" value="csc212">csc212 </option>
<option name="nine" value="mth230">mth230 </option>
<option name="nine" value="mth219">mth219 </option>
<option name="nine" value="csc217">csc217 </option>
<option name="nine" value="csc237">csc237 </option>
<option name="nine" value="bus211">bus211 </option>
<option name="nine" value="csc222">csc222 </option>
<option name="nine" value="csc220">csc220 </option>
<option name="nine" value="phy224">phy224 </option>
<option name="nine" value="mth227">mth227 </option>
<option name="nine" value="csc224">csc224 </option>
<option name="nine" value="mth228">mth228 </option>
<option name="nine" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
10
<select name="ten">
<option default>empty  </option>
<option name="ten" value="csc211">csc211 </option>
<option name="ten" value="csc212">csc212 </option>
<option name="ten" value="mth230">mth230 </option>
<option name="ten" value="mth219">mth219 </option>
<option name="ten" value="csc217">csc217 </option>
<option name="ten" value="csc237">csc237 </option>
<option name="ten" value="bus211">bus211 </option>
<option name="ten" value="csc222">csc222 </option>
<option name="ten" value="csc220">csc220 </option>
<option name="ten" value="phy224">phy224 </option>
<option name="ten" value="mth227">mth227 </option>
<option name="ten" value="csc224">csc224 </option>
<option name="ten" value="mth228">mth228 </option>
<option name="ten" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
11
<select name="eleven">
<option default>empty  </option>
<option name="eleven" value="csc211">csc211 </option>
<option name="eleven" value="csc212">csc212 </option>
<option name="eleven" value="mth230">mth230 </option>
<option name="eleven" value="mth219">mth219 </option>
<option name="eleven" value="csc217">csc217 </option>
<option name="eleven" value="csc237">csc237 </option>
<option name="eleven" value="bus211">bus211 </option>
<option name="eleven" value="csc222">csc222 </option>
<option name="eleven" value="csc220">csc220 </option>
<option name="eleven" value="phy224">phy224 </option>
<option name="eleven" value="mth227">mth227 </option>
<option name="eleven" value="csc224">csc224 </option>
<option name="eleven" value="mth228">mth228 </option>
<option name="eleven" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
12
<select name="twelve">
<option default>empty  </option>
<option name="twelve" value="csc211">csc211 </option>
<option name="twelve" value="csc212">csc212 </option>
<option name="twelve" value="mth230">mth230 </option>
<option name="twelve" value="mth219">mth219 </option>
<option name="twelve" value="csc217">csc217 </option>
<option name="twelve" value="csc237">csc237 </option>
<option name="twelve" value="bus211">bus211 </option>
<option name="twelve" value="csc222">csc222 </option>
<option name="twelve" value="csc220">csc220 </option>
<option name="twelve" value="phy224">phy224 </option>
<option name="twelve" value="mth227">mth227 </option>
<option name="twelve" value="csc224">csc224 </option>
<option name="twelve" value="mth228">mth228 </option>
<option name="twelve" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
13
<select name="thirteen">
<option default>empty  </option>
<option name="thirteen" value="csc211">csc211 </option>
<option name="thirteen" value="csc212">csc212 </option>
<option name="thirteen" value="mth230">mth230 </option>
<option name="thirteen" value="mth219">mth219 </option>
<option name="thirteen" value="csc217">csc217 </option>
<option name="thirteen" value="csc237">csc237 </option>
<option name="thirteen" value="bus211">bus211 </option>
<option name="thirteen" value="csc222">csc222 </option>
<option name="thirteen" value="csc220">csc220 </option>
<option name="thirteen" value="phy224">phy224 </option>
<option name="thirteen" value="mth227">mth227 </option>
<option name="thirteen" value="csc224">csc224 </option>
<option name="thirteen" value="mth228">mth228 </option>
<option name="thirteen" value="bus221">bus221 </option>
</select>	
	<br/>
	<br/>
14
<select name="fourteen">
<option default>empty  </option>
<option name="fourteen" value="csc211">csc211 </option>
<option name="fourteen" value="csc212">csc212 </option>
<option name="fourteen" value="mth230">mth230 </option>
<option name="fourteen" value="mth219">mth219 </option>
<option name="fourteen" value="csc217">csc217 </option>
<option name="fourteen" value="csc237">csc237 </option>
<option name="fourteen" value="bus211">bus211 </option>
<option name="fourteen" value="csc222">csc222 </option>
<option name="fourteen" value="csc220">csc220 </option>
<option name="fourteen" value="phy224">phy224 </option>
<option name="fourteen" value="mth227">mth227 </option>
<option name="fourteen" value="csc224">csc224 </option>
<option name="fourteen" value="mth228">mth228 </option>
<option name="fourteen" value="bus221">bus221 </option>
</select>	
	
	
	<hr/>
	<input  type="submit" name="reg200" value="REGISTER" />
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