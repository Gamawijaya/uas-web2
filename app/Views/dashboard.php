<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<style>
    .card-body img{
        width: 100%;
    }
</style>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Beranda</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Beranda</li>
            </ol>
            </div>
        </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Grafik Penjualan</h5>
                        </div>
                        <div class="card-body">
                        <img src="<?php echo base_url('themes/dist'); ?>/img/R.png">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Transaksi Terakhir</h5>
                        </div>
                        <div class="card-body">
                        <img src="<?php echo base_url('themes/dist'); ?>/img/R.png">
                            <h1 class="fw-bold">Lenovo IdeaPad Slim 3<br>
                            Rp 10.199.000</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Produk Unggulan</h5>
                        </div>
                        <div class="card-body">
                        <img src="<?php echo base_url('themes/dist'); ?>/img/9904-1.jpg">
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Produk Unggulan</h5>
                        </div>
                        <div class="card-body">
                        <img src="<?php echo base_url('themes/dist'); ?>/img/GL504_Hero_Cam05Lighting_v1.jpg">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo view('_partials/footer'); ?>
