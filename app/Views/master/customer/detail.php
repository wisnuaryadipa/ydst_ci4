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
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Tingkat</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Jenis / Status</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label for="matkul">Kode Customer</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="matkul">Urut</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="matkul">Nama Customer</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">NPSN</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="matkul">NPWP / KTP</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="matkul">Alamat</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="matkul">Peringkat Sekolah</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">No. Telpn.</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Fax.</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4">
                            
                            <div class="form-group">
                                <label for="matkul">Cabang</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Contact Person</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Jumlah Siswa</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Kompetitor</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="matkul">Sumber Dana</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="matkul">Catatan</label>
                                    <p>------</p>
                                    <hr>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Siswa Per - Tahun</h3>
                        <div class="type-sp pull-right">
                            <a href="<?= $_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/edit/2 "?>">
                                <div class="btn bg-olive btn-flat">Tambah</div>
                            </a>
                        </div>
                    </div><!-- /.box-header -->

                    <div class="box-body">
                        <table class="table-bordered table">
                            <tr>
                                <th> <div> <span>Tahun</span></div> </th>
                                <th><div> <span>Jumlah Siswa</span></div></th>
                                <th>Jumlah Kelas</th>
                                <th class="col-action">Action</th>
                            </tr>
                            <tr>
                                <td>2017-2018</td>
                                <td>----</td>
                                <td>--</td>
                                <td class="col-action-val">
                                
                                    <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/edit/2" ?>">
                                        <div class="btn btn-warning"> Edit</div>
                                    </a>
                                    <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/2" ?>">
                                        <div class="btn btn-info"> Detail</div>
                                    </a>
                                    <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/delete/2" ?>">
                                        <div class="btn btn-danger"> Delete</div>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>

                </div>

            </div>
        </div><!-- /.box -->


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->