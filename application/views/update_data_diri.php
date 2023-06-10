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
                    <input type="text" id="username" name="username" placeholder=" Username" value="<?= $mbr->username?>"><br>
                    <input type="text" id="oldPassword" name="oldPassword" placeholder="Old Password"><br>
                    <input type="text" id="newPassword" name="newPassword" placeholder="New Password"><br>    
                    <input type="text" id="conPassword" name="conPassword" placeholder="Confirm Password"><br>
                    
                    <button type="submit">UPDATE</button>
                </fieldset>
            </form>
        <?php endforeach; ?>
        </div>
    
    </div>




    