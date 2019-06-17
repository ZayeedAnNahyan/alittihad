<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= $title; ?></title>
        <link href="<?= base_url(); ?>asset/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= base_url(); ?>asset/css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>asset/css/datatables.min.css"/>
    </head>
    <body>
        <div class="container-fluid">
            <?= $content; ?>
        </div>
        <script src="<?= base_url(); ?>asset/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>asset/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>asset/js/fontawesome.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?= base_url(); ?>asset/js/pdfmake.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>asset/js/vfs_fonts.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>asset/js/datatables.min.js"></script>
    </body>
</html>
