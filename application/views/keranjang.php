<head>
   <title>Cart</title>
   <style>
      .container {
         min-height: 39em;
         padding-top: 5em;
         padding-bottom: 2em;
      }

      .produk {
         height: 15em;
         width: 10em;
         border-radius: 0;
         background-color: transparent !important;
      }

      .produk img {
         border-radius: 2px;
      }

      .produk .card-body {
         padding-left: 0;

      }

      .produk .card-text {
         color: #F66E00;

      }

      thead {
         background-color: #454545;
         color: #fff;
         text-align: center;
         font-size: 1.3em;
      }

      .summary {
         color: black;
      }

      .summary span {
         font-size: 1.2em;
      }

      hr {
         width: 100%;
         opacity: 1;
      }

      .cartButton Button {
         font-family: 'JetBrains Mono', monospace;
         font-weight: 500;
         font-size: 1.3em;
         margin-top: .8em;
         border: none;
         border-radius: 5px;
         background-color: #454545;
         color: white;
         text-align: center;
         width: 100%;
         padding-top: 0.3em;
         padding-bottom: 0.3em;
      }

      .delete {
         background-color: #DC0000 !important;
      }

      .checkout {
         background-color: green !important;
      }
   </style>

</head>

<body>
   <div class="container">
      <div class="row  g-20">
         <div class="col-9">

            <table class="table table-striped">
               <thead>
                  <tr>
                     <th scope="col">Item</th>
                     <th scope="col">Size</th>
                     <th scope="col">Quantity</th>
                     <th scope="col">Subtotal</th>

                  </tr>
               </thead>
               <tbody>
                  <?php

                  foreach ($this->cart->contents() as $items) : ?>
                     <tr>
                        <td class="align-middle text-center">
                           <div class="card border-0 produk">
                              <img class="card-img-top" src="<?php echo base_url() . '/uploads/' . $items['gambar'] ?>" alt="produk">
                              <div class="card-body">
                                 <h5 class="card-title"><?php echo $items['name'] ?></h5>
                                 <p class="card-text">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></p>
                              </div>
                           </div>
                        </td>
                        <td class="align-middle text-center">40</td>

                        <td class="align-middle text-center"><input type="number" value="1">
                           <?php echo $items['qty'] ?>
                        </td>
                        <td class="align-middle text-center">
                           Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?>
                        </td>

                     </tr>
                  <?php endforeach; ?>

               </tbody>
            </table>


         </div>
         <div class="col-3">
            <div class="summary">
               <h3>Summary</h3><br>
               <span>Subtotal :</span>
               <span> Rp. <?php echo number_format($this->cart->total(), 0, ',', '.') ?></span> <br>
               <span>Shipping :</span>
               <span> Rp. 20.000</span> <br>
               <hr>
               <span>Total :</span>
               <span>

                  Rp. <?php echo number_format($this->cart->total() + 20000, 0, ',', '.') ?>
               </span> <br>
               <hr>
            </div>
            <div class="cartButton">
               <a href="<?php echo base_url('dashboard/hapus_keranjang') ?>">
                  <button class="delete">DELETE CART</button><br>
               </a>
               <a href="<?php echo base_url('welcome') ?>">
                  <button>CONTINUE SHOPPING</button><br>
               </a>
               <a href="<?php echo base_url('dashboard/pembayaran') ?>">
                  <button class="checkout">CHECKOUT</button><br>
               </a>

            </div>
         </div>

      </div>
   </div>