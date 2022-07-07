<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pembelian</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="<?php echo base_url('index.php/pembelian/index') ?>">Pembelian</a></li>
                        <li class="breadcrumb-item active">Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Title</h3>

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
                            <div class="container">
                                <?php echo form_open("pembelian/save") ?>
                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal Pembelian</label>
                                    <div class="col-8">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control"
                                            spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                    <div class="col-8">
                                        <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Pembelian"
                                            type="number" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga" class="col-4 col-form-label">Harga</label>
                                    <div class="col-8">
                                        <input id="harga" name="harga" placeholder="Masukkan Harga Pembelian"
                                            type="number" class="form-control" spellcheck="false" data-ms-editor="true">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="produk_id" class="col-4 col-form-label">Produk Id</label>
                                    <div class="col-8">
                                        <select class="form-control" id="produk_id" name="produk_id">
                                            <?php
                                            include "config.php";
                                            $result = mysqli_query($connect, "SELECT * FROM produk");
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row[0] ?>">
                                                <?php echo $row[0] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="suplier_id" class="col-4 col-form-label">Suplier Id</label>
                                    <div class="col-8">
                                        <select class="form-control" id="suplier_id" name="suplier_id">
                                            <?php
                                            include "config.php";
                                            $result = mysqli_query($connect, "SELECT * FROM suplier");
                                            while ($row = mysqli_fetch_array($result)) { ?>
                                            <option value="<?php echo $row[0] ?>">
                                                <?php echo $row[0] ?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <?php echo form_close() ?>
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