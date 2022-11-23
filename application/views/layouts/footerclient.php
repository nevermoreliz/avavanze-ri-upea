
        <script>
            var base_url="<?php echo base_url(); ?>";
        </script>
        <script src="<?= base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?= base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>
        <!--<script src="<?= base_url()?>assets/js/jquery.mCustomScrollbar.js" type="text/javascript"></script>-->
        <!--vamos a importar nuestras animaciones propias-->

        <script src="<?= base_url()?>assets/js/animation.js" type="text/javascript"></script>
        <script type="text/javascript">
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                  if (target.length) {
                    $("html, body").animate({
                      scrollTop: target.offset().top
                    }, 500);
                    return false;
                  }
                }
              });
            });
    </script>
    </body>
</html>