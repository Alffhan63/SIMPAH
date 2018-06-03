<!-- Content -->
  <div class="container1">
    <div class="card card-login mx-auto mt-5">
      <center><div class="card-judul">LOGIN SIMPAH</div></center>
      <div class="body-card">
        <form id="loginform" method="post" action="<?php echo base_url();?>LoginWeb/login_check">
          <div class="grup-form">
            <center><label for="exampleInputEmail1">NRK</label></center>
            <input class="control-form"  type="text" minlength="1"  placeholder="Masukan NRK" name="NRK" required>
          </div>
          <div class="grup-form">
              <center><label for="exampleInputPassword1">Password</label></center>
            <input class="control-form"  type="password" placeholder="Password" name="password" minlength="1" required>
          </div>
          <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
            </div>
          </div>
        <button class ="btn btnhaha btn-block submit" type="submit" value="Login" role="button">Login</button>
        </form>

      </div>
    </div>

  </div>
