<!-- Container -->
<div class="container d-flex">

    <!-- payment -->
    <section class="payment" id="payment">
        <div class="">
            <div class="col-lg-12 text-center">
                <h3 class="font-weight-bold">Payment</h3>
            </div>
        </div>
        <?= $this->session->flashdata('message'); ?>
        <div class="d-flex text-center justify-content-center font-weight-bold">
            <div class="col-sm-3"></div>
            <div class="col-sm-2">
                <img src="<?= base_url('assets/img/Logo-BRI-Bank-Rakyat-Indonesia-PNG-Terbaru.png') ?>" class="img-fluid" alt="aaa">
                <p style="margin-top: 8px;">5023958148990</p>
            </div>
            <div class="col-sm-2" style="margin-top: 30px;">
                <img src="<?= base_url('assets/img/800px-BNI_logo.svg.png') ?>" class="img-fluid" alt="aaa">
                <p style="margin-top: 58px;">64890123095123</p>
            </div>
            <div class="col-sm-2">
                <img src="<?= base_url('assets/img/lambang-dana.png') ?>" class="" style="width: 115px;" alt="aaa">
                <p style="">088990805450</p>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="justify-content-center">
            <form action="<?= base_url('home/payment') ?>" method="POST">
                <!-- <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Kamar dipesan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="jeniskam" name="jeniskam" value="" readonly>
                    </div>
                </div> -->
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Jenis Pembayaran</label>
                    <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" id="jenispem" name="jenispem"> -->
                        <select name="jenispem" id="jenispem" class="custom-select">
                            <option selected>Pilih jenis pembayaran</option>
                            <option value="BRI">BRI</option>
                            <option value="BNI">BNI</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="BCA">BCA</option>
                            <option value="Bank Jatim">Bank Jatim</option>
                            <option value="BTN">BTN</option>
                            <option value="DANA">DANA</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Pengirim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="namapengirim" name="namapengirim">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">No Rekening</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="norek" name="norek">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Bukti Pembayaran</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image">
                            <label for="image" class="custom-file-label">Choose File</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Kirim Bukti</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

</div>