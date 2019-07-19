<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> </h3>

    <?php foreach ($barang as $brg) : ?>
        <form method="post" action="<?= base_url('admin/data_barang/update') ?>">
            <input type="hidden" name="id_brg" value="<?= $brg->id_brg; ?>">
            <div>
                <label for="nama_brg">Nama Barang</label>
                <input type="text" name="nama_brg" id="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
            </div>
            <div>
                <label for="keterangan">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" class="form-control" value="<?= $brg->keterangan; ?>">
            </div>
            <div>
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control" value="<?= $brg->kategori; ?>">
            </div>
            <div>
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control" value="<?= $brg->harga; ?>">
            </div>
            <div>
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" value="<?= $brg->stok; ?>">
            </div>
            <div class="mt-3">
                <button class="btn btn-transparancy" href="<?= base_url('admin/dashboard_admin') ?>">Kembali</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </form>
    <?php endforeach; ?>
</div>