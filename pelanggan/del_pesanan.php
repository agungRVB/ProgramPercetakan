<?php
include '../config/koneksi.php';
$kode = $_GET['kd'];
   mysql_query("UPDATE pesanan SET stts='0' WHERE kd_pesanan='$kode'");
 ?>
 <script language="javascript">
    window.location.href="index.php?menu=pesanan";
 </script>
