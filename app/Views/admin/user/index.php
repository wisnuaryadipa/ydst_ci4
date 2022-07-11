<style>
    .select2-selection__rendered {
    line-height: 31px !important;
    }
    .select2-container .select2-selection--single {
        height: 35px !important;
    }
    .select2-selection__arrow {
        height: 34px !important;
    }
</style>

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
    <div class="col-md-10">
        <!-- general form elements -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><?= $title ?></h3>
            <div class="type-sp pull-right">
            </div>
        </div><!-- /.box-header -->

        <div class="box box-solid">
            <div class="box-filter">
            <div class="box-body">
                <div class="box-input-buku">
                    <div class="content" style="min-height: 130px;">
                        <div class="row" style="min-height: 75px;">
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-buku-child">
                                    <strong>Cabang</strong>
                                    <select class="form-control select2">
                                        <option>Yogyakarta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-buku-child">
                                    <strong>Bagian</strong>
                                    <select class="form-control select2">
                                        <option>Semua</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-buku-child">
                                    <strong>Gender</strong>
                                    <select class="form-control select2">
                                        <option>Laki-Laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-buku-child">
                                    <strong>Nama</strong>
                                    <input type="text" class="form-control" placeholder="Nama">
                                </div>
                            </div>
                        </div>
                    
                        <div class="box-input-buku-child submit pull-right" style="margin-top: 10px">
                            <button class="btn btn-primary">Cari</button>
                        </div>
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
                        <th>ID Karyawan</th>
                        <th>Nama Karyawan</th>
                        <th>J.Kelamin</th>
                        <th>Bagian</th>
                        <th>Cabang</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>K0001</td>
                        <td>MAWAR</td>
                        <td>Perempuan</td>
                        <td>Sales</td>
                        <td>YOGYA</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>K0002</td>
                        <td>DIO</td>
                        <td>Laki-laki</td>
                        <td>Sales</td>
                        <td>YOGYA</td>
                        <td>
                        
                        <button class="btn btn-warning">Edit</button>
                        <button class="btn btn-info">Detail</button>
                        <button class="btn btn-danger">Delete</button>
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
    });

</script>