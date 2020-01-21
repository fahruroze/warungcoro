<div class="content-wrapper">
	<section class="content">
		<?php foreach($edit_produk as $tampilProduk) {?>

		<form action="<?php echo base_url().'produk/update/'?>" method='post'>
			
			<div class="form-group">
				<label>Nama</label>
				<input type="hidden" name="id_produk" class="form-control" value="<?php echo $tampilProduk->id_produk ?>">
				<input type="text" name="nama" placeholder="isikan nama" class="form-control" value="<?php echo $tampilProduk->nama ?>">
			</div>

			<div class="form-group">
				<label>detail_produk</label>
				<input type="text" name="detail_produk" placeholder="isikan username" class="form-control" value="<?php echo $tampilProduk->detail_produk ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	<?php }?>
	</section>
</div>
