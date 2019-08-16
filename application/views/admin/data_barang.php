<div class="container-fluid">
    <button type="button" class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_barang"> <i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Keterangan</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th colspan="3" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($barang as $brg) : ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $brg['nama_brg']; ?></td>
                <td><?= $brg['keterangan']; ?></td>
                <td><?= $brg['kategori']; ?></td>
                <td><?= $brg['harga']; ?></td>
                <td><?= $brg['stok']; ?></td>
                <td> <?= anchor('admin/data_barang/detail/' . $brg['id_brg'], '<div class="btn btn-sm btn-primary"> <i class="fas fa-search-plus"></i> </div>'); ?>
                </td>
                <td> <?= anchor('admin/data_barang/edit/' . $brg['id_brg'], '<div class="btn btn-sm btn-success"> <i class="fas fa-edit"></i> </div>'); ?>
                </td>
                <td>
                    <?= anchor('admin/data_barang/hapus/' . $brg['id_brg'], '<div class="btn btn-sm btn-danger"> <i class="fas fa-trash"></i> </div>'); ?>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Input Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?= base_url('admin/data_barang/tambah_aksi'); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" name="nama_brg" id="nama_brg" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="Elektronik">Elektronik</option>
                            <option value="Pakaian Pria">Pakaian Pria</option>
                            <option value="Pakaian Wanita">Pakaian Wanita</option>
                            <option value="Pakaian Anak">Pakaian Anak</option>
                            <option value="Olahraga">Perlengkapan Olahraga</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" id="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar Produk</label> <br>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-transparancy" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
            </form>
        </div>
    </div>
</div>