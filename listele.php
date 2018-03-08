<?php
$sorgu=mysql_query("select * from kullanicilar");
echo " <table>";
echo '<thead><tr><td>isim</td><td>kullaniciadi</td><td>eposta</td></tr></thead>';
 
while($kayit=mysql_fetch_array($sorgu)){
    echo '<tbody><tr>';
    echo '<td>'.$kayit["isim"].'</td>';
    echo '<td>'.$kayit["kullaniciadi"].'</td>';
    echo '<td>'.$kayit["eposta"].'</td>';
    echo '</tr></tbody>';
}
 
echo '</table>';
 
?>

