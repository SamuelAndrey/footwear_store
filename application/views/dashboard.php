<head>
    <link href="<?php echo base_url()?>assets/css/shop.css" rel="stylesheet" type="text/css">
</head>
    <div class="container-xxxl">
        <a href="<?php echo base_url('welcome/') ?>#shop"><img src="<?php echo base_url()?>assets/img/postersandal.png" alt="poster" style="width:100%;" ></a>
    </div>

    <div class="container" id="shop" style="padding-top:10vh; padding-bottom:5vh; min-height: 46em; ">
        <div class="row ">

            <div class="col-3">
                <div class="title1">
                    <h3 class="title1">Category</h3>
                </div><hr class="garis">
                
                    <p class="sideCategory "><a href="<?php echo base_url('kategori/sandal')?>">Sandal</a></p>
                    <p class="sideCategory"><a href="<?php echo base_url('kategori/sepatu')?>">Sepatu</a></p>
                    <p class="sideCategory"><a href="<?php echo base_url('kategori/kaos_kaki')?>">Kaos Kaki</a></p>
                   


            </div>

            <div class="col-9">
                <div class="title1">
                    <h3 class="title1">Shop</h3>
                </div><hr class="garis">

                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-xs-1 row-cols-sm-2 ">

                    <?php foreach ($barang as $brg) : ?>
                        <div class="col">
                            <a href="<?php echo base_url('dashboard/detail/' .$brg->id_brg)?>">
                                <div class="card border-0 produk">
                                    <img class="card-img-top" src="<?php echo base_url('uploads/').$brg->gambar?>" alt="Card image cap">
                                    <div class="card-img-overlay ">
                                        <?php if ($brg->stok <= 0) { ?>
                                            <p class="card-text"><a href="<?php echo base_url('dashboard/emptyStock')?>">ADD TO CART</a></p>
                                        <?php } else { ?>
                                            <p class="card-text"><a href="<?php echo base_url('dashboard/tambah_ke_keranjang/' .$brg->id_brg)?>">ADD TO CART</a></p>
                                            
                                        <?php } ?>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $brg->nama_brg?></h5>
                                        <p class="card-text">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></p>
                                    </div>
                                </div>
                            

                        </div>
                    <?php endforeach ?>

               
                </div>
                
            </div>
        </div>
    </div>
