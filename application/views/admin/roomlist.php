<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            <?php endif; ?>
            <?= form_error('userlist', '', ''); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoomModal">Add new room</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar Kamar</th>
                        <th scope="col">Nama Kamar</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Sisa Kamar</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($roomlist as $rl) : ?>
                        <tr>
                            <th scope="row"><?= $no; ?></th>
                            <td><?= $rl['gambar'] ?></td>
                            <td><?= $rl['nama_kamar'] ?></td>
                            <td><?= $rl['fasilitas'] ?></td>
                            <td><?= $rl['sisa_kamar'] ?></td>
                            <td>Rp <?= $rl['harga'] ?></td>

                            <td>
                                <a href="<?= base_url('admin/formEditKamar/') . $rl['id'] ?>" class="badge badge-success">Edit</a>
                                <a href="<?= base_url('admin/hapusKamar/') . $rl['id'] ?>" class="badge badge-danger">Delete</a>
                            </td>

                        </tr>
                        <?php $no++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal New Room -->
<div class="modal fade" id="newRoomModal" tabindex="-1" aria-labelledby="newRoomModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoomModalLabel">Add New Room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/room'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Kamar</label>
                        <input type="text" class="form-control" id="nama_kamar" name="nama_kamar" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Fasilitas</label>
                        <textarea name="fasilitas" id="fasilitas" cols="30" rows="5" class="form-control"></textarea>
                        <!-- <input type="text" class="form-control" id="fasilitas" name="fasilitas" placeholder=""> -->
                    </div>
                    <div class="form-group">
                        <label>Sisa Kamar</label>
                        <input type="text" class="form-control" id="sisa_kamar" name="sisa_kamar" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="">
                    </div>
                    <!-- <div class="form-group row">
                    <div class="col-sm-2">Gambar Kamar</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="" alt="" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                    <label for="image" class="custom-file-label">Choose File</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>