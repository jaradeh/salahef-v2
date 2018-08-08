<?php
//footer style
$style = epico_opt('footerStyle');

if ($style == "0") {
    $style = "light";
} else {
    $style = "dark";
}

$headerType = epico_opt('header-type');
?>

<footer class="footer-bottom <?php echo esc_attr($style); ?>">
    <div class="wrap">

        <!-- Footer Content   -->
        <div class="footer_content<?php if (!(epico_opt('footer-copyright'))) { ?> nocopyRight<?php } ?> <?php if (epico_opt('footerFullwidth') == "0") { ?>container<?php } ?>">

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php if (epico_opt('footer-copyright')) { ?>
                        <div class="copyright_logo">
                            <!-- Footer CopyRight   -->
                            <div class="copyright">
                                <?php epico_eopt('footer-copyright'); ?>
                            </div>                   
                        </div>
                        <?php
                    }

                    wp_nav_menu(array(
                        'container' => '',
                        'menu_class' => 'clearfix simple-menu ' . $style,
                        'before' => '',
                        'theme_location' => 'footer-nav',
                        'walker' => new epico_Simple_Nav_Walker(),
                        'fallback_cb' => false,
                        'after' => ''
                    ));
                    ?>
                </div>
            </div>


        </div>
    </div>
</footer>