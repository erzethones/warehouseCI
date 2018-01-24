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
	 		<h1 class="page-header">Master Supplier</h1>

			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                        	<h4 class="panel-title">Data Form</h4>
                        </div>
                        <div class="panel-body">
                            <form action="#" method="POST" id="mst_supplier">
                                <fieldset>
                                    <legend id="form_title">Insert Data</legend>
                                    <div class="form-group">
                                        <label for="Kode">Kode</label>
                                        <input type="text" class="form-control" id="cKode" name="cKode" readonly="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="NamaSupplier">Nama Supplier</label>
                                        <input type="text" class="form-control" id="cNamaSupplier" name="cNamaSupplier" readonly="" placeholder="Nama Supplier" />
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Supplier</label>
                                        <input type="text" class="form-control" id="cAlamatSupplier" name="cAlamatSupplier" readonly="" placeholder="Alamat Supplier" />
                                    </div>
                                    <div class="form-group">
                                        <labe>No. Telepon / HP</label>
                                        <input type="text" class="form-control" id="cNoTelp" name="cNoTelp" readonly="" placeholder="08123456789" />
                                    </div>
                                    <div class="form-group">
                                        <labe>E-Mail</label>
                                        <input type="email" class="form-control" id="cEmail" name="cEmail" readonly="" placeholder="info@webmail.com" />
                                    </div>
                                    <button  type="button" id="cmdAdd" onclick="add()" class="btn btn-sm btn-primary">Add</button>
                                    <div id="toggle" style="display: none;">
                                    	<input type="hidden" id="cSaveMethod" name="cSaveMethod">
                                    	<button  type="submit" id="cmdSave" onclick="save()" class="btn btn-sm btn-primary">Save</button>
                                		<button  type="submit" class="btn btn-sm btn-default">Cancel</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                        	<h4 class="panel-title">Daftar Supplier</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
					            <table id="data-table" class="table table-striped table-bordered">
					                <thead>
					                    <tr>
					                        <th>Kode</th>
					                        <th>Nama Supplier</th>
					                        <th>Action</th>
					                    </tr>
					                </thead>
					                <tbody>
					                    <?php
					                        $cQuery     = "SELECT * FROM supplier" ;
					                        $dbData     = $this->db->query($cQuery) ;
					                        foreach ($dbData->result_array() as $dbRow){
					                    ?>
					                                <tr class="odd gradeX">
					                                    <td class="Kode" data-name="Kode"><?php echo $dbRow['Kode'] ;?></td>
					                                    <td data-name="Keterangan"><?php echo $dbRow['Keterangan'] ;?></td>
					                                    <td> 
					                                        <?php
					                                            $cKode = $dbRow['Kode'];

					                                            echo '<a class = "btn btn-success btn-icon btn-circle btn-sm cmdEdit" 
					                                                     id = "cmdEdit"
					                                                     onclick ="EditData(`'.$cKode.'`)"   
					                                                     href ="javascript:void(0)"  >
					                                                     <i class="fa fa-edit (alias)"></i>
					                                                  </a>';
					                                            echo '&nbsp;&nbsp;&nbsp;';
					                                            echo '<a class="btn btn-danger btn-icon btn-circle btn-sm cmdDelete" 
					                                                     id="cmdDelete"
					                                                     onclick="DeleteData(`'.$cKode.'`)" 
					                                                     name="cmdDelete" 
					                                                     href="javascript:void(0)"  >
					                                                     <i class="fa fa-eraser"></i>
					                                                  </a>';
					                                        ?>
					                                        
					                                    </td>
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

<script>
	var save_method; 

	function initToggle(){
		var x = document.getElementById('toggle');
		x.style.display = 'block';
        document.getElementById('cmdAdd').style.display = 'none' ;
	}

	function add(){
		initToggle() ;
		var save_method = "add";
    	$("#cNamaSupplier").removeAttr("readonly");
    	$("#cAlamatSupplier").removeAttr("readonly");
    	$("#cNoTelp").removeAttr("readonly");
    	$("#cEmail").removeAttr("readonly");
    	$("#cSaveMethod").val(save_method);
	}

	function toggleForm(){
		$("#cNamaSupplier").prop('readonly', false);
		$("#cAlamatSupplier").prop('readonly', false);
		$("#cNoTelp").prop('readonly', false);
		$("#cEmail").prop('readonly', false);
	}

	$(document).ready(function(){
		$("#cmdSave").click(function(event){
			event.preventDefault();
			$('#cmdSave').text('saving...'); //change button text
		    $('#cmdSave').attr('disabled',true); //set button disable 
		    var url;
		    var save_method = $("#cSaveMethod").val() ;
		    if(save_method == "add"){
		    	url = "<?php echo site_url('master/mst_supplier/mstsupplier_add')?>";
		    }else{
		    	url = "<?php echo site_url('master/mst_supplier/mstsupplier_update')?>";
		    }
		    $.ajax({
		        url : url,
		        type: "POST",
		        data: $('#mst_supplier').serialize(),
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
            url = "<?php echo site_url('master/mst_supplier/mstsupplier_delete')?>/"+id;
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
        url = "<?php echo site_url('master/mst_supplier/mstsupplier_edit')?>/"+id;
        $("#cSaveMethod").val(save_method);
        toggleForm() ;	
        initToggle() ;
        $.ajax({
            url     : url,
            type    : "GET",
            dataType: "JSON",
            success : function(data){
            		   $('#form_title').val = "Edit Data" ;
                       $('[name="cKode"]').val(data.Kode);
                       $('[name="cNamaSupplier"]').val(data.Keterangan);
                       $('[name="cAlamatSupplier"]').val(data.Alamat);
                       $('[name="cNoTelp"]').val(data.NoTelp);
                       $('[name="cEmail"]').val(data.Email);
                    },
            error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                    }
        });
    }
</script>
<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:54:41 GMT -->
</html>
