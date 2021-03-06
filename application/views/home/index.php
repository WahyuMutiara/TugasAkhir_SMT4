    <!-- Container -->
    <div class="container">



        <!-- Header -->
        <div class="row welcomehead">
            <div class="col-lg-6">
                <p class="font-weight-bold welcome">Welcome</p>
                <h3 class="font-weight-bold">Hotel <span>Aston Jember</span></h3>
                <p>Hotel ASTON Jember adalah hotel modern yang berkomitmen pada standar internasional tertinggi</p>
                <a href="<?= base_url('home/room'); ?>" class="btn btn-primary tombol shadow">Cek Ketersediaan Kamar</a>
            </div>
            <div class="col-lg-6">
                <img src="<?= base_url(); ?>assets/img/hotel-1979406_960_720.jpg" alt="Hotelroom" class="img-fluid">
            </div>
        </div>

        <!-- About Us -->
        <section class="aboutus" id="aboutus">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h3 class="font-weight-bold">About Us</h3>
                    <p class="text-center">Aston Jember dan Convention center terletak di lokasi yang ideal di dekat
                        jalan Gajah Mada sebagai kawasan utama Jember. Kurang dari 20 menit stasiun kereta. Dekat dengan
                        banyak resotran
                        populer,pusat bisnis dalam kota dan Lapangan Gajah Mada yang merupakan pusat perbelanjaan utama
                        di Jember menjadikan Aston sebagai tempat utama untuk pelancong bisnis dan liburan.
                    </p>
                </div>
            </div>
        </section>

        <!-- Room List -->
        <section class="roomlist" id="roomlist">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="font-weight-bold"> Room List</h3>
                    <p>Find your room or book now</p>
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
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="<?= base_url('home/room'); ?>" class="btn-semua btn btn-primary shadow">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
        </section>

        <!-- Contact Us -->
        <section class="contactus" id="contactus">
            <div class="row">
                <div class="col-lg-6">
                    <img src="<?= base_url(); ?>assets/img/hotel-1979406_960_720.jpg" alt="Hotelroom" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h3 class="font-weight-bold">Contact Us</h3>
                    <p>If you have any question feel free to type below</p>
                    <form>
                        <div class="form-group">
                            <input type="name" class="rounded form-control form-control-user" id="exampleInputName" placeholder="Type your name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="rounded form-control form-control-user" id="exampleInputEmail" placeholder="Type your email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="rounded form-control form-control-user" id="exampleInputTel" placeholder="Type your phone number">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="exampleFormControlTextArea" cols="20" rows="5" class="rounded form-control" placeholder="Type your question"></textarea>
                        </div>
                        <a href="#" class="btn btn-primary btn-user shadow">
                            Submit Form
                        </a>
                    </form>
                </div>
            </div>
        </section>
    </div>