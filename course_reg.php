<?php
SESSION_START();
include_once ("php/db_connect.php");

$fname =  $_SESSION['fname'];
$level =  $_SESSION['level'];
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
<title> 100 LEVEL COURSE REG </title>
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

<p class="info">YOU ARE CURRENTLY ON YOUR 100 LEVEL PAGE  </p>

<a href="home.php"> Home  </a>

</div>

<div class="history" >

<h2> REGISTER 100LEVEL COURSES NOW  </h2> <hr/>
<h3> <?php echo $regerror1; ?> </h3> <br/><br/>

<form name="reg100" class="form-style-1" method="POST" action="php/form_process.php">
1
<select  name="one">
    <option default>empty  </option>
	<option name="one" value="mth110"> Mth110 (3) </option>
	<option name="one" value="mth112"> mth112 (3) </option>
	<option name="one" value="phy109"> phy109 (2) </option>
	<option name="one" value="phy111"> phy111 (3) </option>
	<option name="one" value="phy113"> phy113 (3) </option>
	<option name="one" value="chm111"> chm111 (3) </option>
	<option name="one" value="csc110"> csc110 (3) </option>
	<option name="one" value="csc111"> csc111 (3) </option>
	<option name="one" value="gst111"> gst111 (2) </option>
	<option name="one" value="gst112"> gst112 (2) </option>
	<option name="one" value="mth123"> mth123 (3) </option>
	<option name="one" value="mth125"> mth125 (3) </option>
	<option name="one" value="phy124"> phy124 (4) </option>
	<option name="one" value="phy124"> gst122 (2) </option>
	<option name="one" value="phy124"> gst123 (2) </option>
	<option name="one" value="phy124"> gst121 (2) </option>
	<option name="two" value="chm122"> chm122 (3) </option>
	<option name="two" value="csc120"> csc120 (3) </option>
</select>
	<br/>
	<br/>
2	
<select  name="two">
    <option default>empty  </option>
	<option name="two" value="mth110"> Mth110 (3) </option>
	<option name="two" value="mth112"> mth112 (3) </option>
	<option name="two" value="phy109"> phy109 (2) </option>
	<option name="two" value="phy111"> phy111 (3) </option>
	<option name="two" value="phy113"> phy113 (3) </option>
	<option name="two" value="chm111"> chm111 (3) </option>
	<option name="two" value="csc110"> csc110 (3) </option>
	<option name="two" value="csc111"> csc111 (3) </option>
	<option name="two" value="gst111"> gst111 (2) </option>
	<option name="two" value="gst112"> gst112 (2) </option>
	<option name="two" value="mth123"> mth123 (3) </option>
	<option name="two" value="mth125"> mth125 (3) </option>
	<option name="two" value="phy124"> phy124 (4) </option>
	<option name="two" value="gst122"> gst122 (2) </option>
	<option name="two" value="gst123"> gst123 (2) </option>
	<option name="two" value="gst121"> gst121 (2) </option>
	<option name="two" value="chm122"> chm122 (3) </option>
	<option name="two" value="csc120"> csc120 (3) </option>
</select>
	
	<br/>
	<br/>
3
<select  name="three">
    <option default>empty  </option>
	<option name="three" value="mth110"> Mth110 (3) </option>
	<option name="three" value="mth112"> mth112 (3) </option>
	<option name="three" value="phy109"> phy109 (2) </option>
	<option name="three" value="phy111"> phy111 (3) </option>
	<option name="three" value="phy113"> phy113 (3) </option>
	<option name="three" value="chm111"> chm111 (3) </option>
	<option name="three" value="csc110"> csc110 (3) </option>
	<option name="three" value="csc111"> csc111 (3) </option>
	<option name="three" value="gst111"> gst111 (2) </option>
	<option name="three" value="gst112"> gst112 (2) </option>
	<option name="three" value="mth123"> mth123 (3) </option>
	<option name="three" value="mth125"> mth125 (3) </option>
	<option name="three" value="phy124"> phy124 (4) </option>
	<option name="three" value="gst122"> gst122 (2) </option>
	<option name="three" value="gst123"> gst123 (2) </option>
	<option name="three" value="gst121"> gst121 (2) </option>
	<option name="three" value="chm122"> chm122 (3) </option>
	<option name="three" value="csc120"> csc120 (3) </option>
</select>
	<br/>
	<br/>
