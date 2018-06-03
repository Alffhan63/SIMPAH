<div class="content-wrapper">
<div class="container-fluid">
 <!-- Breadcrumbs-->
 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.html">Dashboard</a>
   </li>
   <li class="breadcrumb-item active">Registrasi Mediator</li>
 </ol>

    <div class="container-register">
    <div class="card card-body container-register ">
      <div class="card-judul-register"><center>Daftar Akun Mediator</center></div>
      <div class="body-card-register">
        <form id="registerform" role="form" action="<?php echo base_url();?>Admin/register" method="post">
          <div class=" card-subtitle grup-form ">
            <input type="hidden" name="option" value="<?php echo $option; ?>" class="control-form">
            <center><label for="MasukanNama" >Nama Mediator</label>
            </center>
            <center><div class="role">
             <label>Role : </label>
              <select name="role" class="roler">
                  <option value="2">Pimpinan</option>
                  <option value="3">Mediator</option>
              </select>
              </div>
              </center>
            </div>

            <div class="form-row">
              <div class="col-md-6 grup-form font-size">
                <center><label for="MasukanNama" >Nama Depan</label></center>
                <input class="control-form" type="text" name="nama_depan" id="namadepan" placeholder="Nama Depan" minlength="1" required>
              </div>
                <div class="col-md-6 grup-form">
                <center><label for="MasukanNama" >Nama Belakang</label></center>
                <input class="control-form" id="namabelakang" name='nama_belakang' type="text"  placeholder="Nama Belakang"  minlength="1" required>
              </div>
            </div>

          <div class="form-row">
          <div class="col-md-6 grup-form">
              <div class="card-subtitle">
              <center><label for="MasukanNama" >Masukan NRK</label></center>
              </div>
            <input class="control-form" id="NRK" type="text" placeholder="NRK" name="NRK"  minlength="1" required>
          </div>
          <div class="col-md-6 grup-form">
               <div class="grup-form">
                <div class="card-subtitle">
              <center><label for="MasukanNama" >Password</label></center>
              </div>
             <input class="control-form" type="text" name="password" id="password" placeholder="password">
              </div>
            </div>
          </div>
            <input class="btn btnhaha btn-block submit" type="submit" role="button">
        </form>
    </div>
  </div>
<!--
      <footer>
     <div class="footer-register">
         <h4>DISNAKERTRANS (c) 2018</h4>
        </div>
      </footer>
-->
