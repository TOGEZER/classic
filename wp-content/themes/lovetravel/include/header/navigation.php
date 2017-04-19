<!--start header-->
<div class="nicdark_bg_white nicdark_section nicdark_border_grey nicdark_sizing">
    
    <!--start container-->
    <div class="nicdark_containe nicdark_clearfix">

        <div class="grid grid_12 percentage">
                
            <div class="nicdark_space20"></div>

            <!--logo-->
            <div class="nicdark_logo nicdark_marginleft10">
                <a href="<?php echo home_url(); ?>"><img alt="" src="<?php echo esc_url( $redux_demo['logo']['url'] ); ?>"></a>                                   
            </div>
            <!--end logo-->

            <!--start btn left/right sidebar open-->
            <?php if ($redux_demo['header_right_sidebar'] == 1) { ?> <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_<?php echo $redux_demo['header_background_btn_right_sidebar']; ?>_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_<?php echo $redux_demo['header_background_btn_right_sidebar']; ?> extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_btn_right_sidebar']; ?>"></i></a> <?php } else {}; ?>
            <?php if ($redux_demo['header_left_sidebar'] == 1) { ?> <a class="nicdark_btn_icon nicdark_zoom nicdark_bg_<?php echo $redux_demo['header_background_btn_left_sidebar']; ?>_hover nicdark_left_sidebar_btn_open nicdark_marginright20 nicdark_marginleft10 nicdark_bg_<?php echo $redux_demo['header_background_btn_left_sidebar']; ?> extrasmall  white right"><i class="<?php echo $redux_demo['header_icon_btn_left_sidebar']; ?>"></i></a> <?php } else {}; ?>
            <!--end btn left/right sidebar open-->

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>    
        
        <div id="search" class="search">
            <form role="search" method="get" id="searchform" class="searchform" action="http://classic.myterra.fr/">
				<div class="c-search">
					<input value="" name="s" id="s" type="text" placeholder="Recherche">
					<input id="searchsubmit" value="Rechercher" type="submit">
				</div>
			</form>
        </div>
        <div class="" style="float: left">
            <a href="/contact"><img src="http://classic.myterra.fr/wp-content/uploads/2017/04/marion-contact.png"></a>
        </div>
        
            <div class="nicdark_space20"></div>

        </div>

    </div>
    <!--end container-->

</div>
<!--end header-->