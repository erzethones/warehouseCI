<?php
	$this->load->database();
	// require_once "process/proc_session.php";
	// require_once "includes/include_globals.php"; 
?>
<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:54:23 GMT -->
<?php $this->load->view('head_tag'); ?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php $this->load->view('header_page'); ?>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<?php $this->load->view('sidebar_page'); ?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
	 		<?php

	 			//$this->funcdatabase->DMSFunction() ;
				//if(isset($_REQUEST['page'])){

				//	switch($_REQUEST['page']){
						/*
						case md5("mst_inventory"):
							require_once "pages/mstinventory/mstinventory.php";
						break;

						case md5("mst_employee"):
							require_once "pages/mstemployee/mstemployee.php";
						break;

						case md5("mst_typeservice"):
							require_once "pages/msttypeservice/msttypeservice.php";
						break;

						case md5("tr_cashier"):
							require_once "pages/trcashier/trcashier.php";
						break;

						case md5("tr_daftarcuci"):
							require_once "pages/trdaftarcuci/trdaftarcuci.php";
						break;

						case md5("rpt_trlaundry"):
							require_once "pages/rpttrlaundry/rpttrlaundry.php";
						break;

						case md5("cfg_users"):
							require_once "pages/cfgusers/cfgusers.php";
						break;
						*/
					//}
				//}else{
					$this->load->view('dashboard');
				//}
			?>
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-1.9.1.min.js') ; ?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery/jquery-migrate-1.1.0.min.js') ; ?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery/jquery.easing.min.js') ; ?>"></script>
	<script src="<?php echo base_url('assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js') ; ?>"></script>
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ; ?>"></script>

	<!--[if lt IE 9]>
		<script src="<?php //echo base_url('assets/crossbrowserjs/html5shiv.js') ; ?>"></script>
		<script src="<?php //echo base_url('assets/crossbrowserjs/respond.min.js') ; ?>"></script>
		<script src="<?php //echo base_url('assets/crossbrowserjs/excanvas.min.js') ; ?>"></script>
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
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<!-- ================== START $this->load->view(''); PAGES JS ================== -->
  	<!-- <script src="pages/mstinventory/mstinventory.js') ; ?>"></script> -->
  	<!-- 
  	<script src="pages/trcashier/trcashier.js') ; ?>"></script>
  	<script src="pages/msttypeservice/msttypeservice.js') ; ?>"></script>
  	<script src="pages/rpttrlaundry/rpttrlaundry.js') ; ?>"></script>
  	<script src="pages/cfgusers/cfgusers.js') ; ?>"></script>
  	<script src="pages/trdaftarcuci/trdaftarcuci.js') ; ?>"></script>
 	-->
  	<!-- ================== END $this->load->view(''); PAGES JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			//DashboardV2.init();
			TableManageDefault.init();
			FormPlugins.init();
			FormWizardValidation.init();
		});
	</script>
	<!--<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>-->
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:54:41 GMT -->
</html>