4
<select  name="four">
    <option default>empty  </option>
	<option name="four" value="mth110"> Mth110 (3) </option>
	<option name="four" value="mth112"> mth112 (3) </option>
	<option name="four" value="phy109"> phy109 (2) </option>
	<option name="four" value="phy111"> phy111 (3) </option>
	<option name="four" value="phy113"> phy113 (3) </option>
	<option name="four" value="chm111"> chm111 (3) </option>
	<option name="four" value="csc110"> csc110 (3) </option>
	<option name="four" value="csc111"> csc111 (3) </option>
	<option name="four" value="gst111"> gst111 (2) </option>
	<option name="four" value="gst112"> gst112 (2) </option>
	<option name="four" value="mth123"> mth123 (3) </option>
	<option name="four" value="mth125"> mth125 (3) </option>
	<option name="four" value="phy124"> phy124 (4) </option>
	<option name="four" value="gst122"> gst122 (2) </option>
	<option name="four" value="gst123"> gst123 (2) </option>
	<option name="four" value="gst121"> gst121 (2) </option>
	<option name="four" value="chm122"> chm122 (3) </option>
	<option name="four" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/> 
5
<select  name="five">
    <option default>empty  </option>
	<option name="five" value="mth110"> Mth110 (3) </option>
	<option name="five" value="mth112"> mth112 (3) </option>
	<option name="five" value="phy109"> phy109 (2) </option>
	<option name="five" value="phy111"> phy111 (3) </option>
	<option name="five" value="phy113"> phy113 (3) </option>
	<option name="five" value="chm111"> chm111 (3) </option>
	<option name="five" value="csc110"> csc110 (3) </option>
	<option name="five" value="csc111"> csc111 (3) </option>
	<option name="five" value="gst111"> gst111 (2) </option>
	<option name="five" value="gst112"> gst112 (2) </option>
	<option name="five" value="mth123"> mth123 (3) </option>
	<option name="five" value="mth125"> mth125 (3) </option>
	<option name="five" value="phy124"> phy124 (4) </option>
	<option name="five" value="gst122"> gst122 (2) </option>
	<option name="five" value="gst123"> gst123 (2) </option>
	<option name="five" value="gst121"> gst121 (2) </option>
	<option name="five" value="chm122"> chm122 (3) </option>
	<option name="five" value="csc120"> csc120 (3) </option>
</select>	
<br/>
<br/>
6
<select  name="six">
    <option default>empty  </option>
	<option name="six" value="mth110"> Mth110 (3) </option>
	<option name="six" value="mth112"> mth112 (3) </option>
	<option name="six" value="phy109"> phy109 (2) </option>
	<option name="six" value="phy111"> phy111 (3) </option>
	<option name="six" value="phy113"> phy113 (3) </option>
	<option name="six" value="chm111"> chm111 (3) </option>
	<option name="six" value="csc110"> csc110 (3) </option>
	<option name="six" value="csc111"> csc111 (3) </option>
	<option name="six" value="gst111"> gst111 (2) </option>
	<option name="six" value="gst112"> gst112 (2) </option>
	<option name="six" value="mth123"> mth123 (3) </option>
	<option name="six" value="mth125"> mth125 (3) </option>
	<option name="six" value="phy124"> phy124 (4) </option>
	<option name="six" value="gst122"> gst122 (2) </option>
	<option name="six" value="gst123"> gst123 (2) </option>
	<option name="six" value="gst121"> gst121 (2) </option>
	<option name="six" value="chm122"> chm122 (3) </option>
	<option name="six" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
7
<select  name="seven">
    <option default>empty  </option>
	<option name="seven" value="mth110"> Mth110 (3) </option>
	<option name="seven" value="mth112"> mth112 (3) </option>
	<option name="seven" value="phy109"> phy109 (2) </option>
	<option name="seven" value="phy111"> phy111 (3) </option>
	<option name="seven" value="phy113"> phy113 (3) </option>
	<option name="seven" value="chm111"> chm111 (3) </option>
	<option name="seven" value="csc110"> csc110 (3) </option>
	<option name="seven" value="csc111"> csc111 (3) </option>
	<option name="seven" value="gst111"> gst111 (2) </option>
	<option name="seven" value="gst112"> gst112 (2) </option>
	<option name="seven" value="mth123"> mth123 (3) </option>
	<option name="seven" value="mth125"> mth125 (3) </option>
	<option name="seven" value="phy124"> phy124 (4) </option>
	<option name="seven" value="gst122"> gst122 (2) </option>
	<option name="seven" value="gst123"> gst123 (2) </option>
	<option name="seven" value="gst121"> gst121 (2) </option>
	<option name="seven" value="chm122"> chm122 (3) </option>
	<option name="seven" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
