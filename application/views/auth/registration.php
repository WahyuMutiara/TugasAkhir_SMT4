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
                                    <p class="h2 font-weight-bold text-gray-900">Sign Up</p>
                                    <p>Create your account!</p>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                    <div class="form-group">
                                        <input type="email" class="rounded form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="rounded form-control form-control-user" id="name" name="name" placeholder="Enter Your Name" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="rounded form-control form-control-user" id="gender" name="gender" placeholder="Enter Your Gender" value="<?= set_value('gender'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="rounded form-control form-control-user" id="nohp" name="nohp" placeholder="Enter Your No HP" value="<?= set_value('nohp'); ?>">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="rounded form-control form-control-user" id="password1" name="password1" placeholder="Enter Your Password">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="rounded form-control form-control-user" id="password2" name="password2" placeholder="Repeat Your Password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block font-weight-bold mb-2">
                                        Create
                                    </button>
                                </form>
                                <div class="text-center">
                                    <p class="small">Have an account?
                                        <a class="font-weight-bold" href="<?= base_url('auth'); ?>">Back to Login></a>
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