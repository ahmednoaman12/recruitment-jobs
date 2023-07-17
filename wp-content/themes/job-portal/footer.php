<!--footer start-->
<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <div class="row">
                <?php  for($i=1 ;$i<=4;$i++):
                if(is_active_sidebar( 'footer-'.$i )) { ?>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <?php dynamic_sidebar( 'footer-'.$i ); ?>
                </div>
                <?php } endfor;  ?>
            </div>
        </div>
    </div>
</footer>
<!--footer end-->
<footer class="footer-copyrights">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="copyright-text">©2023 Recruitment Jobs In Yemen. All rights reserved </p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); 