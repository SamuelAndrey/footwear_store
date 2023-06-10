<head>
    <title>Login Member</title>
    <link href="<?php echo base_url()?>assets/css/form.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container" >

<div class="content1" >
     <img src="<?php echo base_url()?>assets/img/sikuil.png"  alt="" srcset="" style="width:7em;" >
     <h4>WELCOME BACK!</h4>
     <p>Sudah siap dompet kering? Login kembali.</p>
</div>

<div class="form1" style="width:40%">
    <?php echo $this->session->flashdata('pesan') ?>
    <form method="post" action="<?php echo base_url('auth/loginMember')?>" class="user">
        <fieldset class="border border-dark w-100 p-3 mx-auto " style="border-radius: 5px; " >
            <legend  class="float-none w-auto p-2" >Login</legend>
            <input type="text" id="username" name="username" placeholder="Username"> <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?><br>
            <input type="password" id="password" name="password" placeholder="Password"> <?php echo form_error('password', '<div class="text-danger small ml-2">','</div>'); ?><br>
            <button >LOGIN</button>
            <p>
                <span>Not a Member?</span>
                <a href="<?php echo base_url('registrasi/index');?>"><span>Join Us.</span></a>
            </p>
        </fieldset>
    </form>
</div>

</div>
