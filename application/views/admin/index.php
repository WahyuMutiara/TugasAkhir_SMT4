<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <!-- admin profile cards -->
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="card-title font-weight-bold"><?= $user['nama_user']; ?></div>
                    <p class="card-text">Email: <?= $user['email']; ?></p>
                    <p class="card-text">Member since : <?= date('d F Y', $user['date_created']); ?></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->