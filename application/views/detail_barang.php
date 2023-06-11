<head>
<style>
        .container{
            min-height: 39em; 
            padding-top: 4.1em;
            padding-bottom:2em ;
            color: black;

        }
        .row-saya{
            padding-top: 4.1em;
            padding-bottom:2em ;
            display: flex;
            justify-content: center;
            gap: 2em;
        }

        .produk{
            justify-self: left;
            
        
        }
        .produk p{
            color: #F66E00;
            font-size: 1.3em;
        
        }
        .produk h3{
            font-size: 3em;
        }
        .stock{
            justify-self:right;
            align-self: center;
            color: #000;
            background-color: #EBE9F6;
            font-size: 1.3em;
            padding: 0.4em 0.6em 0.4em 0.6em;
            border-radius: 3px;
            flex-shrink: 1;
        }
 
        .size{
            margin-top: 2em;
            align-self: flex-end;
        }

        .size-item input{
            visibility:hidden;
            margin-left:-20px;

        }

        .size-item {
            cursor: pointer;
            padding: 0.2em 1em 0.2em 1em;
            border:solid 1px;
            position:relative;
            font-size: 1.8em;
            
        }

        .outstock{
            background-color: gray;
            text-decoration: line-through;
            text-decoration-color: red;
        }

        .size-item  input:checked:after{
           
            content: attr(data-content);
            background-color:#454545;
            padding: 0.2em 1em 0.2em 1em;
            color: #fff;
            text-align: center;
            align-items: center;
            position:absolute;
            left:0;
            right:0;
            top:0;
            bottom:0;
            z-index:1;  
            visibility:visible;
        }

        .btnOrder{
            font-family: 'JetBrains Mono', monospace;
            font-weight: 500;
            font-size: 1.3em;
            margin-top: .8em;
            border: none ;
            border-radius: 5px;
            background-color: #454545;
            color: white;
            text-align: center;
            width: 100%;
            padding-top: 0.3em;
            padding-bottom: 0.3em;
        }
    </style>
</head>
<body>
<div class="container" >
    <?php foreach($barang as $brg): ?>
        <div class="row row-saya">

            <div class="col-4 ">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="" srcset="" style="width: 100%; border-radius: 15px;">
            </div>

            <div class="col-6 "  >
                <div style="display: flex; justify-content:space-between; flex-wrap: wrap;"  >
                    <span class="produk"  >
                        <h3><?php echo $brg->nama_brg?></h3>
                        <p>Rp. <?php echo number_format($brg->harga,0,',','.') ?></p>
                    </span >
                    <span class=" stock">
                        <span>Stock : </span><span style="color: #F66E00;"><strong><?php echo $brg->stok?></span>
                    </span>
                </div>



              
                    <div class="size">
                        <div class="row  row-cols-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4">
            
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="37" data-content="37" disabled/> 37
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="38" data-content="38" disabled/> 38
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="39" data-content="39" disabled/> 39
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <?php 
                                if ($brg->stok>0) {
                                    echo "  <label class='size-item'>
                                                <input type='radio' name='list' value='40' data-content='40' /> 40
                                            </label> ";
                                    }
                                else{
                                    echo "   <label class='size-item  outstock'>
                                                <input type='radio' name='list' value='40' data-content='40' disabled/> 40
                                            </label> ";
                                }
                                ?>
                              
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="41" data-content="41" disabled/> 41
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="42" data-content="42" disabled/> 42
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="43" data-content="43" disabled/> 43
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="44" data-content="44" disabled/> 44
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock" >
                                    <input type="radio" name="list" value="45" data-content="45" disabled/> 45
                                </label>
                            </div>
                            <div class="col col-md-3-2">
                                <label class="size-item outstock">
                                    <input type="radio" name="list" value="46" data-content="46" disabled/> 46
                                </label>
                            </div>

                            
                
            
                        </div>
                        <a href='<?php echo base_url('dashboard/tambah_ke_keranjang/'.$brg->id_brg )?>'>
                            <button class='btnOrder' <?= ($brg->stok <= 0) ? "disabled" : ""?>>ORDER</button>
                        </a>
                        <?= ($brg->stok <= 0) ? "Stock is empty" : ""?>
                </div>
         
            </div>
            
        </div>
    <?php endforeach; ?>
</div>
