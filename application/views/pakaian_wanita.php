<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo base_url('assets/img/slider1.jpg') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?php echo base_url('assets/img/slider2.jpg') ?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
    <div class="row text-center mt-5">
        <?php foreach($pakaian_wanita as $brg) : ?>
            <div class="card ml-3 mb-3" style="width: 18rem;">
              <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" style="width: 640; height:470;" class="card-img-top" alt="...">
              <div class="card-body mb-1">
                <h5 class="card-title"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga), '0', ',', '.' ?></span><br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/' .$brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail_barang/' .$brg->id_brg, '<div class="btn btn-success btn-sm">Detail</div>') ?>
              </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>  