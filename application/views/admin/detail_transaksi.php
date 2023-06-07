<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id?></div>
    </h4>

    <h5 class="text-white">No Rekening : <?= $invoice->no_rekening?></h5>
    <h5 class="text-white">Bank : <?= $invoice->bank?></h5>
    <h5 class="text-white">No telepon : <?= $invoice->no_telepon ?></h5>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>ID BARANG</th>
            <th>NAMA PRODUK</th>
            <th>JUMLAH PESANAN</th>
            <th>HARGA SATUAN</th>
            <th>SUB-TOTAL</th>
        </tr>

        <?php
        $total = 0;
        foreach($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal
        ?>
        <tr>
            <td><?php echo $psn->id_brg?></td>
            <td><?php echo $psn->nama_brg?></td>
            <td><?php echo $psn->jumlah?></td>
            <td><?php echo number_format($psn->harga,0, ',','.')?></td>
            <td><?php echo number_format($subtotal,0, ',','.')?></td>
        </tr>
        <?php endforeach?>
        <tr>
            <td colspan="4" align="right">Grand Total</td>
            <td align="right"> Rp. <?php echo number_format($total,0, ',','.')?></td>
        </tr>
    </table>
    <a href="<?php echo base_url('admin/konfirmasi_transaksi/index')?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
    <a href="<?php echo base_url('admin/konfirmasi_transaksi/konfirmasi/'.$invoice->id)?>"><div class="btn btn-sm btn-success">Konfirmasi</div></a>
    <a href="<?php echo base_url('admin/konfirmasi_transaksi/tolak/'.$invoice->id)?>"><div class="btn btn-sm btn-danger">Tolak</div></a>

</div>