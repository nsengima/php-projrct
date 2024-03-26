<?php
if (123 =="123") {
	print("Equality 1 is Ok\n<br>");
 }else {
 	print("not equal<br>");
}
	if (123 =="100"+23){
		echo ("Equality 2\n<br>");
	}else{
		print ("not equal<br>");
	}
if (FALSE =="1") {
	echo "Equality 3 <br>";
}else{
	print("not equal<br>");
}
$msg=((5<6)=="2"-"1")?"Equality 4<br>":"not equal<br>";
	echo $msg;
$msg1=((5<6) ===TRUE)?"Equality 5<br>": "not equal<br>";
	echo $msg1;
?>