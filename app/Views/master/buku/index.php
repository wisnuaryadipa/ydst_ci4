
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
                    <a href="<?= $_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/create" ?>">
                        <div class="btn bg-olive btn-flat"> Tambah <?= $parent_title ?></div>
                    </a> 
                </div>
        </div><!-- /.box-header -->

        <div class="box box-solid">
            <div class="box-filter">
                <div class="box-body">
                    <div class="content" style="min-height: 130px;">
                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 col-sm-4">
                                    <div class="box-input-child">
                                        <strong>Nama <?= $parent_title ?></strong>
                                        <input type="text" class="form-control" placeholder="Nama <?= $parent_title ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="row">
                                <div class="col-lg-6 col-sm-4">
                                    <div class="box-input-child">
                                        <strong>Penulis <?= $parent_title ?></strong>
                                        <input type="text" class="form-control" placeholder="Penulis <?= $parent_title ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="min-height: 75px;">
                            <div class="col-lg-3 col-sm-4">
                                <div class="box-input-child">
                                    <strong>Kode <?= $parent_title ?></strong>
                                    <select class="form-control select2">
                                        <option>0.0.0</option>
                                    </select>
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
                        <th><div> <span>Nama <?= $parent_title ?></span><i class="pull-right fa fa-sort-amount-asc"></i></div></th>
                        <th>Harga Jual</th>
                        <th>Penulis</th>
                        <th class="col-action">Action</th>
                    </tr>
                    <?php
                    foreach ($list_buku as $row) :
                    ?>
                    <tr>
                        <td><?= $row->book_code ?></td>
                        <td><?= $row->book_title ?></td>
                        <td></td>
                        <td><?= $row->writer ?></td>
                        <td class="col-action-val">
                        
                            <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/edit/".$row->book_code ?>">
                                <div class="btn btn-warning"> Edit</div>
                            </a>
                            <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/".$row->book_code ?>">
                                <div class="btn btn-info"> Detail</div>
                            </a>
                            <a href="<?=$_ENV['BASE_URL_FULL']."/master/".strtolower($parent_title)."/delete/".$row->book_code ?>">
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


    </div><!--/.col (left) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->

<script>

    $(document).ready(function() {
        $('.select2').select2();
    });

</script>