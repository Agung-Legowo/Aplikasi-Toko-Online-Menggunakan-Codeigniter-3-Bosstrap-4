<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total =0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}

				echo "<h7>Total Belanja Anda: Rp.".number_format($grand_total,0,',','.');	
				 ?>
			</div><br><br>
			<h3>Input Pengiriman dan Pembayaran </h3>

			<form method="post" action="<?php echo base_url() ?> dashboard/proses_pesanan">
				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama lengkap anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat lengkap anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="no_telp" placeholder="nomor Telepon anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control">
						<option>JNE</option>
						<option>TIKI</option>
						<option>Pos Indonesia</option>
						<option>GOJEK</option>
						<option>GRAB</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>Pilih Bank</label>
					<select class="form-control">
						<option>BCA - 1111111</option>
						<option>BRI - 2222222</option>
						<option>BNI - 3333333</option>
						<option>MANDIRI - 4444444</option>
					</select>
				</div>


				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

			</form>

			<?php  
		} else
		{
			echo "<h4>Keranjang belanja anda masih kosong";
		}
			?>
		</div>

		<div class="col-md-2"></div>
	</div>
</div>