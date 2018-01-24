<div class="panel panel-inverse">
    <div class="panel-heading">
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" onClick="location.reload();" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
        </div>
        <h4 class="panel-title">Master - Inventory</h4>
    </div>
    <div class="panel-body">
        <div class="panel panel-inverse">
            <div class="panel-body">
                <form class="form-horizontal" action="#" method="POST" id="mst_inventory">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Kategori</label>
                            <div class="col-md-9">
                                <select 
                                    class="form-control selectpicker" 
                                    data-size="100" 
                                    data-live-search="true" 
                                    data-style="btn-success" 
                                    name="opt_types_of_goods" 
                                    id="opt_types_of_goods" 
                                >
                                    <option value=""> - Select Option - </option>
                                    <?php
                                        $cQuery     = "SELECT * FROM types_of_goods ORDER BY Kode ASC" ;
                                        $dbData     = $this->db->query($cQuery) ;
                                        foreach ($dbData->result_array() as $dbRow){
                                            ?>
                                                <option value='<?php echo $dbRow['Kode']?>'><?php echo $dbRow['Keterangan']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                                <input 
                                    type="hidden" 
                                    name="initial_types_of_goods" 
                                    id="initial_types_of_goods" 
                                    class="form-control"
                                    disabled="" 
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Kode</label>
                            <div class="col-md-9">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="......" 
                                    name="cKode" 
                                    id="cKode"
                                    readonly="" 
                                    onblur="" 
                                />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Nama Barang</label>
                            <div class="col-md-8">
                                <input  type="text" 
                                        class="form-control" 
                                        placeholder="Nama Barang" 
                                        name="cNamaBarang" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Supplier</label>
                            <div class="col-md-4">
                                <select class="form-control selectpicker" 
                                        data-size="10" 
                                        data-live-search="true" 
                                        name="optSupplier" 
                                        data-style="btn-success"> 
                                    <option value="" selected>- Supplier -</option>
                                    <?php
                                        $cQuery     = "SELECT * FROM supplier" ;
                                        $dbData     = $this->db->query($cQuery) ;
                                        foreach ($dbData->result_array() as $dbRow){
                                            ?>
                                                <option value='<?php echo $dbRow['Kode']?>'><?php echo $dbRow['Keterangan']; ?></option>
                                            <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Tanggal Masuk</label>
                            <div class="col-md-2">
                                <input  type="text" 
                                        class="form-control" 
                                        id="datepicker-autoClose" 
                                        placeholder="Tanggal Masuk" 
                                        name="dTgl" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Foto / Gambar</label>
                            <div class="col-md-4">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"> </label>
                            <div class="col-md-12">
                                <center><legend>Satuan Barang</legend></center>
                                <?php $this->load->view('master/mstinventory/mst_inventory_tab_satuan'); ?>
                            </div>
                        </div>
                        <center><legend>&nbsp;</legend></center>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="hidden" id="cSaveMethod" value="add" name="cSaveMethod">
                                <button type="submit" id="cmdSave" onclick="save()" class="btn btn-lg btn-primary">Save</button>
                                <button type="submit" class="btn btn-lg btn-default">Cancel</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
 