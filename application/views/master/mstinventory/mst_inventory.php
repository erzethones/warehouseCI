<!DOCTYPE html>
<!--[if IE 8]><html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
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
	 		<h1 class="page-header">Master Inventory</h1>

			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <ul class="nav nav-pills">
			            <li id="tab-data-table" class="active"><a href="#nav-pills-tab-mstinventory-table" data-toggle="tab" id="link-data-table">Data Table</a></li>
			            <li id="tab-add-data"><a href="#nav-pills-tab-mstinventory-input" data-toggle="tab" id="link-add-data">Add Data(s)</a></li>
			        </ul>
			        <div id="tab-content" class="tab-content">
			            <div class="tab-pane fade active in" id="nav-pills-tab-mstinventory-table">
			                <?php $this->load->view('master/mstinventory/mst_inventory_tables'); ?>
			            </div>
			            <div class="tab-pane fade" id="nav-pills-tab-mstinventory-input">
			                <?php $this->load->view('master/mstinventory/mst_inventory_input'); ?>
			            </div>
			        </div>
			                        
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

<script type="text/javascript">
	var save_method;
	
	$(document).ready(function(){
		$("#cmdSave").click(function(event){
			event.preventDefault();
			$('#cmdSave').text('saving...'); //change button text
		    $('#cmdSave').attr('disabled',true); //set button disable 
		    var url;
		    var save_method = $("#cSaveMethod").val() ;
		    if(save_method == 'add'){
		    	url = "<?php echo site_url('mst_inventory/mstinventory_add')?>";
		    }else if(save_method == 'update'){
	    		url = "<?php echo site_url('mst_inventory/mstinventory_update')?>";
	    	}
		    $.ajax({
		        url : url,
		        type: "POST",
		        data: $('#mst_inventory').serialize(),
	        	dataType: "JSON",
		        success: function(data){
		            $('#cmdSave').text('save'); //change button text
		            $('#cmdSave').attr('disabled',false); //set button enable 
		            alert("Data saved!");
		            location.reload();
		        },
		        error: function (jqXHR, textStatus, errorThrown)
		        {	
		        	alert("Eror Saving");
		        }
		    });
		});
	});

	
    function DeleteData(id){
    	if(confirm('Are you sure delete this data?')){
            url = "<?php echo site_url('mst_inventory/mstinventory_delete')?>/"+id;
            $.ajax({
                url      : url,
                type     : "POST",
                dataType : "JSON",
                success  : function(data){
                    alert("Data deleted!!");
                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown){
                    alert('Error deleting data');
                }
            })
        }
    }

    function EditData(id){
        save_method = 'update';
        $("#cSaveMethod").val("update") ;
        url = "<?php echo site_url('mst_inventory/mstinventory_edit')?>/"+id;
        $.ajax({
            url     : url,
            type    : "GET",
            dataType: "JSON",
            success : function(data){
                        $("#tab-data-table").removeClass("active");
                        $("#tab-add-data").addClass("active");
                        $("#nav-pills-tab-mstinventory-table").removeClass("active in");
                        $("#nav-pills-tab-mstinventory-input").addClass("active in");
                        
                        //Set The Values

                        data.HargaBeli
						data.HargaJual
						data.HargaGrosir
						data.HargaBeliBesar
						data.HargaJualBesar
						data.HargaGrosirBesar
						data.Unit
						data.UnitMinimal
						data.UnitBesar
                        $('[name="cKode"]').val(data.Kode);
                        $('[name="opt_types_of_goods"]').val(data.Jenis).change();
                        $('[name="cNamaBarang"]').val(data.Keterangan);
                        $('[name="optSupplier"]').val(data.Supplier).change();
                        $('[name="dTgl"]').val(data.Tgl);
                        $('[name="nHargaBeli"]').val(data.HargaBeli);
                        $('[name="nHargaJual"]').val(data.HargaJual);
                        $('[name="nHargaGrosir"]').val(data.HargaGrosir);
                        $('[name="opt_satuan_kecil"]').val(data.SatuanKecil).change();
                        $('[name="opt_satuan_besar"]').val(data.SatuanBesar).change();
                        $('[name="nHargaBeliBesar"]').val(data.HargaBeliBesar);
                        $('[name="nHargaJualBesar"]').val(data.HargaJualBesar);
                        $('[name="nHargaGrosirBesar"]').val(data.HargaGrosirBesar);
                        $('[name="cUnit"]').val(data.Unit);
                        $('[name="cUnitMinimal"]').val(data.UnitMinimal);
                        $('[name="cUnitBesar"]').val(data.UnitBesar);
                    },
            error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                   }
        });
    }
</script>
</html>
