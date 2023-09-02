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
                        <?php 
                        // Notifikasi form kosong
                        echo validation_errors('   <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                        <i class="bi bi-exclamation-triangle me-1"></i>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>', '</div>');

                        // Notifikasi gagal upload gambar
                        if (isset($error_upload)) {
                            echo ' <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
                            <i class="bi bi-exclamation-triangle me-1"></i>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>' .$error_upload. '</div>';
                        }    

                        echo form_open_multipart('gambarproduk/add/' .$produk->id_produk) ?>

                        <h5 class="card-title" style="text-align: center;">Add Gambar Produk : <?= $produk->nama_produk?></h5>
                        <div class="card-tools"></div>
                        <!-- Bordered Table -->

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="inputNama" class="form-label">Ket Gambar</label>
                                    <input name="keterangan" class="form-control" placeholder="Ket Gambar" value="<?= set_value('keterangan') ?>">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <label for="inputGambar" class="form-label">Gambar</label>
                                    <input type="file" name="gambar" class="form-control" id="preview_gambar" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="mb-3">
                                    <img src="<?= base_url('assets/gambar/noimgs.png') ?>" id="gambar_load" width="200px">
                                </div>
                            </div>
                        </div>               

                        <div class="mb-3">
                            <a href="<?= base_url('gambarproduk') ?>" class="btn btn-danger rounded-pill"><i class="bi bi-x-circle"> Close</i></a>
                            <button type="submit" class="btn btn-primary rounded-pill">Save</button>
                        </div>

                        <?php echo form_close() ?>

                        <hr>
                        <div class="row">
                            <?php foreach ($gambar as $key => $value) { ?>
                                <div class="col-sm-3">
                                    <div class="mb-3">
                                        <img src="<?= base_url('assets/gambarproduk/' .$value->gambar) ?>" id="gambar_load_<?= $key ?>" width="210px" height="200px">
                                    </div>
                                    <p for="">Ket : <?= $value->keterangan ?></p>
                                    <button data-bs-toggle="modal" data-bs-target="#delete<?= $value->id_gambar ?>" class="btn btn-danger rounded-pill btn-block"><i class="bi bi-trash3"> Delete</i></button>
                                </div>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
</main>

<!-- Modal DELETE -->
<?php foreach ($gambar as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_gambar ?>" tabindex="-1" aria-labelledby="deleteLabel<?= $value->id_gambar ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteLabel<?= $value->id_gambar ?>">Delete <?= $value->keterangan ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">

                <div class="mb-3">
                    <img src="<?= base_url('assets/gambarproduk/' .$value->gambar) ?>" id="gambar_load_<?= $key ?>" width="210px" height="200px">
                 </div>

                    <h5>Apakah Anda Yakin Ingin Menghapus Gambar Ini...?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url('gambarproduk/delete/' .$value->id_produk.'/' . $value->id_gambar)?>" class="btn btn-primary">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?> 


<!-- Pastikan Anda telah menyertakan jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // Pastikan skrip ini berada dalam dokumen siap
    $(document).ready(function() {
        // Ketika input file dengan ID "preview_gambar" berubah
        $("#preview_gambar").change(function() {
            bacaGambar(this);
        });

        // Fungsi untuk memuat gambar
        function bacaGambar(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    // Menetapkan sumber gambar ke elemen dengan ID "gambar_load"
                    $('#gambar_load').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    });
</script>