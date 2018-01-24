<div class="col-md-12">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#satuan-kecil" data-toggle="tab">Satuan Kecil</a></li>
		<li class=""><a href="#satuan-besar" data-toggle="tab">Satuan Besar</a></li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane fade active in" id="satuan-kecil">
			<fieldset>
                <div class="form-group">
                    <div class="col-md-9">
                        <table>
                            <tr>
                                <td>
                                	<select 
                                        class="form-control selectpicker" 
                                        data-size="100" 
                                        data-live-search="true" 
                                        data-style="btn-success" 
                                        name="opt_satuan_kecil" 
                                        id="opt_satuan_kecil"
                                    >
                                        <option value=""> - Satuan Kecil - </option>
                                        <?php
                                        	$cQuery     = "SELECT * FROM supplier" ;
                                        	$cQuery     = "SELECT Kode, Keterangan FROM satuankecil ORDER BY Kode ASC";
                                        	$dbData     = $this->db->query($cQuery) ;
                                        	foreach ($dbData->result_array() as $dbRow){
	                                            ?>
	                                                <option value='<?php echo $dbRow['Kode']?>'><?php echo $dbRow['Keterangan']; ?></option>
	                                            <?php
	                                        }
	                                    ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input 
                                type="text"
                                placeholder="Harga Beli"  
                                class="form-control alignRight"
                                onkeyup="thousandSeparator(this)" 
                                name="nHargaBeli"
                                id  = "nHargaBeli"
                            />
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input 
                                type="text"
                                placeholder="Harga Jual"  
                                class="form-control alignRight"
                                onkeyup="thousandSeparator(this)" 
                                name="nHargaJual"
                                id="nHargaJual"
                            />
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div>
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input 
                                type="text"
                                placeholder="Harga Grosir"  
                                class="form-control alignRight"
                                onkeyup="thousandSeparator(this)" 
                                name="nHargaGrosir"
                                id ="nHargaGrosir"
                            />
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="cUnit" id="cUnit" placeholder="Unit" />
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="cUnitMinimal" id="cUnitMinimal" placeholder="Unit Minimal" />
                </div>
            </fieldset>
		</div>
		<div class="tab-pane fade" id="satuan-besar">
			<fieldset>
            <div class="form-group">
                <div class="col-md-9">
                    <table>
                        <tr>
                            <td>
                                <select 
                                    class="form-control selectpicker" 
                                    data-size="100" 
                                    data-live-search="true" 
                                    data-style="btn-success" 
                                    name="opt_satuan_besar" 
                                    id="opt_satuan_besar"
                                >
                                    <option value=""> - Satuan Besar - </option>
                                    <?php
                                        	$cQuery     = "SELECT * FROM supplier" ;
                                        	$cQuery = "SELECT Kode, Keterangan FROM satuanbesar ORDER BY Kode ASC";
                                        	$dbData     = $this->db->query($cQuery) ;
                                        	foreach ($dbData->result_array() as $dbRow){
	                                            ?>
	                                                <option value='<?php echo $dbRow['Kode']?>'><?php echo $dbRow['Keterangan']; ?></option>
	                                            <?php
	                                        }
	                                    ?>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>																																									
            <div class="form-group">
                <div>
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input 
                            type="text"
                            placeholder="Harga Beli"  
                            class="form-control alignRight"
                            onkeyup="thousandSeparator(this)" 
                            name="nHargaBeliBesar"
                            id  = "nHargaBeliBesar"
                        />
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input 
                            type="text"
                            placeholder="Harga Jual"  
                            class="form-control alignRight"
                            onkeyup="thousandSeparator(this)" 
                            name="nHargaJualBesar"
                            id="nHargaJualBesar"
                        />
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div>
                    <div class="input-group">
                        <span class="input-group-addon">Rp</span>
                        <input 
                            type="text"
                            placeholder="Harga Grosir"  
                            class="form-control alignRight"
                            onkeyup="thousandSeparator(this)" 
                            name="nHargaGrosirBesar"
                            id ="nHargaGrosirBesar"
                        />
                        <span class="input-group-addon">.00</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="cUnitBesar" id="cUnitBesar" placeholder="Unit" />
            </div>
        </fieldset>
		</div>
	</div>
</div>