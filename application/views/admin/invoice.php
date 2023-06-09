<div class="container-fluid">
    <h4>Invoices</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id_Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th style="text-align:center;">Action</th>
        </tr>

        <?php 
        if ($invoice) {
            foreach ($invoice as $inv): ?>

                <tr>
                    <td><?php echo $inv->id ?></td>
                    <td><?php echo $inv->nama ?></td>
                    <td><?php echo $inv->alamat ?></td>
                    <td><?php echo $inv->tgl_pesan ?></td>
                    <td><?php echo $inv->batas_bayar ?></td>
                    <td><?php echo anchor('admin/invoice/detail/'.$inv->id, '<div class="btn" style="text-align:center;"><i class="fa fa-info-circle" style="color:lime; font-size:25px; text-align:center;"></i></div>')?></td>
                </tr>
        
                <?php endforeach; 
        } else {
            echo "<tr>Data Masih Kosong</tr>";
        }
        ?>

    </table>
</div>