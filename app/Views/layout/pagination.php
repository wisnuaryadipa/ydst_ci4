<div class="btn-group">
    <button type="button" class="btn btn-default"><i class="fa fa-arrow-left"></i></button>
    <button type="button" class="btn btn-default">1</button>
    <button type="button" class="btn btn-default">2</button>
    <button type="button" class="btn bg-navy">3</button>
    <button type="button" class="btn btn-default">4</button>
    <div class="btn-group">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">...</button>
        <ul class="dropdown-menu text">
            <li>
                <div class="input-group margin">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info flat">Go</button>
                    </span>
                </div>
            </li>
        </ul>
    </div>
    <button type="button" class="btn btn-default">50</button>
    <button type="button" class="btn btn-default"><i class="fa fa-arrow-right"></i></button>
</div>

<script>
    $(document).on('click', '.btn-group .dropdown-menu .input-group', function (e) {
        e.stopPropagation();
    });
</script>