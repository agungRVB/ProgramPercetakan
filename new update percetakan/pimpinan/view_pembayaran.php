<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Kelola Pembayaran</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <a href="print_pembayaran.php" style="color:#595757;float:right;" target="_blank">
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
                <th>Bukti Pembayaran</th>
                <th>Nama Pelanggan</th>
                <th>Pesanan</th>
                <th>Total Pembayaran</th>
                <th>Tanggal Pembayaran</th>
                <th>Status Pembayaran</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include '../config/koneksi.php';
                  @session_start();
                      $sql3 = mysql_query("SELECT * FROM user WHERE nm_user='$_SESSION[user]' and sandi='$_SESSION[pass]'");
                      $bc3  = mysql_fetch_array($sql3);

                  $sql=mysql_query("SELECT * FROM pembayaran WHERE stts !='0' ORDER BY kd_pembayaran DESC");
                while ($bc=mysql_fetch_array($sql)) {

                  $sql1 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$bc[id_pelanggan]'");
                  $bc1  = mysql_fetch_array($sql1);

                  $sql4 = mysql_query("SELECT * FROM pesanan WHERE kd_pesanan='$bc[kd_pesanan]'");
                  $bc4  = mysql_fetch_array($sql4);

                  $sql2 = mysql_query("SELECT * FROM produk WHERE kd_produk='$bc4[kd_produk]'");
                  $bc2  = mysql_fetch_array($sql2);
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><img src="../pelanggan/<?php echo $bc['bukti_pembayaran']; ?>" width="200px" height="200px"></td>
                  <td><?php echo $bc1['nm_pelanggan']; ?></td>
                  <td><?php echo $bc2['nm_produk']; ?></td>
                  <td><?php echo $bc4['total_bayar_pesanan']; ?></td>
                  <td><?php echo $bc['tgl_pembayaran']; ?></td>
                  <td><?php
                          if ($bc['stts']==1) {
                            echo "Pembayaran Terkirim";
                          }elseif ($bc['stts']==2) {
                            echo "Pembayaran Telah Diterima";
                          }


                  ?></td>

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
