<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Link Bandung Makuta</title>

    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Tempusdominus Bbootstrap 4 -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- iCheck -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <!-- JQVMap -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/jqvmap/jqvmap.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">

    <!-- overlayScrollbars -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.css">

    <!-- summernote -->

    <link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.css">

    <!-- Google Font: Source Sans Pro -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .background-image {
            /*		background-image: url(<?= base_url('assets/') ?>img/background/link-melty-2.jpg);*/
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;

            /*position: absolute;*/
            /*transform: translate(-50%, -50%);*/
        }
    </style>

    <!-- Meta Pixel Code -->
    <script>

    </script>

    <!-- End Meta Pixel Code -->

</head>

<!--<body class="" style="background-color: #ffd5d1; margin-top: 0;">-->

<body class="background-image">

    <div class="">

        <!-- Main content -->

        <section class="justify-content-between">

            <div class="container-fluid col-md-5 mt-5">

                <div class="col-12">

                    <div class="row">

                        <div class="col-4"></div>

                        <div class="col-4">

                            <img src="<?= base_url('assets/') ?>img/logo/logo-oleh-makuta.png" alt="Photo" style="width: 100%; margin-top: 0;"><br><br><br>

                        </div>
                    </div>

                </div>
                <div class="">
                    <div class="card-body pb-2 pt-0">
                        <div class="row d-flex align-items-stretch">
                            <a href="<?= base_url('link'); ?>" type="button" class="btn btn-block bg-gradient-primary" style="width: 50px;"><i class="fas fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="card card-solid">
                    <div class="card-body pb-0">
                        <div class="row d-flex align-items-stretch">
                            <?php foreach ($files as $file) : ?>
                                <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                    <div class="card bg-light">
                                        <div class="">
                                            <img class="img-fluid" src="<?= base_url('assets/img/foto/' . $file); ?>" alt="Photo">
                                        </div>
                                        <div class="footer">
                                            <div class="text-center mt-1 mb-1">
                                                <a href="<?= base_url("drive/download/$file") ?>" class="btn btn-sm bg-teal">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <div class="">
                    <div class="card-body pb-2 pt-0">
                        <div class="row d-flex align-items-stretch">
                            <a href="<?= base_url('link'); ?>" type="button" class="btn btn-block bg-gradient-primary" style="width: 50px;"><i class="fas fa-arrow-circle-left"></i></a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->

        </section>

        <!-- /.content -->

    </div>



    <div class="lockscreen-footer text-center mt-4 mb-4">

        Copyright © 2023 <b><a href="http://bandungmakuta.com/" class="text-black">Bandung Makuta</a></b><br>

        All rights reserved

    </div>

    </div>

    <!-- ./wrapper -->



    <!-- jQuery -->

    <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->

    <script src="<?= base_url('assets/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <!-- Bootstrap 4 -->

    <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- ChartJS -->

    <script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>

    <!-- Sparkline -->

    <script src="<?= base_url('assets/') ?>plugins/sparklines/sparkline.js"></script>

    <!-- JQVMap -->

    <script src="<?= base_url('assets/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>

    <script src="<?= base_url('assets/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <!-- jQuery Knob Chart -->

    <script src="<?= base_url('assets/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>

    <!-- daterangepicker -->

    <script src="<?= base_url('assets/') ?>plugins/moment/moment.min.js"></script>

    <script src="<?= base_url('assets/') ?>plugins/daterangepicker/daterangepicker.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->

    <script src="<?= base_url('assets/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Summernote -->

    <script src="<?= base_url('assets/') ?>plugins/summernote/summernote-bs4.min.js"></script>

    <!-- overlayScrollbars -->

    <script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <!-- AdminLTE App -->

    <script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <script src="<?= base_url('assets/') ?>dist/js/pages/dashboard.js"></script>

    <!-- AdminLTE for demo purposes -->

    <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>

</body>

</html>