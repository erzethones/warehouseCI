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
	 		<h1 class="page-header">Master Data Item</h1>
	 		<div id="options" class="m-b-10">
                <span class="gallery-option-set" id="filter" data-option-key="filter">
                    <a href="#show-all" class="btn btn-default btn-xs active" data-option-value="*">
                        Show All
                    </a>
                    <a href="#gallery-group-1" class="btn btn-default btn-xs" data-option-value=".gallery-group-1">
                        Gallery Group 1
                    </a>
                    <a href="#gallery-group-2" class="btn btn-default btn-xs" data-option-value=".gallery-group-2">
                        Gallery Group 2
                    </a>
                    <a href="#gallery-group-3" class="btn btn-default btn-xs" data-option-value=".gallery-group-3">
                        Gallery Group 3
                    </a>
                    <a href="#gallery-group-4" class="btn btn-default btn-xs" data-option-value=".gallery-group-4">
                        Gallery Group 4
                    </a>
                </span>
            </div>
            <a href="javascript:;" class="btn btn-inverse m-r-5"><i class="fa fa-plus-square"></i> Tambah Data</a>
            <div id="gallery" class="gallery">
                <div class="image gallery-group-1">
                    <div class="image-inner">
                        <a href="<?php echo base_url('assets/img/gallery/gallery-1.jpg') ;?>" data-lightbox="gallery-group-1">
                            <img src="<?php echo base_url('assets/img/gallery/gallery-1.jpg') ;?>" alt="" />
                        </a>
                        <p class="image-caption">
                            #1382 - 3D Arch
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Sean Ngu</a>
                        </div>
                        <div class="rating">
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <div class="desc">
                            Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.
                        </div>
                    </div>
                </div>
                <div class="image gallery-group-2">
                    <div class="image-inner">
                        <a href="<?php echo base_url('assets/img/product/IMG20161113121030.jpg') ;?>" data-lightbox="gallery-group-2">
                            <img src="<?php echo base_url('assets/img/product/IMG20161113121030.jpg') ;?>" alt="" />
                        </a>
                        <p class="image-caption">
                            #1382 - 3D Arch
                        </p>
                    </div>
                    <div class="image-info">
                        <h5 class="title">Lorem ipsum dolor sit amet</h5>
                        <div class="pull-right">
                            <small>by</small> <a href="javascript:;">Sean Ngu</a>
                        </div>
                        <div class="rating">
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star active"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <div class="desc">
                            Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.
                        </div>
                    </div>
                </div>
            </div>
			<!-- end page-header -->
			<!-- begin row -->
			<!-- <div class="row"> -->
			    <!-- begin col-12 -->
			    <!-- <div class="col-md-12">
			        <ul class="nav nav-pills">
			            <li id="tab-data-table" class="active"><a href="#nav-pills-tab-mstinventory-table" data-toggle="tab" id="link-data-table">Data Table</a></li>
			            <li id="tab-add-data"><a href="#nav-pills-tab-mstinventory-input" data-toggle="tab" id="link-add-data">Add Data(s)</a></li>
			        </ul>
			        <div id="tab-content" class="tab-content">
			            <div class="tab-pane fade active in" id="nav-pills-tab-mstinventory-table">
			                <?php //$this->load->view('mst_inventory_tables'); ?>
			            </div>
			            <div class="tab-pane fade" id="nav-pills-tab-mstinventory-input">
			                <?php //$this->load->view('mst_inventory_input'); ?>
			            </div>
			        </div>
			                        
			    </div> -->
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

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:54:41 GMT -->
</html>
