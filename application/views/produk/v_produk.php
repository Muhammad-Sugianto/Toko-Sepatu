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
                    
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                         ';
                            echo $this->session->flashdata('pesan');
                            echo ' </div>';
                        }




                       ?>
                        <h5 class="card-title">Data Produk</h5>
                        <div class="card-tools">
                            <a href="<?= base_url('produk/add') ?>" type="button" class="btn btn-primary btn-xs "><i class="bi bi-plus"></i> Add <i class="bi bi-boxes"></i></a>
                               
                        </div>
                        <!-- Bordered Table -->
                        <table class="table table-bordered table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama Produk</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Harga</th>
                                    <!-- <th scope="col">Deskripsi</th> -->
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                           <tbody>
                              <?php $no = 1;
                              foreach ($produk as $key => $value) { ?>
                                <tr>
                                  <td class="text-center"><?= $no++ ?></td>
                                  <td class="text-center"><?= $value->nama_produk ?></td>
                                  <td class="text-center"><?= $value->nama_kategori ?></td>
                                  <td class="text-center">Rp. <?= number_format($value->harga, 0) ?></td>
                                  <!-- <td class="text-center"><?= $value->deskripsi ?></td> -->
                                  <td class="text-center"><img src="<?= base_url('assets/gambar/' .$value->gambar) ?>" width="100px"></td>
                                  <td>

                                    <a href="<?= base_url('produk/edit/' .$value->id_produk) ?>" class="btn btn-warning sm"><i class="bi bi-pencil-square"></i></a>
                                    <button class="btn btn-danger sm" data-bs-toggle="modal" data-bs-target="#delete<?= $value->id_produk ?>" ><i class="bi bi-trash3"></i></button>

                                  </td>
                                </tr>
                            <?php  } ?> 
                           </tbody>
                        </table>
                        <nav aria-label="...">

                    </div>
                </div>
            </div><!-- End Left side columns -->
        </div>
    </section>
</main>





<!-- !!! Modal DELETE-->
<?php    foreach ($produk as $key => $value) { ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="delete">
       
        </button>
        <div class="modal" id="delete<?= $value->id_produk ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete <?= $value->nama_produk ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               
                <h5>Apakah Anda Yakin Ingin Menghapus Data Ini...?</h5>
       

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('produk/delete/' . $value->id_produk)?>" class="btn btn-primary">Delete</a>
              </div>
             
            </div>
          </div>
        </div><!-- End Disabled Animation Modal-->              
        <?php } ?>           