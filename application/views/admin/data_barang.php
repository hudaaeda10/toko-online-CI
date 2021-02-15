<div class="container-fluid">
    <div class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_barang"><i class="fa fa-plus mr-2"></i>Tambah Barang</div>
    <div class="card mt-3">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>NO</th>
                    <th>NAMA BARANG</th>
                    <th>KETERANGAN</th>
                    <th>KATEGORI</th>
                    <th>HARGA</th>
                    <th>STOK</th>
                    <th colspan="3">AKSI</th>
                </tr>
                <?php 
                    $no = 1;
                    foreach($barang as $brg) : 
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $brg->nama_brg ?></td>
                        <td><?php echo $brg->keterangan ?></td>
                        <td><?php echo $brg->kategori ?></td>
                        <td><?php echo $brg->harga ?></td>
                        <td><?php echo $brg->stok ?></td>
                        <td><div class="btn btn-sm btn-success"><i class="fas fa-search-plus"></i></div></td>
                        <td><?php echo anchor('admin/data_barang/edit/' .$brg->id_brg, '<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>') ?></td>
                        <td><?php echo anchor('admin/data_barang/hapus/' .$brg->id_brg, '<div class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></div>') ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">INPUT DATA PRODUK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambah_aksi' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control">
            </div>            
            <div class="form-group">
                <label for="nama_barang">Keterangan</label>
                <input type="text" name="keterangan" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_barang">Kategori</label>
                <select name="kategori" class="form-control">
                        <option>Elektronik</option>
                        <option>Pakaian Pria</option>
                        <option>Pakaian Wanita</option>
                        <option>Peralatan Olahraga</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_barang">Harga</label>
                <input type="text" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_barang">Stok</label>
                <input type="text" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_barang">gambar</label>
                <input type="file" name="gambar" class="form-control">
            </div>        
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>