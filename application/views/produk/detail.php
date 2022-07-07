<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>

<body>
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
                            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/produk/index') ?>">Produk</a></li>
                            <li class="breadcrumb-item active">Detail</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Detail Produk</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table border="1" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Stok</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Foto Produk</th>
                                            <th>Deskripsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $produkd->id ?></td>
                                            <td><?php echo $produkd->kode ?> </td>
                                            <td><?php echo $produkd->nama ?></td>
                                            <td><?php echo $produkd->stok ?></td>
                                            <td><?php echo $produkd->harga_beli ?></td>
                                            <td><?php echo $produkd->harga_jual ?></td>
                                            <td><img src="<?php echo base_url('assets/images/' . $produkd->foto) ?>" alt="" width="130"></td>

                                            <td><?php echo $produkd->deskripsi ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- <div class="col-md5 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="align-items-center text-center">
                                                <img src="<?= base_url() ?>uploads/photos/<?= $produkd->id ?>.jpg" width="300">
                                                <div class="mt-4">
                                                    <h4><?= $produkd->nama ?></h4>
                                                    <p>Foto Produk</p>
                                                    <?php echo $error; ?>
                                                    <br> <br>
                                                    <a href="https://www.instagram.com/ormikfuturistik/" target="_blank"><button class="btn btn-outline-info">Instagram</button></a>
                                                    <br> <br>
                                                    <?php echo form_open_multipart('produk/upload'); ?>
                                                    <input type="file" name="foto" size="300">
                                                    <input type="hidden" name="idproduk" value="<?= $produkd->id ?>">
                                                    <br> <br>
                                                    <input type="submit" value="Upload Foto" class="btn btn-primary">
                                                    </form>
                                                    <div class="card-footer"> -->

                            
                        </div>
                        </div>
                            <a href="<?php echo base_url('index.php/produk/index') ?>" class="btn btn-primary">
                                << Back </a>
                    </div>

                </div>
            </div>

    </div>
    </div>


    <!-- /.card-body -->
    <div class="card-footer">
    </div>
    <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    </div>
</body>

</html>