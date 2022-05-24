<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>
            <?= form_error('userlist', '', ''); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newUserModal">Add new user</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Nama User</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">Jenis-Kelamin</th>
                        <th scope="col">No HP</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($userlist as $ul) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><img class="img-fluid" src="<?= base_url('assets/img/profile/') . $ul['image']; ?>" alt=""></td>
                            <td><?= $ul['nama_user']; ?></td>
                            <td><?= $ul['email']; ?></td>
                            <td><?= $ul['jenis_kelamin']; ?></td>
                            <td><?= $ul['no_hp']; ?></td>
                            <td><?= $ul['role']; ?></td>
                            <td>
                                <a href="" class="badge badge-success" data-toggle="modal" data-target="#updateUserModal">Edit</a>
                                <a href="" class="badge badge-danger" data-toggle="modal" data-target="#deleteUserModal">Delete</a>
                            </td>

                        </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal New User -->
<div class="modal fade" id="newUserModal" tabindex="-1" aria-labelledby="newUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newUserModalLabel">Add New User</h5>
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
                    <div class="form-group">
                        <label>Role</label>
                        <select id="role_id" name="role_id" class="form-control">
                            <?php foreach ($userrole as $ur) : ?>
                                <option value="<?= $ur['id']; ?>"><?= $ur['role']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
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
                    <div class="form-group">
                        <label>Role</label>
                        <select id="role_id" name="role_id" class="form-control">
                            <?php foreach ($userrole as $ur) : ?>
                                <option value="<?= $ur['id']; ?>"><?= $ur['role']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>