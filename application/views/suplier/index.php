<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suplier</title>
    <script>
        function hapusSuplier(pesan) {
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
                        <h1>Suplier</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                            <li class="breadcrumb-item">Suplier</li>
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
                                <h3 class="card-title">List Suplier</h3>

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
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Kota</th>
                                        <th>Kontak</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php $no = 1;
                                    foreach ($suplier as $sup) : ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $sup->nama ?></td>
                                            <td><?= $sup->kota ?></td>
                                            <td><?= $sup->kontak ?></td>
                                            <td>
                                                <a href=<?php echo base_url("index.php/suplier/detail/$sup->id") ?> class="btn btn-warning">Detail</a>
                                                &nbsp;
                                                <a href=<?php echo base_url("index.php/suplier/edit/$sup->id") ?> class="btn btn-dark">Edit</a>
                                                &nbsp;
                                                <a href=<?php echo base_url("index.php/suplier/delete/$sup->id") ?> class="btn btn-danger" onclick=" return hapusSuplier('Apakah Anda yakin ingin menghapus  <?php echo $sup->nama ?> ?')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    endforeach; ?>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <a href=<?php echo base_url("index.php/suplier/form") ?> class="btn btn-primary active">Tambah</a>

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