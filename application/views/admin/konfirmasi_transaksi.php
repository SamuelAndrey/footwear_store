<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
            

        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td>
                
                <?php
                    if ($inv->status_konfirmasi == 0) {
                        echo "Belum dikonfirmasi";
                    } else if ($inv->status_konfirmasi == 1) {
                        echo "Tekonfirmasi";
                    } else {
                        echo "Pesanan ditolak";
                    }
                ?>
            </td>
            <td><?php echo anchor('admin/konfirmasi_transaksi/detail/'.$inv->id, '<div class="btn btn-sm btn-primary">Konfirmasi</div>')?></td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>