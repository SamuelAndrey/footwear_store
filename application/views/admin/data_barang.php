<div class="container-fluid">
    <button class="btn btn-sm mb-3" data-toggle="modal" data-target="#tambah_barang" style="color:lime; background-color:#2F2F2F;">Add Product</button>

    <table class="table table-bordered text-success" style="background-color:#000000;">
        <tr class="table-active">
            <th>NO</th>
            <th>PRODUCT</th>
            <th>KETERANGAN</th>
            <th>KATEGORI</th>
            <th>HARGA</th>
            <th>STOCK</th>
            <th colspan="2">AKSI</th>
        </tr>


        <?php 
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?=  $no++ ?></td>
                <td><?=  $brg->nama_brg ?></td>
                <td><?=  $brg->keterangan ?></td>
                <td><?=  $brg->kategori ?></td>
                <td><?=  $brg->harga ?></td>
                <td><?=  $brg->stok ?></td>
                <!-- <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td> -->
                <td>
                    <?= anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?>
                </td>
                <td>
                    <?= anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">FORM INPUT PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype='multipart/form-data'>

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control"></input>
          </div>

          <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control"></input>
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
              <option>Sepatu</option>
              <option>Sandal</option>
              <option>Kaos Kaki</option>
              <option>Elektronik</option>
              <option>Pakaian Pria</option>
              <option>Pakaian Wanita</option>
              <option>Pakaian Anak-Anak</option>
              <option>Peralatan Olahraga</option>
            </select>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="harga" class="form-control"></input>
          </div>

          <div class="form-group">
            <label>Stock</label>
            <input type="text" name="stok" class="form-control"></input>
          </div>

          <div class="form-group">
            <label>Gambar Produk</label><br>
            <input type="file" name="gambar" class="form-control"></input>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>

      </form>
    </div>
  </div>
</div>