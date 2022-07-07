<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pembelian</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
            <li class="breadcrumb-item">
              <a href="<?php echo base_url('index.php/obj_pembelian/index') ?>">Pembelian</a>
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
    <h2>Form edit Pembelian</h2>
    <?php echo form_open("pembelian/fungsi_edit") ?>
    <div class="form-group row">
      <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
      <div class="col-8">
        <input id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" type="text" value="<?php echo $obj_pembelian->tanggal ?> " class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
      <div class="col-8">
        <input id="id" name="id" placeholder="Masukkan id" type="text" value="<?php echo $obj_pembelian->id ?> " class="form-control" spellcheck="false" data-ms-editor="true" hidden>
        <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah" type="number" min="1" value="<?php echo $obj_pembelian->jumlah ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Harga</label>
      <div class="col-8">
        <input id="harga" name="harga" placeholder="Masukkan Harga" type="text" value="<?php echo $obj_pembelian->harga ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Produk ID</label>
      <div class="col-8">
        <input id="produk_id" name="produk_id" placeholder="Masukkan Produk ID" type="number" min="1" value="<?php echo $obj_pembelian->produk_id ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Suplier ID</label>
      <div class="col-8">
        <input id="suplier_id" name="suplier_id" placeholder="Masukkan Suplier ID" type="number" min="1" value="<?php echo $obj_pembelian->suplier_id ?>" class="form-control" spellcheck="false" data-ms-editor="true">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    <?php echo form_close() ?>
  </div>