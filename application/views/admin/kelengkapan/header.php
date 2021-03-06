<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DASHBOARD || WORKSHOP ELEARNING</title>
    <link rel="icon" href="<?= base_url('assets/')?>images/Logowrk.png" type="image/png">
    <?php $this->load->view('admin/kelengkapan/css');?>
  </head>

  <!-- <body class="nav-md footer_fixed"> -->
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?= base_url('dashboard_admin')?>" class="site_title"><center><img src="<?= base_url('assets/')?>images/poloslogo.png" width="60%"></center></a>
            </div>

            <div class="clearfix"></div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <?php $level = $this->session->userdata('ses_level');?>
              <div class="menu_section">
                <br>
                <h3>MENU UTAMA</h3>
                <ul class="nav side-menu">
                  <li><a href="<?= base_url('dashboard_admin')?>"><i class="fa fa-home"></i> Dashboard</a></li>
                  <li><a><i class="fa fa-edit"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php if($level == 1){ ?>
                        <li><a href="<?= base_url('v_administrator') ?>">Tabel Administrator</a></li>
                      <?php } ?>
                      <li><a href="<?= base_url('v_mahasiswa') ?>">Tabel Mahasiswa</a></li>
                      <li><a href="<?= base_url('v_asdos') ?>">Tabel Asisten Dosen</a></li>
                      <li><a href="<?= base_url('v_matkul') ?>">Tabel Mata Kuliah</a></li>
                      <li><a href="<?= base_url('v_kelas_matkul') ?>">Tabel Kelas Mata Kuliah</a></li>
                      <li><a href="<?= base_url('v_kelas_mhs') ?>">Tabel Kelas Mahasiswa</a></li>
                      <li><a href="<?= base_url('v_persentase_nilai') ?>">Tabel Persentase Nilai</a></li>
                      <li><a href="<?= base_url('v_qrcode') ?>">Tabel QRCode</a></li>
                      <li><a href="<?= base_url('v_session_akun') ?>">Tabel Session Akun</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Proses Data <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('v_absensi') ?>">Absensi Mahasiswa</a></li>
                      <li><a href="<?= base_url('v_penilaian') ?>">Penilaian Mahasiswa</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php if(!empty($this->session->userdata('ses_foto'))){ ?><img src="<?= base_url('assets/images/gambar_user/').$this->session->userdata('ses_foto')?>" alt=""><?php }else{ ?><img src="<?= base_url('assets/images/user.png')?>" alt=""><?php } ?><?= $this->session->userdata('ses_name');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?= base_url('profile_admin')?>"> Profile<?php $level = $this->session->userdata('ses_level'); if($level == 1){$sbg = "Super Admin";}else if($level == 2){$sbg = "Operator";}else if($level == 3){$sbg = "Tamu";} echo " <b>(".$sbg.")</b>"; ?></a></li>
                    <li><a href="<?= base_url('logout_admin_elearning')?>" class="logout"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>  
          </div>
        </div>
        <!-- /top navigation -->