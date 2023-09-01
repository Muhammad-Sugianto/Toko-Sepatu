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
                    <div class="card-header">
                    <h3 class="card-title">Form Add Produk</h3>
                </div>
                <!-- / card-header -->
                <div class="card-body">
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


                    
                    echo form_open_multipart('produk/add') ?>

                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama Produk</label>
                        <input name="nama_produk" class="form-control" placeholder="Nama Produk" value="<?= set_value('nama_produk') ?>">
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputKategori" class="form-label">Kategori</label>
                                <select name="id_kategori" class="form-select">
                                    <option value="">---Pilih Kategori---</option>
                                    <?php foreach ($kategori as $key => $value) { ?>
                                        <option value="<?= $value->id_kategori ?>"><?= $value->nama_kategori ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="inputHarga" class="form-label">Harga</label>
                                <input name="harga" class="form-control" placeholder="Harga Barang" value="<?= set_value('harga') ?>">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="inputDeskripsi" class="form-label">Deskripsi Produk</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Produk" cols="20" rows="6"><?= set_value('deskripsi') ?></textarea>
                    </div>


                    <div class="row">
                    <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="inputGambar" class="form-label">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="preview_gambar" required>
                    </div>
                    </div>
                    <div class="col-sm-5">
                    <div class="mb-3">
                      <img src="<?= base_url('assets/gambar/noimgs.png') ?>" id="gambar_load" width="300px">
                    </div>
                    </div>
                    </div>                    

                    <div class="mb-3"   >
                        <a href="<?= base_url('produk') ?>" class="btn btn-danger rounded-pill">Close</a>
                        <button type="submit" class="btn btn-primary rounded-pill">Save</button>
                    </div>

                    <?php echo form_close() ?>
                </div>
                        <nav aria-label="...">

                    </div>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
</main>

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
