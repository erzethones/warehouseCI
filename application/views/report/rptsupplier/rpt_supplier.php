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
	 		<h1 class="page-header">Daftar Supplier</h1>

			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                        	<a href="<?php echo base_url()."index.php/rpt_supplier/cetakpdf" ?>" class="btn btn-warning m-r-5"><i class="fa fa-print"></i> Cetak PDF</a>
                        	<a href="#modal-dialog" class="btn btn btn-success  m-r-5" data-toggle="modal"><i class="fa fa-info"></i></a>
                        </div>
                        <div class="modal fade" id="modal-dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										<h4 class="modal-title">Informasi</h4>
									</div>
									<div class="modal-body">
										Jika anda ingin menyimpan laporan dalam bentuk PDF, klik tombol "Cetak PDF", ketika laporan sudah muncul, tekan tombol kombinasi "CTRL+S" pada keyboard anda!
									</div>
									<div class="modal-footer">
										<a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
									</div>
								</div>
							</div>
						</div>
                        <div class="panel-body">
                            <div class="table-responsive">
					            <table id="data-table" class="table table-striped table-bordered">
					                <thead>
					                    <tr>
					                        <th>Kode</th>
					                        <th>Nama Supplier</th>
					                    </tr>
					                </thead>
					                <tbody>
					                    <?php
					                        foreach ($qSupplier as $key) {
					                    ?>
					                                <tr class="odd gradeX">
					                                    <td class="Kode" data-name="Kode"><?php echo $key['Kode'] ;?></td>
					                                    <td data-name="Keterangan"><?php echo $key['Keterangan'] ;?></td>
					                                    
					                                </tr>
					                            <?php
					                        }
					                    ?>
					                </tbody>
					            </table>
					        </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
			    <!-- end col-12 -->
			</div>
 			<!-- end row -->
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<?php $this->load->view('footer_tag'); ?>
</body>

</html>
