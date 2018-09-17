<?php
include '../config/koneksi.php';
$kode = $_GET['kd'];
   mysql_query("UPDATE pembayaran SET stts='2' WHERE kd_pembayaran='$kode'");
 ?>
 <script language="javascript">
    window.location.href="index.php?menu=pembayaran";
 </script>
