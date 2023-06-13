<head>
    <style>
        .table1 td{
           color : white !important;
           font-size: 1.1em;
        }
    </style>
</head>
<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-success">No. Invoice : <?php echo $invoice->id?></div>
    </h4>

    <table  class="table1 table table-borderless w-50 " >
            <tr>
                <td>No Rekening </td>
                <td><?= $invoice->no_rekening?></td>
            </tr>
            <tr>
                <td>Bank </td>
                <td><?= $invoice->bank?></td>
            </tr>
            <tr>
                <td>No telepon </td>
                <td><?= $invoice->no_rekening?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>Rp. <?= number_format($invoice->total_bayar, 0, ',','.') ?></td>
            </tr>
            
    </table>

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
            $total += $subtotal; ?>
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
            <td align="right">Rp. <?php echo number_format($total,0, ',','.')?></td>
        </tr>
        <tr>
            <td colspan="4" align="right">Ongkir</td>
            <td align="right">Rp. 20.000</td>
        </tr>
        <tr>
            <td colspan="4" align="right">Total Bayar</td>
            <td align="right">Rp. <?= number_format($invoice->total_bayar, 0, ',','.') ?></td>
        </tr>
    </table>
    <a href="<?php echo base_url('admin/konfirmasi_transaksi/index')?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
    <a href="<?php echo base_url('admin/konfirmasi_transaksi/konfirmasi/'.$invoice->id)?>"><div class="btn btn-sm btn-success">Konfirmasi</div></a>
    <a href="<?php echo base_url('admin/konfirmasi_transaksi/tolak/'.$invoice->id)?>"><div class="btn btn-sm btn-danger">Tolak</div></a>

</div>