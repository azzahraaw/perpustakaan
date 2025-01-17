<!-- <body class="hold-transition login-page" style="background-color: yellow;"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/docs/assets/css/adminlte.min.css">
    <!-- icheckBootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<h1>Selamat Datang di Sistem Informasi Perpustakaan</h1><br>
<h1>SMK Negeri 1 Kota Cirebon</h1><p>
<div class="login-box">

    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a class="h3"><?= $judul ?></a>
        </div>
        <div class="card-body">
         <?php
         // notifikasi
         $errors = session()->getFlashdata('errors');
         if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <h4>Periksa kembali</h4>
                <ul>
                    <?php foreach ($errors as $key => $error) { ?>
                        <li><?= esc($error) ?></li>
                   <?php } ?>
                </ul>
            </div>
         <?php } ?>
        
         <?php
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-danger" role="alert">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
            }
         ?>
            <?php echo form_open('Auth/CekLoginAdmin')  ?>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-sm-6">
                        <a class="btn btn-primary btn-success btn-block" href="<?= base_url('Home') ?>">Kembali</a>
                    </div>

                    <div class="col-sm-6">
                        <button type="btn btn-primary btn-success btn-block" class="submit">Login</button>
                    </div>
					
                    <!-- /.col -->
                </div>
            <?php echo form_close() ?>
        </div>
        <!-- /.card-body -->
    </div>
</div>
</body>