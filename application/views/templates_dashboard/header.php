<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Sistem Rekap Data Sekolah</title>

  <!-- Favicons -->
  <link href="<?=base_url();?>assets/img/favicon.png" rel="icon">
  <link href="<?=base_url();?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Advanced Table -->
  <link href="<?=base_url();?>assets/lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="<?=base_url();?>assets/lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?=base_url();?>assets/lib/advanced-datatable/css/DT_bootstrap.css" />

  <!-- Bootstrap core CSS -->
  <link href="<?=base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="<?=base_url();?>assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="<?=base_url();?>assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url();?>assets/css/style-responsive.css" rel="stylesheet">
  <script src="<?=base_url();?>assets/lib/chart-master/Chart.js"></script>


  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo">
        <b>SISTEM REKAP NILAI SEKOLAH <span>DASAR</span></b>
      </a>
      <!--logo end-->
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
            <a class="logout" href="<?=base_url();?>Login">Logout</a>
          </li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered">
            <a href="profile.html">
              <img src="<?=base_url();?>assets/img/ui-sam.jpg" class="img-circle" width="80">
            </a>
          </p>
                                    <!---Ubah Gambarnya nanti --->
          <h5 class="centered"> Admin</h5>
          <li class="mt">
            <a class="<?php if($status == 'Index active') : echo 'active'; endif; ?>" href="<?=base_url();?>Dashboard">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="<?php if($status == 'DS active') : echo 'active'; endif; ?>">
              <i class="fa fa-archive"></i>
              <span>Data Sekolah</span>
            </a>
            <ul class="sub">
              <li><a href="<?=base_url();?>Guru">Data Guru</a></li>
              <li><a href="<?=base_url();?>Kelas">Data Kelas</a></li>
              <li><a href="<?=base_url();?>Mapel">Mata Pelajaran</a></li>
              <li><a href="<?=base_url();?>Siswa/dataSeluruhSiswa">Data Seluruh Siswa</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="<?php if($status == 'Raport active') : echo 'active'; endif; ?>" href="<?=base_url();?>Raport">
              <i class="fa fa-book"></i>
              <span>Raport Siswa</span>
              </a>
          </li>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************