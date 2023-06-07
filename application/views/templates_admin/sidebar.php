<style>
    h4 {
        color: lime;
    }
    tr {
        color: lime;
    }
    th {
        color: lime;
    }

    tr:nth-child(odd) {
      background-color: #000000; 
    }
    tr:nth-child(even) {
      background-color: #2F2F2F; /* Warna latar belakang untuk baris genap */
    }
</style>
<body id="page-top" style="background-color:black;">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar" style="background-color:#1E1C1C;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard_admin')?>">
                <!-- <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
                <div class="sidebar-brand-text mx-3 " style="color:lime; ">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/dashboard_admin') ?>">
                    <!--<i class="fas fa-fw fa-tachometer-alt"></i>-->
                    <span class="text-success"><h4>Dashboard</h4></span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/data_barang') ?>">
                    <!--<i class="fas fa-fw fa-table"></i>-->
                    <span class="text-success"><h4>Product</h4></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/invoice') ?>">
                    <!--<i class="fas fa-fw fa-table"></i>-->
                    <span class="text-success"><h4>Invoices</h4></span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/konfirmasi_transaksi') ?>">
                    <!--<i class="fas fa-fw fa-table"></i>-->
                    <span class="text-success"><h4>Payment Confirmation</h4></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content" style="background-color:#000000;">

                <!-- Topbar -->
                <nav class="navbar navbar-expand topbar mb-4 static-top shadow" style="background-color:#2F2F2F;">
                <h2 style="color:lime; text-align:center; margin:35%; font-weight:bold;">Admin MySikuil</h2>

                    <!-- Sidebar Toggle (Topbar) -->
                    <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button> -->
                    <!-- Topbar Search -->
                    <!--<form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>-->
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                  
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="">
                        </li>

                        <div class="navbar">

                            <!-- <div class="topbar-divider d-none d-sm-block"></div> -->
                            <ul class="na navbar-nav navbar-right">
                                    <?php if($this->session->userdata('username')){ ?>
                                        <!-- <li class="text-success"><div style="color:lime;"> <?php echo $this->session->userdata('username') ?></div></li> -->
                                        <li >
                                            <?= anchor('auth/logoutAdmin','<div class="btn btn-outline-success btn-lg"><i class="fa" style="font-size:48px;color:lime">&#xf08b;</i></div>') ?>    
                                        </li>
                                    <?php }else{ ?>
                                        <li><?php echo anchor('auth/loginAdmin', 'Login');?></li>
                                    <?php } ?> 
    
                                </ul>
                        </div>

                        <!-- Nav Item - Alerts -->
                        

                    </ul>

                </nav>
                <!-- End of Topbar -->