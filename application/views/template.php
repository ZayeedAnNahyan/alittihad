<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="icon" href="<?= base_url('assets/images/Logo/PT.Marsit.jpg'); ?>" type="image/ico" />
        <title class="text-uppercase"><?= $title ?></title>
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('node_modules/nprogress/nprogress.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/datatables.min.css'); ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url('assets/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" />
        <link href="<?= base_url('assets/css/animate.css'); ?>" type="text/css" rel="stylesheet"/>
        <link href="<?= base_url('assets/css/custom.min.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/dropzone.min.css'); ?>" rel=stylesheet type="text/css" />
        <link href="<?= base_url('node_modules/chart.js/dist/Chart.min.css'); ?>" rel=stylesheet type="text/css" />
    </head>
    <body class="nav nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-2 center_col">
                    <div class="left_col scroll-view">
                        <div class="clearfix"></div>
                        <div class="profile clearfix">
                            <div style="background-color: #0091ea; font-weight: bold" class="logo text-center">
                                <a href="#" class="simple-text logo-normal font-weight-bold" style="color: #ffffff">
                                    <h4>SELAMAT DATANG</h4> 
                                </a>
                            </div>
                        </div>
                        <br/>
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <?php
                            if ($this->session->userdata('lvl') == 1) {//Administrator
                                echo '<div class="menu_section">'
                                . '<ul class="nav side-menu">'
                                . '<li><a class="text-uppercase" href=' . base_url('administrator/dasboard/index') . '><i class="fa fa-dashboard"></i> Dashboard</a></li>'
                                . '<li><a class="text-uppercase" href=' . base_url('administrator/user_manajemen/index') . '><i class="glyphicon glyphicon-user"></i> &nbsp &nbsp User Manajemen</a></li>'
                                . '<li><a class="text-uppercase" href=' . base_url('administrator/data_pengajuan_beasiswa/index') . '><i class="glyphicon glyphicon-list-alt"></i> &nbsp &nbsp Data Pengajuan</a></li>'
                                . '<li><a class="text-uppercase"> <i class="glyphicon glyphicon-list-alt"></i> &nbsp &nbsp Arsip Beasiswa <span class="fa fa-chevron-down"></span></a>'
                                . '<ul class="nav child_menu">'
                                . '<li><a href=' . base_url('administrator/penerima_beasiswa/index') . ' class="text-uppercase">Beasiswa Diterima</a></li>'
                                . '<li><a href=' . base_url('administrator/beasiswa_ditolak/index') . ' class="text-uppercase">Beasiswa Ditolak</a></li>'
                                . '</ul></li>'
                                . '</ul></div>';
                            } elseif ($hak_akses == 2) {//Siswa
                                echo '<div class="menu_section">'
                                . '<ul class="nav side-menu">'
                                . '<li><a class="text-uppercase" href=' . base_url('administrator/dasboard/index') . '><i class="fa fa-dashboard"></i> Dashboard </a></li>'
                                . '<li><a class="text-uppercase" href=' . base_url('administrator/user_manajemen/index') . '><i class="glyphicon glyphicon-user"></i> &nbsp &nbsp Pengajuan Beasiswa </a></li>'
                                . '<li><a class="text-uppercase" href=' . base_url('administrator/data_pengajuan_beasiswa/index') . '><i class="glyphicon glyphicon-list-alt"></i> &nbsp &nbsp Hasil Pengajuan</a></li>'
                                . '</ul></li>'
                                . '</ul></div>';
                            } elseif ($hak_akses == 3) {//ADMINISTRATOR
                                echo '';
                            } elseif ($hak_akses == 10) {//SALES MARKETING OFFICER
                                echo '<div class = "menu_section">'
                                . '<h3>Sales Officer</h3>'
                                . '<ul class = "nav side-menu">'
                                . '<li><a class = "text-uppercase" href = ' . base_url('Sales/Dashboard/index') . '><i class = "fa fa-dashboard"></i> Dashboard</a></li>'
                                . '<li><a class = "text-uppercase"><i class = "fa fa-home"></i> Home <span class = "fa fa-chevron-down"></span></a>'
                                . '<ul class = "nav child_menu">'
                                . '<li><a href = ' . base_url('Sales/Caridata/index') . ' class = "text-uppercase">Cari data</a></li>
                                <li><a href = ' . base_url('Sales/Daftarkunjungan/index') . ' class = "text-uppercase">Daftar Kunjungan</a></li>
                                <li><a href = ' . base_url('Sales/Onthespot/index') . ' class = "text-uppercase">Interaksi non database</a></li>'
                                . '</ul></li>'
                                . '<li><a class = "text-uppercase"><i class = "fa fa-shopping-cart"></i> Penjualan <span class = "fa fa-chevron-down"></span></a>'
                                . '<ul class = "nav child_menu">'
                                . '<li><a href = ' . base_url('Sales/Pencairan/index') . ' class = "text-uppercase">Pencairan</a></li>
                                <li><a href = ' . base_url('Sales/Simulasi/Simulasi2') . ' class = "text-uppercase"> simulasi </a></li>'
                                . '</ul></li>'
                                . '<li><a class = "text-uppercase"><i class = "fa fa-briefcase text-uppercase"></i> laporan <span class = "fa fa-chevron-down"></span></a>'
                                . '<ul class = "nav child_menu">'
                                . '<li><a href = ' . base_url('Sales/Hotprospek') . ' class = "text-uppercase">HOT prospek</a></li>'
                                . '<li><a href = ' . base_url('Sales/Pencairan/Hasil') . ' class = "text-uppercase">hasil Pencairan</a></li>'
                                . '<li><a href = ' . base_url('Sales/Interaksi/Hasil') . ' class = "text-uppercase">Hasil Interaksi</a></li>'
                                . '<li><a href = ' . base_url('Sales/Simulasi/Hasil') . ' class = "text-uppercase">Hasil Simulasi</a></li>'
                                . '</ul></li>'
                                . '</ul></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle"> </div>
                            <div class="container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                        <a class="dropdown-item" href="#">Profile</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('Auth/Logout') ?>">Log out</a>
                                    </div>
                                    
                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" <i class="glyphicon glyphicon-user"></i>>
                                             <span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">HTML</a></li>
                                            <li><a href="#">CSS</a></li>
                                            <li><a href="#">JavaScript</a></li>                        
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="right_col" role="main" style="min-height:0px ! important;">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2 class="text-uppercase"></h2>
                            <div class="clearfix" style="clear:both;margin:0px;"></div>
                        </div>
                        <div class="x_content clearfix" style="clear:both;margin:0px;display:block;">
                            <?= $content ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <footer>
        <div class="pull-right"> Copyrights ©<?= date("Y") ?> SMP IT Al-Ittihad Kota Bekasi</a> </div>
        <div class="clearfix"></div>
    </footer>
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/fastclick.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('node_modules/nprogress/nprogress.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('node_modules/chart.js/dist/Chart.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/date.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/moment.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/custom.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/dropzone.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/jquery.inputmask.bundle.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/bootstrap-datepicker.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/signature_pad.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/jquery.number.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/html2canvas.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/datatables.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/pdfmake.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/js/vfs_fonts.js'); ?>" type="text/javascript"></script>
</body>
</html>