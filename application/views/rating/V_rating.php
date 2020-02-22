<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Data Rating
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Data Rating</li>
    </ol>
  </section>
  <section class="content">
   <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></a><i class="fa fa-plus"></i> Tambah Data Rating</button>
   <table id="example2" class="table table-bordered table-striped">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Detail_produk</th>
      <th>Gambar</th>
      <th colspan="2">Aksi</th>
    </tr>
    <?php $no= 1;
    foreach ($data_produk as $tampilProduk):
      ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $tampilProduk->nama ?></td>
        <td><?= $tampilProduk->detail_produk?></td>
        <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/produk/hapusTabel/'.$tampilProduk->id_produk, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?> </td>
        <!-- <td>
          <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>"class = "img img-responsive img-thumbnail " width = "60">
        </td> -->
        <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('admin/produk/hapusTabel/'.$tampilProduk->id_produk, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?> </td> 
        <td><?php echo anchor('admin/produk/editTabel/'.$tampilProduk->id_produk,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>  
      </tr>
    <?php endforeach; ?>
  </table>
  <div class="card-footer small text-muted">
    <?php
    $tanggal= mktime(date("m"),date("d"),date("Y"));
    echo "Tanggal : <b>".date("d-M-Y", $tanggal)."</b> ";
    date_default_timezone_set('Asia/Jakarta');
    $jam=date("H:i:s");
    echo "| Pukul : <b>". $jam." "."</b>";
    $a = date ("H");
    ?> 
  </div>
</section>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Add Produk</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url(). 'admin/produk/tambahTabel';?>">
        <div class="form-group">
            <label>Nama </label>
            <input type="text" name="nama" placeholder="Jony" class="form-control" required="required" >
        </div>

        <div>  
            <label>Detail Produk</label>
            <input type="text" name="detail_produk" placeholder="coba123" class="form-control"  required="required">
        </div>

        <div>
            <label>Gambar</label>
            <input type="file" name="gambar" placeholder="coba123" class="form-control" required="required">            
        </div>

        <div>
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        </div>
          
        </form>
        
      </div>
    </div>
  </div>
</div>
</div>
