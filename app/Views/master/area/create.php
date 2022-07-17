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
    <div class="col-md-12 col-xl-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                </div>
            </div><!-- /.box-header -->

            <!-- form start -->
            <div class="box-body">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="nip" class="col-md-2">Kode <?= $parent_title ?></label>
                        <div class="col-sm-10">
                            <input autofocus="autofocus" onfocus="this.select()" type="number" id="id_user" class="form-control" name="id_user" placeholder="ID <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_dosen" class="col-md-2">Nama <?= $parent_title ?></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_user" placeholder="Nama <?= $parent_title ?>">
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-md-2">Kepala Area</label>

                        <div class="col-sm-10">

                            <select name="area" id="area" class="form-control select2" style="width: 100%!important">
                                <option value="" disabled selected>Kepala Area</option>
                            </select>
                            <small class="help-block"></small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="matkul" class="col-md-2">Alamat Area</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_user" placeholder="Alamat Area">
                            <small class="help-block"></small>
                        </div>
                    </div>
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
                        <div class="col-lg-6">
                            
                            <div class="form-group">
                                <label for="nip" class="col-md-2">E-mail</label>

                                <div class="col-sm-10">

                                    <input autofocus="autofocus" onfocus="this.select()" type="number" id="id_user" class="form-control" name="id_user" placeholder="E-mail">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="matkul" class="col-md-2">No. Telp</label>

                                <div class="col-sm-10">

                                    <input type="text" class="form-control" name="bergabung" placeholder="No. Telp">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="matkul" class="col-md-2">No. Fax.</label>

                                <div class="col-sm-10">

                                    <input type="text" class="form-control" name="berhenti" placeholder="No. Fax.">
                                    <small class="help-block"></small>
                                </div>
                            </div>
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