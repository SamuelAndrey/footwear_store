<!-- content -->
<head>
<link href="<?php echo base_url()?>assets/css/form.css" rel="stylesheet" type="text/css">
</head>

<div class="container" >

        <div class="form1" style="width:40%">
        <?php foreach($member as $mbr) : ?>
            <form method="post" action="<?= base_url() . 'dashboard/updateDataMember' ?>">
                <fieldset class="border border-dark w-100 p-3 mx-auto " style="border-radius: 5px; " >
                    <legend  class="float-none w-auto p-2" >Edit Username dan Password</legend>
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder=" Full Name" value="<?= $mbr->nama ?>" required><br>
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder=" Username" value="<?= $mbr->username ?>" required><br><br>

                    <i>Kosongi jika tidak ingin merubah password</i>
                    <input type="text" id="newPassword" name="newPassword" placeholder="New Password" value=""><br>

                    <input type="text" id="newPassword1" name="newPassword1" placeholder="Type Again New Password" value=""><br><br>

                    <i>Masukkan password lama</i>
                    <input type="password" id="conPassword" name="password" placeholder="Old Password" required><br>

                    <input type="hidden" name="verifPassword" value="<?= $mbr->password ?>">
                    
                    <button type="submit">UPDATE</button>
                </fieldset>
            </form>
        <?php endforeach; ?>
        </div>
    
    </div>




    