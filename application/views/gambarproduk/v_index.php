<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-15">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                            echo $this->session->flashdata('pesan');
                            echo ' </div>';
                        }
                        ?>
                        <h5 class="card-title">Data Gambar Produk</h5>
                        <div class="card-tools"></div>
                        <!-- Bordered Table -->
                        <table class="table table-bordered table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Cover</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($gambarproduk as $key => $value) { ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $value->nama_produk ?></td>
                                        <td class="text-center"><img src="<?= base_url('assets/gambar/' . $value->gambar) ?>" width="100px"></td>
                                        <td class="text-center"><span class="badge rounded-pill bg-primary"><h6><?= $value->total_gambar ?></h6></span></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('gambarproduk/add/' .$value->id_produk) ?>" class="btn btn-success btn-sm"><i class="bi bi-plus">Add Gambar</i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
</main>
