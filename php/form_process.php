<?php
SESSION_START();
require 'db_connect.php';
require 'module2.php';

$uname =  $_SESSION['uname'];

if(isset($_POST['reg100'])){
	        
	        $one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	        $five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	        $sixteen = $_POST['sixteen'];
	        $seventeen = $_POST['seventeen'];
	        $eighteen = $_POST['eighteen'];
	
	
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
	
	if($sum < 36  ){
		$regerror1= "Courses Registered Should be more than 36 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg.php?u='.$uname.'');
		exit();	
	}
		if($sum >= 50  ){
		$regerror1= "Courses Registered Should be less than 50 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg.php?u='.$uname.'');
		exit();	
	}
	
	$in1_query="INSERT INTO 100level  (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,fifteen,sixteen,seventeen,eighteen,
									reg_status) VALUES ('$uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '$fifteen','$sixteen','$seventeen','$eighteen','1')";
          							$in1=mysqli_query($db_con,$in1_query);
          							
          							$regerror1="REGISTRATION SUCCESFULL";
          							$_SESSION['regerror1']=$regerror1;
          				header('location:../home.php?u='.$uname.'');			
          							
          				
	
}

if(isset($_POST['reg200'])){
	        
	        $one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	        $five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        
	        
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

$sum= $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10+$s11+$s12+$s13+$s14   ;

	if($sum < 36  ){
		$regerror1= "Courses Registered Should be more than 36 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg2.php?u='.$uname.'');
		exit();	
	}
		if($sum >= 50  ){
		$regerror1= "Courses Registered Should be less than 50 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg2.php?u='.$uname.'');
		exit();	
	}
	
	
	
	$in1_query="INSERT INTO 200level  (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,
									reg_status) VALUES ('$uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '1')";
          							$in1=mysqli_query($db_con,$in1_query);
	


				$up="UPDATE user SET level='200' WHERE username='$uname'   ";
				   $up1=mysqli_query($db_con,$up);

          							$regerror1="REGISTRATION SUCCESFULL";
          							$_SESSION['regerror1']=$regerror1;
          				header('location:../home.php?u='.$uname.'');

}





