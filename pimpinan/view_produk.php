<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Produk Percetakan</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
    <a href="print_produk.php" style="color:#595757;float:right;" target="_blank">
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
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Harga Satuan Produk</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include '../config/koneksi.php';
                  $sql=mysql_query("SELECT * FROM produk WHERE stts!='0' ORDER BY kd_produk DESC");
                while ($bc=mysql_fetch_array($sql)) {
                  $harga=number_format($bc['harga'],0,",",".");
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><img src="<?php echo $bc['gambar']; ?>" width="200px" height="200px"></td>
                  <td><?php echo $bc['nm_produk']; ?></td>
                  <td>Rp. <?php echo $harga; ?></td>
                  <td><?php echo $bc['keterangan']; ?></td>


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
