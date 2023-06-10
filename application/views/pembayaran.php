<head>
<link href="<?php echo base_url()?>assets/css/form.css" rel="stylesheet" type="text/css">
    <style>
        .form1{
            flex-grow: 1;
            width: 60%;
        }
        .form1 label{
            margin-bottom: 2px;
            font-size: .8em;
        }
        .form1 button{
            width: 100%;
            padding-left: 1.5em;
            padding-right: 1.5em;
            margin-top: 2em;
    
        
        }

        .container{

            flex-direction: row !important;
            justify-content: space-evenly;
            flex-wrap: wrap;
            
            gap: 4em;
        }
        select{
            padding: .3em 1em .3em 1em;
        }
        .rcontent{

            border-radius: 5px;
            padding: 2em 1em 2em 1em;
            color: #000;
            width: 35%;
            display: flex;
            flex-direction: column;
            flex-shrink: 1;
            align-items: flex-start;
        }
        .noBank{
            display: flex;
        flex-direction: column;
            justify-content: center;
            align-items: center;
            
        }
        .rcontent img{
            width: 5em;
            margin: .5em;
        
            
        }
        @media only screen and (max-width: 1190px) {
            .container{
                flex-wrap: wrap;
            }
            .form1{
                flex-grow: 1;
                width: 100%;
            }
            .rcontent{
                flex-shrink: 1;
                width: 100%;
            }

        }


    </style>
</head>
<body>
    <div class="container" >
        <div class="form1" >
            <form method="post" action="<?php echo base_url('dashboard/proses_pesanan') ?> " >
                <fieldset class="border border-dark w-100 p-3 mx-auto " style="border-radius: 5px; " >
                    <legend  class="float-none w-auto p-2" >Payments</legend>
                    
                    <label for="name">Full Name</label>
                    <input type="text" id="" name="" value="<?= $this->session->userdata('nama') ?>" readonly><br>

                    <label for="address">Address</label>
                    <input type="text" id="alamat" name="alamat" placeholder="Alamat Lengkap"><br>

                    <label for="phone">Phone</label>
                    <input type="text" id="no_telp" name="no_telp" placeholder="No. Telepon"><br>  

                    <label for="banknumber">Your Bank Number</label>
                    <input type="text" id="no_rek" name="no_rek" placeholder="Bank Number"><br>  

                    <div>
                        <span style="float: left;">
                            <label for="kurir">Delivery Service</label><br>
                        
                                <select id="kurir" name="kurir">
                                    <option value="JNE">JNE</option>
                                    <option value="JNT">JNT</option>
                                </select>
                            </span>
                            <span style=" margin-left:2em;">
                            <label for="kurir">BANK</label><br>
                                <select id="bank" name="bank" style=" margin-left:2em;">
                                    <option value="BRI">BRI</option>
                                    <option value="BCA">BCA</option>
                                </select>
                            </span>
                            <span style="float: right; text-align: right;">
                                <label>Your Total</label>
                                <p style="font-weight: 400; color: #DC0000;">
                                <?php 
                                    $grand_total = 0;
                                    if ($keranjang = $this->cart->contents()){
                                        foreach ($keranjang as $item)
                                        {
                                            $grand_total = $grand_total + $item['subtotal'];
                                        }

                                    echo " Rp. ".number_format($grand_total+20000, 0,',','.');
                                    $grand_total += 20000;
                                    }else{
                                        echo "Keranjang Belanja Anda Masih Kosong";
                                    }
                                    ?>
                                </p>
                            </span>
                    </div>

                    <br><br>
                    <input type="hidden" name="total_bayar" value="<?= $grand_total ?>">
                    <button type="submit">ORDER</button>
                </fieldset>
            </form>
        </div>

        <div class="rcontent border border-dark p-3 mx-auto " >
            <div style="width: 100%;">
                <h4>Cara Pembayaran</h4>
                <ol>
                    <li>Isilah form 'Payments' terlebih dahulu.</li>
                    <li>Transfer sesuai total pembayaran anda ke salah satu akun kami.</li>
                    <li>Klik Button Submit.</li>
                    <li>Tunggu email konfirmasi pembayaran dari kami.</li>
                    <li>No. Resi juga akan kami kirim lewat email. </li>
                    <br>
                    <p style="text-align: center;">Terima Kasih</p>
                </ol>
                <hr>
            </div>

        
            <div class="noBank"  style="width: 100%;">
                <img src="<?php echo base_url()?>assets/img/bri2.webp" alt="BRI" >
                <p style="text-align: center;">BRI - 0123 456789</p>
                <img src="<?php echo base_url()?>assets/img/bca2.webp" alt="BCA" style="margin-top: 1.5em;">
                <p style="text-align: center; margin-bottom: .5em;">BRI - 0123 456789</p>
            </div>

        </div>

    </div>
