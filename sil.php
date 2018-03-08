<?php
$baglanti=mysql_connect("localhost","root","");
$vt_sec=mysql_select_db("deneme");

if(isset($_GET['komut'])&& $_GET['komut']=='duzenle'){
	$sql="select * from kullanicilar where id=$_GET(id)";
	$sonuc=mysql_query($sql);
	$yaz=mysql_fetch_assoc($sonuc);
	echo "

   <form action ='' method='POST'>
  <br><tr><td>ID:</td><td><input type='serial' name='id' value='$yaz[id]'></td></tr>
  <br><tr><td>ISIM:</td><td><input type='serial' name='isim' value='$yaz[isim]'></td></tr>
  <br><tr><td>SIFRE:</td><td><input type='serial' name='sifre' value='$yaz[sifre]'></td></tr>
  <br><tr><td>EMAIL:</td><td><input type='serial' name='email' value='$yaz[email]'></td></tr>
 <br><tr><td>KULLANICI ADI:</td><td><input type='serial' name='kullaniciadi' value='$yaz[kullaniciadi]'></td></tr>
  <br><input type='submit' name='duzenle' value='duzenle'>
 </form> ";
}else {
   echo "

<form action ='' method='POST'>
  <br><tr><td>ID:</td><td><input type='serial' name='id'></td></tr>
  <br><tr><td>ISIM:</td><td><input type='serial' name='isim'></td></tr>
  <br><tr><td>SIFRE:</td><td><input type='serial' name='sifre'></td></tr>
  <br><tr><td>EMAIL:</td><td><input type='serial' name='email'></td></tr>
 <br><tr><td>KULLANICI ADI:</td><td><input type='serial' name='kullaniciadi'></td></tr>
  <br><input type='submit' name='kaydet' value='kaydet'>
 </form> ";
}



 if (isset($_POST['duzenle'])){
	 $sql="update kullanicilar set id='$_POST[id]',isim='$_POST[isim]',email='$_POST[email]',sifre='$_POST[sifre]',kullaniciadi='$_POST[kullaniciadi]' where id=$_GET[id]";
 mysql_query($sql,$baglanti);
 header("location:newindex.php");
 }
 
 
 
 
if (isset($_POST['kaydet'])){
	$sql="insert into kullanicilar(id,isim,email,sifre,kullaniciadi) values('','$_POST[isim]','$_POST[email]','$_POST[sifre]','$_POST[kullaniciadi]')";
mysql_query($sql);
	}
$sql="select * from kullanicilar";
$sonuc=mysql_query($sql,$baglanti);
if(mysql_num_rows($sonuc)==0) echo "liste boş";
echo "<form action ='' method='POST'>
        <table class='table table-striped'>;
        <thead><th>ID</th><th>ISIM</th><th>EMAIL</th><th> KULLANICIADI</th><th>DUZENLE</th><th>SIL</th></tr></thead>"; 
		
 while($dizi=mysql_fetch_assoc($sonuc)){
	
	 
	echo "<tbody><tr><td>".$dizi['id']."</td>";
	 echo "<td>".$dizi['isim']."</td>";
	 echo "<td>".$dizi['email']."</td>";
	 echo "<td>".$dizi['kullaniciadi']."</td>";
	echo "<td><a href='?komut=duzenle&id=$dizi[id]'><img src='duzenle.png'></a></td>";
	echo "<td><a href='?komut=sil&id=$dizi[id]'><img src='sil.png'></a></td></tbody>";
	
 }
 echo "</table></form>";

?>









































