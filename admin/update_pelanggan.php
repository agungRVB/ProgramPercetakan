<?php
    include '../config/koneksi.php';
    $sql = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[kd]'");
    $bc  = mysql_fetch_array($sql);

    $sql1 = mysql_query("SELECT * FROM user WHERE id_pelanggan='$_GET[kd]'");
    $bc1  = mysql_fetch_array($sql1);

?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
  <h1 class="box-title" style="font-size:150%;">Data Kamar Kos</h1>
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
          <td style="font-size:90%"><label for="exampleInputEmail1">Nama Lengkap</label></td><td>:</td>
          <td><input type="text" class="form-control" value="<?php echo $bc['nm_pelanggan']; ?>" name="nm_pelanggan" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%" valign="top"><label for="exampleInputEmail1">Alamat</label></td><td valign="top">:</td>
          <td><textarea class="textarea" name="alamat" placeholder="" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $bc['alamat']; ?></textarea></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Nomor Telepon</label></td><td>:</td>
          <td><input type="text" class="form-control" value="<?php echo $bc['no_telp']; ?>" name="no_telp" placeholder="" required></td>
          </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Username</label></td><td>:</td>
          <td><input type="text" class="form-control" value="<?php echo $bc1['nm_user']; ?>" name="nm_user" placeholder="" required></td>
        </div>
      </tr>
      <tr>
        <div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Password</label></td><td>:</td>
          <td><input type="text" class="form-control" value="<?php echo $bc1['sandi']; ?>" name="sandi" placeholder="" required></td>
        </div>
      </tr>



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
@$nm_pelanggan = $_POST['nm_pelanggan'];
@$alamat       = $_POST['alamat'];
@$no_telp      = $_POST['no_telp'];
@$nm_user      = $_POST['nm_user'];
@$sandi        = $_POST['sandi'];
          if (isset($_POST['submit'])) {
            include 'config/koneksi.php';

        mysql_query("UPDATE pelanggan SET  nm_pelanggan='$nm_pelanggan', no_telp='$no_telp', alamat='$alamat' WHERE id_pelanggan='$_GET[kd]'");
        mysql_query("UPDATE user SET nm_user='$nm_user', sandi='$sandi' WHERE id_pelanggan='$_GET[kd]'");


       ?>
       <script language="javascript">
          window.location.href="?menu=pelanggan";
       </script>
       <?php
}
 ?>
