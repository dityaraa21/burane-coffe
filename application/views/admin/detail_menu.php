<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Barang</h5>
            <div class="card-body">
            
            <?php foreach($menu as $brg): ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table">
                        <tr>
                            <td>Nama Barang</td>
                            <td><strong><?php echo $brg->nama_brg ?></strong></td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td><strong><?php echo $brg->keterangan ?></strong></td>
                        </tr>
                        
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga,0,',','.') ?></div></strong></td>
                        </tr>
                    </table>

                <?php echo anchor('admin/data_kategori/edit/'.$brg->id_menu, '<div class="btn btn-sm btn-primary">Edit</div>') ?>
                <?php echo anchor('admin/data_kategori/index', '<div class="btn btn-sm btn-danger">Kembali</div>') ?>

                </div>
            </div>    
            <?php endforeach; ?>
            </div>
    </div>
</div>