<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Login Sistem Beasiswa </title>
        <link href="<?= base_url('asset/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url() ?>asset/css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <div class="container-fluid" style="margin: 12% 0px;">
            <form method="post" action="<?= base_url('Auth/proses/') ?>">
                <div class="row">
                    <div class="col-xl-4">
                        
                    </div>
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center font-weight-bold" style="color: #0091ea"> Sign In </h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <p id="msguname"></p>
                                    <input type="text" name="Username" class="form-control" placeholder="Username" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <p id="msgpwd"></p>
                                        <input type="password" name="Password" class="form-control" placeholder="Password" id="Password">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2" onclick="showpwd()"> <i class="fas fa-eye"></i> </span>
                                        </div>
                                    </div>
                                </div>
                                <p id="errmsg"></p>
                                <div class="form-group text-right">
                                    <input style="background-color: #0091ea; font-weight: bold; color: #ffffff" type="submit" class="btn btn-warning">
                                </div>
                            </div>
                            <div class="card-footer text-center font-weight-bold">
                                <p> &copy; <?= date('Y') ?> SMP IT Al-Ittihad Kota Bekasi </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        
                    </div>
                </div>
            </form>
        </div>
        <script>
            function showpwd() {
                switch (document.getElementById("Password").type) {
                    case "password":
                        document.getElementById("Password").type = "text", $(".showpwd").removeClass("fas fa-eye"), $(".showpwd").addClass("fas fa-eye-slash");
                        break;
                    case "text":
                        document.getElementById("Password").type = "password", $(".showpwd").removeClass("fas fa-eye-slash"), $(".showpwd").addClass("fas fa-eye")
                }
            }
        </script>
        <script src="<?= base_url('asset/js/jquery.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url('asset/js/bootstrap.min.js') ?>" type="text/javascript"></script>
        <script src="<?= base_url() ?>asset/js/fontawesome.min.js" type="text/javascript"></script>
    </body>
</html>
