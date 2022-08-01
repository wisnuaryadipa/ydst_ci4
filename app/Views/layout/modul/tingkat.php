<?php
    helper('static_data_helper');
    $tingkat = tingkatCustomer();

?>

<select name="school_grade" id="school_grade" class="form-control select2" style="width: 100%!important">
    <?php foreach($tingkat as $row) : ?>
        <option value=""><?= $row ?></option>
    <?php endforeach ?>
</select>
<small class="help-block"></small>