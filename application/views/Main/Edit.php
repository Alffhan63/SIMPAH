<?php
$id=""; $NRK=""; $name=""; $password="";


foreach ($sql->result() as $obj1) {
    // $pil='edit';
    $id=$obj1->ID_USER;
    $NRK=$obj1->NRK;
    $name=$obj1->name;
    //$password=$obj1->password;

}
?>


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
        <form id="registerform" role="form" action="<?php echo base_url();?>Admin/edit" method="post">
          <div class=" card-subtitle grup-form ">
            <input type="hidden" name="option" value="<?php echo $option; ?>" class="control-form">
            <input type="hidden" name="id" value="<?php echo $id; ?>" class="control-form">
            <center><label for="MasukanNama" >Nama Mediator</label>
            </center>
            <center><div class="role">
             <label>Role : </label>
              <select name="role">
                  <option value="2">Pimpinan</option>
                  <option value="3">Mediator</option>
              </select>
              </div>
              </center>
            </div>

            <div class="form-row">
              <div class="col-md-12 grup-form font-size">
                <center><label for="MasukanNama" >Nama</label></center>
                <input class="control-form" type="text" name="name" id="namadepan" placeholder="Nama" minlength="1" value="<?php echo $name; ?>" required>
              </div>
            </div>

          <div class="form-row">
          <div class="col-md-6 grup-form">
              <div class="card-subtitle">
              <center><label for="MasukanNama" >Masukan NRK</label></center>
              </div>
            <input class="control-form" id="NRK" type="text" placeholder="NRK" name="NRK"  minlength="1" value="<?php echo $NRK; ?>"required>
          </div>
          <div class="col-md-6 grup-form">
               <div class="grup-form">
                <div class="card-subtitle">
              <center><label for="MasukanNama" >Password</label></center>
              </div>
             <input class="control-form" type="password" name="password" placeholder="password" value="">
              </div>
            </div>
          </div>
            <input class="btn btnhaha btn-block submit" type="submit" role="button">
        </form>
        <center><a href="<?php echo base_url(); ?>Admin/tabel_mediator" class="btn-block btn-danger btn-sm" role="button">Cancel</a></center>
    </div>
  </div>
<!--
      <footer>
     <div class="footer-register">
         <h4>DISNAKERTRANS (c) 2018</h4>
        </div>
      </footer>
-->
