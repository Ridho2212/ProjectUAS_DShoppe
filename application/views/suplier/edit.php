<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Suplier</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="<?php echo base_url('index.php/home/index')?>">Home</a></li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo base_url('index.php/suplier/index')?>">Suplier</a></li>
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
<h2>Form edit Mata Kuliah</h2>
<?php echo form_open("suplier/fungsi_edit") ?>
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" value="<?php echo $obj_suplier->nama?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Kota</label> 
    <div class="col-8">
    <input id="id" name="id" placeholder="Masukkan Id" type="text" value="<?php echo $obj_suplier->id?>" class="form-control" spellcheck="false" data-ms-editor="true" hidden>
      <input id="kota" name="kota" placeholder="Masukkan Kota" type="text" value="<?php echo $obj_suplier->kota?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div>
  <div class="form-group row">
    <label for="kontak" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <input id="kontak" name="kontak" type="text" value="<?php echo $obj_suplier->kontak?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <label for="alamat" class="col-4 col-form-label">Alamat</label> 
    <div class="col-8">
      <input id="alamat" name="alamat" type="text" value="<?php echo $obj_suplier->alamat?>" class="form-control" spellcheck="false" data-ms-editor="true">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" value="" class="btn btn-primary">Submit</button>
    </div>
  </div>
<?php echo form_close() ?>
</div>