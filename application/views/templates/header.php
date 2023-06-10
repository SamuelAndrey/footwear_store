<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySikuil</title>
    <link rel="icon" href="<?php echo base_url()?>assets/img/sikuil2.png" type="image/x-icon">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- icon -->
    <script src="https://kit.fontawesome.com/adb32d4b56.js" crossorigin="anonymous"></script>
    
    <script src="jquery-3.6.4.min.js"></script>

    <link rel="stylesheet" href="navFoot.css">
    <link href="<?php echo base_url()?>assets/css/navFoot.css" rel="stylesheet" type="text/css">

</head>
<body>
    <?php $keranjang = $this->cart->total_items()?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top ">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('welcome/') ?>"><img src="<?php echo base_url()?>assets/img/MySikuil.png" width="100%" height="40"></a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            
            <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="navbarTogglerDemo01">
                <ul class="navbar-nav mx-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('welcome/') ?>#shop">Shop</a>
                    </li>
            
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo base_url('kategori/sandal')?>">Sandal</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('kategori/sepatu')?>">Sepatu</a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('kategori/kaos_kaki')?>">Kaos Kaki</a></li>
        

                        </ul>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="https://linktr.ee/mysikuil" target="_blank">Contact</a>
                    </li>
                </ul>
               
                <ul class="navbar-nav " style="display: flex; justify-content: space-between; ">
                    <li class=" nav-item licon">
                        
                    </li>
                    <li class=" nav-item licon">
                        <a class="nav-link" href="<?php echo base_url('dashboard/detail_keranjang')?>" ><i class="fa-solid fa-cart-shopping position-relative">
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?php echo $keranjang ?>
                            </span>
                        </i></a>
                    </li>
            
                    <li class="nav-item dropdown dropstart licon" >
                        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-regular fa-circle-user"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php if($this->session->userdata('username')){ ?>
                                <li><div class="dropdown-item" ><?php echo $this->session->userdata('username') ?></div></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('dashboard/updateDataDiri')?>">Edit Usename dan Password</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('auth/logout')?>">Logout</a></li>
                            <?php }else{ ?>
                                <li><a class="dropdown-item" href="<?php echo base_url('auth/login')?>">Login</a></li>
                            <?php } ?> 
 
                        </ul>
                    </li>
                 </ul>    
            </div>
    </nav>