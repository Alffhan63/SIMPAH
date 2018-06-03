
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tabel Mediator</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Mediator</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID User</th>
                  <th>NRK</th>
                  <th>Nama</th>
                  <th>Role</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID User</th>
                  <th>NRK</th>
                  <th>Nama</th>
                  <th>Role</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </tfoot>
              <tbody>

                <?php foreach ($sql->result() as $obj1) {
                  ?>

                <tr>
                  <td><?php echo $obj1->ID_USER; ?></td>
                  <td><?php echo $obj1->NRK; ?></td>
                  <td><?php echo $obj1->name; ?></td>
                  <?php
                  $obj1->user_role;
                  if ($obj1->user_role == 1) {
                    $role = 'admin';
                  }elseif ($obj1->user_role == 2) {
                    $role = 'pimpinan';
                  }else {
                    $role = 'mediator';
                  }
                  ?>
                  <td><?php echo $role; ?></td>
                  <td><center><a href="<?php echo base_url(); ?>Admin/edit_mediator/<?php echo $obj1->ID_USER;?>" class="btn btn-success btn-sm" role="button">Edit</a></center></td>
                  <td><center><a href="<?php echo base_url(); ?>Admin/delete_mediator/<?php echo $obj1->ID_USER;?>" class="btn btn-danger btn-sm" role="button" onclick="return confirm('Yakin hapus data tersebut ?');">Delete</a></center></td>
                </tr>
                <?php }?>


              </tbody>
            </table>
          </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>SIMPAH © DISNAKERTRANS 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
