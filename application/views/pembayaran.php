<div class="container-fluid">
     <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
               <div class="btn btn-lg btn-success">
                    <?php
                         $grand_total = 0;
                         if($keranjang = $this->cart->contents()) 
                         {
                              foreach ($keranjang as $item) 
                              {
                                   $grand_total = $grand_total + $item['subtotal'];
                              }
                              echo "Total Belanja Anda : Rp. " .number_format($grand_total, 0,',','.');
                         ?> 
               </div><br><br>
               <h3>Input Alamat Pengiriman dan Pembayaran</h3>
               <form action="<?php echo base_url().'dashboard/proses_pembayaran' ?>" method="post">
                    <div class="form-group">
                         <label for="nama">Nama Lengkap Anda</label>
                         <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                    </div>
                    <div class="form-group">
                         <label for="alamat">Alamat Lengkap Anda</label>
                         <input type="text" name="alamat" class="form-control" placeholder="Alamat Lengkap">
                    </div>
                    <div class="form-group">
                         <label for="no_telp">Nomor Telphone Anda</label>
                         <input type="text" name="no_telp" class="form-control" placeholder="Nomor Telphone">
                    </div>
                    <div class="form-group">
                         <label>Jasa Pengiriman</label>
                         <select class="form-control">
                              <option>JNE</option>
                              <option>TIKI</option>
                              <option>POS INDONESIA</option>
                              <option>GOJEK</option>
                              <option ">GRAB</option>
                         </select>
                    </div>
                    <div class="form-group">
                         <label>Pilih Bank</label>
                         <select class="form-control">
                              <option>BCA - xxxxx</option>
                              <option>BNI - xxxxx</option>
                              <option>Mandiri - xxxxx</option>
                              <option>BRI - xxxxx</option>
                         </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
               </form>
               <?php
               } else 
               {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong</h4>";
               }
               ?>
          </div>
          <div class="col-md-2"></div>
     </div>
</div>