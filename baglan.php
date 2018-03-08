<?php 
$baglan = mysql_connect("localhost","root","");
if($baglan){echo 'baglanti kuruldu';}
else{echo 'baglantı kurulamadı';}
mysql_select_db("deneme", $baglan);

?>