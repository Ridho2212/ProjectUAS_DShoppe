<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Input Pesanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a
                                href="<?php echo base_url('index.php/pesanan/index') ?>">Pesanan</a></li>
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
                            <h3 class="card-title">Form Pesanan</h3>

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
                                <?php echo form_open("pesanan/save") ?>
                                <div class="d-flex">
                                    <img src="<?= base_url('assets/images/' . $produk->foto) ?>" alt="" width="270px">
                                    <div class="d-flex flex-column my-auto ml-5 w-50">
                                        <p>IDR&nbsp;<b
                                                style="color: blue; font-size: 40px;"><?= number_format($harga) ?></b>
                                        </p>
                                        <input type="number" name="users_id"
                                            value="<?= $this->session->userdata('id') ?>" id="users_id" hidden>
                                        <div class="form-group row">
                                            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                            <div class="col-8   ">
                                                <input type="date" class="form-control" id="tanggal" name="tanggal"
                                                    value="<?= date('Y-m-d') ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                            <div class="col-8   ">
                                                <input id="jumlah" name="jumlah" placeholder="Masukkan Jumlah Pesanan"
                                                    type="number" class="form-control" spellcheck="false"
                                                    data-ms-editor="true">
                                            </div>
                                        </div>
                                        <div class="form-group row" hidden>
                                            <label for="produk_id" class="col-4 col-form-label">Produk</label>
                                            <div class="col-8   ">
                                                <input type="text" class="form-control" id="produk_id" name="produk_id"
                                                    value="<?= $produk->jenis_id ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-8">
                                                <button name="submit" type="submit"
                                                    class="btn btn-primary">Submit</button>
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