<!-- Container -->
<div class="container">

    <div class="row welcomehead" style="margin-bottom: 150px;">
        <div class="col-lg-3">
            <img class="img-fluid" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
        </div>
        <div class="col-lg-6">
            <h4 class="font-weight-bold">Welcome Back <?= $user['nama_user'] ?></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo possimus autem ea repudiandae, numquam nulla provident inventore cumque obcaecati consectetur soluta, delectus, aspernatur libero earum? Reiciendis nulla eius fugiat sunt!</p>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#updateUserModal">Edit Profile</a>
            <a href="#" class="btn btn-primary">Payments</a>
            <a href="#" class="btn btn-danger">Delete Profile</a>
        </div>
    </div>


</div>

<!-- Update User modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" aria-labelledby="updateUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateUserModalLabel">Update User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('user'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>No HP</label>
                        <input type="text" class="form-control" id="nohp" name="nohp" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password1" name="password1" placeholder="">
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