8
<select  name="eight">
    <option default>empty  </option>
	<option name="eight" value="mth110"> Mth110 (3) </option>
	<option name="eight" value="mth112"> mth112 (3) </option>
	<option name="eight" value="phy109"> phy109 (2) </option>
	<option name="eight" value="phy111"> phy111 (3) </option>
	<option name="eight" value="phy113"> phy113 (3) </option>
	<option name="eight" value="chm111"> chm111 (3) </option>
	<option name="eight" value="csc110"> csc110 (3) </option>
	<option name="eight" value="csc111"> csc111 (3) </option>
	<option name="eight" value="gst111"> gst111 (2) </option>
	<option name="eight" value="gst112"> gst112 (2) </option>
	<option name="eight" value="mth123"> mth123 (3) </option>
	<option name="eight" value="mth125"> mth125 (3) </option>
	<option name="eight" value="phy124"> phy124 (4) </option>
	<option name="eight" value="gst122"> gst122 (2) </option>
	<option name="eight" value="gst123"> gst123 (2) </option>
	<option name="eight" value="gst121"> gst121 (2) </option>
	<option name="eight" value="chm122"> chm122 (3) </option>
	<option name="eight" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
9
<select  name="nine">
    <option default>empty  </option>
	<option name="nine" value="mth110"> Mth110 (3) </option>
	<option name="nine" value="mth112"> mth112 (3) </option>
	<option name="nine" value="phy109"> phy109 (2) </option>
	<option name="nine" value="phy111"> phy111 (3) </option>
	<option name="nine" value="phy113"> phy113 (3) </option>
	<option name="nine" value="chm111"> chm111 (3) </option>
	<option name="nine" value="csc110"> csc110 (3) </option>
	<option name="nine" value="csc111"> csc111 (3) </option>
	<option name="nine" value="gst111"> gst111 (2) </option>
	<option name="nine" value="gst112"> gst112 (2) </option>
	<option name="nine" value="mth123"> mth123 (3) </option>
	<option name="nine" value="mth125"> mth125 (3) </option>
	<option name="nine" value="phy124"> phy124 (4) </option>
	<option name="nine" value="gst122"> gst122 (2) </option>
	<option name="nine" value="gst123"> gst123 (2) </option>
	<option name="nine" value="gst121"> gst121 (2) </option>
	<option name="nine" value="chm122"> chm122 (3) </option>
	<option name="nine" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
10
<select  name="ten">
    <option default>empty  </option>
	<option name="ten" value="mth110"> Mth110 (3) </option>
	<option name="ten" value="mth112"> mth112 (3) </option>
	<option name="ten" value="phy109"> phy109 (2) </option>
	<option name="ten" value="phy111"> phy111 (3) </option>
	<option name="ten" value="phy113"> phy113 (3) </option>
	<option name="ten" value="chm111"> chm111 (3) </option>
	<option name="ten" value="csc110"> csc110 (3) </option>
	<option name="ten" value="csc111"> csc111 (3) </option>
	<option name="ten" value="gst111"> gst111 (2) </option>
	<option name="ten" value="gst112"> gst112 (2) </option>
	<option name="ten" value="mth123"> mth123 (3) </option>
	<option name="ten" value="mth125"> mth125 (3) </option>
	<option name="ten" value="phy124"> phy124 (4) </option>
	<option name="ten" value="gst122"> gst122 (2) </option>
	<option name="ten" value="gst123"> gst123 (2) </option>
	<option name="ten" value="gst121"> gst121 (2) </option>
	<option name="ten" value="chm122"> chm122 (3) </option>
	<option name="ten" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
11
<select  name="eleven">
    <option default>empty  </option>
	<option name="eleven" value="mth110"> Mth110 (3) </option>
	<option name="eleven" value="mth112"> mth112 (3) </option>
	<option name="eleven" value="phy109"> phy109 (2) </option>
	<option name="eleven" value="phy111"> phy111 (3) </option>
	<option name="eleven" value="phy113"> phy113 (3) </option>
	<option name="eleven" value="chm111"> chm111 (3) </option>
	<option name="eleven" value="csc110"> csc110 (3) </option>
	<option name="eleven" value="csc111"> csc111 (3) </option>
	<option name="eleven" value="gst111"> gst111 (2) </option>
	<option name="eleven" value="gst112"> gst112 (2) </option>
	<option name="eleven" value="mth123"> mth123 (3) </option>
	<option name="eleven" value="mth125"> mth125 (3) </option>
	<option name="eleven" value="phy124"> phy124 (4) </option>
	<option name="eleven" value="gst122"> gst122 (2) </option>
	<option name="eleven" value="gst123"> gst123 (2) </option>
	<option name="eleven" value="gst121"> gst121 (2) </option>
	<option name="eleven" value="chm122"> chm122 (3) </option>
	<option name="eleven" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
