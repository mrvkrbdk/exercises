 <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<style type="text/css">
	
	
	</style>
</head>


<body>
	<div class="container">
		<a href="index1.php?sayfa=ekleme">Kayıt Ekle</a>
		<a href="index1.php?sayfa=sil">Sil</a>
		<a href="index1.php?sayfa=duzenle">Düzenle</a>
		<a href="index1.php?sayfa=liste">Listele</a>
	</div>
	<div id="icerik">
	<?php
	include("baglan.php");
	include ("kullanicilartablosu.php");
	$sayfa=@$_GET["sayfa"];
	switch($sayfa){
		case "ekleme";
			include("ekleme.php");
		break;
		case "sil";
			include("sil.php");
		break;
		case "duzenle";
			include("duzenle.php");
		break;
		case "listele";
			include("listele.php");
		break;
		case "guncelle";
			include("guncelle.php");
		break;
		}
	?>
	</div>
	
</body>
</html>