<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->
<script src="<?php echo base_url('assets/plugins/jquery/jquery-3.2.1.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery/jquery.easing.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ; ?>"></script>

<!--[if lt IE 9]>
	<script src="<?php echo base_url('assets/crossbrowserjs/html5shiv.js') ; ?>"></script>
	<script src="<?php echo base_url('assets/crossbrowserjs/respond.min.js') ; ?>"></script>
	<script src="<?php echo base_url('assets/crossbrowserjs/excanvas.min.js') ; ?>"></script>
<![endif]-->
<script src="<?php echo base_url('assets/plugins/slimscroll/jquery.slimscroll.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-cookie/jquery.cookie.js') ; ?>"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->	

<script src="<?php echo base_url('assets/js/apps.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/masked-input/masked-input.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/password-indicator/js/password-indicator.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-select/bootstrap-select.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-tag-it/js/tag-it.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/moment.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/select2/dist/js/select2.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/js/form-plugins.demo.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/morris/raphael.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/morris/morris.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/gritter/js/jquery.gritter.js') ; ?>"></script>
<script src="<?php echo base_url('assets/js/dashboard-v2.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/DataTables/js/jquery.dataTables.js') ; ?>"></script>
<script src="<?php echo base_url('assets/js/table-manage-default.demo.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/parsley/dist/parsley.js') ; ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-wizard/js/bwizard.js') ; ?>"></script>
<script src="<?php echo base_url('assets/js/form-wizards-validation.demo.min.js') ; ?>"></script>
<script src="<?php echo base_url('assets/js/common.js') ; ?>"></script>
<script src="<?php echo base_url('assets/js/gallery.demo.min.js') ;?>"></script>
<script src="<?php echo base_url('assets/plugins/isotope/jquery.isotope.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/lightbox/js/lightbox-2.6.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/fullcalendar/fullcalendar.js');?>"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
	$(document).ready(function() {
		App.init();
		//DashboardV2.init();
		TableManageDefault.init();
		FormPlugins.init();
		FormWizardValidation.init();
		Gallery.init();
		Calendar.init();
	});
</script>