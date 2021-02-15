<div class="container-fluid">
     <h4><i class="fa fa-edit"></i>EDIT BARANAG</h4>

     <?php foreach($barang as $brg) : ?>
          <form action="<?php echo base_url(). '/admin/data_barang/update' ?>" method="POST" >
               <div class="form-group">
                    <label for="nama_brg">Nama Barang</label>
                    <input type="hidden" class="form-control" name="id_brg" value="<?php echo $brg->id_brg ?>">
                    <input type="text" class="form-control" name="nama_brg" value="<?php echo $brg->nama_brg ?>">
               </div>
               <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" value="<?php echo $brg->keterangan ?>">
               </div>
               <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="text" class="form-control" name="kategori" value="<?php echo $brg->kategori ?>">
               </div>
               <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" value="<?php echo $brg->harga ?>">
               </div>
               <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="text" class="form-control" name="stok" value="<?php echo $brg->stok ?>">
               </div>
               <button type="submit" class="btn btn-primary btn-sm mt-3 mb-3">Simpan</button>
          </form>
     <?php endforeach; ?>
</div>