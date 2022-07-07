<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produk</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('index.php/produk/index') ?>">Produk</a>
            </li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="container">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <h2>Form edit Produk</h2>
    <?php echo form_open("produk/fungsi_edit") ?>
    <div class="form-group row">
      <label for="kode" class="col-4 col-form-label">Kode</label>
      <div class="col-8">
        <input id="kode" name="kode" placeholder="Masukkan kode" type="text" value="<?php echo $obj_produk->kode ?> " class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama</label>
      <div class="col-8">
        <input id="id" name="id" placeholder="Masukkan id" type="text" value="<?php echo $obj_produk->id ?> " class="form-control" spellcheck="false" data-ms-editor="true" hidden>
        <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" value="<?php echo $obj_produk->nama ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Stok</label>
      <div class="col-8">
        <input id="stok" name="stok" placeholder="Masukkan stok" type="text" value="<?php echo $obj_produk->stok ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label>
      <div class="col-8">
        <input id="harga_beli" name="harga_beli" placeholder="Masukkan Harga Beli" type="text" value="<?php echo $obj_produk->harga_beli ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label>
      <div class="col-8">
        <input id="harga_jual" name="harga_jual" type="text" value="<?php echo $obj_produk->harga_jual ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="jenis_id" class="col-4 col-form-label">Jenis ID</label>
      <div class="col-8">
        <input id="jenis_id" name="jenis_id" type="text" value="<?php echo $obj_produk->jenis_id ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
      <div class="col-8">
        <input id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" type="text" value="<?php echo $obj_produk->deskripsi ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="foto" class="col-4 col-form-label">Foto</label>
      <div class="col-8">
        <input type="text" value="<?php echo $obj_produk->foto?>" class="form-control-file" id="foto" name="foto">
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
      <?php echo form_close() ?>
    </div>
  </div>