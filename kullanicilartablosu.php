<?php 

mysql_select_db("deneme");
$sorgu = "CREATE TABLE kullanicilar2 (
 `id` serial   NOT NULL auto_increment,
 `isim` varchar(20)  NOT NULL,
 `eposta` text   NOT NULL,
 `sifre` varchar(15) NOT NULL,
 `kullaniciadi` varchar(20) NOT NULL
) ";
echo $sorgu;
if(mysql_query($sorgu))
{
    echo  
	     "Tablo oluşturuldu";
}
else
{
    echo 
	    "HATA! tablo oluşturulamadı.";
}
?>