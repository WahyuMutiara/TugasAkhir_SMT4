<!-- Container -->
<div class="container">

    <!-- About Us -->
    <section class="pesankamar" id="pesankamar">
        <div class="row justify-content-center" style="margin-bottom: 25px;">
            <div class="col-lg-8 text-center">
                <h3 class="font-weight-bold">Pesan Kamar</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="<?= base_url('home/pesanKamar/') . $room['id'] ?>" method="post">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pemesan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="namapengirim" name="namapengirim" value="<?= $user['nama_user'] ?>" readonly>
                        </div>
                    </div>
                    <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">ID Kamar</label> -->
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="idkamar" name="idkamar" value="<?= $room['id'] ?>">
                    </div>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="iduser" name="iduser" value="<?= $user['id'] ?>">
                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Kamar</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jeniskam" name="jeniskam" value="<?= $room['nama_kamar'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $room['harga'] ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Maximal Pemesanan <?= $room['sisa_kamar'] ?>">
                        </div>
                    </div>
                    <!-- <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="norek" name="norek" value="" readonly>
                        </div>
                    </div> -->

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Check In</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="checkin" name="checkin">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Check Out</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="checkout" name="checkout">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Pesan Kamar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>