<?php

    /**
     * Halaman view.php untuk manajemen data mahasiswa
    */

    //memanggil connect.php untuk ceck
    require_once "../../config/connect.php";

    //memanggil check_login.php untuk check status login
    require_once "../../config/check_login.php";
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

	<title>Transkrip Univ | Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<script src="jquery-3.4.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#shiftbtn").click(function(){
            $("#labeltanggal").show();
        })
    })
</script>


<!--bagian body-->
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php include "navigasi.php";?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Bagian atas -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                        <form class="form-inline mr-auto w-100 navbar-search">
                            <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                            </div>
                        </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - Menu User -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Administrator</span>
                            <img class="img-profile rounded-circle" src="https://static.thenounproject.com/png/17241-200.png">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- Akhir bagian atas -->

            <!-- Isi Utama Index Admin -->
            <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-3">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Data SKM</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export Excel</a>
                </div>
                            <div class="row">
                                <a href="output.php" class="btn btn-primary btn-sm ml-3">Grafik</a>
                                <a href="outputtb.php" class="btn btn-primary btn-sm ml-2">Tabel</a>
           
                            </div><br>
                

                <!-- Tabel Mahasiswa -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <div class="row">
                        <h6 class="m-0 font-weight-bold text-primary ml-3">Data Output Shiftly</h6>
                        <form action="#" method="POST">
                            <label class="date1 ml-3"><b>Tanggal :</b></label>
                            <input class="date" type="Date" name="tanggal" id="tanggal" value="<?php echo isset($_POST['tanggal']) ? $_POST['tanggal'] : ''?>"/>

                            <label class="shift1"><b>Shift :</b></label>
                            <select name="shift" class="shift" id="shift">
                                    <option value="1" <?php if (isset($_POST['shift']) && $_POST['shift'] == '1') echo 'selected ="selected"' ;?>>1</option>
                                    <option value="2" <?php if (isset($_POST['shift']) && $_POST['shift'] == '2') echo 'selected ="selected"' ;?>>2</option>
                                    <option value="3" <?php if (isset($_POST['shift']) && $_POST['shift'] == '3') echo 'selected ="selected"' ;?>>3</option>
                            </select>
                            <button class="but1" type="submit">Tampil</button>
                        </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Output_A</th>
                                    <th>Output_B</th>
                                    <th>Output_C</th>
                                    <th>Output_D</th>
                                    <th>Plan_A</th>
                                    <th>Plan_B</th>
                                    <th>Plan_C</th>
                                    <th>Plan_D</th>
                                    <th>Ach_A</th>
                                    <th>Ach_B</th>
                                    <th>Ach_C</th>
                                    <th>Ach_D</th>
                                    <!-- <th>Menu</th> -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                <th>#</th>
                                    <th>Tanggal</th>
                                    <th>Jam</th>
                                    <th>Output_A</th>
                                    <th>Output_B</th>
                                    <th>Output_C</th>
                                    <th>Output_D</th>
                                    <th>Plan_A</th>
                                    <th>Plan_B</th>
                                    <th>Plan_C</th>
                                    <th>Plan_D</th>
                                    <th>Ach_A</th>
                                    <th>Ach_B</th>
                                    <th>Ach_C</th>
                                    <th>Ach_D</th>
                                    <!-- <th>Menu</th> -->
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php

                                    /**
                                     * mengeluarkan data user dari database
                                     */
                                    //buat sortir ketika tombol shift diklik
                                    if (isset($_POST['tanggal'],$_POST['shift'])) {
                                        $tanggal = $_POST['tanggal'];
                                        $shift   = $_POST['shift'];

                                        if($shift=='3'){
                                            $tanggal2 = strtotime("+1 day", strtotime("$tanggal"));
                                            $tanggalbaru = date("Y-m-d", $tanggal2);
                                            $output = "Select * From Rekap_SKM_Dummy where Tanggal = '$tanggalbaru'and Shift='$shift' order by Jam asc";
                                        }else{
                                            $output = "Select * From Rekap_SKM_Dummy where Tanggal = '$tanggal'and Shift='$shift' order by jam asc";
                                        }

                                    }
                                    else{
                                        $output = "Select * From Rekap_SKM_Dummy where Tanggal = '2019-01-01' and Jam between '07:01' and '15:00'";
                                    }

                                    $stmt = sqlsrv_query( $conn, $output);
                                    $no = 1;
                                
                                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {                                  
                                        $Date = $row['Tanggal']->format('d/m/Y');
                                        
                                    ?>
                                       
                                            <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$Date?></td>
                                            <td><?=$row['Jam']?></td>
                                            <td><?=$row['Output_A']?></td>
                                            <td><?=$row['Output_B']?></td>
                                            <td><?=$row['Output_C']?></td>
                                            <td><?=$row['Output_D']?></td>
                                            <td><?=$row['Plan_A(Manual)']?></td>
                                            <td><?=$row['Plan_B(Manual)']?></td>
                                            <td><?=$row['Plan_C(Manual)']?></td>
                                            <td><?=$row['Plan_D(Manual)']?></td>
                                            <td><?=$row['Ach_A']?></td>
                                            <td><?=$row['Ach_B']?></td>
                                            <td><?=$row['Ach_C']?></td>
                                            <td><?=$row['Ach_D']?></td>
                                            </tr>
                                        <?php } ?>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <div class="row">
        <div class="ml-3">
        <form method="post">
          <a href="outputtb_shiftly.php" class="btn btn-primary btn-sm ml-4">Shiftly</a>
          <a href="outputtb_daily.php" class="btn btn-primary btn-sm ml-1">Daily</a>
          <a href="outputtb_weekly.php" class="btn btn-primary btn-sm ml-1">Weekly</a>
          <a href="#" class="btn btn-primary btn-sm ml-1">Monthly</a>
          <a href="#" class="btn btn-primary btn-sm ml-1">Yearly</a>
        </form>
        </div>
      </div>

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                <span>Copyright &copy; PT INDOLAKTO</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingin keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" untuk mengakhiri sesi login sekarang.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <?php
        /**
         * load library yang dibutuhkan
         */
    ?>
    <!-- Bootstrap core JavaScript-->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    
    <!-- Page level plugins -->
    <script src="../../assets/vendor/datatables/jquery.dataTables.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../assets/js/sb-admin-2.min.js"></script>
    
    <!-- Page level custom scripts -->
    <script src="../../assets/js/demo/datatables-demo.js"></script>
</body>

</html>

