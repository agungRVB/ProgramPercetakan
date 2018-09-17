<?php
include '../config/Koneksi.php';

$sql1 = mysql_query("SELECT * FROM pesanan WHERE kd_pesanan='$_GET[kd]'");
$bc1  = mysql_fetch_array($sql1);

$sql2 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$bc1[id_pelanggan]'");
$bc2  = mysql_fetch_array($sql2);
?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Input Pesanan</h1>
</div>
<!--<section class="content-header">
  <font size="4px">Tambah Data Kamar Kos</font>
</section>-->
<section class="content">

 <div class="box box-primary" style="width:100%;margin:0 auto;">
	<div class="box-body"  style="width:99.5%">
	  <table style="width:100%;line-height:40px;position:relative;top:-15px">
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Gambar Desain </label></td><td>:</td>
          <td><img src="<?php echo $bc1['desain_pesanan']; ?>" width="200px" height="200px"></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Pelanggan</label></td><td>:</td>
          <td><?php echo $bc2['nm_pelanggan']; ?></td>
        </div>
      </tr>
      <tr>
            <div class="form-group">
              <td style="font-size:90%"><label for="exampleInputEmail1">Produk Yang Dipesan</label></td><td>:</td>
              <td><div>
                  <select name="kd_produk"  class="form-control select2" required style="width:100%;">
                    <?php
                          include '../config/Koneksi.php';
                          $sql3 = mysql_query("SELECT * FROM produk WHERE kd_produk='$bc1[kd_produk]'");
                          $bc3  = mysql_fetch_array($sql3);
                          echo "<option value=$bc3[kd_produk]> $bc3[nm_produk] </option>";

                          $sql = mysql_query("SELECT * FROM produk WHERE stts!='0'");
                          while ($bc=mysql_fetch_array($sql)) {
                            echo "<option value=$bc[kd_produk]> $bc[nm_produk] </option>";
                          }
                     ?>

                  </select>
                  <input type="hidden" name="id_server" value="<?php echo $server_items['id']?>">
                  </div>
              </td>
              </div>
          </tr>
          <tr>
            <div class="form-group">
              <td style="font-size:90%"><label for="exampleInputEmail1">Jumlah Pesanan </label></td><td>:</td>
              <td><input type="text" class="form-control" value="<?php echo $bc1['jumlah']; ?>" name="jumlah" placeholder="" required></td>
            </div>
          </tr>


      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Desain Pesanan</label></td><td>:</td>
          <td><input type="file" name="gambar" placeholder="" required></td>
          </div>
      </tr>
      <!--<tr>
        <div class="form-group">
          <td style="font-size:90%" valign="top"><label for="exampleInputEmail1">Keterangan</label></td><td valign="top">:</td>
          <td><textarea class="textarea" name="keterangan" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea></td>
          </div>
      </tr>-->
        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Save</button> &nbsp
              <button type="reset" class="btn btn-primary" style="background:#713A3A">Reset</button> &nbsp
              <input type="button" class="btn btn-primary" style="color:white;font-weight:bold;background:#6B6B6B" value="Back" onclick="history.back(-1)" >
            </div>
        </td>
      </tr>
    </table>
    </div>
  </div>
</section>
</form>
<?php
include '../config/koneksi.php';

$sql = mysql_query("SELECT * FROM produk WHERE stts!='0'");
$bc=mysql_fetch_array($sql);

@$kd_produk    = $_POST['kd_produk'];
@$id_pelanggan = $bc2['id_pelanggan'];
@$jumlah       = $_POST['jumlah'];
@$tgl_pesan    = date('d-m-Y');
@$total_bayar_pesanan = $bc['harga'] * $jumlah;


@$keterangan   = $_POST['keterangan'];
@$harga        = $_POST['harga'];
@$gambar       = $_POST['gambar'];
if (isset($_POST['submit'])) {



    $tipe_file=$_FILES['gambar']['type'];
    $lokasifile=$_FILES['gambar']['tmp_name'];
    $namafile=trim($_FILES['gambar']['name']);
    $ukurangambar=$_FILES['gambar']['size'];
                     //untuk memilih tipe file untuk masuk ke direktory
       /*if($tipe_file != "image/gif" and
            $tipe_file != "image/jpeg" and
            $tipe_file != "image/jpg" and
            $tipe_file != "image/png"){
      echo"file yang di masukan bukan file gambar";
    }else{*/
 $acak=rand(0000,9999);
 $namaupload=$acak.$namafile;
 $direktori="upload_pesanan/$namaupload";
 move_uploaded_file($lokasifile,"$direktori");

 if (empty($namafile)) {
        mysql_query("UPDATE pesanan SET kd_produk='$kd_produk', jumlah='$jumlah', total_bayar_pesanan='$total_bayar_pesanan' WHERE kd_pesanan='$_GET[kd]'");
   }else{
        mysql_query("UPDATE pesanan SET kd_produk='$kd_produk', desain_pesanan='$direktori', jumlah='$jumlah', total_bayar_pesanan='$total_bayar_pesanan' WHERE kd_pesanan='$_GET[kd]'");
 }


       ?>
       <script language="javascript">
          window.location.href="?menu=pesanan";
       </script>
       <?php
}
 ?>
