<style>
    
</style>


<!-- Main content -->
<section class="content" id="compact-form">
    <div class="row">
    <!-- left column -->
        <div class="col-xs-12 col-md-12 col-lg-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <form action="<?= url_to('master/karyawan/create') ?>" class="form-horizontal" method="post">
                <div class="box-header with-border">
                    <h3 class="box-title"><?= $title ?></h3>
                    <div class="type-sp pull-right">
                    </div>
                </div><!-- /.box-header -->

                <!-- form start -->
                    <div class="box-body">
                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="area_code" class="col-xs-2 control-label">Kode <?= $parent_title ?></label>
                                    <div class="col-sm-10">
                                        <input autofocus="autofocus" onfocus="this.select()" type="text" id="area_code" class="form-control" name="area_code" placeholder="Kode <?= $parent_title ?>">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="area_name" class="col-xs-2 control-label">Nama <?= $parent_title ?></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="area_name" name="area_name" placeholder="Nama <?= $parent_title ?>">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="matkul" class="col-xs-3 control-label">Jenis Kelamin</label>
                                                    <div class="col-sm-9">
                                                        <select name="gender_id" id="gender_id" class="form-control select2" style="width: 100%!important">
                                                            <option value="1" >Pria</option>
                                                            <option value="2" >Wanita</option>
                                                        </select>
                                                        <small class="help-block"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="matkul" class="col-xs-3 control-label">Tanggal Lahir</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control datepicker" id="birth_date" name="birth_date" placeholder="Tanggal Lahir">
                                                        <small class="help-block"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="matkul" class="col-xs-3 control-label">Status Nikah</label>
                                                    <div class="col-sm-9">
                                                        <select name="marital_id" id="marital_id" class="form-control select2" style="width: 100%!important">
                                                            <option value="1" >Single, 0 Tanggungan</option>
                                                            <option value="2" >Single, 1 Tanggungan</option>
                                                            <option value="3" >Single, 2 Tanggungan</option>
                                                            <option value="4" >Single, 3 Tanggungan</option>
                                                            <option value="5" >Menikah, 0 Tanggungan</option>
                                                            <option value="6" >Menikah, 1 Tanggungan</option>
                                                            <option value="7" >Menikah, 2 Tanggungan</option>
                                                            <option value="8" >Menikah, 3 Tanggungan</option>
                                                        </select>
                                                        <small class="help-block"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="matkul" class="col-xs-3 control-label">Agama</label>
                                                    <div class="col-xs-9">
                                                        <select name="religion_id" id="religion_id" class="form-control select2" style="width: 100%!important">
                                                            <option value="1" >Islam</option>
                                                            <option value="2" >Katolik</option>
                                                            <option value="3" >Budha</option>
                                                            <option value="4" >Hindu</option>
                                                            <option value="5" >Protestan</option>
                                                            <option value="6" >Lain-lain</option>
                                                        </select>
                                                        <small class="help-block"></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="border picture-box">
                                            <span class="picture">picture</span>
                                            <button class="btn btn-classic">upload</button>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-xs-2 control-label">Telephone</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="phone_no" name="phone_no" placeholder="Telephone">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-xs-2 control-label">Kota</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="city" name="city" placeholder="Kota">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-xs-2 control-label">Kd. Pos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Kd. Pos">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-xs-2 control-label">Alamat</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Alamat">
                                        <small class="help-block"></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="matkul" class="col-xs-2 control-label">Lokasi / Cabang</label>
                                            <div class="col-sm-6">
                                                <select name="branch_code" id="branch_code" class="form-control select2" style="width: 100%!important">
                                                    <?php foreach($branches as $key => $branch): ?>
                                                    <option value="<?= $branch->branch_code ?>" ><?= $branch->branch_name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="matkul" class="col-xs-2 control-label">Bagian</label>
                                            <div class="col-sm-6">
                                                <select name="bagian" id="bagian" class="form-control select2" style="width: 100%!important">
                                                    <?php foreach($departements as $key => $dept): ?>
                                                    <option value="<?= $dept['id'] ?>" ><?= $dept['dept_name'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="matkul" class="col-xs-2 control-label">Jabatan</label>
                                            <div class="col-sm-6">
                                                <select name="role_id" id="role_id" class="form-control select2" style="width: 100%!important">
                                                    <?php foreach($roles as $key => $role): ?>
                                                    <option value="<?= $role->role_id ?>" ><?= $role->role_name ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="matkul" class="col-xs-2 control-label">Pendidikan</label>
                                            <div class="col-sm-6">
                                                <select name="edu_background" id="edu_background" class="form-control select2" style="width: 100%!important">
                                                    <option value="1" >SD</option>
                                                    <option value="2" >SMP</option>
                                                    <option value="3" >SMA</option>
                                                    <option value="4" >S1</option>
                                                    <option value="5" >S2</option>
                                                    <option value="6" >S3</option>
                                                    <option value="7" >D1</option>
                                                    <option value="8" >D2</option>
                                                    <option value="9" >D3</option>
                                                    <option value="10" >D4</option>
                                                </select>
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="matkul" class="col-xs-4 control-label">Bergabung</label>
                                            <div class="col-xs-8">
                                                <input type="text" class="form-control datepicker" id="join_date" name="join_date" placeholder="Bergabung">
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group">
                                            <label for="matkul" class="col-xs-4 control-label">Berhenti</label>
                                            <div class="col-xs-8"> 
                                                <input type="text" class="form-control datepicker" id="resign_date" name="resign_date" placeholder="Berhenti">
                                                <small class="help-block"></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                </div>
                                
                                
                            </div>
                        </div>
                        
                    </div>
                    <div class="box-footer">
                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" id="submit" class="btn btn-classic pull-right">
                                    <i class="fa fa-save"></i> Simpan
                                </button>
                                <button class="btn btn-classic pull-right" disabled>
                                    <i class="fa fa-save"></i> New
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (left) -->
        <div class="col-xs-12 col-md-12 col-lg-6">
                    <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Daftar Karyawan</h3>
                        <div class="type-sp pull-right">
                        </div>
                </div><!-- /.box-header -->

                <div class="box box-solid">
                    <div class="box-filter">
                        <div class="box-body" style="min-height: 80px;">
                            <div class="row">
                                <div class="col-lg-8 col-sm-8">
                                    <div class="form-group">
                                        <label class="col-lg-4">Nama <?= $parent_title ?></label>
                                        <div class="col-sm-8"> 
                                            <input type="text" class="form-control" placeholder="Nama">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-sm-8">
                                    <div class="form-group">
                                        <label class="col-lg-4">Kode <?= $parent_title ?></label>
                                        <div class="col-sm-8"> 
                                            <select class="form-control select2">
                                                <option>DIY</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="box-input-child submit pull-right" style="margin-top: 10px">
                                <button class="btn btn-primary">Cari</button>
                            </div>
                        </div><!-- /.box-body -->
                    </div>
                </div><!-- /.box -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <table class="table-bordered table">
                            <tr>
                                <th class="pointer"><div> <span>Kode <?= $parent_title ?></span><i class="pull-right fa fa-sort-amount-asc"></i></div> </th>
                                <th class="pointer"><div> <span>Nama <?= $parent_title ?></span><i class="pull-right fa fa-sort-amount-asc"></i></div></th>
                                <th>Cabang</th>
                                <th class="col-action">Action</th>
                            </tr>
                            
                            <tr>
                                <td class="pointer"><div> <span>Kode <?= $parent_title ?></span><i class="pull-right fa fa-sort-amount-asc"></i></div> </td>
                                <td class="pointer"><div> <span>Nama <?= $parent_title ?></span><i class="pull-right fa fa-sort-amount-asc"></i></div></td>
                                <td>Cabang</td>
                                <td class="col-action">Action</td>
                            </tr>
                            
                            <?php
                            foreach ($list_employee as $row) :
                            ?>
                            <tr>
                                <td><?= $row->empl_code ?></td>
                                <td><?= $row->empl_name ?></td>
                                <td><?= $row->branch_code ?></td>
                                <td class="col-action-val">
                                
                                    <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/edit/".$row->area_code ?>">
                                        <div class="btn btn-warning"> Edit</div>
                                    </a>
                                    <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/".$row->area_code ?>">
                                        <div class="btn btn-info"> Detail</div>
                                    </a>
                                    <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/delete/".$row->area_code ?>">
                                        <div class="btn btn-danger"> Delete</div>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <div class="box-body">
                            <div class="pull-right">
                                <?= $pager->links('', 'default_full'); ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div><!-- /.box -->

        </div>
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