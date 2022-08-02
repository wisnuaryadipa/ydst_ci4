<!-- Main content -->
<section class="content" id="compact-form">
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
            <form action="<?= base_url('master/cabang/edit/'.$customer->cust_code) ?>" class="form-horizontal" method="post">
                <input type="hidden" name="_method" value="PUT" />
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
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="form-group">
                                <label for="matkul" class="col-md-2">Provinsi</label>
                                <div class="col-sm-6">
                                    <select name="province" id="province" class="form-control select2" style="width: 100%!important">
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
                                <label for="matkul" class="col-md-2">Kota</label>
                                <div class="col-sm-6">
                                    <select name="city" id="city" class="form-control select2" style="width: 100%!important">
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
                                    <select name="camat_kode" id="camat_kode" class="form-control select2" style="width: 100%!important">
                                        <option value="" disabled selected>Kec</option>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-4" for="matkul">Tingkat</label>
                                <div class="col-xs-8 col-lg-8">
                                    <select name="" id="" class="form-control select2" style="width: 100%!important">
                                        <?php foreach($list_tingkat as $key => $tingkat) : ?>
                                            <option value="<?= $key ?>" ><?= $tingkat ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-4" for="matkul">Jenis / Status</label>
                                <div class="col-xs-8 col-lg-5">
                                    <select name="" id="" class="form-control select2" style="width: 100%!important">
                                        <?php foreach($list_status as $key => $status) : ?>
                                            <option value="<?= $key ?>" ><?= $status ?></option>
                                        <?php endforeach ?>
                                        
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
                                    <input type="text" class="form-control" name="cust_code" placeholder="Kode <?= $parent_title ?>" value="<?= $customer->cust_code ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 col-lg-5" for="matkul">Urut</label>
                                <div class="col-xs-8 col-lg-7">
                                    <input type="text" class="form-control" name="" placeholder="Urut" value="">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-md-2" for="matkul">Nama Customer</label>
                                <div class="col-xs-6">
                                    <input type="text" class="form-control" name="cust_name" placeholder="Nama <?= $parent_title ?>" value="<?= $customer->cust_name ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">NPSN</label>
                                <div class="col-xs-4">
                                    <input type="text" class="form-control" name="npsn" placeholder="NPSN" value="<?= $customer->npsn ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">NPWP / KTP</label>
                                <div class="col-xs-5">
                                    <input type="text" class="form-control" name="npwp" placeholder="NPWP / KTP" value="<?= $customer->npwp ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="col-xs-2" for="matkul">Alamat</label>
                                <div class="col-xs-7">
                                    <input type="text" class="form-control" name="address" placeholder="Alamat" value="<?= $customer->address ?>">
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
                                    <select name="school_grade" id="school_grade" class="form-control select2" style="width: 100%!important">
                                        <?php foreach($list_peringkat as $key => $peringkat): ?>
                                            <option value="<?= $key ?>" ><?= $peringkat ?></option>
                                        <?php endforeach ?>
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
                                    <input type="text" class="form-control" name="phone_no" placeholder="No. Telpn" value="<?= $customer->phone_no ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-1" for="matkul">Fax.</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="fax_no" placeholder="Fax" value="<?= $customer->fax_no ?>">
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
                                    <select name="branch_code" id="branch_code" class="form-control select2" style="width: 100%!important">
                                        <?php foreach($list_cabang as $key => $cabang): ?>
                                        <option value="<?= $key ?>"><?= $cabang->branch_name ?></option>
                                        <option value="<?= $key ?>" <?php if($customer->branch_code == $key){ echo "selected";} ?>><?= $cabang->branch_name ?></option>
                                        <?php endforeach ?>
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
                                    <input type="text" class="form-control" name="contact_person" placeholder="Contact Person" value="<?= $customer->contact_person ?>">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4" for="matkul">Jumlah Siswa</label>
                                <div class="col-lg-3">
                                    <input type="text" class="form-control" name="" placeholder="Jumlah Siswa" value="">
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
                                    <input type="text" class="form-control" name="" placeholder="Kompetitor" value="">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4" for="matkul">Sumber Dana</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" name="" placeholder="Sumber Dana" value="">
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
                                    <textfield type="text" class="form-control" name="" placeholder="Catatan" value="">
                                    <small class="help-block"></small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <div class="form-group">
                        <div class="col-lg-12">
                            <button type="submit" id="submit" class="btn btn-flat bg-purple pull-right">
                                <i class="fa fa-save"></i> Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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