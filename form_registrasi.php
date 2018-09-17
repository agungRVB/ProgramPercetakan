<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <section class="content">
    <div class="box box-primary" style="width:100%;margin:0 auto;">
	  <div class="box-body"  style="width:98%"><br>
	   <center><table style="width:55%;line-height:40px;position:relative;top:-15px">
      <tr><div class="form-group">
            <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Nama Lengkap </label></td><td>:</td>
              <td>
                <input type="text" class="form-control" name="nm_pelanggan" size="30" maxlength="35" placeholder="" required>
              </td>
          </div>
      </tr>



      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Alamat</label></td><td>:</td>
          <td><textarea name="alamat" cols="50" rows="4" placeholder="" required></textarea> </td>
          </div>
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Telp</label></td><td>:</td>
          <td><input type="text" class="form-control" name="no_telp" size="30" maxlength="35" placeholder="" required></td>
          </div>
      </tr>
  </form>
      <tr><div class="form-group">
          <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Username</label></td><td>:</td>
          <td><input type="text" class="form-control" name="nm_user" placeholder="" required></td>
          </div>
      </tr>
      <tr><div class="form-group">
          <td style="font-size:90%"><label for="exampleInputEmail1">Password</label></td><td>:</td>
          <td><input type="password" class="form-control" name="sandi" placeholder="" required></td>
          </div>
      </tr>

        <td></td>
        <td colspan="2"><div class="box-footer">
              <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Simpan</button> &nbsp
              <button type="reset" name="batal" class="btn btn-primary">&nbsp Batal</button>

            </div>
        </td>
      </tr>
    </table>
    </center>
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

            $sql3 = mysql_query("SELECT max(id_pelanggan) as id_pelanggan FROM pelanggan");
            $bc3  = mysql_fetch_array($sql3);
                  @$id_pelanggan = $bc3['id_pelanggan'] + 1;
                  echo "$id_pelanggan";

        mysql_query("INSERT INTO pelanggan VALUES('','$nm_pelanggan','$no_telp','$alamat','1')");
        mysql_query("INSERT INTO user VALUES('','$id_pelanggan','$nm_user','$sandi','2','1')");
          }

    ?>
