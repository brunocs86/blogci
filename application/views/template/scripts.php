<!-- JavaScript Libraries -->
<script src="<?php echo base_url(); ?>public/lib/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/jquery/jquery-migrate.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/superfish/hoverIntent.js"></script>
<script src="<?php echo base_url(); ?>public/lib/superfish/superfish.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/waypoints/waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/counterup/counterup.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/isotope/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/lightbox/js/lightbox.min.js"></script>
<script src="<?php echo base_url(); ?>public/lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<!-- Contact Form JavaScript File -->
<script src="<?php echo base_url(); ?>public/contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="<?php echo base_url(); ?>public/js/main.js"></script>
<?php
if (isset($scripts)) {
	foreach ($scripts as $script_name) {
		$src = base_url() . "public/js/" . $script_name; ?>
		<script src="<?= $src ?>" rel="stylesheet"></script>
	<?php }
} ?>

</body>
</html>