12
<select  name="twelve">
    <option default>empty  </option>
	<option name="twelve" value="mth110"> Mth110 (3) </option>
	<option name="twelve" value="mth112"> mth112 (3) </option>
	<option name="twelve" value="phy109"> phy109 (2) </option>
	<option name="twelve" value="phy111"> phy111 (3) </option>
	<option name="twelve" value="phy113"> phy113 (3) </option>
	<option name="twelve" value="chm111"> chm111 (3) </option>
	<option name="twelve" value="csc110"> csc110 (3) </option>
	<option name="twelve" value="csc111"> csc111 (3) </option>
	<option name="twelve" value="gst111"> gst111 (2) </option>
	<option name="twelve" value="gst112"> gst112 (2) </option>
	<option name="twelve" value="mth123"> mth123 (3) </option>
	<option name="twelve" value="mth125"> mth125 (3) </option>
	<option name="twelve" value="phy124"> phy124 (4) </option>
	<option name="twelve" value="gst122"> gst122 (2) </option>
	<option name="twelve" value="gst123"> gst123 (2) </option>
	<option name="twelve" value="gst121"> gst121 (2) </option>
	<option name="twelve" value="chm122"> chm122 (3) </option>
	<option name="twelve" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
13
<select  name="thirteen">
    <option default>empty  </option>
	<option name="thirteen" value="mth110"> Mth110 (3) </option>
	<option name="thirteen" value="mth112"> mth112 (3) </option>
	<option name="thirteen" value="phy109"> phy109 (2) </option>
	<option name="thirteen" value="phy111"> phy111 (3) </option>
	<option name="thirteen" value="phy113"> phy113 (3) </option>
	<option name="thirteen" value="chm111"> chm111 (3) </option>
	<option name="thirteen" value="csc110"> csc110 (3) </option>
	<option name="thirteen" value="csc111"> csc111 (3) </option>
	<option name="thirteen" value="gst111"> gst111 (2) </option>
	<option name="thirteen" value="gst112"> gst112 (2) </option>
	<option name="thirteen" value="mth123"> mth123 (3) </option>
	<option name="thirteen" value="mth125"> mth125 (3) </option>
	<option name="thirteen" value="phy124"> phy124 (4) </option>
	<option name="thirteen" value="gst122"> gst122 (2) </option>
	<option name="thirteen" value="gst123"> gst123 (2) </option>
	<option name="thirteen" value="gst121"> gst121 (2) </option>
	<option name="thirteen" value="chm122"> chm122 (3) </option>
	<option name="thirteen" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
14
<select  name="fourteen">
    <option default>empty  </option>
	<option name="fourteen" value="mth110"> Mth110 (3) </option>
	<option name="fourteen" value="mth112"> mth112 (3) </option>
	<option name="fourteen" value="phy109"> phy109 (2) </option>
	<option name="fourteen" value="phy111"> phy111 (3) </option>
	<option name="fourteen" value="phy113"> phy113 (3) </option>
	<option name="fourteen" value="chm111"> chm111 (3) </option>
	<option name="fourteen" value="csc110"> csc110 (3) </option>
	<option name="fourteen" value="csc111"> csc111 (3) </option>
	<option name="fourteen" value="gst111"> gst111 (2) </option>
	<option name="fourteen" value="gst112"> gst112 (2) </option>
	<option name="fourteen" value="mth123"> mth123 (3) </option>
	<option name="fourteen" value="mth125"> mth125 (3) </option>
	<option name="fourteen" value="phy124"> phy124 (4) </option>
	<option name="fourteen" value="gst122"> gst122 (2) </option>
	<option name="fourteen" value="gst123"> gst123 (2) </option>
	<option name="fourteen" value="gst121"> gst121 (2) </option>
	<option name="fourteen" value="chm122"> chm122 (3) </option>
	<option name="fourteen" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
15
<select  name="fifteen">
    <option default>empty  </option>
	<option name="fifteen" value="mth110"> Mth110 (3) </option>
	<option name="fifteen" value="mth112"> mth112 (3) </option>
	<option name="fifteen" value="phy109"> phy109 (2) </option>
	<option name="fifteen" value="phy111"> phy111 (3) </option>
	<option name="fifteen" value="phy113"> phy113 (3) </option>
	<option name="fifteen" value="chm111"> chm111 (3) </option>
	<option name="fifteen" value="csc110"> csc110 (3) </option>
	<option name="fifteen" value="csc111"> csc111 (3) </option>
	<option name="fifteen" value="gst111"> gst111 (2) </option>
	<option name="fifteen" value="gst112"> gst112 (2) </option>
	<option name="fifteen" value="mth123"> mth123 (3) </option>
	<option name="fifteen" value="mth125"> mth125 (3) </option>
	<option name="fifteen" value="phy124"> phy124 (4) </option>
	<option name="fifteen" value="gst122"> gst122 (2) </option>
	<option name="fifteen" value="gst123"> gst123 (2) </option>
	<option name="fifteen" value="gst121"> gst121 (2) </option>
	<option name="fifteen" value="chm122"> chm122 (3) </option>
	<option name="fifteen" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
