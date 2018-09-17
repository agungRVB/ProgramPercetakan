<?php include 'header.php'; ?>

        <?php
            switch (@$_GET['menu']) {
              //profile
              case 'profile':
                ?>
                <div class="box box-default">
                  <div class="box-header with-border">
                    <h3 class="box-title">Profile</h3>
                  </div>
                  <div class="box-body">
                    <div style="">
                      <center><h3> <b>CV. JAYA MANDIRI </h3></center><br> <br>
                                            <center><table><h4> CV. Jaya Mandiri adalah perusahaan berskala menengah kebawah yang bergerak  di bidang <br>
                                              <br><i>Advertising </i> dan <i> Printing </i> yang mengatasi faktor ekonomi dan untuk memenuhi segala kebutuhan<br><br> dalam periklanan. Perusahaan tersebut berdomisili di Pringapus yang masih berdiri dari
                                            tahun<br><br> 2000 hingga sekarang, pendiri sekaligus pengelola perusahaan oleh Bapak Arifin. Tujuan <br><br>CV. Jaya Mandiri didirikan oleh Bapak Arifin untuk mengatasi permasalahan ekonomi dengan<br> <br>menciptakan suatu peluang kerja atau lapangan pekerjaan.<br></h4></table><center>
                                                                      </div>
                        <?php  break; ?>
                  <div class="box box-default">

                      <?php
                      break;
                    case 'cara-pesan':
                       ?>
                      <div class="box box-default">
                        <div class="box-header with-border">
                          <h3 class="box-title">Cara Pemesanan</h3>
                        </div>
                        <div class="box-body">
                        <div style="">
                          <center><h3> <b> Prosedur Pemesanan Percetakan </center><br></h3><br>
                                                    <h4>Untuk dapat melakukan pesanan yaitu :
                                                    <br> <br> ~ Kita harus terlebih dahulu melakukan pendaftaran atau registrasi di menu Registrasi <br><br> ~ Setelah melakukan registrasi yang diperlukan, silakan memasukin menu Login untuk <br> dapat melakukan pesenan <br><br> ~ Dalam menu Pemesanan harus menyertakan desain yang dipesan untuk dapat disesuaikan <br> <br> ~ Setelah melakukan pemesanan segeralah lakukan pembayaran di menu Pembayaran yang harus <br> disertakan dengan bukti transfer ke sistem <br> <br> ~ Bila pesanan sudah jadi akan segera dikirim , dan pemesan harus mengkonfirmasi pesanan telah <br>diterima </h4>
                                                                          </div>
                        <br>
    <p style="font-size:14pt;">
        <!--Agen Bus Bu Ismiati membuka pemesanan tiket bus secara on line untuk mempermudah pelanggan dalam memesan tiket. Hal ini dapat menghemat waktu pelanggan karena tidak perlu datang langsung ke agen.
        Hal-hal yang perlu dilakukan dalam proses pemesanan tiket meliputi :</p>
    <p style="font-size:14pt;">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.  Mengunjungi website pemesanan tiket Agen Bus Bu Ismiati Bawen <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.  Mengisi data diri pelanggan secara lengkap <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.  Memilih tiket bus yang diinginkan <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4.  Setelah memilih tiket dan mengisi data diri secara lengkap, pelanggan dapat melakukan transaksi pembayaran. Dapat melalui &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bank atau transfer melalui ATM. Dengan catatan batas pembayaran maksimal 2 jam setelah proses pemesanan tiket.
    Transfer &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pembayaran dapat ditujukan kepada : <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a.  Bank BRI a/n Siti Sundari 660501008793530 <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b.  Bank BCA a/n Santoso 560890770990345 <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.  Setelah melakukan proses pembayaran, pelanggan dapat mengecek apakah tiket yang dipesan sudah di validasi apa belum. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Apabila sudah di validasi maka tiket yang dipesan sudah menjadi milik pemesan.</p>-->
</div>
                      <?php
                      break;

                      case 'registrasi':
                        ?>
                        <div class="box box-default">
                          <div class="box-header with-border">
                            <h3 class="box-title">Registrasi</h3>
                          </div>
                          <div class="box-body">
                            <?php include 'form_registrasi.php'; ?>
                        <?php
                        break;

                      case 'login':
                        ?>
                        <div class="box box-default">
                          <div class="box-header with-border">
                            <h3 class="box-title">Login</h3>
                          </div>
                          <div class="box-body">
                            <?php include 'form_login.php'; ?>
                        <?php
                        break;
                        /*case 'bayar-tiket':
                          ?>
                          <div class="box box-default">
                            <div class="box-header with-border">
                              <h3 class="box-title">Login</h3>
                            </div>
                            <div class="box-body">
                              <?php include 'create_bayar.php'; ?>
                          <?php
                          break;*/
              default:
              ?>
              <div class="box box-default">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div>
                <div class="box-body">
                  <div class="" style="font-size:14pt;">
                  <center><h3><b>Selamat Datang</b></h3>
                  <img src="images/beranda.jpeg" width="600px" height="350px" alt=""></center>
<p align="center"><br>Terimakasih atas kepercayaan anda sebagai sarana terpercaya dalam melayani Percetakan di Indonesia.
</br><?php include 'view_produk.php'; ?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br></p>
<p><br>
</p>
</div>


              <?php
                break;
            }
         ?>



<?php include 'footer.php'; ?>
