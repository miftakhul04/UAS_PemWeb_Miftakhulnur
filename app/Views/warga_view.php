<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tables - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="<?= base_url(); ?>">Famget T.Informatika</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li>
                <a class="nav-link -toggle"><i class="fas fa-user fa-fw"></i>Miftakhul Nur</a>

            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="<?= base_url('warga/'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                            Peserta
                        </a>
                        <a class="nav-link" href="<?= base_url('iuran/'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Data Iuran Peserta
                        </a>
                        <a class="nav-link" href="<?= base_url('laporan/'); ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                            Laporan
                        </a>

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Admin</div>
                    Miftakhul
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Peserta</h1>
                    <div class="card mb-4">

                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Peserta
                        </div>

                        <div class="card-body">
                            <a href="<?= base_url('warga/tambah'); ?>" class="btn btn-success mb-2">Tambah Data</a>
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIK</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Alamat</th>
                                        <th>No Rumah</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($getWarga as $isi) { ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $isi['nik']; ?></td>
                                            <td><?= $isi['nama']; ?></td>
                                            <td>
                                                <?php
                                                $jk = $isi['kelamin'];
                                                if ($jk == 'L') {
                                                    echo "Laki-laki";
                                                } else {
                                                    echo "Perempuan";
                                                }
                                                ?>
                                            </td>
                                            <td><?= $isi['alamat']; ?></td>
                                            <td><?= $isi['no_rumah']; ?></td>
                                            <td>
                                                <?php
                                                $st = $isi['status'];
                                                if ($st == '1') {
                                                    echo "Aktif";
                                                } else {
                                                    echo "Non-aktif";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('warga/edit/' . $isi['id']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('warga/hapus/' . $isi['id']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                                                </a>

                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy;2021 Family Gathering Teknik Informatika</div>

                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>