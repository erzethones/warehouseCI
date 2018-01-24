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
	 		<h1 class="page-header">Create Event</h1>

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
                            <form action="#" method="POST" id="ev_event">
                                <fieldset>
                                    <legend id="form_title">Insert Data</legend>
                                    <div class="form-group">
                                        <label for="Code">Code</label>
                                        <input type="text" class="form-control" id="cKode" name="cKode" readonly="" />
                                    </div>
                                    <div class="form-group">
                                        <label for="EventsName">Event's Name</label>
                                        <input type="text" class="form-control" id="cEventsName" name="cEventsName" readonly="" placeholder="Event's Name" />
                                    </div>
                                    <div class="form-group">
										<label for="Schedule">Schedule</label>
									    <div class="input-group input-daterange">
                                            <input type="text" class="form-control" id="dDateStart" name="dDateStart" placeholder="Date Start" readonly=""/>
                                            <span class="input-group-addon">to</span>
                                            <input type="text" class="form-control" name="dDateEnd" id="dDateEnd" placeholder="Date End" readonly=""/>
                                        </div>
									</div>
									<div class="form-group">
										<label for="Team">Team</label>
									    <select 
		                                    class="form-control selectpicker" 
		                                    data-size="100" 
		                                    data-live-search="true" 
		                                    data-style="btn-success" 
		                                    name="optTeam" 
		                                    id="optTeam"
		                                    disabled="" 
		                                >
		                                    <option value=""> - Select Option - </option>
		                                    <?php
		                                        /*$cQuery     = "SELECT * FROM team ORDER BY NIP ASC" ;
		                                        $dbData     = $this->db->query($cQuery) ;
		                                        foreach ($dbData->result_array() as $dbRow){
		                                            ?>
		                                                <option value='<?php echo $dbRow['Kode']?>'><?php echo $dbRow['Keterangan']; ?></option>
		                                            <?php
		                                        }*/
		                                    ?>
		                                </select>
									</div>
									<div class="form-group">
										<label for="SPG1">SPG 1</label>
									    <select 
		                                    class="form-control selectpicker" 
		                                    data-size="100" 
		                                    data-live-search="true" 
		                                    data-style="btn-success" 
		                                    name="optSPG1" 
		                                    id="optSPG1"
		                                    disabled=""
		                                >
		                                    <option value=""> - Select Option - </option>
		                                    <?php
		                                        $cQuery     = "SELECT * FROM employee ORDER BY NIP ASC" ;
		                                        $dbData     = $this->db->query($cQuery) ;
		                                        foreach ($dbData->result_array() as $dbRow){
		                                            ?>
		                                                <option value='<?php echo $dbRow['NIP']?>'><?php echo $dbRow['Nama']; ?></option>
		                                            <?php
		                                        }
		                                    ?>
		                                </select>
									</div>
									<div class="form-group">
										<label for="SPG2">SPG 2</label>
									    <select 
		                                    class="form-control selectpicker" 
		                                    data-size="100" 
		                                    data-live-search="true" 
		                                    data-style="btn-success" 
		                                    name="optSPG2" 
		                                    id="optSPG2"
		                                    disabled="" 
		                                >
		                                    <option value=""> - Select Option - </option>
		                                    <?php
		                                        $cQuery     = "SELECT * FROM employee ORDER BY NIP ASC" ;
		                                        $dbData     = $this->db->query($cQuery) ;
		                                        foreach ($dbData->result_array() as $dbRow){
		                                            ?>
		                                                <option value='<?php echo $dbRow['NIP']?>'><?php echo $dbRow['Nama']; ?></option>
		                                            <?php
		                                        }
		                                    ?>
		                                </select>
									</div>
                                    <div class="form-group">
                                        <label for="EventsLocation">Location</label>
                                        <input type="text" class="form-control" id="cLocation" name="cLocation" readonly="" />
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
                        	<h4 class="panel-title">Event List</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
					            <table id="data-table" class="table table-striped table-bordered">
					                <thead>
					                    <tr>
					                        <th>Code</th>
					                        <th>Event's Name</th>
					                        <th>Start</th>
					                        <th>Location</th>
					                        <th>Action</th>
					                    </tr>
					                </thead>
					                <tbody>
					                    <?php
					                        $cQuery     = "SELECT * FROM event" ;
					                        $dbData     = $this->db->query($cQuery) ;
					                        foreach ($dbData->result_array() as $dbRow){
					                    ?>
					                                <tr class="odd gradeX">
					                                    <td class="Code" data-name="Code"><?php echo $dbRow['Kode'] ;?></td>
					                                    <td class="Name" data-name="Name"><?php echo $dbRow['Keterangan'] ;?></td>
					                                    <td class="Start" data-name="Start"><?php echo $dbRow['TglMulai'] ;?></td>
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
    	$("#cSaveMethod").val(save_method);
    	$("#cKode").removeAttr("readonly");
    	$("#cEventsName").removeAttr("readonly");
    	$("#dDateStart").removeAttr("readonly");
    	$("#dDateEnd").removeAttr("readonly");
    	$("#optTeam").removeAttr("disabled");
    	$("#optSPG1").removeAttr("disabled");
    	$("#optSPG2").removeAttr("disabled");
    	$("#cLocation").removeAttr("readonly");
	}

	$(document).ready(function(){
		$("#cmdSave").click(function(event){
			event.preventDefault();
			$('#cmdSave').text('saving...'); //change button text
		    $('#cmdSave').attr('disabled',true); //set button disable 
		    var url;
		    var save_method = $("#cSaveMethod").val() ;
		    if(save_method == "add"){
		    	url = "<?php echo site_url('mst_supplier/mstsupplier_add')?>";
		    }else{
		    	url = "<?php echo site_url('mst_supplier/mstsupplier_update')?>";
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
            url = "<?php echo site_url('mst_supplier/mstsupplier_delete')?>/"+id;
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
        url = "<?php echo site_url('mst_supplier/mstsupplier_edit')?>/"+id;
        $("#cSaveMethod").val(save_method);
        $("#cNamaSupplier").prop('readonly', false);
        initToggle() ;
        $.ajax({
            url     : url,
            type    : "GET",
            dataType: "JSON",
            success : function(data){
            		   $('#form_title').val = "Edit Data" ;
                       $('[name="cKode"]').val(data.Kode);
                       $('[name="cNamaSupplier"]').val(data.Keterangan);
                    },
            error: function (jqXHR, textStatus, errorThrown){
                    alert('Error get data from ajax');
                    }
        });
    }
</script>
<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/index_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:54:41 GMT -->
</html>
