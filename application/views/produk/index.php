<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <script>
        function hapusProduk(pesan) {
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
// // $username = $this->session->userdata('username');
// // if ($username) {
// //     echo "<h2>Selamat Datang $username</h2>";
// }
?>

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
                            <li class="breadcrumb-item active">Produk</li>
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
                                <h3 class="card-title">List Produk</h3>

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
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($produk as $prod) {

                                        ?>
                                            <tr>
                                                <td><?php echo $nomor ?></td>
                                                <td><?php echo $prod->kode ?> </td>
                                                <td><?php echo $prod->nama ?></td>
                                                <td><?php echo $prod->stok ?></td>
                                                <td><?php echo $prod->harga_beli ?></td>
                                                <td><?php echo $prod->harga_jual ?></td>
                                                <td>
                                                    <a href=<?php echo base_url("index.php/produk/detail/$prod->id") ?> class="btn btn-warning">Detail</a>
                                                    &nbsp;
                                                    <a href=<?php echo base_url("index.php/produk/edit/$prod->id") ?> class="btn btn-dark">Edit</a>
                                                    &nbsp;
                                                    <a href=<?php echo base_url("index.php/produk/delete/$prod->id") ?> class="btn btn-danger" onclick=" return hapusProduk('Apakah Anda yakin ingin menghapus produk yang bernama <?php echo $prod->nama ?> ?')">Hapus</a>

                                                </td>
                                            </tr>
                                        <?php
                                            $nomor++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href=<?php echo base_url("index.php/produk/form") ?> class="btn btn-primary active">Tambah</a>
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