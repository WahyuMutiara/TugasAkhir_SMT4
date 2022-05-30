<!-- Container -->
<div class="container">

    <div class="row justify-content-center" style="margin-top: 50px;">
        <div class="col-lg-3">
            <h3 class="font-weight-bold">User Profile</h3>
        </div>
        <div class="col-lg-6"></div>
    </div>

    <div class="row profilehead justify-content-center">
        <div class="col-lg-3">
            <img class="shadow" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
        </div>
        <div class="col-lg-6">
            <h4 class="font-weight-bold">Welcome Back <?= $user['nama_user'] ?></h4>
            <?= $this->session->flashdata('message'); ?>
            <ul>
                <li>Nama Lengkap : <?= $user['nama_user'] ?></li>
                <li>Email : <?= $user['email'] ?></li>
                <li>Jenis Kelamin : <?= $user['jenis_kelamin'] ?></li>
                <li>No Telp : <?= $user['no_hp'] ?></li>
            </ul>

            <a class="btn btn-primary shadow" data-toggle="modal" data-target="#updateUserModal<?= $user['id'] ?>">Edit Profile</a>
            <a class="btn btn-primary shadow" data-toggle="modal" data-target="#updatePasswordUserModal<?= $user['id'] ?>">Change Password</a>
            <a class="btn btn-danger shadow" data-toggle="modal" data-target="#deleteUserModal<?= $user['id'] ?>">Delete Profile</a>
        </div>
    </div>


</div>

<!-- Change Pass Modal -->
<div class="modal fade" id="updatePasswordUserModal<?= $user['id'] ?>" tabindex="-1" aria-labelledby="updatePasswordUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updatePasswordUserModalLabel">Change Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('home/changeUserPassword/') . $user['id'] ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="current_password">Current Password</label>
                        <input type="password" class="form-control" id="current_password" name="current_password" value="">
                    </div>
                    <div class="form-group">
                        <label for="new_password1">New Password</label>
                        <input type="password" class="form-control" id="new_password1" name="new_password1" value="">
                    </div>
                    <div class="form-group">
                        <label for="new_password2">Repeat Password</label>
                        <input type="password" class="form-control" id="new_password2" name="new_password2" value="">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" href="">Change Password</button>
                </div>
            </form>
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
            <?= form_open_multipart('home/editUser') ?>
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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url('home/hapusUser/') . $user['id'] ?>" class="btn btn-danger">Delete</a>
                <!-- <button type="button" class="btn btn-danger" href="">Delete</button> -->
            </div>
            </form>
        </div>
    </div>
</div>