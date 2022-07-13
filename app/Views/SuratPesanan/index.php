
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
    <div class="col-lg-10">
        <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $title ?></h3>
                <div class="type-sp pull-right">
                    <a href="<?= $_ENV['BASE_URL_FULL']."/operasional/".strtolower($parent_title)."/siswa/create" ?>">
                        <div class="btn bg-olive btn-flat"> Tambah <?= $parent_title ?></div>
                    </a> 
                </div>
        </div><!-- /.box-header -->

        <div class="box box-solid">
            <div class="box-filter">
                <div class="box-body">
                    <div class="content" style="min-height: 130px;">
                        
                        <div class="row" style="min-height: 75px;">
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-child">
                                    <strong>Kode <?= $parent_title ?></strong>
                                    <input type="text" class="form-control" placeholder="Kode <?= $parent_title ?>">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-child">
                                    <strong>Sales</strong>
                                    <select class="form-control select2">
                                        <option>XXX</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-child">
                                    <strong>Customer</strong>
                                    <select class="form-control select2">
                                        <option>XXX</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="min-height: 75px;">
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-child">
                                    <strong>Tanggal Awal</strong>
                                    <input type="text" class="form-control datepicker" placeholder="Tanggal Awal <?= $parent_title ?>">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-child">
                                    <strong>Tanggal Akhir</strong>
                                    <input type="text" class="form-control datepicker" placeholder="Tanggal Akhir <?= $parent_title ?>">
                                </div>
                            </div>
                        </div>
                    
                        <div class="box-input-child submit pull-right" style="margin-top: 10px">
                            <button class="btn btn-primary">Cari</button>
                        </div>
                    </div>
                        
                </div><!-- /.box-body -->
            </div>
        </div><!-- /.box -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">
                <table class="table-bordered table">
                    <tr>
                        <th> <div> <span>Kode <?= $parent_title ?></span><i class="pull-right fa fa-sort-amount-asc"></i></div> </th>
                        <th>Sales</th>
                        <th>Customer</th>
                        <th class="col-action">Action</th>
                    </tr>
                    <tr>
                        <td>------</td>
                        <td>------</td>
                        <td>------</td>
                        <td class="col-action-val">
                        
                            <a href="<?=$_ENV['BASE_URL_FULL']."/operasional/".strtolower($parent_title)."/siswa/edit/2" ?>">
                                <div class="btn btn-warning"> Edit</div>
                            </a>
                            <a href="<?=$_ENV['BASE_URL_FULL']."/operasional/".strtolower($parent_title)."/siswa/2" ?>">
                                <div class="btn btn-info"> Detail</div>
                            </a>
                            <a href="<?=$_ENV['BASE_URL_FULL']."/operasional/".strtolower($parent_title)."/siswa/delete/2" ?>">
                                <div class="btn btn-danger"> Delete</div>
                            </a>
                        </td>
                    </tr>
                </table>
                <div class="box-body">
                    <div class="pull-right">
                        <?= view('layout/pagination') ?>
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