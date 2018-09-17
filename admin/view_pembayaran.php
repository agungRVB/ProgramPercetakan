<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Kelola Pembayaran</h1>
</div>
<!-- Main content -->
<section class="content">
  <div class="row">
          
          <!--<div class="alert alert-info alert-dismissable" style="float:right;width:30%;margin:2px -30px 0 0;padding:0 30px 0 0;overflow:hidden">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="position:relative;padding-top:7px;font-size:25px">&times;</button>
              <h4 style="padding:7px 0 0 10px"><i class="icon fa fa-info"></i><?php//  echo $note;?></h4>
            </div>-->
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
                <th width="15%">Action</th>
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
                  <td align="center">
                    <?php
                        if ($bc['stts']==1) { ?>
                          <a class="action" href="konfirmasi_pembayaran.php?kd=<?php echo $bc['kd_pembayaran']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                            <i class="fa fa-check-square" style="color:green;"> </i> Konfirmasi
                          </a>
                      <?php  }elseif ($bc['stts']==2) {
                        echo " ";
                      }
                   ?>



                    <!--<a class="action" href="del_pesanan.php?kd=<?php echo $bc['kd_pesanan'];?>" style="padding:2.3px 4px 2.3px 8px;" >
                      <i class="fa fa-close" style="color:red"> </i>Hapus
                    </a>-->
                  </td>
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
