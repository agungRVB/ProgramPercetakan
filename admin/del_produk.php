<?php
include '../config/koneksi.php';
$kode = $_GET['kd'];
   mysql_query("UPDATE produk SET stts='0' WHERE kd_produk='$kode'");
 ?>
 <script language="javascript">
    window.location.href="index.php?menu=produk";
 </script>
