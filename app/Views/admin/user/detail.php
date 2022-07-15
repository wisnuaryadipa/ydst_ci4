<style>
    #detail-user hr {
        margin-top: 0px;
    }
    #detail-user p {
        margin-bottom: 5px;
    }
    #detail-user .row {
        margin-bottom: 20px;
    }
</style>
<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>detail</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-lg-8 col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                    <a href="<?= $_ENV['BASE_URL_FULL'] ?>/master/users/edit/2"><div class="btn bg-olive btn-flat">Edit User</div></a>
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <div class="box-body" id="detail-user">
                <div class="box-body">
                    
                    <div class="row">
                        <div class="col-lg-3">
                            <strong>ID USER</strong>
                            <p>K0001</p>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <strong>Nama User</strong>
                            <p>MAWAR</p>
                            <hr>
                        </div>
                        <div class="col-lg-3">

                            <strong>Area</strong>
                            <p>----</p>

                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Nomor Telpon</strong>
                            <p>----</p>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <strong>Status Nikah</strong>
                            <p>Menikah, Tanggungan 2</p>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <strong>Tanggal Lahir</strong>
                            <p>--/--/----</p>
                            <hr>
                        </div>
                        <div class="col-lg-6">
                            <strong>Tempat Lahir</strong>
                            <p>BOGOR</p>
                            <hr>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Pendidikan</strong>
                            <p>----</p>

                            <hr>
                        </div>
                        
                        <div class="col-lg-3">
                            <strong>Jenis Kelamin</strong>
                            <p>Perempuan</p>
                            <hr>
                        </div>
                        <div class="col-lg-3">
                            <strong>Agama</strong>
                            <p>----</p>
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <strong>Alamat</strong>
                            <p>----</p>

                            <hr>
                        </div>
                        <div class="col-lg-3">
                            <strong>Kota</strong>
                            <p>----</p>

                            <hr>
                        </div>
                        <div class="col-lg-3">
                            <strong>Kode Pos</strong>
                            <p>----</p>

                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <strong>Jabatan</strong>
                            <p>----</p>

                            <hr>
                        </div>
                        <div class="col-lg-3">
                            <strong>Bagian</strong>
                            <p>----</p>

                            <hr>
                        </div>
                        <div class="col-lg-3">
                            <strong>Bergabung</strong>
                            <p>----</p>

                            <hr>
                        </div>
                        <div class="col-lg-3">
                            <strong>Berhenti</strong>
                            <p>----</p>

                            <hr>
                        </div>
                    </div>
                </div>

            </div>

            <div class="box-footer">
                <div class="form-group pull-right">
                    <button type="submit" id="submit" class="btn btn-flat bg-purple">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </div>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->