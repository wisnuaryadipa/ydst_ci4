<!-- Layout page for blank pages -->
<?php echo view('layout/header'); ?>
<div class="wrapper" style="width: 100%;">
 
    <section class="content" style="padding-top: 0px;">
      <div class="container-fluid">
        <?php echo view($mainPage); ?>
      </div><!-- /.container-fluid -->
    </section>

</div>
<?php echo view('layout/footer'); ?>