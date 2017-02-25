<?php
SESSION_START();

$fname =  $_SESSION['fname'];
include_once ("php/db_connect.php");
$uname =  $_SESSION['uname'];
include_once ("php/module2.php");

$result="";

 $query1 ="SELECT * FROM 100level WHERE username='$uname' ";
                            $resu=mysqli_query($db_con,$query1); 
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
                               $fifteen =$row['fifteen'];  
                               $sixteen =$row['sixteen'];  
                               $seventeen =$row['seventeen'];  
                               $eighteen =$row['eighteen'];
                               }

$query2 ="SELECT * FROM 100level_result WHERE username='$uname' ";
                            $resu=mysqli_query($db_con,$query2); 
                            if($resu){
 								//	echo "yea got em!";
							}           	
                               while($row = mysqli_fetch_array($resu)){
                               $rone=$row['one'];  
                               $rtwo =$row['two'];  
                               $rthree =$row['three']; 
                               $rfour =$row['four'];
                               $rfive =$row['five'];  
                               $rsix =$row['six'];  
                               $rseven =$row['seven'];  
                               $reight =$row['eight'];  
                               $rnine =$row['nine'];  
                               $rten =$row['ten'];  
                               $releven =$row['eleven'];  
                               $rtwelve =$row['twelve'];  
                               $rthirteen =$row['thirteen'];  
                               $rfourteen =$row['fourteen'];  
                               $rfifteen =$row['fifteen'];  
                               $rsixteen =$row['sixteen'];  
                               $rseventeen =$row['seventeen'];  
                               $reighteen =$row['eighteen']; 
                               
                             $r1=result($one,$rone);
                             $r2=result($two,$rtwo);
                             $r3=result($three,$rthree);
                             $r4=result($four,$rfour);
                             $r5=result($five,$rfive);
                             $r6=result($six,$rsix);
                             $r7=result($seven,$rseven);
                             $r8=result($eight,$reight);
                             $r9=result($nine,$rnine);
                             $r10=result($ten,$rten);
                             $r11=result($eleven,$releven);
                             $r12=result($twelve,$rtwelve);
                             $r13=result($thirteen,$rthirteen);
                             $r14=result($fourteen,$rfourteen);
                             $r15=result($fifteen,$rfifteen);
                             $r16=result($sixteen,$rsixteen);
                             $r17=result($seventeen,$rseventeen);
                             $r18=result($eighteen,$reighteen);
                               
                               $result .='<li> '.$one.' ---------- '.$r1.'   </li> 
                               			 <li> '.$two.' ---------- '.$r2.'   </li> 
                               			 <li> '.$three.' ---------- '.$r3.'   </li> 
                               			 <li> '.$four.' ---------- '.$r4.'   </li> 
                               			 <li> '.$five.' ---------- '.$r5.'   </li> 
                               			 <li> '.$six.' ---------- '.$r6.'   </li> 
                               			 <li> '.$seven.' ---------- '.$r7.'   </li> 
                               			 <li> '.$eight.' ---------- '.$r8.'   </li> 
                               			 <li> '.$nine.' ---------- '.$r9.'   </li> 
                               			 <li> '.$ten.' ---------- '.$r10.'   </li> 
                               			 <li> '.$eleven.' ---------- '.$r11.'   </li> 
                               			 <li> '.$twelve.' ---------- '.$r12.'   </li> 
                               			 <li> '.$thirteen.' ---------- '.$r13.'   </li> 
                               			 <li> '.$fourteen.' ---------- '.$r14.'   </li> 
                               			 <li> '.$fifteen.' ---------- '.$r15.'   </li> 
                               			 <li> '.$sixteen.' ---------- '.$r16.'   </li> 
                               			 <li> '.$seventeen.' ---------- '.$r17.'   </li> 
                               			 <li> '.$eighteen.' ---------- '.$r18.'   </li> 
                               
                               
                               			  ';
                               }

//////GP//////////////////////////////////
$t1=$rone+$rtwo+$rthree+$rfour+$rfive+$rsix+$rseven+$reight+$rnine+
		$rten+$releven+$rtwelve+$rthirteen+$rfourteen+$rfifteen+$rsixteen+
		$rseventeen+$reighteen;


    $s1=credit($one);
    $s2=credit($two);
    $s3=credit($three);
    $s4=credit($four);
    $s5=credit($five);
    $s6=credit($six);
    $s7=credit($seven);
    $s8=credit($eight);
    $s9=credit($nine);
    $s10=credit($ten);
    $s11=credit($eleven);
    $s12=credit($twelve);
    $s13=credit($thirteen);
    $s14=credit($fourteen);
    $s15=credit($fifteen);
    $s16=credit($sixteen);
    $s17=credit($seventeen);
    $s18=credit($eighteen);

$sum= $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10+$s11+$s12+$s13+$s14+$s15+$s16+$s17+$s18   ;

//echo "$t1 <hr/> ";
//echo $sum;

$t = $t1/$sum;

$gp=round($t,2);

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
<h3>Welcome <?php echo $fname; ?>   </h3> <hr/>
<a href="home.php"> << BACK  </a>
</div>

<div class="history" >

<h2> 100 LEVEL RESULT  </h2> <hr/>
<ul>
	
<?php echo $result; ?>	
	<hr/>
<h3>TOTAL CREDITS REGISTERED = <?php echo $sum; ?>  </h3>
<h3>TOTAL G.P  = <?php echo $gp; ?>  </h3>

	
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