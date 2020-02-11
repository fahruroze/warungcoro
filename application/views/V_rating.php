<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Ulusan
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Ulasan Produk</li>
      </ol>
    </section>
    <section class="content">
      <table id="example2" class="table table-bordered table-striped">
          <tr>
              <th>no</th>
              <th>Nama</th>
              <th>Ulasan</th>
              <th>Tanggal</th>
          </tr>
            <?php $no= 1;
            foreach ($data_produk as $tampilProduk):
                  ?>
          <tr>
              <td><?= $no++; ?></td>
              <td><?= $tampilProduk->nama ?></td>
              <td><?= $tampilProduk->detail_produk?></td>
              <td onclick="javascript: return confirm('Anda yakin hapus?')"><?php echo anchor('produk/hapusTabel/'.$tampilProduk->id_produk, '<div class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></div>' ) ?> </td> 
              <td><?php echo anchor('produk/editTabel/'.$tampilProduk->id_produk,'<div class="btn btn-primary btn-sm" ><i class="fa fa-edit"></i></div>')?></td>  
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
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Form Add Produk</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      </div>
    </div>
  </div> -->
</div>
       