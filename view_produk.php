<!--<div class="box-header with-border" style="border-bottom:1px solid #E6E4E4;padding-left:15px;background:#F5F4FD">
    <h1 class="box-title" style="font-size:150%;">Produk Percetakan</h1>
</div>-->
<!-- Main content -->
<section class="content">
  <div class="row">
        <!--  <a href="?menu=input-produk" style="color:#595757;float:right;">
          <div class="tab-pane" id="glyphicons">
            <ul class="bs-glyphicons">
              <li>
                <span class="glyphicon glyphicon-edit"></span>
                <span class="glyphicon-class">Tambah</span>
              </li>
            </ul>
          </div><!-- /#ion-icons
        </a>-->
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
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Harga Satuan Produk</th>
                <th>Keterangan</th>
              <!--  <th width=15%></th>-->
              </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                  include 'config/koneksi.php';
                  $sql=mysql_query("SELECT * FROM produk WHERE stts!='0' ORDER BY kd_produk DESC");
                while ($bc=mysql_fetch_array($sql)) {
                  $harga=number_format($bc['harga'],0,",",".");
              ?>
              <tr>
                  <td align="center"><?php echo $no; $no++;;?></td>
                  <td><img src="admin/<?php echo $bc['gambar']; ?>" width="200px" height="200px"></td>
                  <td><?php echo $bc['nm_produk']; ?></td>
                  <td>Rp. <?php echo $harga; ?></td>
                  <td><?php echo $bc['keterangan']; ?></td>

                  <!--<td align="center">
                      <!--<a class="action" href="?menu=edit-produk&kd=<?php echo $bc['kd_produk']; ?>" style="padding:2.3px 4px 2.3px 8px;" >
                        <i class="fa fa-edit" style="color:green;"> </i>Ubah
                      </a>
                      <a class="action" href="del_produk.php?kd=<?php echo $bc['kd_produk'];?>" style="padding:2.3px 4px 2.3px 8px;" >
                        <i class="fa fa-close" style="color:red"> </i>Hapus
                      </a>
                  </td>-->
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
