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
                        <h5 class="card-title">Data Kategori</h5>
                        <div class="card-tools">
                            <button data-bs-toggle="modal" data-bs-target="#add" type="button" class="btn btn-primary btn-xs "><i class="bi bi-plus"></i> Add <i class="bi bi-tags"></i></button>
                               
                        </div>
                        <!-- Bordered Table -->
                        <table class="table table-bordered table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">Nama_kategori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                           <tbody>
                              <?php $no = 1;
                              foreach ($kategori as $key => $value) { ?>
                                <tr>
                                  <td class="text-center"><?= $no++ ?></td>
                                  <td class="text-center"><?= $value->nama_kategori ?></td>

                                  <td>
                                    <button class="btn btn-warning sm" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_kategori ?>" ><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger sm" data-bs-toggle="modal" data-bs-target="#delete<?= $value->id_kategori ?>" ><i class="bi bi-trash3"></i></button>

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




<!-- !!! Modal ADD -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="add">
          
          </button>
          <div class="modal" id="add" tabindex="-1">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Kategori</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 
                  
                <?php
                   echo form_open('kategori/add');
                ?>
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" required>
            </div>

          


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php
                   echo form_close('');
                ?>
              </div>
            </div>
          </div><!-- End Disabled Animation Modal-->



<!-- !!! Modal EDIT-->
        <?php    foreach ($kategori as $key => $value) { ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="edit">
         
          </button>
          <div class="modal" id="edit<?= $value->id_kategori ?>" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Edit Kategori</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 
                  
                <?php
                   echo form_open('kategori/edit/'. $value->id_kategori);
                ?>
            <div class="form-group">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" value="<?= $value->nama_kategori ?>" class="form-control" placeholder="Nama Kategori" required>
            </div>

         


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <?php
                   echo form_close('');
                ?>
              </div>
            </div>
          </div><!-- End Disabled Animation Modal-->              
          <?php } ?>



<!-- !!! Modal EDIT-->
<?php    foreach ($kategori as $key => $value) { ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="delete">
       
        </button>
        <div class="modal" id="delete<?= $value->id_kategori ?>" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Delete <?= $value->nama_kategori ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
               
                <h5>Apakah Anda Yakin Ingin Menghapus Data Ini...?</h5>
       

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                <a href="<?= base_url('kategori/delete/' . $value->id_kategori)?>" class="btn btn-primary">Delete</a>
              </div>
             
            </div>
          </div>
        </div><!-- End Disabled Animation Modal-->              
        <?php } ?>           