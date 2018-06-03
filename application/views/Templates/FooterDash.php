<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout Admin SIMPAH ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Tekan "Logout" apabila ingin mengakhiri session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="<?php echo base_url();?>LoginWeb/logout">Logout</a>
          </div>
        </div>
      </div>
    </div>

<!-- jquery tambahan-->
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url();?>assets/jquery/jquery/jqueryku.js"></script>
<script>

     $(document).ready(function(){
        $("select.roler").change(function(){
        var role = $(".roler option:selected").text();
        alert("Role : " + role);
        $("#namadepan").val("")

    });
    });

      $('#NRK, #namadepan').on('input',function(e){
          var role = $(".roler option:selected").text();
          var newrole = role.substring(0,3);
          let nrk = $.trim($('#NRK').val());
          // let firstName = $.trim($('#namadepan').val());
          var tempPass = (newrole+nrk).replace(/\s/g, '');;
          $("#password").val(tempPass.toLocaleLowerCase());

      });

  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/jquery/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/jquery/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url();?>assets/datatables/dataTables.bootstrap4.js"></script>
  <script src="<?php echo base_url();?>assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
  <script src="<?php echo base_url();?>assets/js/sb-admin-datatables.min.js"></script>
  </body>

</html>
