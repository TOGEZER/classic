		
		<?php global $redux_demo; ?>

		<!--gradient-->
		<?php if ($redux_demo['footer_gradient'] == 1) { ?> <div class="nicdark_space3 nicdark_bg_gradient"></div> <?php } ?>
		<!--footer-->
		<?php if ($redux_demo['footer_display'] == 1) { include "include/footer/footer.php"; } ?>
		<!--copyright-->
		<?php if ($redux_demo['copyright_display'] == 1) { include "include/footer/copyright.php"; } ?>

	</div>
	<!--end nicdark_site_fullwidth-->

</div>
<!--end nicdark_site-->


<!--start preloader-->
<script type="text/javascript">
    jQuery(window).load(function() { jQuery(".nicdark_preloader").delay(1000).fadeOut("slow"); })
</script>
<!--end preloader-->


<!--start google analytics-->
<?php echo $redux_demo['general_js']; ?>
<!--end google analytics-->

<?php wp_footer(); ?>
	
</body>  
</html>