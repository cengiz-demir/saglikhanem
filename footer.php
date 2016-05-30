<?php
/**
 * The template for displaying the footer.
 */
?>
<?php $mts_options = get_option(MTS_THEME_NAME); 
$first_footer_num  = empty($mts_options['mts_top_footer_num']) ? 3 : $mts_options['mts_top_footer_num']; ?>
</div><!--.main-container-->
<footer id="site-footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
	<div class="container">
		 <?php if ($mts_options['mts_top_footer']) : ?>
            <div class="footer-widgets first-footer-widgets widgets-num-<?php echo $first_footer_num; ?>">
            <?php
            for ( $i = 1; $i <= $first_footer_num; $i++ ) {
                $sidebar = ( $i == 1 ) ? 'footer-first' : 'footer-first-'.$i;
                $class = ( $i == $first_footer_num ) ? 'f-widget last f-widget-'.$i : 'f-widget f-widget-'.$i;
                ?>
                <div class="<?php echo $class;?>">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar( $sidebar ) ) : ?><?php endif; ?>
                </div>
                <?php
            }
            ?>
            </div><!--.first-footer-widgets-->
        <?php endif; ?>
        <div class="footermenu">
            <div class="footerlogo">
                <img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/saglikhanem/images/logo.svg" alt="<?php bloginfo( 'name' ); ?> Anasayfa"></a>
                <h2>Doğal yöntemleri tartışma platformu</h2>
            </div>
        <ul class="footer-menu">
            <li class="footer-menu-liste">
                <p class="footer-menu-baslik">Bize Kimiz?</p>
                <ul class="footer-alt-liste">
                    <li class="footer-alt-listele"><a class="footer-link" href="#">Amacımız</a></li>
                    <li class="footer-alt-listele"><a class="footer-link" href="#">SağlikHanem</a></li>
                    <li class="footer-alt-listele"><a class="footer-link" href="#">Nerelerden Besleniyoruz?</a></li>
                    <li class="footer-alt-listele"><a class="footer-link" href="#">Destek Olun</a></li>
                </ul>
            </li>
            <li class="footer-menu-liste">
                <p class="footer-menu-baslik">Kategoriler</p>
                <ul class="footer-alt-liste">
                    <li class="footer-alt-listele"><a class="footer-link" href="#">Sağlık</a></li>
                    <li class="footer-alt-listele"><a class="footer-link" href="#">Beslenme ve Diyet</a></li>
                    <li class="footer-alt-listele"><a class="footer-link" href="#">Güzellik</a></li>
                </ul>
            </li>
            <li class="footer-menu-liste">
                <p class="footer-menu-baslik">Bize Ulaşın</p>
                <ul class="footer-alt-liste">
                            <li class="footer-alt-listele"><a class="footer-link" href="#">İletişim</a></li>
                            <li class="footer-alt-listele"><a class="footer-link" href="#">Yazarlık</a></li>
                            <li class="footer-alt-listele"><a class="footer-link" href="#">Affiliate Programı</a></li>
                </ul>
            </li>
            <li class="footer-menu-liste">
                <p class="footer-menu-baslik">Gizlilik</p>
                <ul class="footer-alt-liste">
                            <li class="footer-alt-listele"><a class="footer-link" href="#">Gizlilik Polikası</a></li>
                            <li class="footer-alt-listele"><a class="footer-link" href="#">Kişisel Bilgi Toplama</a></li>
                            <li class="footer-alt-listele"><a class="footer-link" href="#">Kullanım Koşulları</a></li>
                            <li class="footer-alt-listele"><a class="footer-link" href="#">Yorum Politikası</a></li>
                </ul>
            </li>
        </ul>
        </div>
        <div class="copyrights">
			<span>Sağlıkhanem Copyright © 2016</span>
		</div> 
	</div><!--.container-->
</footer><!--#site-footer-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>