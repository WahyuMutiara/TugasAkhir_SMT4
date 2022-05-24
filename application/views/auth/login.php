<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 bg-gradient-primary">
                            <div class="p-4">
                                <p class="h4 font-weight-bold text-white">HotelKuy</p>
                                <img src="<?= base_url(); ?>assets/img/3Z_2011.w020.n001.856A.p30 1.png" class="mx-auto d-block img-fluid" alt="">
                                <p class="h5 text-white text-center">Find your dream hotel room</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-left mb-4">
                                    <p class="h2 font-weight-bold text-gray-900">Login</p>
                                    <p>Welcome back! Please enter your account</p>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                    <div class="form-group">
                                        <input type="email" class="rounded form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="rounded form-control form-control-user" id="password" name="password" placeholder="Enter Your Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="text-right">
                                        <a class="small font-weight-bold" href="<?= base_url('auth/forgotpassword'); ?>">Forgot Password?</a>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-primary btn-user btn-block mt-3 mb-2">
                                        Log In
                                    </button>
                                </form>
                                <div class="text-center">
                                    <p class="small">Don't have account?
                                        <a class="font-weight-bold" href="<?= base_url('auth/registration'); ?>">Create an Account!</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>