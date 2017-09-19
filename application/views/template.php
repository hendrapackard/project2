<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Perpustakaan | SMA Negeri 2 Cileungsi</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?= base_url();?>adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url();?>adminlte/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url();?>adminlte/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url();?>adminlte/dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="<?= base_url();?>adminlte/dist/css/perpusma.css">

    <link rel="stylesheet" href="<?= base_url();?>adminlte/dist/js/jquery-ui-1.11.3/jquery-ui.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url();?>adminlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
<!--    <link rel="stylesheet" href="--><?//= base_url();?><!--adminlte/plugins/iCheck/flat/blue.css">-->


</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <a href="<?= base_url();?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>P</b>S2</span>
            <!-- logo for regular state and mobile devices -->
            <div class="pull-left image"><img src="<?= base_url();?>adminlte/dist/img/logosma.jpg" class="img-circle" alt="User Image"></div>
            <div>
                <span class="hidden-xs"><b>Perpus</b> SMA 2 </span></div>

        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <?php
            $username = $this->session->userdata('username');
            $is_login = $this->session->userdata('is_login');
            $level = $this->session->userdata('level');


            ?>
            
            <?php if ($is_login) : ?>

                    <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= base_url();?>adminlte/dist/img/avatar5.png" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?= ucfirst($username) ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?= base_url();?>adminlte/dist/img/avatar5.png" class="img-circle" alt="User Image">

                                <p>
                                    <?= ucfirst($username) ?>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="<?= base_url('logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                <?php if ($level === 'admin'): ?>

                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->

    <?php $this->load->view('sidebar') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <?php $this->load->view($main_view) ?>

    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
       <?php $this->load->view('footer') ?>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Delete chat history
                            <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?= base_url();?>adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url();?>adminlte/bootstrap/js/bootstrap.min.js"></script>

<script src="<?= base_url();?>adminlte/plugins/chartjs/Chart.min.js"></script>

<!-- DataTables -->
<script src="<?= base_url();?>adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url();?>adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url();?>adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>adminlte/dist/js/app.min.js"></script>

<script src="<?= base_url();?>adminlte/dist/js/demo.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?= base_url();?>adminlte/dist/js/jquery-ui-1.11.3/jquery-ui.min.js"></script>

<script src="<?= base_url();?>adminlte/plugins/hightcharts/code/highcharts.js"></script>
<script src="<?= base_url();?>adminlte/dist/js/perpusma.js"></script>

<script type="text/javascript">
    $(function () {
        $('#graf').highcharts({
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Data Kelas Yang Meminjam Buku'
            },
            subtitle: {
                text: 'Tahun <?php echo date('Y') ?>'
            },

            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                        }
                    }
                }
            },
            series: [{
                type: 'pie',
                name: 'Persentase Peminjaman',
                data: [
                    <?php
                    // data yang diambil dari database
                    if(count($grafiks)>0)
                    {
                        foreach ($grafiks as $grafik) {
                            echo "['" .$grafik->kelas . "'," . $grafik->jumlah ."],\n";
                        }
                    }
                    ?>
                ]
            }]
        });

        //Diagram batang
        var chart = Highcharts.chart('graf2', {

            title: {
                text: 'Top 10 Judul Buku Yang Dipinjam '
            },

            subtitle: {
                text: 'Tahun <?php echo date('Y') ?>'
            },

            xAxis: {
                categories: [<?php
                    // data yang diambil dari database
                    if(count($grafik2)>0)
                    {
                        foreach ($grafik2 as $grafik) {
                            echo "['" .$grafik->judul ."'],\n";
                        }
                    }
                    ?>]
            },
            yAxis: {

                title: {
                    text: 'Jumlah'
                }
            },

            series: [{
                type: 'column',
                name: 'Jumlah',
                colorByPoint: true,
                data: [<?php
                    // data yang diambil dari database
                    if(count($grafik2)>0)
                    {
                        foreach ($grafik2 as $grafik) {
                            echo "['" .$grafik->judul . "'," . $grafik->jumlah ."],\n";
                        }
                    }
                    ?>],
                showInLegend: false
            }]

        });



    });

</script>


</body>
</html>