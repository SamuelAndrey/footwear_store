
<body class="bg-dark" style="background-image: url('<?= base_url('assets/')?>img/matrixbg.png');">

    <div class="container">
 
        <a href="<?php echo base_url('welcome/') ?>">
             <div class="d-flex justify-content-center "><img src="<?php echo base_url()?>assets/img/sikuil2.png"  alt="" style="height:100px; width:auto; margin-top:2em;"></div>    
        </a>
               <h1 align="center" style="color:white; padding-top:30px; margin-bottom:0; font-family: 'Lilita One', cursive;">MySikuil</h1>

        <!-- Outer Row -->
        <div class="row justify-content-center ">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
                <div class="card my-5" style="border-radius:20px; background-color:rgba(0, 0, 0, 0.5); transparent:transparent;">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 style="font-size :30px; margin-bottom:25px; color:lime; font-style:bold;">Form Login Admin</h1>
                                    </div>
                                    <?php echo $this->session->flashdata('pesan') ?>
                                    <form method="post" action="<?php echo base_url('auth/loginAdmin')?>" class="admin" >
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username Anda" name="username" required>
                                                <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password" required>
                                                <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?>
                                        </div>
                                        
                                        <button type="submit" style="background-color:rgba(255, 255, 255, 0.5); border-radius:15px; padding:10px 20px; border:none; cursor:pointer; width:100%; height:50px" onmouseover="this.style.backgroundColor='rgba(0, 0, 0, 0.5)'; this.style.color='rgba(255, 255, 255, 0.5)'" onmouseout="this.style.backgroundColor='rgba(255, 255, 255, 0.5)'; this.style.color='rgba(0, 0, 0, 0.5)';"><h4 style="color:lime;">Login</h4></button>
                                    </form>
                                    <!-- <hr> -->
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?php echo base_url('registrasi/index');?>">Belum punya akun? Daftar </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
