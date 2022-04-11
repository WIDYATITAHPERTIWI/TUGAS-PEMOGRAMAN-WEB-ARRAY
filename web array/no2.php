<?php 
$nrpasc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");asort($nrpasc);
$namaasc = array("Bagus","Bima","Chandra","Heca","Mifta","Rikha","Sofi","Sadham","Nadila","Niken","Nina","Oscar","Monika","Nando","Putri","Rera","Widya","Renung","Rayhan","Raka","Reneta","Rojib","Novriyo","Rizaldo","Rama","Rikza","Shasa","Yuli","Gusti","Iim");asort($namaasc);

$nrpdesc = array("1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30");rsort($nrpdesc);
$namadesc= array("Bagus","Bima","Chandra","Heca","Mifta","Rikha","Sofi","Sadham","Nadila","Niken","Nina","Oscar","Monika","Nando","Putri","Rera","Widya","Renung","Rayhan","Raka","Reneta","Rojib","Novriyo","Rizaldo","Rama","Rikza","Shasa","Yuli","Gusti","Iim");rsort($namadesc);

echo "<p>______________________________________________________________________________________ASC_________________________________________________________________________________________________________________________<p>";


function dataMhsasc($nrpasc,$namaasc){
	for ($i=0; $i <30 ; $i++) { 
	echo "<p>NRP $nrpasc[$i]<p>";
	echo "<p>Nama $namaasc[$i]<p>";
	echo "<hr>";
	
	}

}
dataMhsasc($nrpasc,$namaasc);
echo "<p>______________________________________________________________________________________DESC_________________________________________________________________________________________________________________________<p>";

function dataMhsDesc($nrpdesc,$namadesc){
for ($i=0; $i <29 ; $i++) { 
	echo "<p>NRP $nrpdesc[$i]<p>";
	echo "<p>Nama $namadesc[$i]<p>";
	echo "<hr>";
	
	}


}
dataMhsasc($nrpdesc,$namadesc);

 ?>

