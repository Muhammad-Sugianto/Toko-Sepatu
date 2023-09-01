<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $title ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                        <h5 class="card-title">Data User</h5>
                        <div class="card-tools">
                            <button data-bs-toggle="modal" data-bs-target="#add" type="button" class="btn btn-primary btn-xs "><i class="bi bi-plus"></i> Add <i class="bi bi-person"></i></button>
                               
                        </div>
                        <!-- Bordered Table -->
                        <table class="table table-bordered table table-borderless datatable">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">NamaUser</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                           <tbody>
                              <?php $no = 1;
                              foreach ($user as $key => $value) { ?>
                                <tr>
                                  <td class="text-center"><?= $no++ ?></td>
                                  <td class="text-center"><?= $value->nama_user ?></td>
                                  <td class="text-center"><?= $value->username ?></td>
                                  <td class="text-center"><?= $value->password ?></td>
                                  <td class="text-center"><?php
                                  if ($value->level==1) {
                                      echo '<span class="badge rounded-pill bg-success">Admin</span>';
                                  }else{
                                      echo '  <span class="badge rounded-pill bg-secondary">User</span>';
                                  }
                                    ?></td>
                                  <td>
                                    <button class="btn btn-warning sm" data-bs-toggle="modal" data-bs-target="#edit<?= $value->id_user ?>" ><i class="bi bi-pencil-square"></i></button>
                                    <button class="btn btn-danger sm" data-bs-toggle="modal" data-bs-target="#delete<?= $value->id_user ?>" ><i class="bi bi-trash3"></i></button>

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
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     
                      
                    <?php
                       echo form_open('user/add');
                    ?>
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="nama_user" class="form-control" placeholder="Nama User" required>
                </div>

              
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                  
               
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label>Level</label>
                  <select name="level" class="form-select" class="form-control">
                        <option value="1" selected>Admin</option>
                        <option value="2">User</option>
                  </select>
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
            <?php    foreach ($user as $key => $value) { ?>

  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="edit">
             
              </button>
              <div class="modal" id="edit<?= $value->id_user ?>" tabindex="-1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit User</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                     
                      
                    <?php
                       echo form_open('user/edit/'. $value->id_user);
                    ?>
                <div class="form-group">
                    <label>Nama User</label>
                    <input type="text" name="nama_user" value="<?= $value->nama_user ?>" class="form-control" placeholder="Nama User" required>
                </div>

              
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?= $value->username ?>" class="form-control" placeholder="Username" required>
                </div>
                  
               
                <div class="form-group">
                    <label>Password</label>
                    <input type="text" name="password" value="<?= $value->password ?>" class="form-control" placeholder="Password" required>
                </div>

                <div class="form-group">
                    <label>Level</label>
                  <select name="level"  class="form-select" class="form-control" >
                        <option value="1" <?php  if ($value->level==1){
                          echo 'selected';
                          } ?>>Admin</option>
                        <option value="2"  <?php  if ($value->level==2){
                          echo 'selected';
                          } ?>>User</option>
                  </select>
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



   <!-- !!! Modal DELETE-->
   <?php    foreach ($user as $key => $value) { ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="delete">
           
            </button>
            <div class="modal" id="delete<?= $value->id_user ?>" tabindex="-1">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Delete <?= $value->nama_user ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                   
                    <h5>Apakah Anda Yakin Ingin Menghapus Data Ini...?</h5>
           

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <a href="<?= base_url('user/delete/' . $value->id_user)?>" class="btn btn-primary">Delete</a>
                  </div>
                 
                </div>
              </div>
            </div><!-- End Disabled Animation Modal-->              
            <?php } ?>           