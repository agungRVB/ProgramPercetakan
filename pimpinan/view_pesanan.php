<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Kelola Pesanan</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <a href="print_pesanan.php" style="color:#595757;float:right;" target="_blank">
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
                <th>Desain Pesanan</th>
                <th>Nama Pelanggan</th>
                <th>Barang Pesanan</th>
                <th>Jumlah Pesanan</th>
                <th>Tanggal Pemesanan</th>
                <th>Total Pembayaran</th>
                <th>Status Pemesanan</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include '../config/koneksi.php';
                  $sql=mysql_query("SELECT * FROM pesanan WHERE stts !='0' ORDER BY kd_pesanan DESC");
                while ($bc=mysql_fetch_array($sql)) {

                  $sql1 = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan='$bc[id_pelanggan]'");
                  $bc1  = mysql_fetch_array($sql1);

                  $sql2 = mysql_query("SELECT * FROM produk WHERE kd_produk='$bc[kd_produk]'");
                  $bc2  = mysql_fetch_array($sql2);
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><img src="../pelanggan/<?php echo $bc['desain_pesanan']; ?>" width="200px" height="200px"></td>
                  <td><?php echo $bc1['nm_pelanggan']; ?></td>
                  <td><?php echo $bc2['nm_produk']; ?></td>
                  <td><?php echo $bc['jumlah']; ?></td>
                  <td><?php echo $bc['tgl_pesan']; ?></td>
                  <td><?php echo $bc['total_bayar_pesanan']; ?></td>
                  <td><?php
                          if ($bc['stts']==1) {
                            echo "Pesanan Masuk";
                          }elseif ($bc['stts']==2) {
                            echo "Pesanan Telah Dibayar";
                          }elseif ($bc['stts']==3) {
                            echo "Pesanaan Telah Dikirm";
                          }elseif ($bc['stts']==4) {
                            echo "Pesanan Telah Diterima";
                          }elseif ($bc['stts']==5) {
                            echo "Pesanan Dibatalkan";
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
