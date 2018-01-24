<?php
    $nTime    = time() ;        
    $dTgl     = date("Ymd",$nTime) ;
    $cInvoice = $this->func->GetLastFaktur("PY",$dTgl,false)  ;
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
			<div class="row">
                <!-- begin col-12 -->
                <div class="col-12">
                    <!-- begin panel -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-info" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">C A S H I E R</h4>
                        </div>
                        <div class="panel-body">
                            <!-- Begin Total Price Tag -->
                            <div class="alert alert-success m-b-0 col-12">
                                <p class="text-left" style="font-weight: bold;">P R I C E :</p>
                                <h1 class="text-right" style="font-weight: bold; color: #FFF;">1,999,999</h1>
                            </div>
                            <!-- End Total Price Tag -->

                            <hr>

                            <!-- Begin Form Items Purchasing -->
                            <div div class="alert alert-info m-b-0 col-12">
                                <p class="text-left" style="font-weight: bold; font-size: larger;">Date <?php echo date('d-m-Y');?> || <?php echo $cInvoice ;?></p>
                                <hr>
                                <form class="form-inline" action="#" method="POST" id="tr_cashier">
                                    <input type="hidden" name="dTgl" value="<?php echo date('Y-m-d') ;?>">
                                    <input type="hidden" name="cFaktur" value="<?php echo $cInvoice ;?>">
                                    <div class="form-group width-500">
                                        <input type="text" class="form-control" id="cKode" name="cKode" placeholder="Item's Code"  style="width: 100%" />
                                    </div>
                                    <div class="form-group width-300">
                                        <input type="text" class="form-control" id="cQty" placeholder="QTY" style="width: 100%" />
                                    </div>
                                    <button type="button" name="cmdSaveTmp" id="cmdSaveTmp" class="btn btn-sm btn-success m-r-5">Submit Item</button>
                                    <a href="#modal-dialog" class="btn btn-warning btn-icon btn-circle btn-lg" data-toggle="modal" title="search items"><i class="fa fa-search"></i></a>
                                </form>
                                <input type="text" class="form-control" name="cNamaBarang">
                            </div>
                            <!-- End Form Items Purchasing -->
							<hr>

                            <!-- Begin Form Data Input -->
                            <div id="table-purchased-goods" class="alert alert-info m-b-0 col-12 panel panel-success col-12">
                                <div class="panel panel-inverse">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                                        </div>
                                        <h4 class="panel-title">PURCHASE GOODS</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="data-table" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Products</th>
                                                        <th>Price Tag</th>
                                                        <th>Act</th>    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                        $cQuery     = "SELECT * FROM kasir_tmp WHERE Faktur = '$cInvoice'" ;
                                                        $dbData     = $this->db->query($cQuery) ;
                                                        foreach ($dbData->result_array() as $dbRow){
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $dbRow['ID'] ;?></td>
                                                                    <td><?php echo $dbRow['Faktur'] ;?></td>
                                                                    <td>nicky@hotmail.com</td>
                                                                    <td> 
                                                                        <?php
                                                                            $cKode = "" ; //$dbRow->NIP;

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
                            </div>
                            <!-- Begin Form Data Input -->

                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
    <div class="modal fade" id="modal-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Modal Dialog</h4>
                </div>
                <div class="modal-body">
                    Modal body content here...
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                    <a href="javascript:;" class="btn btn-sm btn-success">Action</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-alert">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="alert alert-danger m-b-0">
                        <h4><i class="fa fa-info-circle"></i> Data Not Found!</h4>
                        <p>Periksa kembali kode item yang anda ketik!</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                </div>
            </div>
        </div>
    </div>
	<?php $this->load->view('footer_tag'); ?>
</body>
<script type="text/javascript">
    $(document).ready(function() {
        TableManageFixedColumns.init();
    });

    $( "#cKode" ).blur(function() {
      var id ;
      var cResult ;
      id = $("#cKode").val() ;
      url = "<?php echo site_url('tr_cashier/callDataByID')?>/"+id;
            $.ajax({
                url      : url,
                type     : "POST",
                dataType : "JSON",
                success : function(data){
                            if(data){
                                $('[name="cNamaBarang"]').val(data.Keterangan);
                            }else{
                                $("#modal-alert").modal('show');
                            }
                    },
                
                error: function (jqXHR, textStatus, errorThrown){
                        $("#modal-alert").modal('show');
                    }
            });
    });

    $(document).ready(function(){
        $("#cmdSaveTmp").click(function(event){
            event.preventDefault();
            $('#cmdSaveTmp').text('saving...'); //change button text
            $('#cmdSaveTmp').attr('disabled',true); //set button disable 
            var url;
                url = "<?php echo site_url('tr_cashier/purchaseTmp')?>";
            
            $.ajax({
                url : url,
                type: "POST",
                data: $('#tr_cashier').serialize(),
                dataType: "JSON",
                success: function(data){
                    $('#cmdSave').text('save'); //change button text
                    $('#cmdSave').attr('disabled',false); //set button enable 
                    $('#table-purchased-goods').load();

                },
                error: function (jqXHR, textStatus, errorThrown)
                {   
                    alert("Eror Saving");
                }
            });
        });
    });
</script>
</html>
