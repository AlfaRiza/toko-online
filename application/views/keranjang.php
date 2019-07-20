<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td align="right">Rp. <?= number_format($items['price'], 0, ',', '.'); ?></td>
                <td align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="5" align="right">Rp. <?= number_format($items['subtotal'], 0, ',', '.'); ?></td>
        </tr>
    </table>
</div>