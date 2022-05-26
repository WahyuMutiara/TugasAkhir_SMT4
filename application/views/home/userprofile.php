<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container">
        <a class="navbar-brand font-weight-bold" href="#">HotelKuy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link font-weight-bold active" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link font-weight-bold" href="#aboutus">About</a>
                <a class="nav-item nav-link font-weight-bold" href="#roomlist">Room List</a>
                <a class="nav-item nav-link font-weight-bold" href="#contactus">Contact</a>
                <a class="nav-item nav-link font-weight-bold" href="#">Payment</a>
                <div class="topbar-divider d-none d-sm-block"></div>
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 font-weight-bold"><?php echo $user['nama_user']; ?></span>
                        <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="<?= base_url('userprofile'); ?>">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>
            </div>
        </div>
    </div>
</nav>

<!-- Container -->
<div class="container">

    <div class="row welcomehead" style="margin-bottom: 150px;">
        <div class="col-lg-3">
            <img class="img-fluid" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
        </div>
        <div class="col-lg-6">
            <h4 class="font-weight-bold">Welcome Back <?= $user['nama_user'] ?></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo possimus autem ea repudiandae, numquam nulla provident inventore cumque obcaecati consectetur soluta, delectus, aspernatur libero earum? Reiciendis nulla eius fugiat sunt!</p>
            <a href="<?= base_url('userprofile/modalEdit/') . $user['id'] ?>" class="btn btn-primary" data-toggle="modal" data-target="#updateUserModal<?= $user['id'] ?>">Edit Profile</a>
            <a href="#" class="btn btn-primary">Payments</a>
            <a href="deleteUser/<?= $user['id'] ?>" class="btn btn-danger" data-toggle="modal" data-target="#deleteUserModal<?= $user['id'] ?>">Delete Profile</a>
        </div>
    </div>


</div>

<!-- Update User modal -->
<div class="modal fade" id="updateUserModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- <form action="" method="POST"> -->
            <?= form_open_multipart('userprofile/edit') ?>
            <div class="modal-body">
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['nama_user']; ?>">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" id="gender" name="gender" value="<?= $user['jenis_kelamin']; ?>">
                </div>
                <div class="form-group">
                    <label>No HP</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" value="<?= $user['no_hp']; ?>">
                </div>
                <!-- <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password1" name="password1" value="">
                    </div> -->
                <div class="form-group">
                    <label>Profile Pict</label>
                    <div class="col-sm">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label for="image" class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete User -->
<div class="modal fade" id="deleteUserModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="deleteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteUserModalLabel">Delete Profile</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure want to delete your account? After you delete your account it will not be recoverable</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                <a href="<?= base_url('userprofile/hapus/') . $user['id'] ?>" class="btn btn-danger">Delete</a>
                <!-- <button type="button" class="btn btn-danger" href="">Delete</button> -->
            </div>
            </form>
        </div>
    </div>
</div>