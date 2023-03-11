<div class="container fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach($barang as $brg) : ?>

        <form method="post" action="<?= base_url() . 'admin/data_barang/update' ?>">
            <div class="form-group">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>"></input>
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>"></input>
            </div>
            <div class="form-group">
                <label for="">Kategori</label>
                <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg ?>"></input>
                <input type="text" name="kategori" class="form-control" value="<?= $brg->kategori ?>"></input>
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>"></input>
            </div>
            <div class="form-group">
                <label for="">Stock</label>
                <input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>"></input>
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>

    <?php endforeach; ?>
</div>