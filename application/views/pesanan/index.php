<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
    <script>
        function hapusPesanan(pesan) {
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
                        <h1>Pesanan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <?php if ($this->session->userdata('role') == 'admin') : ?>
                                <li class="breadcrumb-item"><a href="<?php echo base_url('index.php/home/index') ?>">Home</a></li>
                                <li class="breadcrumb-item active">Pesanan</a></li>
                            <?php endif; ?>
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
                                <h3 class="card-title">List Pesanan</h3>

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
                                <table border="2" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach ($pesanan as $pesan) {
                                        ?>
                                            <?php if (!$this->session->userdata('role' == 'admin')) { ?>
                                                <?php if ($pesan->users_id == $this->session->userdata('id')) : ?>
                                                    <tr>

                                                        <td> <?= $nomor++ ?> </td>
                                                        <td> <?= $pesan->tanggal ?></td>
                                                        <td> <?= $pesan->jumlah ?></td>
                                                        <td>
                                                            <a href=<?php echo base_url("index.php/pesanan/detail/$pesan->id") ?> class="btn btn-warning">Detail</a>
                                                            &nbsp;
                                                            <a href=<?php echo base_url("index.php/pesanan/delete/$pesan->id") ?> class="btn btn-danger" onclick=" return hapusPesanan('Apakah Anda yakin ingin mengcancel pesanan pada Tanggal <?php echo $pesan->tanggal ?> ?')">Cancel</a>

                                                        </td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php } ?>
                                            <?php if ($this->session->userdata('role') == 'admin') { ?>
                                                <tr>
                                                    <td> <?= $nomor++ ?> </td>
                                                    <td> <?= $pesan->tanggal ?></td>
                                                    <td> <?= $pesan->jumlah ?></td>
                                                    <td>
                                                        <a href=<?php echo base_url("index.php/pesanan/detail/$pesan->id") ?> class="btn btn-warning">Detail</a>
                                                        &nbsp;
                                                        <a href=<?php echo base_url("index.php/pesanan/edit/$pesan->id") ?> class="btn btn-dark">Edit</a>
                                                        &nbsp;
                                                        <a href=<?php echo base_url("index.php/pesanan/delete/$pesan->id") ?> class="btn btn-danger" onclick=" return hapusPesanan('Apakah Anda yakin ingin menghapus pesanan pada tanggal <?php echo $pesan->tanggal ?> ?')">Hapus</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
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
</body>

</html>