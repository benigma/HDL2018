<footer>
    <div class="footer-content">
        <p>&copy; 1995 - <?php echo date('Y'); ?> HDL Executive Search LLP / Company Number: OC350666</p>
        <p><a href="<?php echo site_url(); ?>/offices">Contact Us</a> / <a href="<?php echo site_url(); ?>/disclaimer">Disclaimer</a></p>
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
<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>

<?php wp_footer(); ?>
</body>
</html>