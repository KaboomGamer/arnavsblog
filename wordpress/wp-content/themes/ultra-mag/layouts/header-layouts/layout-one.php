<?php 

/* Header Layout Two */

?>
<?php
$top_header_enable = get_theme_mod('ultra_seven_top_header_show','show');
$top_menu_enable = get_theme_mod('ultra_seven_top_menu','show');
$top_social_enable = get_theme_mod('ultra_seven_top_icons','show');
$current_date_enable = get_theme_mod('ultra_seven_top_date','show');
if($top_header_enable == 'show'){
?>
<div class="ultra-top-header clear">
	<div class="ultra-container">
		<div class="top-wrap clear">
            <?php
	    	if( $current_date_enable == 'show' ){ ?>
		        <div class="ultra-date">
		            <i class="fa fa-clock-o"></i>
		            <span><?php echo date_i18n("l, F j");// WPCS: XSS OK.?></span>
		        </div><!-- /.today-date --> 
            <?php } ?>
			<div class="top-left">
            <?php
            if($top_menu_enable == 'show'):
                wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'container' =>'',
                    'menu_class' => 'nav top-menu',
                    'fallback_cb' => 'wp_page_menu',
                    'depth'	=> -1
                ) );
            endif;
            ?>				
			</div>
		    <?php 
		      if($top_social_enable == 'show'):
            ?>
			<div class="top-right">
				<?php ultra_seven_social_icons(); ?>
			</div>
		    <?php endif;?>
		</div>
	</div>
</div>
<?php }?>
<header id="masthead" class="site-header layout-two">	
	<div class="middle-block-wrap clear">
		<div class="ultra-container clearfix">
        <?php ultra_seven_site_brandings(); ?>

        <?php 
        if(is_active_sidebar('header-banner') ):
        ?>
			<div class="ultra-header-banner">
              <?php dynamic_sidebar('header-banner');?>
			</div>
		<?php
	    endif;
		?>
	</div>
    </div><!-- .middle-block -->
    
    
    <?php do_action('ultra_seven_mobile_menu'); ?>

    

    <div class="nav-search-wrap clear no-side-menu">
    	<div class="ultra-container clearfix">
		
    		<div class="right-nav-search">
		    	<nav id="site-navigation" class="main-navigation middle">
					<?php
					    ultra_seven_home_icon();
						wp_nav_menu( array(
							'theme_location' => 'main-menu',
		                    'container' =>'',
		                    'menu_class' => 'nav main-menu',
		                    'fallback_cb' => 'wp_page_menu'
						) );
					?>
				</nav><!-- #site-navigation -->

				<div class="ultra-search middle">
	                <?php 
	                $cart_enable = get_theme_mod('ultra_seven_cart_enable','show');
	                if ( class_exists('woocommerce') && $cart_enable == 'show' ) { ?>
		               	<div class="ultra-shopping-cart">
						<?php
		                    ultra_seven_header_cart();
				            the_widget( 'WC_Widget_Cart', 'title='.__("Cart Items","ultra-mag") ); 
						?>
					    </div>
				    <?php } ?>
				    <?php 
				    $mode_switch = get_theme_mod('ultra_mag_dark_mode_switch','show');
				    $dark_mode = get_theme_mod('ultra_mag_dark_mode_option','show');
				    if($dark_mode == 'show'){
				        $cval = 1;
				    }else{
				        $cval = 0;
				    }
				    $dark_mode_cookie = isset($_COOKIE['ultra-dark-mode'])?$_COOKIE['ultra-dark-mode']:$cval;
				    if($dark_mode_cookie=='1'){
				   	    $checked = 'checked';
				    }else{
				   	    $checked = '';
				    }
				    if($mode_switch == 'show'){
				    ?>
				    <div class="ultra-mode-switcher">
				   		<div class="switch_box box_3">
							<div class="toggle_switch">
								
								<input type="checkbox" class="switch_3" name="mode-switcher" value="1" <?php echo esc_attr($checked);?>>
								<svg class="checkbox" xmlns="http://www.w3.org/2000/svg" style="isolation:isolate" viewBox="0 0 168 80">
								   <path class="outer-ring" d="M41.534 9h88.932c17.51 0 31.724 13.658 31.724 30.482 0 16.823-14.215 30.48-31.724 30.48H41.534c-17.51 0-31.724-13.657-31.724-30.48C9.81 22.658 24.025 9 41.534 9z" fill="none" stroke="#233043" stroke-width="3" stroke-linecap="square" stroke-miterlimit="3"/>
								   <path class="is_checked" d="M17 39.482c0-12.694 10.306-23 23-23s23 10.306 23 23-10.306 23-23 23-23-10.306-23-23z"/>
									<path class="is_unchecked" d="M132.77 22.348c7.705 10.695 5.286 25.617-5.417 33.327-2.567 1.85-5.38 3.116-8.288 3.812 7.977 5.03 18.54 5.024 26.668-.83 10.695-7.706 13.122-22.634 5.418-33.33-5.855-8.127-15.88-11.474-25.04-9.23 2.538 1.582 4.806 3.676 6.66 6.25z"/>
								</svg>
									
							  </div>
						</div>
						
				    </div>
					<?php }?>
					<?php ultra_seven_search(); ?>
				</div>
			</div>
		</div>
	</div><!-- .menu-block -->	
	<?php 
    $ticker_enable = get_theme_mod('ultra_seven_ticker_show','show');
    if($ticker_enable == 'show'){
    ?>  
    <div  class="ticker-block clear">
		<div class="ultra-container">
			<div class="ticker">
				<?php ultra_seven_header_ticker();?>
			</div>
		</div>    	
    </div>
    <?php } ?>
</header><!-- #masthead -->	

