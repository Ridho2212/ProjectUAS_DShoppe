<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <script>
        function hapusPembelian(pesan) {
            if (confirm(pesan)) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</head>
<?php
// $username = $this->session->userdata('username');
// if ($username) {
//     echo "<h2>Selamat Datang $username</h2>";
// }
?>

<body>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pembelian</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                            <li class="breadcrumb-item">Pembelian</li>
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
                                <h3 class="card-title">List Pembelian</h3>

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
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($pembelian as $beli) {
                                        ?>
                                            <tr>
                                                <td> <?= $nomor ?> </td>
                                                <td> <?= $beli->tanggal ?></td>
                                                <td> <?= $beli->jumlah ?></td>
                                                <td> <?= $beli->harga ?></td>
                                                <td>
                                                    <a href=<?php echo base_url("index.php/pembelian/detail/$beli->id") ?> class="btn btn-warning">Detail</a>
                                                    &nbsp;
                                                    <a href=<?php echo base_url("index.php/pembelian/edit/$beli->id") ?> class="btn btn-dark">Edit</a>
                                                    &nbsp;
                                                    <a href=<?php echo base_url("index.php/pembelian/delete/$beli->id") ?> class="btn btn-danger" onclick=" return hapusPembelian('Apakah Anda yakin ingin menghapus pembelian pada tanggal <?php echo $beli->tanggal ?> ?')">Hapus</a>
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
                                <a href=<?php echo base_url("index.php/pembelian/form") ?> class="btn btn-primary active">Tambah</a>
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
</body>

</html>