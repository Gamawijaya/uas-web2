<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url('category/store'); ?>" method="post">
                        <div class="card">
                            <div class="card-body">
                                <?php
                               // if (!empty($inputs)){
                                 //   $inputs = session()->getFlashdata('inputs');
                                //}
                                $errors = session()->getFlashdata('errors');
                                if (!empty($errors)) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        Whoops! Ada kesalahan saat input data, yaitu:
                                        <ul>
                                            <?php foreach ($errors as $error) : ?>
                                                <li><?= esc($error) ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" name="nama_dosen" placeholder="Masukkan nama dosen" value="<?php  //echo $inputs['nama_dosen']; }?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat" value="<?php  //echo $inputs['alamat']; }?>">
                                </div>
                                <div class="form-group">
                                    <label for="">No. Telepon</label>
                                    <input type="text" class="form-control" name="no_telp" placeholder="Masukkan nomor telepon" value="<?php  //echo $inputs['no_telp']; }?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="status" id="" class="form-control">
                                        <option value="">Pilih Kategori</option>
                                        <option <?php //echo $inputs['status'] == "Tetap" ? "selected" : ""; ?> value="Tetap">Tetap</option>
                                        <option <?php //echo $inputs['status'] == "Kontrak" ? "selected" : ""; ?> value="Kontrak">Kontrak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo base_url('category'); ?>" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo view('_partials/footer'); ?>
