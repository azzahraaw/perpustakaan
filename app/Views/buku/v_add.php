<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
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
            echo ' <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fas fa-check"></i>';
            echo session()->getFlashdata('pesan');
            echo '</div>';
        }
        ?>

        <?php
        echo form_open_multipart('Buku/Simpan');
        ?>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input class="form-control" name="judul_buku" value="<?= old('judul_buku') ?>" placeholder="Judul Buku">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Kategori</label>
                        <select name="id_kategori" class="form-control" placeholder="Kelas">
                            <option value="">Pilih Kategori</option>
                            <?php foreach ($kategori as $key => $value) { ?>
                                <option value="<?= $value['id_kategori'] ?>"><?= $value['nama_kategori'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Penulis</label>
                        <select name="id_penulis" class="form-control" placeholder="Kelas">
                            <option value="">Pilih Penulis</option>
                            <?php foreach ($penulis as $key => $value) { ?>
                                <option value="<?= $value['id_penulis'] ?>"><?= $value['nama_penulis'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Penerbit</label>
                        <select name="id_penerbit" class="form-control" placeholder="penerbit">
                            <option value="">Pilih Penerbit</option>
                            <?php foreach ($penerbit as $key => $value) { ?>
                                <option value="<?= $value['id_penerbit'] ?>"><?= $value['nama_penerbit'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Rak</label>
                        <select name="id_rak" class="form-control" placeholder="Kelas">
                            <option value="">Pilih Rak</option>
                            <?php foreach ($rak as $key => $value) { ?>
                                <option value="<?= $value['id_rak'] ?>"><?= $value['nama_rak'] ?> </option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>ISBN</label>
                        <input class="form-control" name="isbn" value="<?= old('isbn') ?>" placeholder="ISBN">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tahun</label>
                        <input class="form-control" name="tahun" value="<?= old('tahun') ?>" placeholder="Tahun">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Bahasa</label>
                        <input class="form-control" name="bahasa" value="<?= old('bahasa') ?>" placeholder="Bahasa">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jumlah</label>
                        <input class="form-control" name="jumlah" value="<?= old('jumlah') ?>" placeholder="Jumlah">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Cover Buku</label>
                        <input type="file" name="cover" value="<?= old('cover') ?>" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <a href="<?= base_url('Buku') ?>" class="btn btn-warning">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </div>
        <?php echo form_close() ?>
    </div>
</div>