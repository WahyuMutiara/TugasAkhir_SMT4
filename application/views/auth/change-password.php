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
                                <div class="text-left" style="margin-bottom: 50px;">
                                    <h1 class="h4 font-weight-bold text-gray-900">Change Your Password for</h1>
                                    <h5><?= $this->session->userdata('reset_email'); ?></h5>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('auth/changepassword'); ?>">
                                    <div class="form-group">
                                        <input type="password" class="rounded form-control form-control-user" id="password1" name="password1" placeholder="Enter new password...">
                                        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="rounded form-control form-control-user" id="password2" name="password2" placeholder="Repeat password...">
                                        <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-primary btn-user btn-block">
                                        Change Password
                                    </button>
                                </form>
                                <!-- <hr>
                                <div class="text-center">
                                    <a class="small font-weight-bold" href="<?= base_url('auth'); ?>">Back to Login ></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>