<div class="container-fluid">
    <button class="btn btn-lg mb-3" data-toggle="modal" data-target="#tambah_barang" style="color:lime; background-color:#2F2F2F;">Add Product</button>

    <table class="table table-bordered text-success" style="background-color:#000000;">
        <tr class="table-active">
            <th>No</th>
            <th>PRODUCT</th>
            <!-- <th>Keterangan</th> -->
            <th>Image</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stock</th>
            <th colspan="2">Action</th>
        </tr>


        <?php 
        $no = 1;
        foreach ($barang as $brg) : ?>

            <tr>
                <td><?=  $no++ ?></td>
                <td><?=  $brg->nama_brg ?></td>
                <!-- <td><?=  $brg->keterangan ?></td> -->
                <td><img class="card-img-top" style="width:170px;" src="<?php echo base_url('uploads/').$brg->gambar?>" alt="Card image cap"></td>
                <td><?=  $brg->kategori ?></td>
                <td><?=  $brg->harga ?></td>
                <td><?=  $brg->stok ?></td>
                <!-- <td>
                    <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                </td> -->
                <td style="text-align:center;">
                    <?= anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn"><i class="fas fa-edit" style="color:lime"></i></div>') ?>
                </td>
                <td style="text-align:center;">
                    <?= anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn "><i class="fas fa-trash" style="color:#DC0000;"></i></div>') ?>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="background-color:#000000;">
    <div class="modal-content" style="background-color:#000000;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:lime;">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post" enctype='multipart/form-data'>

          <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" title="Harap isi nama Produk" required></input>
          </div>

          <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori" title="Harap isi kategori produk" required>
              <option>Sepatu</option>
              <option>Sandal</option>
              <option>Kaos Kaki</option>
            </select>
          </div>

          <div class="form-group">
            <label>Harga</label>
            <input type="number" name="harga" class="form-control" title="Harap isi harga produk" required></input>
          </div>

          <div class="form-group">
            <label>Stock</label>
            <input type="number" name="stok" class="form-control" title="Harap isi stock Produk" required></input>
          </div>

          <div class="form-group">
            <label>Gambar Produk</label><br>
            <input type="file" name="gambar" class="form-control" title="Harap masukan gambar Produk" required></input>
          </div>

      </div>
      <div class="modal-footer d-flex justify-content-center align-items-center">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-lg" style="color:black; background-color:lime;">ADD</button>
      </div>

      </form>
    </div>
  </div>
</div>
