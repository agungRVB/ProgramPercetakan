<?php
include_once 'header.php';


    switch (@$_GET['menu']) {


          case 'user':
            include 'view_user.php';
            break;
          case 'input-user':
            include 'create_user.php';
            break;
          case 'edit-user':
            include 'update_user.php';
            break;

          case 'produk':
            include 'view_produk.php';
            break;
          case 'input-produk':
            include 'create_produk.php';
            break;
          case 'edit-produk':
            include 'update_produk.php';
            break;

          case 'pelanggan':
            include 'view_pelanggan.php';
            break;
          case 'input-pelanggan':
            include 'create_pelanggan.php';
            break;
          case 'edit-pelanggan':
            include 'update_pelanggan.php';
            break;

          case 'pesanan':
            include 'view_pesanan.php';
            break;
          case 'input-pesanan':
            include 'create_pesanan.php';
            break;
          case 'edit-pesanan':
            include 'update_pesanan.php';
            break;

          case 'pembayaran':
            include 'view_pembayaran.php';
            break;
          case 'input-pembayaran':
            include 'create_pembayaran.php';
            break;
          case 'edit-pembayaran':
            include 'update_pembayaran.php';
            break;


      default:
      ?>
      <!--<center><img src="../images/logolebahpandu.png" width="500px" height="500px"></center>-->
      <?php
        break;
    }
include_once 'footer.php';
 ?>
