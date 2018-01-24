<!DOCTYPE html>
<html lang="en">
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
	 		<h1 class="page-header">Master Employee</h1>

			<!-- end page-header -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-3">
                        <div class="panel-heading">
                        	<h4 class="panel-title">Entry Data</h4>
                        </div>
                        <div class="panel-body">
                            <form action="#" method="POST" id="mst_employee">
                                <fieldset>
                                    <legend id="form_title">Insert Data</legend>
                                    <div class="form-group">
                                        <label for="Kode">Code</label>
                                        <input type="text" class="form-control" id="cKode" name="cKode" readonly="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="EmployeesName">Employee's Name</label>
                                        <input type="text" class="form-control" id="cNameOfEmployee" name="cNameOfEmployee" readonly="" placeholder="Name of Employee" />
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
                        	<h4 class="panel-title">Employees List</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
					            <table id="data-table" class="table table-striped table-bordered">
					                <thead>
					                    <tr>
					                        <th>Code</th>
					                        <th>Name</th>
					                        <th>Action</th>
					                    </tr>
					                </thead>
					                <tbody>
					                    <?php
					                        foreach ($dbData->result() as $dbRow){
					                    ?>
					                                <tr class="odd gradeX">
					                                    <td class="NIP" data-name="NIP"><?php echo $dbRow->NIP ;?></td>
					                                    <td data-name="Nama"><?php echo $dbRow->Nama ;?></td>
					                                    <td> 
					                                        <?php
					                                            $cKode = $dbRow->NIP;

					                                            echo '<a class = "btn btn-success btn-icon btn-circle btn-sm cmdEdit" 
					                                                     id = "cmdEdit"
					                                                     rel="tooltip"
					                                                     data-original-title="Edit Data"
					                                                     onclick ="EditData(`'.$cKode.'`)"   
					                                                     href ="javascript:void(0)"  >
					                                                     <i class="fa fa-edit (alias)"></i>
					                                                  </a>';
					                                            echo '&nbsp;&nbsp;&nbsp;';
					                                            echo '<a class="btn btn-danger btn-icon btn-circle btn-sm cmdDelete" 
					                                                     id="cmdDelete"
					                                                     rel="tooltip"
					                                                     data-original-title="Delete Data"
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
    	$("#cNameOfEmployee").removeAttr("readonly");
    	$("#cSaveMethod").val(save_method);
	}

	$(document).ready(function(){
		$("#cmdSave").click(function(event){
			event.preventDefault();
			$('#cmdSave').text('saving...'); //change button text
		    $('#cmdSave').attr('disabled',true); //set button disable 
		    var url;
		    var save_method = $("#cSaveMethod").val() ;
		    if(save_method == "add"){
		    	url = "<?php echo site_url('mst_employee/mstemployee_add')?>";
		    }else{
		    	url = "<?php echo site_url('mst_employee/mstemployee_update')?>";
		    }
		    $.ajax({
		        url : url,
		        type: "POST",
		        data: $('#mst_employee').serialize(),
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
            url = "<?php echo site_url('mst_employee/mstemployee_delete')?>/"+id;
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
        url = "<?php echo site_url('mst_employee/mstemployee_edit')?>/"+id;
        $("#cSaveMethod").val(save_method);
        $("#cNameOfEmployee").prop('readonly', false);
        initToggle() ;
        $.ajax({
            url     : url,
            type    : "GET",
            dataType: "JSON",
            success : function(data){
            		   $('#form_title').val = "Edit Data" ;
                       $('[name="cKode"]').val(data.NIP);
                       $('[name="cNameOfEmployee"]').val(data.Nama);
                    },
            error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                    }
        });
    }
</script>
</html>
