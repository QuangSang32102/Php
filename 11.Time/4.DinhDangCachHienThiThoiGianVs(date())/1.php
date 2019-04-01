<?php 
	/*
				Ký Hiệu-----Đại diện-----Giá trị   					Ký Hiệu-----Đại diện-----Giá trị
				d 			Day 		 01->31						g 			Hour 		 1  -> 12
				j 			Day 		 1->31						G 			Hour 		 0  -> 23
				m 			Month 		 01->12						h 			Hour 		 01 -> >12
				n 			Month 		 1->12						H 			Hour 		 01 -> 23
				M 			Month 		 Jan,Feb,..					i 			Minute 		 0  -> 59
				Y 			Year 		 2019						s 			Second 		 00 -> 59
				y 			Year 		 19							a 			Am/pm 		 am pm
																	A 			Am/pm 		 AM PM	
	 */
	
	$time = time();
	$time2 = mktime(12,12,12,12,12,2012);

	echo date("d/m/y A - H : i : s",$time) . "<br>";
	echo date("d/m/Y A",$time) . "<br>";

	echo date("d/m/Y A", $time2);
 ?>