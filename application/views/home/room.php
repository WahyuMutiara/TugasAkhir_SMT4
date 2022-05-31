<div class="container">
    <!-- Room List -->
    <section class="roomlist" id="roomlist">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="font-weight-bold text-center" style="margin-bottom: 30px;"> Room List</h3>
                <!-- Cards -->
                <div class="row">
                    <?php foreach ($roomlist as $rl) : ?>
                        <div class="col-md-3">
                            <div class="card shadow">
                                <img src="<?= base_url('assets/img/kamar/') . $rl['gambar']; ?>" alt="room" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold"><?= $rl['nama_kamar'] ?></h5>
                                    <p class="font-weight-bold" style="margin-bottom: 0px;">Fasilitas</p>
                                    <p class="card-text"><?= $rl['fasilitas'] ?></p>
                                    <p class="card-text tersedia">Tersedia : <?= $rl['sisa_kamar'] ?> kamar</p>
                                    <p class="font-weight-bold">Rp. <?= number_format($rl['harga']) ?></p>
                                    <a href="<?= base_url('home/pesankamar/') . $rl['id'] ?>" class="btn btn-primary">Pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</div>