<?php

    /**
     * Halaman index.php
     * halaman yang akan muncul pada saat user sudah login
     */
    //memanggil check_login.php untuk check status login
    require_once "config/check_login.php";
    // require_once "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<!--bagian kepala-->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<!--bagian body-->
<body id="page-top">

    <?php
        /**
         * tampilan halaman utama
         * akan berubah sesuai dengan user
         */

        /**
         * jika user adalah admin, panggil halaman admin, sebaliknya panggil halaman user
         */
        if($_SESSION['level'] === "admin"){
            include "admin/home.php";
            echo $_SESSION['level'];
        }else{
            include "mahasiswa/home.php";
            echo $_SESSION['level'];
        }
    ?>

    <?php
        /**
         * load library yang dibutuhkan
         */
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>

