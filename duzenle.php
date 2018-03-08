<?php
if($_POST){
	$id=$_POST["id"] ;
	$sorgu=mysql_querry("select * from kullanicilar where id='$id'");
	$kayit=mysql_fetch_array($sorgu);
	echo '<form name="form1" method="post" action="index.php?sayfa=guncelle">
		ID:<input type="serial" name="id" value="'.$kayit["id"].'" /><br/>
		ISIM:<input type="text" name="isim" value="'.$kayit["isim"].'"/><br/>
		E-Posta:<input type="text" name="eposta" value="'.$kayit["eposta"].'"/><br/>
		SIFRE:<input type="text" name="sifre" value="'.$kayit["sifre"].'"/><br/>
		KULLANICIADI:<input type="text" name="kullaniciadi" value="'.$kayit["kullaniciadi"].'"/><br/>
		<input type="submit" name="gonder" value="guncelle"/>
	</form>';
}
else{
	$sorgu=mysql_query("select * from kullanicilar");
echo " <table>";
echo '<tr><td>isim</td><td>kullaniciadi</td><td>eposta</td><td>duzenle</td></tr>';
 
while($kayit=mysql_fetch_array($sorgu)){
	echo 'form action="index.php?sayfa=duzenle" method="post" name="form1"';
    echo '<tr>';
    echo '<td>'.$kayit["isim"].'</td>';
    echo '<td>'.$kayit["kullaniciadi"].'</td>';
    echo '<td>'.$kayit["eposta"].'</td>';
	echo '<td><input type="gonder" name ="id" value="guncelle"/></td>';
	echo '<input type="hidden" name="id" value="'.$kayit["id"].'"/>';
    echo '</tr>';
	echo '</form>';
}
echo '</table>';}


?>