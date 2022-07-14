<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
    <!-- left column -->
    <div class="col-md-12 col-lg-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-4">

                        <div class="form-group">
                            <label for="matkul">Provinsi</label>
                            <select name="provinsi" id="provinsi" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Prov</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        
                        <div class="form-group">
                            <label for="matkul">Kabupaten</label>
                            <select name="kabupaten" id="kabupaten" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Kab</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                        
                    </div>
                    <div class="col-lg-4">
                        
                        <div class="form-group">
                            <label for="matkul">Kecamatan</label>
                            <select name="kecamatan" id="kecamatan" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Kec</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Tingkat</label>
                            <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Tingkat</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Jenis / Status</label>
                            <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Jenis / Status</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-3">
                        <div class="form-group">
                            <label for="matkul">Kode Customer</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Kode <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="form-group">
                            <label for="matkul">Urut</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Urut">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="matkul">Nama Customer</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Nama <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">NPSN</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="NPSN">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form-group">
                            <label for="matkul">NPWP / KTP</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="NPWP / KTP">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="matkul">Alamat</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Alamat">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="matkul">Peringkat Sekolah</label>
                            <select name="peringkat_sekolah" id="peringkat_sekolah" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Peringkat Sekolah</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">No. Telpn.</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="No. Telpn">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Fax.</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Fax">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-lg-4">
                        
                        <div class="form-group">
                            <label for="matkul">Cabang</label>
                            <select name="kecamatan" id="kecamatan" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>DIY</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Contact Person</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Contact Person">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Jumlah Siswa</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Jumlah Siswa">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Kompetitor</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Kompetitor">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="matkul">Sumber Dana</label>
                            <input type="text" class="form-control" name="nama_user" placeholder="Sumber Dana">
                            <small class="help-block"></small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="matkul">Catatan</label>
                            <textfield type="text" class="form-control" name="nama_user" placeholder="Kompetitor">
                            <small class="help-block"></small>
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