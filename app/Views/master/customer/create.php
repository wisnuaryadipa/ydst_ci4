<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
</section>

<!-- Main content -->
<section class="content" id="compact-form">
    <div class="row">
    <!-- left column -->
    <div class="col-xs-12 col-md-12 col-lg-10">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <form action="" class="form-horizontal">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="matkul" class="col-md-2">Provinsi</label>
                                <div class="col-sm-6">
                                    <select name="provinsi" id="provinsi" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Prov</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="matkul" class="col-md-2">Kabupaten</label>
                                <div class="col-sm-6">
                                    <select name="kabupaten" id="kabupaten" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Kab</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="matkul" class="col-md-2">Kecamatan</label>
                                <div class="col-sm-6">
                                    <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Kec</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-6" for="matkul">Tingkat</label>
                                <div class="col-xs-8 col-lg-6">
                                    <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Tingkat</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-5" for="matkul">Jenis / Status</label>
                                <div class="col-xs-8 col-lg-7">
                                    <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Jenis / Status</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-6" for="matkul">Kode Customer</label>
                                <div class="col-xs-8 col-lg-6">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Kode <?= $parent_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-5" for="matkul">Urut</label>
                                <div class="col-xs-8 col-lg-7">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Urut">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-md-2" for="matkul">Nama Customer</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Nama <?= $parent_title ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">NPSN</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="nama_user" placeholder="NPSN">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">NPWP / KTP</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="nama_user" placeholder="NPWP / KTP">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">Alamat</label>
                                <div class="col-xs-8">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Alamat">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-4 " for="matkul">Peringkat Sekolah</label>
                                <div class="col-md-6">
                                    <select name="peringkat_sekolah" id="peringkat_sekolah" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Peringkat Sekolah</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-md-4" for="matkul">No. Telpn.</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="nama_user" placeholder="No. Telpn">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-1" for="matkul">Fax.</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Fax">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            
                            <div class="form-group">
                                <label class="col-lg-2" for="matkul">Cabang</label>
                                <div class="col-lg-4">
                                    <select name="kecamatan" id="kecamatan" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>DIY</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4" for="matkul">Contact Person</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Contact Person">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-3" for="matkul">Jumlah Siswa</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Jumlah Siswa">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4" for="matkul">Kompetitor</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Kompetitor">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-3" for="matkul">Sumber Dana</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="nama_user" placeholder="Sumber Dana">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">Catatan</label>
                                <div class="col-xs-8">
                                    <textfield type="text" class="form-control" name="nama_user" placeholder="Kompetitor">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </form>
            
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

<script>

    $(document).ready(function() {
        $('.select2').select2();

        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });

    });


</script>