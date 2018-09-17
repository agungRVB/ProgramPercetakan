<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Kelola Pelanggan</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <a href="print_pelanggan.php" style="color:#595757;float:right;" target="_blank">
  <div class="tab-pane" id="glyphicons">
    <ul class="bs-glyphicons">
      <li>
        <span class="glyphicon glyphicon-print"></span>
        <span class="glyphicon-class">Cetak Laporan</span>
      </li>
    </ul>
  </div><!-- /#ion-icons-->
  </a>
        <div style="width:28%;margin:5px 15px 0 5px ;padding:0 30px 0 0;overflow:hidden">
            <font size="4px" style="float:left;padding:10px;"> </font>
          </div>
    <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped" style="font-size:100%">
            <thead>
              <tr>
                <th width="2%">No</th>
                <th>Nama Pelanggan</th>
                <th>Nomor Telepon</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Sandi</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include '../config/koneksi.php';
                  $sql=mysql_query("SELECT * FROM pelanggan WHERE stts !='0' ORDER BY id_pelanggan DESC");
                while ($bc=mysql_fetch_array($sql)) {
                  $sql1 = mysql_query("SELECT * FROM user WHERE id_pelanggan='$bc[id_pelanggan]'");
                  $bc1  = mysql_fetch_array($sql1);
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><?php echo $bc['nm_pelanggan']; ?></td>
                  <td><?php echo $bc['no_telp']; ?></td>
                  <td><?php echo $bc['alamat']; ?></td>
                  <td><?php echo $bc1['nm_user']; ?></td>
                  <td><?php echo $bc1['sandi']; ?></td>

                </tr>
              <?php
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
