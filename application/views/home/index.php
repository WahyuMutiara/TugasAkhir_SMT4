    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="#">HotelKuy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link font-weight-bold active" href="#">Home <span class="sr-only">(current)</span></a>
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



        <!-- Header -->
        <div class="row welcomehead">
            <div class="col-lg-6">
                <p class="font-weight-bold welcome">Welcome</p>
                <h3 class="font-weight-bold">Hotel <span>Aston Jember</span></h3>
                <p>Hotel ASTON Jember adalah hotel modern yang berkomitmen pada standar internasional tertinggi</p>
                <a href="" class="btn btn-primary tombol shadow">Cek Ketersediaan Kamar</a>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/hotel-1979406_960_720.jpg" alt="Hotelroom" class="img-fluid">
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
                        <div class="col-md-3">
                            <div class="card shadow">
                                <img src="assets/img/bedroom-6577523__340.webp" alt="room" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kamar gaya studio</h5>
                                    <p class="font-weight-bold" style="margin-bottom: 0px;"> Fasilitas</p>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Architecto
                                        adipisci obcaecati reprehenderit sapiente </p>
                                    <p class="card-text tersedia">Tersedia : 40 kamar</p>
                                    <p class="font-weight-bold">Rp. 150,000</p>
                                    <a href="#" class="btn btn-primary">Pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow">
                                <img src="assets/img/bedroom-6686061__340.webp" alt="room" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kamar gaya studio</h5>
                                    <p class="font-weight-bold" style="margin-bottom: 0px;"> Fasilitas</p>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Architecto
                                        adipisci obcaecati reprehenderit sapiente </p>
                                    <p class="card-text tersedia">Tersedia : 40 kamar</p>
                                    <p class="font-weight-bold">Rp. 150,000</p>
                                    <a href="#" class="btn btn-primary">Pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow">
                                <img src="assets/img/hotel-1749602_960_720.jpg" alt="room" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kamar gaya studio</h5>
                                    <p class="font-weight-bold" style="margin-bottom: 0px;"> Fasilitas</p>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Architecto
                                        adipisci obcaecati reprehenderit sapiente </p>
                                    <p class="card-text tersedia">Tersedia : 40 kamar</p>
                                    <p class="font-weight-bold">Rp. 150,000</p>
                                    <a href="#" class="btn btn-primary">Pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card shadow">
                                <img src="assets/img/hotel-1979406_960_720.jpg" alt="room" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold">Kamar gaya studio</h5>
                                    <p class="font-weight-bold" style="margin-bottom: 0px;"> Fasilitas</p>
                                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Architecto
                                        adipisci obcaecati reprehenderit sapiente </p>
                                    <p class="card-text tersedia">Tersedia : 40 kamar</p>
                                    <p class="font-weight-bold">Rp. 150,000</p>
                                    <a href="#" class="btn btn-primary">Pesan sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <a href="#" class="btn btn-primary btn-semua shadow">Lihat Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Us -->
        <section class="contactus" id="contactus">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/hotel-1979406_960_720.jpg" alt="Hotelroom" class="img-fluid">
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