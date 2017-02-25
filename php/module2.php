<?php

function result($course,$score){
	             if($course=="phy124"){
				 	if($score==20){
						$grade="A";
					}elseif($score==16){
						$grade="B";
					}elseif($score==12 ){
						$grade="C";
					}elseif($score==8  ){
						$grade="D";
					}elseif($score==4  ){
						$grade="E";
					}else{
						$grade="F";
			}
			 }elseif ($course=="phy109" OR $course=="ced300" ){
			 		if($score==10){
						$grade="A";
					}elseif($score==8){
						$grade="B";
					}elseif($score==6 ){
						$grade="C";
					}elseif($score==4  ){
						$grade="D";
					}elseif($score==2  ){
						$grade="E";
					}else{
						$grade="F";
					}
			 }elseif ($course=="gst111" OR $course=="gst112" OR $course=="gst122" OR $course=="gst123" OR $course=="gst121" ){
			 		if($score==10){
						$grade="A";
					}elseif($score==8){
						$grade="B";
					}elseif($score==6 ){
						$grade="C";
					}elseif($score==4  ){
						$grade="D";
					}elseif($score==2  ){
						$grade="E";
					}else{
						$grade="F";
					}
				}
				elseif ($course=="csc409"){
			 		if($score==30){
						$grade="A";
					}elseif($score==24){
						$grade="B";
					}elseif($score==18 ){
						$grade="C";
					}elseif($score==12  ){
						$grade="D";
					}elseif($score==6 ){
						$grade="E";
					}else{
						$grade="F";
					}
				}
				else{
			 		if($score==15){
						$grade="A";
					}elseif($score==12){
						$grade="B";
					}elseif($score==9 ){
						$grade="C";
					}elseif($score==6  ){
						$grade="D";
					}elseif($score==3  ){
						$grade="E";
					}elseif($score==00  ){
						$grade="null";
					}else{
						$grade="F";
					}
			 
			 }
		return $grade;		 	
		 }
			 

function credit($item){
					
	             if($item=="phy124"){
				 	$load=4;
				 	}
				 	
			 elseif($item=="phy109" OR $item=="ced300" ){
					$load=2;
			 }
			  elseif($item=="csc409" ){
					$load=6;
			 }  elseif($item=="empty" ){
					$load=00;
			 }
			 
			 elseif($item=="gst111" OR $item=="gst112" OR $item=="gst122" OR $item=="gst123" OR $item=="gst121" ){
				$load=2;
				}
				else{
					$load=3;
					 }
		return $load;		 	
		 }
				 
			 

	



?>