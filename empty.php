<?php
$host='localhost';
$user='id7635605_megumin';
$pass='megumin123';
$database='id7635605_dbstbi'; 
    
  $konek_db = mysql_connect($host, $user, $password);    
  $find_db = mysql_select_db($database) ;

$query = "DELETE FROM `dokumen` WHERE 1";
 
$hasil = mysql_query ($query);
 
echo "Data telah dihapus.";
?>
<br>
<a> Kembali ke tabel ? </a> <a href="tokenisasi.php"> YA </a>