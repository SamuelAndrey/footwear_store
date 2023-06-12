<head>
    <title>Register Member</title>
    <link href="<?php echo base_url()?>assets/css/form.css" rel="stylesheet" type="text/css">
    <style>
        .container{
            flex-direction: row !important;
            justify-content: space-evenly;
        }
        @media only screen and (max-width: 990px) {
            .container{
                flex-wrap: wrap;
            }
            .form1{
                flex-grow: 1;
            }

        }
    </style>

    

</head>
<body>
    <div class="container" >

    <div class="content1" >
        <img src="<?php echo base_url()?>assets/img/sikuil.png"alt="" srcset="" style="width:7em;" >
        <h4>Welcome to MySikuil!</h4>
        <p>Tak kenal maka tak sayang :) </p>
        <p>Isilah data disamping untuk menjadi member</p>
    </div>

    <div class="form1" style="width:40%">
        <form method="post" action="<?php echo base_url('registrasi/index') ?>"  class="user">
            <fieldset class="border border-dark w-100 p-3 mx-auto " style="border-radius: 5px; " >
                <legend  class="float-none w-auto p-2" >Register</legend>
                <input type="text" id="nama" name="nama" placeholder=" Full Name" required>
                    <?php echo form_error('nama', '<div class="text-danger small ml-2">','</div>'); ?><br>
                <input type="email" id="email" name="email" placeholder="Email Address" required>
                     <?php echo form_error('email', '<div class="text-danger small ml-2">','</div>'); ?><br>
                <input type="text" id="username" name="username" placeholder=" Username" required>
                    <?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?><br>
                <input type="password" id="password_1" name="password_1" placeholder="Password" required>
                    <?php echo form_error('password_1', '<div class="text-danger small ml-2">','</div>'); ?><br>    
                <input type="password" id="password_2" name="password_2" placeholder="Confirm Password" required>
                <br>
                
                <button type="submit" >Register</button>
                <p>
                    <span>Alredy a Member?</span>
                    <a href="<?php echo base_url('auth/loginMember') ?>"><span>Login.</span></a>
                </p>
            </fieldset>
        </form>
    </div>

    </div>

