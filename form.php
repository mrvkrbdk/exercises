<?php

if ($_POST){
    $id=$_POST["id"];
    $isim=$_POST["isim"];
    $eposta=$_POST["eposta"];
	 $sifre=$_POST["sifre"];
	 $kullaniciadi=$_POST["kullaniciadi"];
	 if(!empty($id) &&!empty($isim)&&!empty($eposta)&&!empty($sifre)&&!empty($kullaniciadi)){
	 $kontrol=mysql_query("insert into kullanicilar (id,isim,eposta,sifre,kullaniciadi)
	values (".'$id'.",".'$isim'.",".'$eposta'.",".'$sifre'.",".'$kullaniciadi'.")");
	
    if ($kontrol){
	    echo "Kayıt Başarılı";
    }
    else echo "Kayıt Esnasında Bir Sorun Oluştu!";
	echo '<table class="table " border="1<thead><tr>';
	echo "<th>id</th><th>isim</th><th>eposta</th><th>sifre</th><th>kullaniciadi</th></tr></thead>";
     $sec=mysql_query("select * from kullanicilar");
	while ( $dizi=mysql_fetch_array($sec))
	{
		echo "<tbody><tr><td>".$dizi['id']."</td>";
		echo "<td>".$dizi['isim']."</td>";
		echo "<td>".$dizi['eposta']."</td>";
		echo "<td>".$dizi['sifre']."</td>";
		echo "<td>".$dizi['kullaniciadi']."</td></tr></tbody>";
		
		
	}
	echo "</table>";
	}    
}else{
?>
	<form name="form1" method="post" action="index.php?sayfa=ekleme">
		ID:<input type="serial" name="id"/><br/>
		ISIM:<input type="text" name="isim"/><br/>
		E-Posta:<input type="text" name="eposta"/><br/>
		SIFRE:<input type="text" name="sifre"/><br/>
		KULLANICIADI:<input type="text" name="kullaniciadi"/><br/>
		<input type="submit" name="gonder" value="Kaydet"/>
	</form>
<?php
}
?>