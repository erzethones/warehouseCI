<div class="panel panel-inverse">
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" onClick="location.reload();" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
        </div>
        <h4 class="panel-title">Master - Inventory</h4>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Tanggal Masuk</th>
                        <th>Unit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $cQuery     = "SELECT * FROM inventory" ;
                        $dbData     = $this->db->query($cQuery) ;
                        foreach ($dbData->result_array() as $dbRow){
                    ?>
                                <tr class="odd gradeX">
                                    <td class="Kode" data-name="Kode"><?php echo $dbRow['Kode'] ;?></td>
                                    <td data-name="Keterangan"><?php echo $dbRow['Keterangan'] ;?></td>
                                    <td><?php echo $dbRow['Tgl'] ;?></td>
                                    <td><?php echo $dbRow['Unit'] ;?></td>
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
                                            echo '&nbsp;&nbsp;&nbsp;';
                                            echo '<a class="btn btn-inverse btn-icon btn-circle btn-sm cmdPicture"
                                                     onclick="ShowPicture(`'.$cKode.'`)" href="javascript:void(0)"  >
                                                     <i class="fa fa-picture-o"></i>
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
