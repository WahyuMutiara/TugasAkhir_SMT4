<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/ubahKamar') ?>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">ID Kamar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="id" name="id" value="<?= $room['id']; ?>" readonly>
                    <?= form_error('id', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-2 col-form-label">Nama Kamar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="namakamar" name="namakamar" value="<?= $room['nama_kamar']; ?>">
                    <?= form_error('namakamar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Fasilitas</label>
                <div class="col-sm-10">
                    <textarea name="fasilitas" id="fasilitas" cols="30" rows="5" class="form-control" value=""><?= $room['fasilitas']; ?></textarea>
                    <!-- <input type="text" class="form-control" id="fasilitas" name="fasilitas"> -->
                    <?= form_error('fasilitas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Sisa Kamar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="sisakamar" name="sisakamar" value="<?= $room['sisa_kamar']; ?>">
                    <?= form_error('sisakamar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="harga" name="harga" value="<?= $room['harga']; ?>">
                    <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?= base_url('assets/img/kamar/') . $room['gambar'] ?>" alt="" class="img-thumbnail">
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

            <div class="form-group row justify-content-end">
                <div class="col-sm-10">
                    <button class="btn btn-primary" type="submit">Edit</button>
                    <button class="btn btn-danger" href="<?= base_url('admin/room') ?>">Back</button>
                </div>
            </div>

            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->