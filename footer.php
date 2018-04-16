<footer>
    <div class="footer-content">
        <p><a href="<?php echo site_url(); ?>/offices">Contact Us</a> / <a href="<?php echo site_url(); ?>/disclaimer">Disclaimer</a></p>
        <p>&copy; 1995 - <?php echo date('Y'); ?> HDL Executive Search LLP / Company Number: OC350666</p>
    </div>
    <div class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/hdl_logo_small.png" alt="Hogarth Davis Lloyd" /></a></div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        
        $('.mobile-menu-icon').click( function () {
            $("#mobile-primary-menu").toggleClass("is-open");
        } );
            
    });
</script>
<script type="text/javascript" src="http://hogarthdavieslloyd.com/wp-content/themes/hdl/js/jquery.easing.1.3.js"></script>
 
<script src="http://hogarthdavieslloyd.com/wp-content/themes/hdl/js/modernizr.custom.71422.js"></script>
<!-- the jScrollPane script -->
<script src="http://hogarthdavieslloyd.com/wp-content/themes/hdl/js/jquery.mousewheel.js"></script>
<script src="http://hogarthdavieslloyd.com/wp-content/themes/hdl/js/jquery.contentcarousel.js"></script>
<script type="text/javascript">
 	$('#ca-container').contentcarousel();
</script>


<?php wp_footer(); ?>
</body>
</html>