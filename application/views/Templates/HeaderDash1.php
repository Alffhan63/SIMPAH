<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashboard</title>
  <!--Boostrap tambah-->
  <!--Boostrap tambah-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styleku.css'); ?>">
  <!-- Bootstrap core CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <!-- Custom fonts for this template-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/fonts/font-awesome.min.css">
  <link href="<?php echo base_url(); ?>assets/css/sb-admin.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap4.css" rel="stylesheet">
</head>

 <body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top"  style="background-color: #255780" id="mainNav">
    <a class="navbar-brand" href="<?php echo base_url();?>Admin/dashboard">SIMPAH Dashboard</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive" >
      <ul class="navbar-nav navbar-sidenav " style="background-color: #255780" id="exampleAccordion">
<!-- -- tambahan foto header--  -->
        <div class ="container-fluid bg-white">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-7">
                  <img class="gambar-navbar profile" src="<?php echo base_url();?>assets/img/disnaker.jpg">
                </div>
                <div class="col-4"></div>
            </div>
        </div>
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link text-white" href="<?php echo base_url();?>Admin/dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link text-white" href="<?php echo base_url();?>Admin/tabel_perusahaan">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tabel Perusahaan</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link text-white" href="<?php echo base_url();?>Admin/tabel_mediator">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tabel Mediator</span>
          </a>
        </li>

        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link text-white" href="<?php echo base_url();?>Admin/halaman_register">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Registrasi</span>
          </a>
        </li>
        
          
<!--
        <li class="nav-item text-white" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed text-white" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Registrasi</span>
          </a>
          <ul class="sidenav-second-level collapse bg-secondary" id="collapseExamplePages">
            <li>
              <a class = "text-white" href="login.html">Login Page</a>
            </li>
            <li>
              <a class = "text-white" href="<?php echo base_url();?>Admin/halaman_register">Halaman Registrasi</a>
            </li>
            <li>
              <a class = "text-white" href="forgot-password.html">Forgot Password Page</a>
            </li>
          </ul>
        </li>
-->
          
      </ul>
      <ul class="navbar-nav sidenav-toggler bg-white">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