if(isset($_POST['grade'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	        $sixteen = $_POST['sixteen'];
	        $seventeen = $_POST['seventeen'];
	        $eighteen = $_POST['eighteen'];
	
	$in2_query="INSERT INTO 100level_result   (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,fifteen,sixteen,seventeen,eighteen,
									result_stat) VALUES ('$s_uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '$fifteen','$sixteen','$seventeen','$eighteen','1')";
          							$in2=mysqli_query($db_con,$in2_query);	
	
						header('location:../home2.php');

	
	
	
	
}

if(isset($_POST['grade200'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	
	$in2_query="INSERT INTO 200level_result   (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,
									result_stat) VALUES ('$s_uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '1')";
          							$in2=mysqli_query($db_con,$in2_query);	
								header('location:../200level.php');

	

	}
if(isset($_POST['grade300'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	        $sixteen = $_POST['sixteen'];
	
	$in2_query="INSERT INTO 300level_result   (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,fifteen,sixteen,
									result_stat) VALUES ('$s_uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '$fifteen','$sixteen','1')";
          							$in2=mysqli_query($db_con,$in2_query);	
									header('location:../300level.php');
}



if(isset($_POST['reg300'])){
	        
	        $one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	        $five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	        $sixteen = $_POST['sixteen'];;
	
	
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

$sum= $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10+$s11+$s12+$s13+$s14+$s15+$s16;

	if($sum < 36  ){
		$regerror1= "Courses Registered Should be more than 36 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg3.php?u='.$uname.'');
		exit();	
	}
		if($sum >= 50  ){
		$regerror1= "Courses Registered Should be less than 50 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg3.php?u='.$uname.'');
		exit();	
	}
		
	
	
	$in1_query="INSERT INTO 300level  (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,fifteen,sixteen,
									reg_status) VALUES ('$uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '$fifteen','$sixteen','1')";
          							$in1=mysqli_query($db_con,$in1_query);
          							
          		
				$up="UPDATE user SET level='300' WHERE username='$uname'   ";
				   $up1=mysqli_query($db_con,$up);
				   
				   
				  
          							$regerror1="REGISTRATION SUCCESFULL";
          							$_SESSION['regerror1']=$regerror1;
          				header('location:../home.php?u='.$uname.''); 
          							
}

if(isset($_POST['reg400'])){
	        
	        $one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	        $five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	
	
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
$sum= $s1+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$s10+$s11+$s12+$s13+$s14+$s15;

	if($sum < 36  ){
		$regerror1= "Courses Registered Should be more than 36 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg4.php?u='.$uname.'');
		exit();	
	}
		if($sum >= 50  ){
		$regerror1= "Courses Registered Should be less than 50 credits  ";
		$_SESSION['regerror1']=$regerror1;
		header('location:../course_reg4.php?u='.$uname.'');
		exit();	
	}
		
	
	$in1_query="INSERT INTO 400level  (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,fifteen,
									reg_status) VALUES ('$uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '$fifteen','1')";
          							$in1=mysqli_query($db_con,$in1_query);
          							
          		$up="UPDATE user SET level='400' WHERE username='$uname'   ";
				   $up1=mysqli_query($db_con,$up);
          					
          			          							$regerror1="REGISTRATION SUCCESFULL";
          							$_SESSION['regerror1']=$regerror1;
          				header('location:../home.php?u='.$uname.''); 		
          					
          					
          							
 }
if(isset($_POST['grade400'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	
	$in2_query="INSERT INTO 400level_result   (username,one,two,three,four,five,six,seven,eight,nine,ten,eleven,
									twelve,thirteen,fourteen,fifteen,
									result_stat) VALUES ('$s_uname','$one','$two','$three','$four','$five','$six','$seven',
									  					'$eight','$nine','$ten','$eleven','$twelve','$thirteen','$fourteen',
									  					 '$fifteen','1')";
          							$in2=mysqli_query($db_con,$in2_query);		
									header('location:../400level.php');
	
}

if(isset($_POST['editgrade400'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	
	$in2_query="  UPDATE 400level_result SET
												one=$one,
												two=$two,
												three=$three,
												four=$four,
												five=$five,
												six=$six,
												seven=$seven,
												eight=$eight,
												nine=$nine,
												ten=$ten,
												eleven=$eleven,
												twelve=$twelve,
												thirteen=$thirteen,
												fourteen=$fourteen,
												fifteen=$fifteen,
												result_stat='1'
																	WHERE username='$s_uname' ";
          							$in2=mysqli_query($db_con,$in2_query);	
	
									header('location:../400level.php');
}

if(isset($_POST['editgrade300'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	        $sixteen = $_POST['sixteen'];
	
	$in2_query="  UPDATE 300level_result SET
												one=$one,
												two=$two,
												three=$three,
												four=$four,
												five=$five,
												six=$six,
												seven=$seven,
												eight=$eight,
												nine=$nine,
												ten=$ten,
												eleven=$eleven,
												twelve=$twelve,
												thirteen=$thirteen,
												fourteen=$fourteen,
												fifteen=$fifteen,
												sixteen=$sixteen,
												result_stat='1'
																	WHERE username='$s_uname' ";
          							$in2=mysqli_query($db_con,$in2_query);	
									header('location:../300level.php');	
}

if(isset($_POST['editgrade200'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	
	$in2_query="  UPDATE 200level_result SET
												one=$one,
												two=$two,
												three=$three,
												four=$four,
												five=$five,
												six=$six,
												seven=$seven,
												eight=$eight,
												nine=$nine,
												ten=$ten,
												eleven=$eleven,
												twelve=$twelve,
												thirteen=$thirteen,
												fourteen=$fourteen,
												result_stat='1'
																	WHERE username='$s_uname' ";
          							$in2=mysqli_query($db_con,$in2_query);	
									header('location:../200level.php');	
}

if(isset($_POST['editgrade100'] )  ){
	                      
	         $s_uname= $_GET['u'];
	                      
			$one = $_POST['one'];
	        $two = $_POST['two'];
	        $three = $_POST['three'];
	        $four = $_POST['four'];
	       	$five = $_POST['five'];
	        $six = $_POST['six'];
	        $seven = $_POST['seven'];
	        $eight = $_POST['eight'];
	        $nine = $_POST['nine'];
	        $ten = $_POST['ten'];
	        $eleven = $_POST['eleven'];
	        $twelve = $_POST['twelve'];
	        $thirteen = $_POST['thirteen'];
	        $fourteen = $_POST['fourteen'];
	        $fifteen = $_POST['fifteen'];
	        $sixteen = $_POST['sixteen'];
	        $seventeen = $_POST['seventeen'];
	        $eighteen = $_POST['eighteen'];
	
	$in2_query="  UPDATE 100level_result SET
												one=$one,
												two=$two,
												three=$three,
												four=$four,
												five=$five,
												six=$six,
												seven=$seven,
												eight=$eight,
												nine=$nine,
												ten=$ten,
												eleven=$eleven,
												twelve=$twelve,
												thirteen=$thirteen,
												fourteen=$fourteen,
												fifteen=$fifteen,
												sixteen=$sixteen,
												seventeen=$seventeen,
												eighteen=$eighteen,
												result_stat='1'
																	WHERE username='$s_uname' ";
          							$in2=mysqli_query($db_con,$in2_query);	
									header('location:../home2.php');	
}


if(isset($_POST['edit'] )  ){
	
	 $s_uname= $_GET['uname'];
	$val = $_POST['edit1'];
	
	if($val==100){
		$lev="100level";
	}
	if($val==200){
		$lev="200level";
	}
	if($val==300){
		$lev="300level";
	}
	if($val==400){
		$lev="400level";
	}
				   	          		$up2="UPDATE $lev set reg_status='0' WHERE username='$s_uname'   ";
				   $up3=mysqli_query($db_con,$up2);
				   
				   if( $up3  ){
				   	echo "yea!!";
				   }
				   
	$allow="ACTION COMPLETED";
	$_SESSION['allow']=$allow;
	//header('location:../home2.php');
	
}


?>