
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('/assets/plugins/bootstrap/js');?>/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('');?>/assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('');?>/assets/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('');?>/assets/js/demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
    $(document).ready(function() {
        $(window).resize(function() {

            if ($(window).width() < 1030) {
                console.log('tesss');
                $("body").addClass("sidebar-collapse");
            }
            else {
                $("body").removeClass("sidebar-collapse");
            }
        });
    });
    </script>
</body>
</html>