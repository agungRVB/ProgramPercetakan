<form action="config/cek_login.php" method="post" enctype="multipart/form-data">
  <section class="content">
    <div class="box box-primary" style="width:100%;margin:0 auto;">
	     <div class="box-body"  style="width:99.5%">
	       <table style="width:100%;line-height:40px;position:relative;top:-15px">
            <tr><div class="form-group">
                <td style="font-size:90%" width="15%"><label for="exampleInputEmail1">Username</label></td><td>:</td>
                <td><input type="text" class="form-control" name="user" placeholder="" required></td>
                </div>
            </tr>
              <tr><div class="form-group">
                <td style="font-size:90%"><label for="exampleInputEmail1">Password</label></td><td>:</td>
                <td><input type="password" class="form-control" name="pass" placeholder="" required></td>
                  </div>
              </tr>
              <!--  <tr><div class="form-group">
                   <td style="font-size:90%"><label for="exampleInputEmail1">User Akses</label></td><td>:</td>
                  <td><select name="user_akses">
                        <option value="">Silakan Pilih</option>
                        <option value="admin">Admin</option>
                        <option value="pemesan">Pemesan</option>
                      </select> </td>
                    </div>
                </tr>-->
              <td></td>
                <td colspan="2"><div class="box-footer">
                <button type="submit" name="log" class="btn btn-primary"><i class="fa fa-save"></i> &nbsp Login </button> &nbsp
                  <button type="reset" name="batal" class="btn btn-primary">&nbsp Batal</button>


      </div>
        </td>
        </tr>
        </table>
      </div>
    </div>
  </section>
</form>
