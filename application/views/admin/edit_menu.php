<div class="container-fluid">
    <h3><i class="fas fa-edit"></i>EDIT DATA BARANG</h3>

    <?php foreach($menu as $brg) : ?> 

        <form method="post" action="<?php echo base_url().'admin/data_kategori/update' ?>">
            <div class="for-group">
                <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control" value="<?php echo $brg->nama_brg ?>">
            </div>

            <div class="for-group">
                <label>Keterangan</label>
                <input type="hidden" name="id_menu" class="form-control" value="<?php echo $brg->id_menu ?>">
                <input type="text" name="keterangan" class="form-control" value="<?php echo $brg->keterangan ?>">
            </div>

            <div class="for-group">
                <label>Harga</label>
                <input type="text" name="harga" class="form-control" value="<?php echo $brg->harga ?>">
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
        </form>

    <?php endforeach; ?>
</div>