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
                    <a href="<?= $_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/edit/2 "?>">
                        <div class="btn bg-olive btn-flat">Edit <?= $parent_title ?></div>
                    </a>
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <div class="box-body" id="detail-user">
                <div class="box-body">
                    
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="nip">Kode <?= $parent_title ?></label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="nip">Kode ANS</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="matkul">Kode Area</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Nama <?= $parent_title ?></label>
                                    <p>------</p>
                                    <hr>
                        </div>
                        
                        <div class="form-group">
                            <label for="matkul">Kepala Cabang</label>
                                    <p>------</p>
                                    <hr>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat <?= $parent_title ?></label>
                                    <p>------</p>
                                    <hr>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">

                                <div class="form-group">
                                    <label for="matkul">Provinsi</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                
                                <div class="form-group">
                                    <label for="matkul">Kabupaten</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                                
                            </div>
                            <div class="col-lg-4">
                                
                                <div class="form-group">
                                    <label for="matkul">Kecamatan</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                
                                <div class="form-group">
                                    <label for="nip">E-mail</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="matkul">No. Telp</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="matkul">No. Fax.</label>
                                    <p>------</p>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="matkul">Kepala Gudang</label>
                                    <p>------</p>
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