<section class="content-header">
    <h1>
    <?= $parent_title ?>
    <small>list</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Master</a></li>
    <li><a href="#">User</a></li>
    <li class="active"><?= $title ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content" id="compact-form">
    <div class="row">
    <!-- left column -->
    <div class="col-md-8 col-xl-12">
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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-2"for="nip">ID User</label>
                            <div class="col-md-10">
                                <input autofocus="autofocus" type="text" id="id_user" class="form-control" name="id_user" placeholder="ID User">
                                <small class="help-block"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"for="nip">Usernamer</label>
                            <div class="col-md-10">
                                <input autofocus="autofocus" type="text" id="username" class="form-control" name="username" placeholder="Usernamer">
                                <small class="help-block"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"for="nip">Password</label>
                            <div class="col-md-10">
                                <input autofocus="autofocus" type="password" id="password" class="form-control" name="password" placeholder="Password">
                                <small class="help-block"></small>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2"for="nama_dosen">Nama User</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" name="nama_user" placeholder="Nama User">
                                <small class="help-block"></small>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label class="col-md-2"for="email">Lokasi / Area</label>
                                <div class="col-md-10">
                                    <select name="area" id="area" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Area</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="form-group">
                                <label class="col-md-2"for="matkul">Bagian</label>
                                <div class="col-md-10">
                                    <select name="bagian" id="bagian" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Bagian</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            
                            <div class="form-group">
                                <label class="col-md-2"for="matkul">Jabatan</label>
                                <div class="col-md-10">
                                    <select name="jabatan" id="jabatan" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Jabatan</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="matkul">Pendidikan</label>
                                    <div class="col-md-10">
                                        <select name="pendidikan" id="pendidikan" class="form-control select2" style="width: 100%!important">
                                            <option value="" disabled selected>Pendidikan</option>
                                        </select>
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="matkul">Bergabung</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control datepicker" name="bergabung" placeholder="Bergabung">
                                            <small class="help-block"></small>
                                        </div>
                                    </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4" for="matkul">Berhenti</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control datepicker" name="berhenti" placeholder="Berhenti">
                                        <small class="help-block"></small>
                                    </div>
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