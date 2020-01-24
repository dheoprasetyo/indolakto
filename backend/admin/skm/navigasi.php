<!--Navigasi-->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Nama Aplikasi -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
<div class="sidebar-brand-icon rotate-n-15">
    <!-- <i class="fas fa-laugh-wink"></i> -->
</div>
<div class="sidebar-brand-text mx-3"> PT INDOLAKTO</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Menu Halaman Utama -->
<li class="nav-item">
<a class="nav-link" href="../../index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Halaman Utama</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">


<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Menu Manajemen -->
    <!-- <div class="sidebar-heading">
        SKM
    </div> -->

    
    <!-- Menu User -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navigasiuser" aria-expanded="true" aria-controls="navigasiMahasiswa">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
        <div id="navigasiuser" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="../../admin/user/view.php">Lihat</a>
            <a class="collapse-item" href="../../admin/user/insert.php">Tambah Baru</a>
            </div>
        </div>
    </li>

    <!-- Menu SKM -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navigasiskm" aria-expanded="true" aria-controls="navigasiMatKul">
            <i class="fas fa-fw fa-table"></i>
            <span>SKM</span>
        </a>
        <div id="navigasiskm" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="../../admin/skm/output.php">Output</a>
            <a class="collapse-item" href="../../admin/skm/le.php">LE</a>
            </div>
        </div>
    </li>

    <!-- Menu WWTP -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#navigasiwwtp" aria-expanded="true" aria-controls="navigasiNilai">
            <i class="fas fa-fw fa-edit"></i>
            <span>WWTP</span>
        </a>
        <div id="navigasiwwtp" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Menu:</h6>
            <a class="collapse-item" href="../../admin/wwtp/ph.php">PH</a>
            <a class="collapse-item" href="../../admin/wwtp/cod.php">COD</a>
            <a class="collapse-item" href="../../admin/wwtp/ls.php">LS</a>
            </div>
        </div>
    </li>
<!-- Akhir Menu Manajemen -->

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!--Akhir bagian navigasi-->