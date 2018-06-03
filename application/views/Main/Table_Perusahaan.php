

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tabel Perusahaan</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Tabel Perusahaan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID Perusahaan</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat Perusahaan</th>
                  <th>Wilayah</th>
                  <th>Jumlah Pekerja</th>
                  <th>Sektor</th>
                </tr>
              </thead>
              <tfoot>
                <tr><th>ID Perusahaan</th>
                  <th>Nama Perusahaan</th>
                  <th>Alamat Perusahaan</th>
                  <th>Wilayah</th>
                  <th>Jumlah Pekerja</th>
                  <th>Sektor</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($sql->result() as $obj1) {
                  ?>

                <tr>
                  <td><?php echo $obj1->id_perusahaan; ?></td>
                  <td><?php echo $obj1->nama_perusahaan; ?></td>
                  <td><?php echo $obj1->alamat_perusahaan; ?></td>
                  <td><?php echo $obj1->wilayah; ?></td>
                  <td><?php echo $obj1->jml_pekerja; ?></td>
                  <td><?php echo $obj1->sektor; ?></td>
                  <!-- <td><a href="<?php echo base_url(); ?>Main/edit/<?php echo $obj1->id;?>" class="btn btn-success btn-sm" role="button">Edit</a></td>
                  <td><a href="<?php echo base_url(); ?>Main/delete/<?php echo $obj1->id;?>" class="btn btn-danger btn-sm" role="button">Delete</a></td> -->
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