16
<select  name="sixteen">
    <option default>empty  </option>
	<option name="sixteen" value="mth110"> Mth110 (3) </option>
	<option name="sixteen" value="mth112"> mth112 (3) </option>
	<option name="sixteen" value="phy109"> phy109 (2) </option>
	<option name="sixteen" value="phy111"> phy111 (3) </option>
	<option name="sixteen" value="phy113"> phy113 (3) </option>
	<option name="sixteen" value="chm111"> chm111 (3) </option>
	<option name="sixteen" value="csc110"> csc110 (3) </option>
	<option name="sixteen" value="csc111"> csc111 (3) </option>
	<option name="sixteen" value="gst111"> gst111 (2) </option>
	<option name="sixteen" value="gst112"> gst112 (2) </option>
	<option name="sixteen" value="mth123"> mth123 (3) </option>
	<option name="sixteen" value="mth125"> mth125 (3) </option>
	<option name="sixteen" value="phy124"> phy124 (4) </option>
	<option name="sixteen" value="gst122"> gst122 (2) </option>
	<option name="sixteen" value="gst123"> gst123 (2) </option>
	<option name="sixteen" value="gst121"> gst121 (2) </option>
	<option name="sixteen" value="chm122"> chm122 (3) </option>
	<option name="sixteen" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
17
<select  name="seventeen">
    <option default>empty  </option>
	<option name="seventeen" value="mth110"> Mth110 (3) </option>
	<option name="seventeen" value="mth112"> mth112 (3) </option>
	<option name="seventeen" value="phy109"> phy109 (2) </option>
	<option name="seventeen" value="phy111"> phy111 (3) </option>
	<option name="seventeen" value="phy113"> phy113 (3) </option>
	<option name="seventeen" value="chm111"> chm111 (3) </option>
	<option name="seventeen" value="csc110"> csc110 (3) </option>
	<option name="seventeen" value="csc111"> csc111 (3) </option>
	<option name="seventeen" value="gst111"> gst111 (2) </option>
	<option name="seventeen" value="gst112"> gst112 (2) </option>
	<option name="seventeen" value="mth123"> mth123 (3) </option>
	<option name="seventeen" value="mth125"> mth125 (3) </option>
	<option name="seventeen" value="phy124"> phy124 (4) </option>
	<option name="seventeen" value="gst122"> gst122 (2) </option>
	<option name="seventeen" value="gst123"> gst123 (2) </option>
	<option name="seventeen" value="gst121"> gst121 (2) </option>
	<option name="seventeen" value="chm122"> chm122 (3) </option>
	<option name="seventeen" value="csc120"> csc120 (3) </option>
</select>
<br/>
<br/>
18
<select  name="eighteen">
    <option default>empty  </option>
	<option name="eighteen" value="mth110"> Mth110 (3) </option>
	<option name="eighteen" value="mth112"> mth112 (3) </option>
	<option name="eighteen" value="phy109"> phy109 (2) </option>
	<option name="eighteen" value="phy111"> phy111 (3) </option>
	<option name="eighteen" value="phy113"> phy113 (3) </option>
	<option name="eighteen" value="chm111"> chm111 (3) </option>
	<option name="eighteen" value="csc110"> csc110 (3) </option>
	<option name="eighteen" value="csc111"> csc111 (3) </option>
	<option name="eighteen" value="gst111"> gst111 (2) </option>
	<option name="eighteen" value="gst112"> gst112 (2) </option>
	<option name="eighteen" value="mth123"> mth123 (3) </option>
	<option name="eighteen" value="mth125"> mth125 (3) </option>
	<option name="eighteen" value="phy124"> phy124 (4) </option>
	<option name="eighteen" value="gst122"> gst122 (2) </option>
	<option name="eighteen" value="gst123"> gst123 (2) </option>
	<option name="eighteen" value="gst121"> gst121 (2) </option>
	<option name="eighteen" value="chm122"> chm122 (3) </option>
	<option name="eighteen" value="csc120"> csc120 (3) </option>
</select>	

	
	<hr/>
	<input  type="submit" name="reg100" value="REGISTER" />
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